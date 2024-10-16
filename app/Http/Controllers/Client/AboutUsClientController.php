<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AboutUs\AboutUsRepository;
use App\Repositories\Client\Home\HomeClientRepository;
use App\Repositories\ManageEvent\EventRepository;
use App\Repositories\News\NewsRepository;

class AboutUsClientController extends Controller
{
    protected $aboutUsRepository;
    protected $homeClientRepository;
    protected $newsRepository;
    protected $eventRepository;

    public function __construct(
    EventRepository $eventRepository,
    NewsRepository $newsRepository,
    AboutUsRepository $aboutUsRepository,
    HomeClientRepository $homeClientRepository)
    {
        $this->aboutUsRepository = $aboutUsRepository;
        $this->homeClientRepository = $homeClientRepository;
        $this->newsRepository = $newsRepository;
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        $aboutUsData = $this->aboutUsRepository->getData();
        $homeContent = $this->homeClientRepository->getData();
        $donatorCount = $this->aboutUsRepository->getDonatorCount();
        $membersCount = $this->aboutUsRepository->getMemberCount();
        $volunteersCount = $this->aboutUsRepository->getVolunteersCount();
        $members = $this->aboutUsRepository->getMembers();
        $news = $this->newsRepository->getRelatedNews();
        $events = $this->eventRepository->getAll();

        return view('about-us.index')->with([
            'homeContent' => $homeContent,
            'aboutUsData' => $aboutUsData,
            'donatorCount' => $donatorCount,
            'membersCount' => $membersCount,
            'volunteersCount' => $volunteersCount,
            'members' => $members,
            'news' => $news,
            'events' => $events
        ]);
    }
}
