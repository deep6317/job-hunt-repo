@extends('layout.app')
@section('styles')

@endsection

@section('content')
<section class="job-category section">
    <div class="container">
        <div class="card">
            <div class="card-body">
              <div class="row">
                <h3 class="p-3">User Profile Details:</h3>
              </div>
              <form action="">
                <div class="row">
                  <div class="col-lg-6">
                          <div class="form-group p-2">
                              <label for="companyName">User Name</label>
                              <label for="companyName" name="name" id="lblUserName"></label>
                              <a style="color:black" href="#">{{ Auth::user()->name }}</a>
                          </div>
                          <div class="form-group p-2">
                              <label for="exampleInputEmail1">Email</label>
                              <label for="exampleInputEmail1" name="email" id="lblEmail"></label>
                              <a style="color:black" href="#">{{ Auth::user()->email }}</a>
                              {{-- <a href="#">{{ Auth::user()-> }}</a> --}}
                          </div>
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
