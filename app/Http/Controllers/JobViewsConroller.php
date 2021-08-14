<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPosts;

class JobViewsConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = JobPosts::where('user_id', \Auth::user()->id)->paginate(10);
        $data->map(function($job){
            $job->time_elapsed = $this->timeElapsedString($job->created_at);
            return $job;
        });
        return view('job_views.index',['job_searches'=> $data]);
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        // Search in the title and body columns from the posts table
       
        $posts = JobPosts::where('job_area', $request->job_area);

        if($request->address != ""){
            $posts = $posts->orWhere('address', 'LIKE', "%{$request->address}%");
        }
        
        if(\Auth::user()->ce == 0){ 
            $posts = $posts->paginate(10);
        }else{
            $posts = $posts->get();
        }
    
        $posts->map(function($job){
            $job->time_elapsed = $this->timeElapsedString($job->created_at);
            return $job;
        });
        return view('job_views.index',['job_searches'=> $posts]);
    }

    public function viewJobWithType($type)
    {
        $posts = JobPosts::where('job_area', $type);
     
        if(\Auth::user()->ce == 0){ 
            $posts = $posts->paginate(10);
        }else{
            $posts = $posts->get();
        }

        $posts->map(function($job){
            $job->time_elapsed = $this->timeElapsedString($job->created_at);
            return $job;
        });
        return view('job_views.index',['job_searches'=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = JobPosts::all();
       return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function timeElapsedString($datetime, $full = false)
    {
        $now = new \DateTime;
        $ago = new \DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
}
