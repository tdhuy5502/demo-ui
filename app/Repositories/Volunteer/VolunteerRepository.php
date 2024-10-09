<?php

namespace App\Repositories\Volunteer;
use App\Models\Volunteer;
use App\Repositories\BaseRepository;

class VolunteerRepository extends BaseRepository
{
    public function getModel()
    {
        return new Volunteer();
    }
    
    public function create($data)
    {
        $volunteer = $this->save($data);
        $this->model = $volunteer;

        return $volunteer;
    }

    public function update($data)
    {
        $volunteer = $this->save($data,$data['id']);
        $this->model = $volunteer;

        return true;
    }
}