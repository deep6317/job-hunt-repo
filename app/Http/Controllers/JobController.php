<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosts;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('job_posts.index');
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
        $payload = $request->all();
        $payload['user_id'] = \Auth::user()->id;
        JobPosts::create($payload);
	    return back()->with('success','Thank you for posting your requirement. Your post will automatically live after approval.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = JobPosts::whereId($id)->first();
        $job->time_elapsed = $this->timeElapsedString($job->created_at);
        return view('job_posts.job_post_detail',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = JobPosts::find($id);
        return view('job_posts.edit_job_post',compact('job'));
    }

    public function viewJob($id)
    {
        $job = JobPosts::where('id',$id)->first();

        return view('job_views.job_view',compact('job'));
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
        $post_data = $request->all();
        unset($post_data['_token']);
        unset($post_data['_method']);
        JobPosts::where('id',$id)->update($post_data);
	    return back()->with('success','Post Detail Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function viewPostsJobs()
    {
        $job_searches = JobPosts::where('user_id',\Auth::user()->id)->get();
        $job_searches->map(function($job){
            $job->time_elapsed = $this->timeElapsedString($job->created_at);
            return $job;
        });
        return view('job_posts.job_post_view',compact('job_searches'));
    }

    public function deleteJob($id)
    {
        JobPosts::whereId($id)->delete();
	    return back()->with('success','Post Deleted Successfully');
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
