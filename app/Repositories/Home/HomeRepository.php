<?php

namespace App\Repositories\Home;

use App\Models\HomeContent;
use App\Repositories\BaseRepository;


class HomeRepository extends BaseRepository
{

    public function __construct()
    {

    }

    public function getModel()
    {
        return new HomeContent();
    }
    
    public function create($data)
    {
        $homeContent = $this->save($data);
        $this->model = $homeContent;

        return $homeContent;
    }

    public function update($data)
    {
        $homeContent = $this->save($data,$data['id']);
        $this->model = $homeContent;

        return true;
    }
}