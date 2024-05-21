
@include('frontend.header')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Blog</h1>
                    <p class="mb-4">Dust regularly, clean with suitable products, address spills quickly, protect surfaces, and periodically consider professional cleaning for optimal maintenance.</p>
                    <p><a href="{{url('/shop')}}" class="btn btn-secondary me-2">Shop Now</a><a href="{{url('/about_us')}}" class="btn btn-white-outline">Explore</a></p>
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



<!-- Start Blog Section -->
<div class="blog-section">
<div class="container">
    
    <div class="row">
        @foreach($getbloggs as $about)
        <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
            <img src="{{ asset('Blogs/' . $about->photo_path) }}" class="img-fluid mb-5">
            <h3>{{ $about->title }}</h3>
            {{-- <span class="d-block position mb-4">{{ $about->description }}</span> --}}
            {{-- <p>{{ $about->website_link }}</p> --}}
            <p class="mb-0"><a href="{{ $about->website_link }}" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>

        </div>
        @endforeach

</div>
</div>
</div>
<!-- End Blog Section -->	



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
                                        <p>&ldquo;“I designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1 step.ITs my hope that it will help people.”&rdquo;</p>
                                    </blockquote>

                                    <div class="author-info">
                                        <div class="author-pic">
                                            <img src="{{config('app.url')}}/Frontend/images/sourav.jpg" alt="Sourav" class="img-fluid">
                                        </div>
                                        <h3 class="font-weight-bold">Sourav Debnath</h3>
                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
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
                                        <p>&ldquo;“I designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1 step.ITs my hope that it will help people.”&rdquo;</p>
                                    </blockquote>

                                    <div class="author-info">
                                        <div class="author-pic">
                                            <img src="{{config('app.url')}}/Frontend/images/sourav.jpg" alt="Sourav" class="img-fluid">
                                        </div>
                                        <h3 class="font-weight-bold">Sourav Debnath</h3>
                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
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
                                        <p>&ldquo;“I designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1 step.ITs my hope that it will help people.”&rdquo;</p>
                                    </blockquote>

                                    <div class="author-info">
                                        <div class="author-pic">
                                            <img src="{{config('app.url')}}/Frontend/images/sourav.jpg" alt="Sourav" class="img-fluid">
                                        </div>
                                        <h3 class="font-weight-bold">Sourav Debnath</h3>
                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
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