<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    //
    public function index()
    {
        return view('admin.donations.index');
    }
}
