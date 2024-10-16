<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Client\Home\HomeClientRepository;
use App\Repositories\News\NewsRepository;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    //
    protected $homeRepository;
    protected $newsRepository;

    public function __construct(
        NewsRepository $newsRepository,
        HomeClientRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
        $this->newsRepository = $newsRepository;
        //whatwedoRepository
    }

    public function index()
    {
        $homeTitle = $this->homeRepository->getData();
        $news = $this->newsRepository->getRelatedNews();

        return view('whatwedo.index')->with([
            'homeTitle' => $homeTitle,
            'news' => $news
        ]);
    }
}
