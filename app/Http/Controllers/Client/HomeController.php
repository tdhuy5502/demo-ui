<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Client\Home\HomeClientRepository;
use App\Repositories\ManageEvent\EventRepository;
use App\Repositories\News\NewsRepository;
use App\Repositories\Project\ProjectRepository;
use App\Repositories\WhatWeDo\WhatWedoRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $homeClientRepository;
    protected $projectRepository;
    protected $newsRepository;
    protected $eventRepository;
    protected $whatWedoRepository;

    public function __construct(
        WhatWedoRepository $whatWedoRepository,
        EventRepository $eventRepository,
        NewsRepository $newsRepository,
        ProjectRepository $projectRepository,
        HomeClientRepository $homeClientRepository)
    {
        $this->homeClientRepository = $homeClientRepository;
        $this->projectRepository = $projectRepository;
        $this->newsRepository = $newsRepository;
        $this->eventRepository= $eventRepository;
        $this->whatWedoRepository = $whatWedoRepository;
    }

    public function index()
    {
        $homeContent = $this->homeClientRepository->getData();
        $projects = $this->projectRepository->getAll();
        $news = $this->newsRepository->getRelatedNews();
        $events = $this->eventRepository->getNewEvents();
        $whatwedos = $this->whatWedoRepository->getHomeList();
        
        return view('home.index')->with([
            'homeContent' => $homeContent,
            'projects' => $projects,
            'news' => $news,
            'events' => $events,
            'whatwedos' => $whatwedos
        ]);
    }
}
