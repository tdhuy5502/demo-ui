<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Client\Home\HomeClientRepository;
use App\Repositories\News\NewsRepository;
use Illuminate\Http\Request;

class NewsFeedController extends Controller
{
    //
    protected $newRepository;
    protected $homeClientRepository;

    public function __construct(
        HomeClientRepository $homeClientRepository,
        NewsRepository $newsRepository)
    {
        $this->newRepository = $newsRepository;
        $this->homeClientRepository = $homeClientRepository;
    }

    public function index()
    {
        $topnews = $this->newRepository->getTopNews();
        $relatedNews = $this->newRepository->getRelatedNews();
        $homeContent = $this->homeClientRepository->getData();

        return view('newsfeed.news2')->with([
            'topnews' => $topnews,
            'relatedNews' => $relatedNews,
            'homeContent' => $homeContent
        ]);
    }

    public function show(Request $request)
    {
        $topnews = $this->newRepository->getById($request->id);
        $homeContent = $this->homeClientRepository->getData();

        return view('newsfeed.news2')->with([
            'topnews' => $topnews,
            'homeContent' => $homeContent
        ]);
    }
}
