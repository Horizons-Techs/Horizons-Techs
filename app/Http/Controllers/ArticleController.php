<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Theme;
use App\Services\ArticleService;
use App\Services\HistoryService;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    protected $articleService;
    protected $historyService;

    public function __construct(ArticleService $articleService, HistoryService $historyService)
    {
        $this->articleService = $articleService;
        $this->historyService = $historyService;
    }

    public function index(Theme $theme)
    {
        $user = Auth::user();

        $articles = $this->articleService->getArticleByUser($user->id);

        return view('dashboard.articles', compact('articles'));
    }

    public function create(Theme $theme)
    {
        return view('articles.create', compact('theme'));
    }


    public function store(Request $request, Theme $theme)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);


        $data = [
            "title" => $request->title,
            "content" => $request->content,
            "image" => "images/$imageName",
            "author_id" => Auth::user()->id,
            "theme_id" => $theme->id,
            "status" => "Pending"
        ];


        $this->articleService->createArticle($data);

        return redirect()->route('dashboard.articles', ["theme" => $theme->id])
            ->with('success', 'Article created successfully and is now under review.');
    }


    public function show(Theme $theme, Article $article)
    {
        if ($article->status === "Published") {
            $this->historyService->trackHistory(Auth::user()->id, $article->id);
        }

        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        //$this->authorize('update', $article);
        //$themes = Theme::all();
        return view('articles.edit', compact('article', 'themes'));
    }


    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article->update($request->all());
        return redirect()->route('articles.index')
            ->with('success', 'Article updated successfully.');
    }


    public function destroy($article_id)
    {
        $this->articleService->deleteArticle($article_id);

        return redirect()->route('dashboard.articles')
            ->with('success', 'Article deleted successfully.');
    }


    public function manage_articles(Request $request, $theme_id)
    {
        $articles = $this->articleService->getAllArticles()->where("theme_id", $theme_id)->where("status", "Pending");

        return view("dashboard.themes-manage.articles", compact("articles"));
    }


    public function approve($article_id)
    {
        $article = $this->articleService->approveArticle($article_id)->first();
        if (!$article) {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        return redirect()->back()->with('success', 'Article approved.');
    }


    public function reject($article_id)
    {
        $article = $this->articleService->rejectArticle($article_id)->first();
        if (!$article) {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        return redirect()->back()->with('success', 'Article rejected.');
    }


    public function publish($article_id)
    {
        $user  = Auth::user();
        // if ($user->role !== "editor" && !$theme->manager_id === $user->id) {
        //     abort(403, "Not allowed to accomplish this action");
        // }

        $article = $this->articleService->publishArticle($article_id)->first();
        if (!$article) {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
        return redirect()->back()->with('success', 'Article rejected.');
    }
}
