<?php

namespace App\Repositories\Project;

use App\Models\Donation;
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

    public function getProjectList()
    {   
        $projects = Project::createdThisYear()->orderBy('created_at','desc')->take(3)->get();

        return $projects;
    }

    public function getLatestProject()
    {
        return $this->getModel()->orderByDesc('created_at')->first();
    }

    public function getFundById($id)
    {
        $fund = Donation::where('project_id',$id)->sum('amount');

        return $fund;
    }
}