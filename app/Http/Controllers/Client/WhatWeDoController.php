<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Client\Home\HomeClientRepository;
use App\Repositories\ManageEvent\EventRepository;
use App\Repositories\News\NewsRepository;
use App\Repositories\Project\ProjectRepository;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    //
    protected $homeRepository;
    protected $newsRepository;
    protected $eventRepository;
    protected $projectRepository;

    public function __construct(
        ProjectRepository $projectRepository,
        EventRepository $eventRepository,
        NewsRepository $newsRepository,
        HomeClientRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
        $this->newsRepository = $newsRepository;
        $this->eventRepository = $eventRepository;
        $this->projectRepository = $projectRepository;
        //whatwedoRepository
    }

    public function index()
    {
        $homeTitle = $this->homeRepository->getData();
        $news = $this->newsRepository->getRelatedNews();
        $events = $this->eventRepository->getNewEvents();
        $projects = $this->projectRepository->getProjectList();

        return view('whatwedo.index')->with([
            'homeTitle' => $homeTitle,
            'news' => $news,
            'events' => $events,
            'projects' => $projects
        ]);
    }
}
