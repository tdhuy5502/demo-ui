<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Client\Home\HomeClientRepository;
use App\Repositories\ManageEvent\EventRepository;
use Illuminate\Http\Request;

class EventPostController extends Controller
{
    //
    protected $eventRepository;
    protected $homeRepository;

    public function __construct(HomeClientRepository $homeRepository,
    EventRepository $eventRepository)
    {
        $this->homeRepository = $homeRepository;
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        $event = $this->eventRepository->getLatestEvent();
        $topEvents = $this->eventRepository->getEventList($event->id);
        
        return view('events-post.index')->with([
            'topEvents' => $topEvents,
            'event' => $event
        ]);
    }

    public function show(Request $request)
    {   
        $event = $this->eventRepository->getById($request->id);
        $topEvents = $this->eventRepository->getEventList($request->id);

        return view('events-post.index')->with([
            'event' => $event,
            'topEvents' => $topEvents,
        ]);
    }
}
