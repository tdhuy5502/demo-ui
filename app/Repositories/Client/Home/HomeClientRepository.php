<?php

namespace App\Repositories\Client\Home;

use App\Models\HomeContent;
use App\Repositories\BaseRepository;

class HomeClientRepository extends BaseRepository
{
    public function getModel()
    {
        return new HomeContent();
    }

    public function getData()
    {
        $homeData = $this->getModel()->all()->pluck('value','key')->toArray();

        return $homeData;
    }
}