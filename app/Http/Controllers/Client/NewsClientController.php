<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\News\NewsRepository;
use App\Repositories\ManageEvent\EventRepository;
use App\Repositories\Client\Home\HomeClientRepository;

class NewsClientController extends Controller
{
    //
    protected $newsRepository;
    protected $homeRepository;
    protected $eventRepository;

    public function __construct(
    EventRepository $eventRepository,
    HomeClientRepository $homeRepository,
    NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
        $this->homeRepository = $homeRepository;
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {   
        $lastestNews = $this->newsRepository->getLatestNews();
        $allNews = $this->newsRepository->getRelatedNews();
        $events = $this->eventRepository->getAll();
        $homeContent = $this->homeRepository->getData();
       
        return view('topnews.index')->with([
           'latestNews' => $lastestNews,
            'allNews' => $allNews,
            'events' => $events,
            'homeContent' => $homeContent
        ]);
    }
}
