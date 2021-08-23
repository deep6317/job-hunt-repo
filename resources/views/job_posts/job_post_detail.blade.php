@extends('layout.app')
@section('styles')
<style>
   .cmp-name{
      font-size: 15px;
      color: #000;
   }
   .font-13{
      font-size: 13px;
   }
   .img-clock{
      max-width: 11px;
   }
</style>
@endsection
@section('content')
<section class="job-category section">
   <div class="container align-items-center">
      <div class="row col-md-8 offset-md-2">
         <div class="col-lg-12 text-right">
            <a class="btn btn-primary btn-sm float-right" href="{{ url()->previous() }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Return To List</a>
         </div>
         <div class="card mt-2">
            <div class="card-body">
               <h6 class="pb-2 pt-2 mb-1">{{$job->job_title}}</h6>
               <span class="cmp-name mb-1">{{$job->company_name}}</span>
               <div class="row">
                  <div class="col-lg-12 mb-1">
                     <label for=""> <i class="fa fa-briefcase pr-2"></i>  {{$job->experience}}</label>
                  </div>
                  <div class="col-lg-12 mb-1">
                     <label for=""><i class="pr-2">&#163;</i>{{$job->salary}}</label>
                  </div>
                  <div class="col-lg-12 mb-1">
                     <label for=""><i class="fa fa-map pr-2"></i>{{$job->address}}</label>
                  </div>
               </div>
               <div class="form-group">
                  <label class="font-13" for="exampleInputEmail1"><i class="fa fa-envelope pr-2"></i>Email: </label>
                  <label class="font-13" for="exampleInputEmail1" name="email" id="lblEmail">{{$job->email}}</label>
               </div>
               <hr>
               <div class="row mt-3">
                  <div class="col-lg-12">
                     <span class="badge bg-primary"><img class="img-clock mr-1" src="{{asset('assets/images/wall-clock.png')}}" alt=""> {{$job->time_elapsed}}</span>
                  </div>
               </div>
            </div>
         </div>

         <div class="card mt-3">
            <div class="card-body">
               <p>{!! $job->job_desc !!}</p>
            </div>
         </div>

      </div>
   </div>
</section>
@endsection
@section('scripts')
@endsection