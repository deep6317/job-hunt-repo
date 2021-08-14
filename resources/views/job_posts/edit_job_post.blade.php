@extends('layout.app')
@section('styles')

@endsection

@section('content')
<section class="job-category section">
   <div class="container">
       <div class="card">
           <div class="card-body">
               <div class="row">
                  <div class="col-lg-6">
                     <h3 class="p-3">Job Posts Details</h3>
                  </div>
                  <div class="col-lg-6 text-right">
                     <a class="btn btn-primary btn-sm" href="{{route('job-views.index')}}" rel="noopener noreferrer">View All Jobs</a>
                  </div>
               </div>
               @if($message = Session::get('success'))
                   <div class="alert alert-success alert-block">
                       <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
                   </div>
               @endif
               <form method="post" action="{{ route('job.update',$job->id) }}">
                   @csrf
                   @method('put')
                   <div class="row">
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="txtCompanyName">Company Name</label>
                                   <input type="text" value="{{$job->company_name}}" class="form-control" id="txtCompanyName" name="company_name"
                                       aria-describedby="emailHelp" placeholder="Enter Company Name" />
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="txtAddress">Address</label>
                                   <input type="text" value="{{$job->address}}" class="form-control" id="txtAddress" name="address"
                                       placeholder="1234 Main St" />
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="exampleInputEmail1">Email address</label>
                                   <input type="email" value="{{$job->email}}" class="form-control" id="exampleInputEmail1" name="email"
                                       aria-describedby="emailHelp" placeholder="Enter email" />
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="inputState">Job Area</label>
                                   <select id="inputState" class="form-control" name="job_area">
                                       <option @if($job->job_area == 'technical_support') selected="selected" @endif value="technical_support">Technical Support</option>
                                       <option @if($job->job_area == 'business_development') selected="selected" @endif  value="business_development">Business Development</option>
                                       <option @if($job->job_area == 'real_estate_business') selected="selected" @endif  value="real_estate_business">Real Estate Business</option>
                                       <option @if($job->job_area == 'share_market_analysis') selected="selected" @endif  value="share_market_analysis">Share Market Analysis</option>
                                       <option @if($job->job_area == 'financial_banking_service') selected="selected" @endif  value="financial_banking_service">Financial Banking Service</option>
                                       <option @if($job->job_area == 'it_networking_service') selected="selected" @endif  value="it_networking_service">IT Networking Service</option>
                                       <option @if($job->job_area == 'restaurant_service') selected="selected" @endif  value="restaurant_service">Restaurant Service</option>
                                       <option @if($job->job_area == 'defence_fire_service') selected="selected" @endif  value="defence_fire_service">Defence Fire Service</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="inputState">Job Type</label>
                                   <select id="inputState" class="form-control" name="job_type">
                                       <option @if($job->job_type == 'Full Time') selected="selected" @endif value="Full Time">Full Time</option>
                                       <option @if($job->job_type == 'Part Time') selected="selected" @endif value="Part Time">Part Time</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="jobTitle">Job Title</label>
                                   <input type="text" value="{{$job->job_title}}" class="form-control" id="jobTitle" name="job_title"
                                       placeholder="Job Title" />
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="inputStateJobSkill">Job Skill</label>
                                   <input type="text" value="{{$job->job_skill}}" class="form-control" id="jobSkill" name="job_skill"
                                       placeholder="Job Skills" />
                                   <span style="font-size: small;font-style: italic;color: #000;"><i
                                           class="fa fa-info-circle"></i> Put comma(,) after every skill</span>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="inputState">Required Experience</label>
                                   <select id="inputState" class="form-control" name="experience">
                                       <option @if($job->experience == '0-1') selected="selected" @endif value="0-1">0 - 1 Year</option>
                                       <option @if($job->experience == '2') selected="selected" @endif value="2">2 years</option>
                                       <option @if($job->experience == '3') selected="selected" @endif value="3">3 Years</option>
                                       <option @if($job->experience == '4') selected="selected" @endif value="4">4 Years</option>
                                       <option @if($job->experience == '5+') selected="selected" @endif value="5+">5 years & above</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="inputState">Salary Package(P.A.)</label>
                                   <select id="inputState" class="form-control" name="salary">
                                       <option @if($job->salary == '1000') selected="selected" @endif value="1000">1000 pounds</option>
                                       <option @if($job->salary == '1000-2000') selected="selected" @endif value="1000-2000">1000 to 2000 pounds</option>
                                       <option @if($job->salary == '2000-3000') selected="selected" @endif value="2000-3000">2000 to 3000 pounds</option>
                                       <option @if($job->salary == '3000-4000') selected="selected" @endif value="3000-4000">3000 to 4000 pounds</option>
                                       <option @if($job->salary == '4000+') selected="selected" @endif value="4000+">4000 pounds & Above</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group p-2">
                                   <label for="jobTitle">Job Description</label>
                                   <textarea id="editor" class="editor" name="job_desc">{!! $job->job_desc !!}</textarea>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <label class="form-check-label p-2" for="inlineRadio1">Is Allow Work From Home ?</label>
                               <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="wfh" id="inlineRadio1" @if($job->wfh == '1')  checked="checked" @endif  value="1">
                                   <label class="form-check-label" for="inlineRadio1">Yes</label>
                               </div>
                               <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="wfh" id="inlineRadio2" @if($job->wfh == '0')  checked="checked" @endif value="0"
                                      >
                                   <label class="form-check-label" for="inlineRadio2">No</label>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="form-group mt-3">
                       <div class="form-group mb-8 button">
                           <button type="submit" class="btn float-right" id="btnSubmitJobPosts">Submit</button>
                       </div>
                   </div>

               </form>
           </div>
       </div>
   </div>
</section>
  
@endsection

@section('script')
@endsection
