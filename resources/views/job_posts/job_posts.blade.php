<section class="job-category section">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h3 class="p-3">Job Posts Details:</h3>
                </div>
                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form method="post" action="{{ route('job.store') }}">
                  @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group p-2">
                                <label for="txtCompanyName">Company Name</label>
                                <input type="text" class="form-control" id="txtCompanyName" name="company_name"
                                    aria-describedby="emailHelp" placeholder="Enter Company Name" />
                            </div>
                            <div class="form-group p-2">
                                <label for="txtAddress">Address</label>
                                <input type="text" class="form-control" id="txtAddress" name="address"
                                    placeholder="1234 Main St" />
                            </div>
                            <div class="form-group p-2">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                    aria-describedby="emailHelp" placeholder="Enter email" />
                            </div>

                            <label class="form-check-label p-2" for="inlineRadio1">Is Allow Work From Home ?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="wfh" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="wfh" id="inlineRadio2" value="0"
                                    checked="checked">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                            {{--  <div class="form-group p-2 ">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="wfh" id="flexSwitchCheckChecked" value="0">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Allow Work From Home</label>
                          </div>
                        </div> --}}

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group p-2">
                                <label for="inputState">Job Type</label>
                                <select id="inputState" class="form-control" name="job_type">
                                    <option selected>Full Time</option>
                                    <option selected>Part Time</option>
                                </select>
                            </div>
                            <div class="form-group p-2">
                                <label for="jobTitle">Job Title</label>
                                <input type="text" class="form-control" id="jobTitle" name="job_title"
                                    placeholder="Job Title" />
                            </div>
                            <div class="form-group p-2">
                                <label for="inputStateJobSkill">Job Skill</label>
                                <select id="inputStateJobSkill" class="form-control" name="job_skill">
                                    <option selected>Problem Solving Skills</option>
                                    <option selected>Communication Skills</option>
                                    <option selected>Creativity</option>
                                </select>
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
