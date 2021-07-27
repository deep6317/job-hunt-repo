@extends('layout.app')
@section('styles')

@endsection

@section('content')

<div class="container p-4">
    <div class="pb-4 py-4"></div>
    <div class="row">
        <div class="col-12 pb-4 py-4">
            <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
            <div class="map">
                <iframe
                    src="https://maps.google.com/maps?q=23%20Dorset%20Road,London,UK%20E7%208PR&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="border:0;width:100%;height:350px" allowfullscreen=""></iframe>
            </div>
            {{-- <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
              <div class="row">
                  <div class="col-12">
                      <div class="form-group">
                          <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Message"></textarea>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                          <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact number'" placeholder="Contact number">
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="form-group">
                          <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" placeholder="Address">
                      </div>
                  </div>
              </div>
              <div class="form-group mt-3">
                <div class="form-group mb-8 button">
                  <button type="submit" class="btn">Send</button>
              </div>
                  
              </div>
          </form> --}}
        </div>
        <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>23 Dorset Road,</h3>
                    <p>London,UK E7 8PR</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                    <h3>+44 7459889194</h3>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                    <h3>deep29960@gmail.com</h3>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
