<?php

namespace App\Http\Controllers;

use App\Models\JobPosts;
use Illuminate\Http\Request;
use DateTime;

class HomeController extends Controller
{
    public function index()
    {
        return view('partial_views.index');
    }
}
