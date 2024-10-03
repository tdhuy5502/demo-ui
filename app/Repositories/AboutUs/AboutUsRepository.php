<?php

namespace App\Repositories;

use App\Models\AboutUs;

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