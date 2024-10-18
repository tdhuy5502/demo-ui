<?php

namespace App\Repositories\News;
use App\Models\News;
use App\Repositories\BaseRepository;

class NewsRepository extends BaseRepository
{
    public function getModel()
    {
        return new News();
    }

    public function create($data)
    {
        $news = $this->save($data);
        $this->model = $news;

        return $news;
    }

    public function update($data)
    {
        $news = $this->save($data, $data['id']);
        $this->model = $news;

        return true;
    }

    public function getLatestNews()
    {
        $news = $this->getModel()->createdThisMonth()
        ->orderBy('created_at','desc')
        ->take(3)->get();

        return $news;
    }

    public function getTopNews()
    {
        $topNews = $this->getModel()->orderBy('created_at','desc')->first();

        return $topNews;
    }

    public function getRelatedNews()
    {
        $relatedNews = $this->getModel()
        ->createdThisMonth()
        ->orderByDesc('created_at')->take(4)->get();

        return $relatedNews;
    }
}