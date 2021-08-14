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
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-2">
                                    <label for="txtAddress">Address</label>
                                    <input type="text" class="form-control" id="txtAddress" name="address"
                                        placeholder="1234 Main St" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-2">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                        aria-describedby="emailHelp" placeholder="Enter email" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-2">
                                    <label for="inputState">Job Area</label>
                                    <select id="inputState" class="form-control" name="job_area">
                                        <option value="technical_support">Technical Support</option>
                                        <option value="business_development">Business Development</option>
                                        <option value="real_estate_business">Real Estate Business</option>
                                        <option value="share_market_analysis">Share Market Analysis</option>
                                        <option value="financial_banking_service">Financial Banking Service</option>
                                        <option value="it_networking_service">IT Networking Service</option>
                                        <option value="restaurant_service">Restaurant Service</option>
                                        <option value="defence_fire_service">Defence Fire Service</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-2">
                                    <label for="inputState">Job Type</label>
                                    <select id="inputState" class="form-control" name="job_type">
                                        <option selected>Full Time</option>
                                        <option selected>Part Time</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-2">
                                    <label for="jobTitle">Job Title</label>
                                    <input type="text" class="form-control" id="jobTitle" name="job_title"
                                        placeholder="Job Title" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-2">
                                    <label for="inputStateJobSkill">Job Skill</label>
                                    <input type="text" class="form-control" id="jobSkill" name="job_skill"
                                        placeholder="Job Skills" />
                                    <span style="font-size: small;font-style: italic;color: #000;"><i
                                            class="fa fa-info-circle"></i> Put comma(,) after every skill</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-2">
                                    <label for="inputState">Required Experience</label>
                                    <select id="inputState" class="form-control" name="experience">
                                        <option value="0-1">0 - 1 Year</option>
                                        <option value="2">2 years</option>
                                        <option value="3">3 Years</option>
                                        <option value="4">4 Years</option>
                                        <option value="5+">5 years & above</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-2">
                                    <label for="inputState">Salary Package(P.A.)</label>
                                    <select id="inputState" class="form-control" name="salary">
                                        <option value="1000">1000 pounds</option>
                                        <option value="1000-2000">1000 to 2000 pounds</option>
                                        <option value="2000-3000">2000 to 3000 pounds</option>
                                        <option value="3000-4000">3000 to 4000 pounds</option>
                                        <option value="4000+">4000 pounds & Above</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-2">
                                    <label for="jobTitle">Job Title</label>
                                    <textarea id="editor" class="editor" name="job_desc"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
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
