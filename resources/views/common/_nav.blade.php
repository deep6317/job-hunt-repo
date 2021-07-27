{{-- <div id="loading-area"></div> --}}
<!-- Start Header Area -->
<header class="header other-page">
    <div class="navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="/">
                            {{-- <img class="logo1" src="assets/images/logo/logo.svg" alt="Logo" /> --}}
                            <img class="logo1" src="assets/images/newlogopng.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                                </li>
                                <li class="nav-item"><a class="{{ request()->is('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}">About Us</a>
                                </li>
                                <li class="nav-item"><a class="{{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}">Contact Us</a>
                                </li>
                                @if(Auth::check())
                                   
                                    <li class="nav-item"><a href="#">{{ __('Welcome') }} {{ Auth::user()->name }}</a>
                                        <ul class="sub-menu">
                                            <li><a class="{{ request()->is('user-profile') ? 'active' : '' }}" href="{{ route('user-profile') }}">Profile</a></li>
                                            {{-- <li><a class="{{ request()->is('review-job.index') ? 'active' : '' }}" href="{{ route('review-job.index') }}">Review 
                                                    Job</a></li>--}}
                                            <li><a class="{{ request()->is('job.index') ? 'active' : '' }}" href="{{ route('job.index') }}">Your Job</a></li>
                                            <li><a class="{{ request()->is('feedback.index') ? 'active' : '' }}" href="{{ route('feedback.index') }}">Feedback</a></li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}"
                                                    method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- navbar collapse -->
                        @if(!Auth::check())
                            <div class="button">
                                <a href="{{route('login')}}" class="login"><i
                                    class="lni lni-lock-alt"></i> Login</a>
                            <a href="{{route('register')}}" class="btn">Sign Up</a>
                              {{--   <a href="javacript:" data-toggle="modal" data-target="#login" class="login"><i
                                        class="lni lni-lock-alt"></i> Login</a>
                                <a href="javacript:" data-toggle="modal" data-target="#signup" class="btn">Sign Up</a> --}}
                            </div>
                        @endif
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- navbar area -->
</header>
<!-- End Header Area -->
