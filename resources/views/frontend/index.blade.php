@include('frontend.header')
<!-- End Header/Navigation -->

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
					<p class="mb-4">
						"Furnixure: Where style meets comfort. Explore our curated collection of furniture for your home or office. Shop now and transform!"</p>
					<p><a href="{{url('/shop')}}" class="btn btn-secondary me-2">Shop Now</a>
						<a href="{{url('/about_us')}}" class="btn btn-white-outline">Explore</a>
					</p>
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

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">
		<div class="row justify-content-between">
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

<!-- Start We Help Section -->
<div class="we-help-section">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7 mb-5 mb-lg-0">
				<div class="imgs-grid">
					<div class="grid grid-1"><img src="{{config('app.url')}}/Frontend/images/img-grid-1.jpg"
							alt="Untree.co"></div>
					<div class="grid grid-2"><img src="{{config('app.url')}}/Frontend/images/img-grid-2.jpg"
							alt="Untree.co"></div>
					<div class="grid grid-3"><img src="{{config('app.url')}}/Frontend/images/img-grid-3.jpg"
							alt="Untree.co"></div>
				</div>
			</div>
			<div class="col-lg-5 ps-lg-5">
				<h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
				<p>Elevating spaces with modern flair: We guide your interior design journey, offering expertise in furniture selection and spatial arrangement. Transform today!</p>

				<ul class="list-unstyled custom-list my-4">
					<li>Expert Guidance: Receive personalized assistance from our team of interior design experts.</li>
					<li>Stylish Furniture Selection: Choose from a curated collection of modern furniture pieces tailored to your taste.</li>
					<li>Functional Layouts: Optimize your space with our advice on effective spatial arrangements for a modern, streamlined look.</li>
					<li>Transformative Experience: Let us help you bring your vision to life, creating contemporary interiors that reflect your unique style.</li>
				</ul>
				<p><a href="{{url('/about_us')}}" class="btn">Explore</a></p>

			</div>
		</div>
	</div>
</div>
<!-- End We Help Section -->

<!-- Start Popular Product -->
<div class="popular-product">
	<div class="container">
		<div class="row">

			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="product-item-sm d-flex">
					<div class="thumbnail">
						<img src="{{config('app.url')}}/Frontend/images/product-1.png" alt="Image" class="img-fluid">
					</div>
					<div class="pt-3">
						<h3>Nordic Chair</h3>
						<p>Sleek, minimalist design inspired by Nordic aesthetics for ultimate comfort </p>
						<p><a href="{{url('https://en.wikipedia.org/wiki/Nordic_Fibreboard')}}">Read More</a></p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="product-item-sm d-flex">
					<div class="thumbnail">
						<img src="{{config('app.url')}}/Frontend/images/product-2.png" alt="Image" class="img-fluid">
					</div>
					<div class="pt-3">
						<h3>Kruzo Aero Chair</h3>
						<p>Modern, ergonomic chair designed for optimal comfort and sleek aesthetics. </p>
						<p><a href="{{url('https://en.wikipedia.org/wiki/Aeron_chair')}}">Read More</a></p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
				<div class="product-item-sm d-flex">
					<div class="thumbnail">
						<img src="{{config('app.url')}}/Frontend/images/product-3.png" alt="Image" class="img-fluid">
					</div>
					<div class="pt-3">
						<h3>Ergonomic Chair</h3>
						<p>Supportive and comfortable seating designed to promote good posture . </p>
						<p><a href="{{url('https://en.wikipedia.org/w/index.php?search=ergonomic+chair&title=Special%3ASearch&ns0=1')}}">Read More</a></p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Popular Product -->

<!-- Start Testimonial Slider -->
<div class="testimonial-section">
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
											<p>&ldquo;I  designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1  step.ITs my hope that it will help people&rdquo;</p>
										</blockquote>

										<div class="author-info">
											<div class="author-pic">
												<img src="{{config('app.url')}}/Frontend/images/sourav.jpg"
													alt="sourav debnath" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">Sourav Debnath</h3>
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
												<img src="{{config('app.url')}}/Frontend/images/sourav.jpg"
													alt="sourav debnath" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">sourav debnath</h3>
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
											<p>&ldquo;I  designed it for make and delivery furniture at doorstep of people. and make easier access of furniture buy and sell and purchase in 1  step.ITs my hope that it will help people
												.&rdquo;</p>
										</blockquote>

										<div class="author-info">
											<div class="author-pic">
												<img src="{{config('app.url')}}/Frontend/images/sourav.jpg"
													alt="sourav debnath" class="img-fluid">
											</div>
											<h3 class="font-weight-bold">sourav debnth</h3>
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

<!-- Start Blog Section -->
<div class="blog-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6">
				<h2 class="section-title">Recent Blog</h2>
			</div>
			<div class="col-md-6 text-start text-md-end">
				<a href="{{url('/blog')}}" class="more">View All Posts</a>
			</div>
		</div>

		<div class="row">

			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="#" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-1.jpg"
							alt="Image" class="img-fluid"></a>
					<div class="post-content-entry">
						<h3><a href="{{url('https://www.wikihow.com/Clean-Furniture')}}">Regular Cleaning</a></h3>
						<div class="meta">
							<span>by <a href="{{url('https://www.wikihow.com/Clean-Furniture')}}">Sourav Debnath</a></span> <span>on <a href="#">Dec 19, 2002</a></span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="https://www.bona.com/en/homeowner/how-to/protect-floors-from-furniture/" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-2.jpg"
							alt="Image" class="img-fluid"></a>
					<div class="post-content-entry">
						<h3><a href="{{url('https://www.bona.com/en/homeowner/how-to/protect-floors-from-furniture/')}}">Use Furniture Protectors</a></h3>
						<div class="meta">
							<span>by <a href="{{url('https://www.moving.com/tips/6-reasons-why-you-should-use-furniture-padding-when-you-move/')}}">Niloy Debnath</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="https://www.thompsoncreek.com/blog/can-sun-damage-furniture/" class="post-thumbnail"><img src="{{config('app.url')}}/Frontend/images/post-3.jpg"
							alt="Image" class="img-fluid"></a>
					<div class="post-content-entry">
						<h3><a href="{{url('https://www.thompsoncreek.com/blog/can-sun-damage-furniture/')}}">Avoid Direct Sunlight:</a></h3>
						<div class="meta">
							<span>by <a href="{{url('https://www.thompsoncreek.com/blog/can-sun-damage-furniture/')}}">Sourav Debnath</a></span> <span>on <a href="https://www.thompsoncreek.com/blog/can-sun-damage-furniture/">Dec 12, 2021</a></span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Blog Section -->

@include('frontend.footer')