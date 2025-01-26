<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChatRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ChatController extends Controller
{   
    use AuthorizesRequests,ValidatesRequests;
    /**
     * Store a newly created chat message.
     */
    public function store(StoreChatRequest $request)
    {
        // Find the article
        $article = Article::findOrFail($request->article_id);

        // Authorize the action using the ChatPolicy
        $this->authorize('create', [Chat::class, $article]);

        // Create the chat message
        $chat = Chat::create([
            'user_id' => auth()->id(),
            'article_id' => $article->id,
            'message' => $request->message,
            'message_date' => now(),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message posted successfully!');
    }

    /**
     * Delete a chat message.
     */
    public function destroy(Chat $chat)
    {
        // Authorize the action using the ChatPolicy
        $this->authorize('delete', $chat);

        // Delete the chat message
        $chat->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Message deleted successfully!');
    }
}