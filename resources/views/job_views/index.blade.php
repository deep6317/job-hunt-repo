@extends('layout.app')
@section('styles')
@endsection
@section('content')
<section class="job-category section">
   <div class="container align-items-center">
   <div class="row col-md-8 offset-md-2">
      @foreach ($job_searches as $jobviewer) 
      <div class="card mt-5">
         <div class="card-header" style="background-color:#ADBCF6">
            <div class="row">
               <h3 class="p-3">{{$jobviewer->job_title}}</h3>
            </div>
         </div>
         <div class="card-body">
            <form action="get" action="{{ route('job-views.show','5') }}" id='frmJobViews' >
               <div class="row">
                  <div class="col-lg-4">
                     <div class="form-group p-2">
                        <label for="companyName">Title: </label>
                        <label for="companyName" name="company_name" id="lblUserName">{{$jobviewer->job_title}}</label>
                     </div>
                     <div class="form-group p-2">
                        <label for="exampleInputEmail1">Requirement: </label>
                        <label for="exampleInputEmail1" name="email" id="lblEmail">{{$jobviewer->job_skill}}</label>
                     </div>
                     <div class="form-group p-2">
                        <label for="exampleInputEmail1">Status: </label>
                        <label for="exampleInputEmail1" name="address" id="lblEmail" value="address">{{$jobviewer->status}}</label>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <br/>
      @endforeach
      <br/>
   </div>
</section>
@endsection
@section('script')
<script src="{{asset('assets/js/job-views.js') }}"></script>
@endsection