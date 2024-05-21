@include('frontend.header')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>About Us</h1>
                    <p class="mb-4">Experience seamless shopping: 24/7 support, hassle-free returns, easy browsing, and
                        fast, free shipping. Your satisfaction is our priority.</p>
                    <p><a href="{{url('/shop')}}" class="btn btn-secondary me-2">Shop Now</a><a href="{{url('/about_us')}}"
                            class="btn btn-white-outline">Explore</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="{{config('app.url')}}/Frontend/images/couch.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Why Choose Us</h2>
                <p>Choose us for unparalleled quality, exceptional service, hassle-free returns, swift shipping, and round-the-clock support. Elevate your shopping experience with us today!.</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{config('app.url')}}/Frontend/images/truck.svg" alt="Image"
                                    class="imf-fluid">
                            </div>
                            <h3>Fast &amp; Free Shipping</h3>
                            <p>Experience swift, complimentary shipping: Enjoy the convenience of fast delivery and free shopping on all orders. Elevate your shopping journey now!.
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{config('app.url')}}/Frontend/images/bag.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>Simplify your shopping: Navigate effortlessly through our user-friendly website and find your perfect piece with ease. Enjoy seamless shopping!.
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{config('app.url')}}/Frontend/images/support.svg" alt="Image"
                                    class="imf-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>Accessible assistance anytime: Our dedicated support team is available around the clock to address any queries or concerns promptly.
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="{{config('app.url')}}/Frontend/images/return.svg" alt="Image"
                                    class="imf-fluid">
                            </div>
                            <h3>Hassle Free Returns</h3>
                            <p>Simplify returns: Our hassle-free process ensures easy returns, prioritizing your satisfaction and making shopping with us worry-free.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="{{config('app.url')}}/Frontend/images/why-choose-us-img.jpg" alt="Image"
                        class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Team Section -->
<div class="untree_co-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center">
                <h2 class="section-title">Our Team</h2>
            </div>
        </div>

       


    {{-- for first dynamic --}}
       <div class="row">
            @foreach($getblog as $about)
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="{{ asset('Blogs/' . $about->photo_path) }}" class="img-fluid mb-5">
                <h3>{{ $about->title }}</h3>
                <span class="d-block position mb-4">{{ $about->description }}</span>
                {{-- <p>{{ $about->website_link }}</p> --}}
                <p class="mb-0"><a href="{{ $about->website_link }}" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>

            </div>
            @endforeach

    </div>


{{--   for second dynamic --}}

    {{-- <div class="row">
        @foreach($getblog as $about)
        <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
            <img src="{{ asset('Blogs/' . $about->photo_path) }}" class="img-fluid mb-5">
            <h3 clas><a href="#"><span class="">{{ $about->title }}</span> Arnold</a></h3>
            <span class="d-block position mb-4">CEO, Founder, Atty.</span>
            <p>{{ $about->description }}</p>
            <p class="mb-0"><a href="{{ $about->website_link }}" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
        </div>
        @endforeach
    </div> --}}
    

</div>
<!-- End Team Section -->



<!-- Start Testimonial Slider -->
<div class="testimonial-section before-footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="testimonial-slider">

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;“I designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1 step.ITs my hope that it will help people .”

                        
                                                
                                                &rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="{{config('app.url')}}/Frontend/images/sourav.jpg"
                                                    alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Sourav Debnath</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, Furnixure Inc.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;“I designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1 step.ITs my hope that it will help people .”

                                               
                                                
                                                &rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="{{config('app.url')}}/Frontend/images/sourav.jpg"
                                                    alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Sourav Debnath</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, Furnixure Inc.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;“I designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1 step.ITs my hope that it will help people .”

                                               
                                                
                                                &rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="{{config('app.url')}}/Frontend/images/sourav.jpg"
                                                    alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Sourav Debnath</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, Furnixure Inc.</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END item -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Slider -->
@include('frontend.footer')