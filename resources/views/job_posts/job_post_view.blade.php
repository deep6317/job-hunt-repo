@extends('layout.app')
@section('styles')
<style>
    .cmp-name {
        font-size: 15px;
        color: #000;
    }

    .font-13 {
        font-size: 13px;
        color: #000;
    }

    .img-clock {
        max-width: 11px;
    }

    .lb-no-post{
      font-size: 30px;
      font-weight: bold;
      color: #3d5ae6;
      margin-top: 7%;
   }
</style>
@endsection
@section('content')
<section class="job-category section">
    <div class="container align-items-center">
        <div class="row col-md-8 offset-md-2">
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($job_searches) > 0)
                <div class="text-right">
                    <a class="btn btn-primary btn-sm" href="{{route('job.index')}}"> <i class="fa fa-plus"></i> Create New Post</a>
                </div>
            @endif
            @forelse($job_searches as $jobviewer)
                <div class="card mt-2">
                    <div class="card-body">
                        <h6 class="pb-2 pt-2">{{ $jobviewer->job_title }}</h6>
                        <span class="cmp-name">{{ $jobviewer->company_name }}</span>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for=""> <i class="fa fa-briefcase pr-2"></i>
                                    {{ $jobviewer->experience }}</label>
                            </div>
                            <div class="col-lg-4">
                                <label for=""><i class="pr-2">&#163;</i>{{ $jobviewer->salary }}</label>
                            </div>
                            <div class="col-lg-4">
                                <label for=""><i class="fa fa-map pr-2"></i>{{ $jobviewer->address }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-13" for="exampleInputEmail1"><i
                                    class="fa fa-sticky-note pr-2"></i>Required Skills: </label>
                            <label class="font-13" for="exampleInputEmail1" name="email"
                                id="lblEmail">{{ $jobviewer->job_skill }}</label>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <span class="badge bg-primary"><img class="img-clock mr-1"
                                        src="{{ asset('assets/images/wall-clock.png') }}" alt="">
                                    {{ $jobviewer->time_elapsed }}</span>
                            </div>
                            <div class="col-lg-6 text-right">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('job.edit',$jobviewer->id) }}"><i
                                        class="fa fa-edit pr-2"></i>Edit</a>
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('job.show',$jobviewer->id) }}"><i
                                        class="fa fa-eye pr-2"></i>View</a>
                                <a class="btn btn-danger btn-sm" href="/delete-job/{{ $jobviewer->id }}"><i
                                        class="fa fa-trash pr-2"></i>Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
            @empty
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('assets/images/empty-box.png') }}" width="200" alt=""
                            srcset=""><br>
                        <label class="lb-no-post" for="">No Posts Available</label><br>
                        <a class="btn btn-primary btn-sm" href="{{route('job.index')}}"> <i class="fa fa-plus"></i> Create New Post</a>
                    </div>
                </div>
            @endforelse
            <br />
        </div>
</section>
@endsection
@section('script')
<script src="{{ asset('assets/js/job-views.js') }}"></script>
@endsection
