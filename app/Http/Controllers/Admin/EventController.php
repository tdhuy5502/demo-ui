<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        return view('admin.manage_event.index');
    }

    public function create()
    {
        return view('admin.manage_event.create');
    }

    public function store()
    {

    }

    public function show()
    {
        return view('admin.manage_event.edit');
    }

    public function update()
    {

    }
}
