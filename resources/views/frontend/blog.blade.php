
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

        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-1.jpg"
                        alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="{{url('https://www.wikihow.com/Clean-Furniture')}}">Regular Cleaning</a></h3>
                    <div class="meta">
                        <span>by <a href="{{url('https://www.wikihow.com/Clean-Furniture')}}">Sourav Debnath</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-2.jpg"
                        alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="{{url('https://www.moving.com/tips/6-reasons-why-you-should-use-furniture-padding-when-you-move/')}}">Use Furniture Protectors</a></h3>
                    <div class="meta">
                        <span>by <a href="{{url('https://www.moving.com/tips/6-reasons-why-you-should-use-furniture-padding-when-you-move/')}}">Niloy Debnath</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-3.jpg"
                        alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="{{url('https://www.thompsoncreek.com/blog/can-sun-damage-furniture/')}}">Avoid Direct Sunlight:</a></h3>
                    <div class="meta">
                        <span>by <a href="{{url('https://www.thompsoncreek.com/blog/can-sun-damage-furniture/')}}">Susmita Debnath</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-1.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="https://www.condair.com/humidifiers-for-furniture-flooring">Control Humidity: </a></h3>
                    <div class="meta">
                        <span>by <a href="https://www.condair.com/humidifiers-for-furniture-flooring">Gourab Debnath</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-2.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="https://www.gominis.com/blog/2023/june/the-dos-and-donts-of-moving-heavy-furniture/#:~:text=Using%20proper%20lifting%20techniques%20is,it%20can%20strain%20your%20back.">Proper Lifting and Moving</a></h3>
                    <div class="meta">
                        <span>by <a href="#">Sourav Debnath</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-3.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="https://www.gominis.com/blog/2023/june/the-dos-and-donts-of-moving-heavy-furniture/#:~:text=Using%20proper%20lifting%20techniques%20is,it%20can%20strain%20your%20back.">Avoid Overloading</a></h3>
                    <div class="meta">
                        <span>by <a href="https://www.facebook.com/">Sourav Debnath</a></span> <span>on <a href="https://www.facebook.com/">Dec 12, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-1.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="https://ebooks.inflibnet.ac.in/hsp02/chapter/care-and-maintenance-of-furniture/">Seasonal Care</a></h3>
                    <div class="meta">
                        <span>by <a href="https://www.facebook.com/">Sourav Debnath</a></span> <span>on <a href="https://www.facebook.com/">Dec 19, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-2.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="https://safetymanagementgroup.com/blog/spill-response-the-four-critical-steps/#:~:text=Clean%20the%20surfaces%20that%20were,such%20as%20more%20absorbent%20material.">Treat Spills Promptly</a></h3>
                    <div class="meta">
                        <span>by <a href="https://www.facebook.com/">Sourav Debnath</a></span> <span>on <a href="https://www.facebook.com/">Dec 15, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-5">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-3.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="https://suzyssitcom.com/2016/09/10-great-ways-to-use-furniture-polish.html">Use Furniture Polish</a></h3>
                    <div class="meta">
                        <span>by <a href="https://www.facebook.com/">Sourav Debnath</a></span> <span>on <a href="https://www.facebook.com/">Dec 12, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

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