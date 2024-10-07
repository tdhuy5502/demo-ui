<?php

namespace App\Repositories\ManageEvent;
use App\Repositories\BaseRepository;
use App\Models\Events;

class EventRepository extends BaseRepository
{
    public function getModel()
    {
        return new Events();
    }

    public function create($data)
    {
        $event = $this->save($data);
        $this->model = $event;

        return $event;
    }

    public function update($data)
    {
        $event = $this->save($data, $data['id']);
        $this->model = $event;

        return true;
    }
}