<?php

namespace App\Services;

use App\Repositories\ArticleRepository;

class ArticleService
{
    protected $articleRepository;
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getAllArticles()
    {
        return $this->articleRepository->all();
    }
    public function getArticleById($id)
    {
        return $this->articleRepository->find($id);
    }
    public function createArticle(array $data)
    {
        return $this->articleRepository->create($data);
    }
    public function updateArticle($id, array $data)
    {
        return $this->articleRepository->update($id, $data);
    }
    public function deleteArticle($id)
    {
        return $this->articleRepository->delete($id);
    }
}
