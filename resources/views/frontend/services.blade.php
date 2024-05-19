@include('frontend.header')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Services</h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
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
        
        
        <div class="row my-5">
            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{config('app.url')}}/Frontend/images/truck.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Fast &amp; Free Shipping</h3>
                    <p>Swift and complimentary shipping: Experience the convenience of fast delivery and free shipping on all orders. Shop hassle-free today!.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{config('app.url')}}/Frontend/images/bag.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Easy to Shop</h3>
                    <p>Simplified shopping experience: Navigate effortlessly through our user-friendly website and find your perfect piece with ease. Enjoy seamless shopping!.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{config('app.url')}}/Frontend/images/support.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Our dedicated support team is available around the clock to address any queries or concerns promptly. Connect now!.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{config('app.url')}}/Frontend/images/return.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Hassle Free Returns</h3>
                    <p>Enjoy hassle-free returns with our simple and convenient system. Your satisfaction is our priority. Return with confidence!.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{config('app.url')}}/Frontend/images/truck.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Fast &amp; Free Shipping</h3>
                    <p>Swift and complimentary shipping: Experience the convenience of fast delivery and free shipping on all orders. Shop hassle-free today!.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{config('app.url')}}/Frontend/images/bag.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Easy to Shop</h3>
                    <p>Simplified shopping experience: Navigate effortlessly through our user-friendly website and find your perfect piece with ease. Enjoy seamless shopping!.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{config('app.url')}}/Frontend/images/support.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Our dedicated support team is available around the clock to address any queries or concerns promptly. Connect now!.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{config('app.url')}}/Frontend/images/return.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Hassle Free Returns</h3>
                    <p>Enjoy hassle-free returns with our simple and convenient system. Your satisfaction is our priority. Return with confidence!.</p>
                </div>
            </div>

        </div>
    
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Product Section -->
<!-- Start Product Section -->
<div class="product-section">
	<div class="container">
		<div class="row">

			<!-- Start Column 1 -->
			<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
				<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
				<p class="mb-4">Meticulously curated with premium materials, ensuring durability, elegance, and timeless quality in every piece. </p>
				<p><a href="{{url('/shop')}}" class="btn">Explore</a></p>
			</div>
			<!-- End Column 1 -->

			<!-- Start Column 2 -->
			@foreach ($getFurniture as $item)
			<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				<a class="product-item" href="cart.html">
					<img src="{{asset('Furnixure/furniture/'.$item->photo_path)}}" class="img-fluid product-thumbnail">
					<h3 class="product-title">{{$item->title}}</h3>
					<strong class="product-price">"{{$item->price}}" Tk</strong>

					{{-- <span class="icon-cross">
						<img src="{{config('app.url')}}/Frontend/images/cross.svg" class="img-fluid">
					</span> --}}
				</a>
			</div>

			@endforeach

			<!-- End Column 2 -->
		</div>
	</div>
</div>
<!-- End Product Section -->
<!-- End Product Section -->



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
                                            <p>&ldquo;I  designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1  step.ITs my hope that it will help people.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="{{config('app.url')}}/Frontend/images/sourav.jpg" alt="sourav debnath" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Sourav debnath</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, FurniXure Inc.</span>
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
                                            <p>&ldquo;I  designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1  step.ITs my hope that it will help people.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="{{config('app.url')}}/Frontend/images/sourav.jpg" alt="sourav debnath" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Sourav debntah</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, FurniXure Inc.</span>
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
                                            <p>&ldquo;I  designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1  step.ITs my hope that it will help people.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="{{config('app.url')}}/Frontend/images/sourav.jpg" alt="sourav debnath" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Sourav Debnath</h3>
                                            <span class="position d-block mb-3">CEO, Co-Founder, FurniXure Inc.</span>
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
