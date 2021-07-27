<!-- Signup Modal -->
<div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button"
            class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
            data-dismiss="modal"><i class="lni lni-close"></i></button>
        <div class="login-modal-main">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="row">
                        <div class="heading">
                            <h3>Create a free Account <br> Today</h3>
                            <p>Create your account to continue <br> and explore new jobs.</p>
                        </div>
                        {{-- <div class="social-login">
                            <ul>
                                <li><a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Import from LinkedIn</a></li>
                                <li><a class="google" href="#"><i class="lni lni-google"></i> Import from
                                        Google</a></li>
                                <li><a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Import from Facebook</a></li>
                            </ul>
                        </div>
                        <div class="or-devider">
                            <span>Or</span>
                        </div> --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" > 
                            </div>
                            <div class="form-group">
                                <label for="email" class="label">E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="password" class="label">Password</label>
                                <div class="position-relative">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="label">Confirm Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control"
                                        placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">
                                <!-- Default checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="flexCheckDefault">Agree to the <a
                                            href="#">Terms & Conditions</a></label>
                                </div>
                            </div>
                            <div class="form-group mb-8 button">
                                <button class="btn ">Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Signup Modal -->