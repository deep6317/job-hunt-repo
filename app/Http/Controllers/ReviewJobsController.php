<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ReviewJobs;
use Illuminate\Http\Request;

class ReviewJobsController extends Controller
{
    public function index(){
        return view('review_jobs.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ReviewJobs::all();
        return response()->json($data);
    }
}
