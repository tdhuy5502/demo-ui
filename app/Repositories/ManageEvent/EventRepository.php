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

    public function getNewEvents()
    {
        $events = Events::orderByDesc('event_date')->take(2)->get();

        return $events;
    }

    public function getLatestEvent()
    {
        $event = Events::orderByDesc('event_date')->first();

        return $event;
    }

    public function getEventList($id)
    {
        $events = Events::where('id','!=',$id)->orderBy('event_date')->take(2)->get();

        return $events;
    }
}