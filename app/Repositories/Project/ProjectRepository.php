<?php

namespace App\Repositories\Project;
use App\Models\Project;
use App\Repositories\BaseRepository;

class ProjectRepository extends BaseRepository{

    public function getModel()
    {
        return new Project();
    }

    public function create($data)
    {
        $project = $this->save($data);
        $this->model = $project;

        return $project;
    }

    public function update($data)
    {
        $project = $this->save($data,$data['id']);
        $this->model = $project;

        return true;
    }
}