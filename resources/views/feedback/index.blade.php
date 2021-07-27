@extends('layout.app')
@section('styles')
@endsection
@section('content')
<div class="container p-4">
    <div class="pb-4 py-4"></div>
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
    <form method="post" action="{{ route('feedback.store') }}">
        @csrf
        <div class="row">
            <div class="col-12 pb-4 py-4">
                <h2 class="contact-title">Feedback</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" name="email"  class="form-control" placeholder="example@gmail.com"> </br>
                                <textarea class="form-control w-100"  id="message" name="comment" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Message"></textarea>
                            </div>
                        </div>
                    
                    </div>
                    <div class="form-group mt-3">
                      <div class="form-group mb-8 button">
                        <button type="submit" class="btn">Send</button>
                    </div>
                        
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                {{-- <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+1 253 565 2365</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>support@colorlib.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div> --}}
            </div>
          </div>
    
    </form>
    
  </div>
@endsection
@section('script')
    
@endsection