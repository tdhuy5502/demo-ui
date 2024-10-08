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
}