<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Client\Home\HomeClientRepository;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    //
    protected $homeRepository;

    public function __construct(HomeClientRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
        //whatwedoRepository
    }

    public function index()
    {
        $homeTitle = $this->homeRepository->getData();

        return view('whatwedo.index')->with([
            'homeTitle' => $homeTitle
        ]);
    }
}
