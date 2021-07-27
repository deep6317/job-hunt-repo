<section class="job-category section">

<div class='container'>
    <div class="card">
        {{-- <img
          src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
          class="card-img-top"
          alt="..."
        /> --}}
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h3>Review Jobs</h3>
                </div>
                {{-- <div class="col-2">
                    <button type="button" class="form-control btn-primary"
                        onclick="window.location='{{ url('exam') }}'">Add New Exam</button>
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class='container'>
                <div class="clearfix"></div>
                </br>
                </br>

                <table id="example" class="table table-striped table-bordered center oes_datatable"
                    style="width:100%;margin-top:80px">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Job Post Id</th>
                            <th>User Id</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>