 <!-- Start Hero Area -->
 <section class="hero-area">
    <!-- Single Slider -->
    <div class="hero-inner">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 co-12">
                    <div class="inner-content">
                        <div class="hero-text">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">Find Your Career <br>to Make a Better Life
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Creating a beautiful job website is not
                                easy <br> always. To make your life easier, we are<br> introducing Jobcamp template.
                            </p>
                        </div>
                        <div class="job-search-wrap-two mt-50 wow fadeInUp" data-wow-delay=".7s">
                            <div class="job-search-form">
                                <form action="{{ route('search') }}" method="GET">
                                    <!-- Single Field Item Start  -->
                                    <div class="single-field-item keyword">
                                        <label for="search">What</label>
                                        <select name="job_area" id="job_area" class="form-control">
                                            <option value="technical_support">Technical Support</option>
                                            <option value="business_development">Business Development</option>
                                            <option value="real_estate_business">Real Estate Business</option>
                                            <option value="share_market_analysis">Share Market Analysis</option>
                                            <option value="financial_banking_service">Financial Banking Service</option>
                                            <option value="it_networking_service">IT Networking Service</option>
                                            <option value="restaurant_service">Restaurant Service</option>
                                            <option value="defence_fire_service">Defence Fire Service</option>
                                        </select>
                                       {{--  <input id="search" placeholder="What jobs you want?" name="search"
                                            type="text"> --}}
                                    </div>
                                    <!-- Single Field Item End  -->
                                    <!-- Single Field Item Start  -->
                                    <div class="single-field-item location">
                                        <label for="search">Where</label>
                                        <input id="search" placeholder="Location" name="address" type="text">
                                    </div>
                                    <!-- Single Field Item End  -->
                                    <div class="submit-btn">
                                        <button class="btn" type="submit">
                                            Search
                                        </button>
                                    </div>
                                </form>
                                {{-- @if($posts->isNotEmpty())
                                    @foreach ($posts as $post)
                                        <div class="post-list">
                                            <p>{{$jobviewer->job_title}}</p>
                                        </div>
                                    @endforeach
                                @else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif --}}
                            </div>
                            {{-- <div class="trending-keywords mt-30">
                                <div class="keywords style-two">
                                    <span class="title">Popular Keywords:</span>
                                    <ul>
                                        <li><a href="#">Administrative</a></li>
                                        <li><a href="#">Android</a></li>
                                        <li><a href="#">app</a></li>
                                        <li><a href="#">ASP.NET</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 co-12">
                    <div class="hero-video-head wow fadeInRight" data-wow-delay=".5s">
                        <div class="video-inner">
                            <img src="assets/images/hero/hero-image.png" alt="#">
                            <a href="https://www.youtube.com/watch?v=cz4z8CyvDas" class="glightbox hero-video"><i
                                    class="lni lni-play"></i></a>
                            <!-- Video Animation -->
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <!--/ End Video Animation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Hero Area -->