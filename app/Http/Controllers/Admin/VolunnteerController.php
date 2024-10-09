<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunnteerController extends Controller
{
    //
    public function index()
    {
        return view('admin.volunteers.index');
    }

    public function show()
    {
        return view('admin.volunteers.edit');
    }
}
