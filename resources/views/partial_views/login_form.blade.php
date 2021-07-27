<!-- Login Modal -->
<div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button"
            class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
            data-dismiss="modal"><i class="lni lni-close"></i></button>
        <div class="login-modal-main">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="row">
                        <div class="heading">
                            <h3>Login From Here</h3>
                            <p>Log in to continue your account <br> and explore new jobs.</p>
                        </div>
                       {{--  <div class="social-login">
                            <ul>
                                <li><a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Log in
                                        with LinkedIn</a></li>
                                <li><a class="google" href="#"><i class="lni lni-google"></i> Log in with
                                        Google</a></li>
                                <li><a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Log in
                                        with Facebook</a></li>
                            </ul>
                        </div>
                        <div class="or-devider">
                            <span>Or</span>
                        </div> --}}
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="label">E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="example@gmail.com" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="label">Password</label>
                                <div class="position-relative">
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">
                                <!-- Default checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">Remember password</label>
                                </div>
                                <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                            </div>
                            <div class="form-group mb-8 button">
                                <button class="btn ">Log in
                                </button>
                            </div>
                            <p class="text-center create-new-account">Don’t have an account? <a href="#">Create a free account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Modal -->