<?php

namespace App\Repositories\AboutUs;

use App\Models\AboutUs;
use App\Repositories\BaseRepository;

class AboutUsRepository extends BaseRepository {

    public function __construct()
    {

    }

    public function getModel()
    {
        return new AboutUs();
    }

    public function create($data)
    {
        $aboutUsData = $this->save($data);
        $this->model = $aboutUsData;

        return $aboutUsData;
    }

    public function update($data)
    {
        $aboutUsData = $this->save($data,$data['id']);
        $this->model = $aboutUsData;

        return true;
    }
}