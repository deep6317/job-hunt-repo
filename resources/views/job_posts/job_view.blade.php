@extends('layout.app')
@section('styles')
@endsection
@section('content')
<section class="job-category section">
   <div class="container align-items-center">
      <div class="row col-md-8 offset-md-2">
         <div class="card mt-2">
            <div class="card-body">
               <div class="row">
                  <h5 class="pb-2 pt-2">View Job</h5>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <label for="">Company Name : {{$job->company_name}}</label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Address : {{$job->address}}</label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Email : {{$job->email }}</label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Title : {{$job->job_title}}</label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Skill : {{$job->job_skill}}</label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Area : {{$job->job_area}}</label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Type : {{$job->job_type}}</label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Worf From Home : 
                     @if ($job->wfh == 0)
                     No
                     @else
                     Yes
                     @endif 
                     </label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Status : @if ($job->status == 0)
                     Pending
                     @else
                     Active
                     @endif</label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Experience : {{$job->experience}}</label>
                  </div>
                  <div class="col-md-6">
                     <label for="">Salary : {{$job->salary}}</label>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <label for="">Description : {!! $job->job_desc !!}</label>
                  </div>
               </div>
               <div class="row">
                  <div class="col align-self-end">
                     <a class="btn btn-primary btn-sm float-right" href="{{ route('job-views.index') }}">Back</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@section('scripts')
@endsection