<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Client\Home\HomeClientRepository;
use App\Repositories\ManageEvent\EventRepository;
use App\Repositories\News\NewsRepository;
use App\Repositories\Project\ProjectRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $homeClientRepository;
    protected $projectRepository;
    protected $newsRepository;
    protected $eventRepository;

    public function __construct(
        EventRepository $eventRepository,
        NewsRepository $newsRepository,
        ProjectRepository $projectRepository,
        HomeClientRepository $homeClientRepository)
    {
        $this->homeClientRepository = $homeClientRepository;
        $this->projectRepository = $projectRepository;
        $this->newsRepository = $newsRepository;
        $this->eventRepository= $eventRepository;
    }

    public function index()
    {
        $homeContent = $this->homeClientRepository->getData();
        $projects = $this->projectRepository->getAll();
        $news = $this->newsRepository->getAll();
        $events = $this->eventRepository->getAll();
        
        return view('home.index')->with([
            'homeContent' => $homeContent,
            'projects' => $projects,
            'news' => $news,
            'events' => $events
        ]);
    }
}
