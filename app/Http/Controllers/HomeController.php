<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('partial_views.index');
    }
    public function process()
    {
        return view('partial_views.process_area');
    }
    public function job()
    {
        return view('partial_views.job');
    }
   
}
