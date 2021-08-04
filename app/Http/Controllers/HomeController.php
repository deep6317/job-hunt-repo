<?php

namespace App\Http\Controllers;

use App\Models\JobPosts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('partial_views.index');
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $posts = JobPosts::query()
            ->where('job_title', 'LIKE', "%{$search}%")
            ->orWhere('job_skill', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
       // return view('partial_views.index', compact('job_posts'));

        //$data = JobPosts::all();
        return view('job_views.index',['job_searches'=> $posts]);
    }
}
