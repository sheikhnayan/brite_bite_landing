@extends('front.layouts.main')

@section('content')

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">Create Your Digital Restaurent Website</h1>
				<p class="text-white mb-5">Make your Restaurent visible globally!</p>
				<a href="https://app.britbite.com/register" class="btn btn-main-md">Get Started</a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="{{ asset('front/images/mobile.png') }}" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5" style="background: #fff">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-paint-bucket h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">100+ Restaurents</h3>
					{{-- <p class="regular text-muted">From 2019 we hosted more than 100 events from different games like PUBG, Mobile Legends Bang Bang, Clash of Clans, Clash Royale, FIFA, PES, Arena of Valor etc</p> --}}
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-shine h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">50K+ Reservasions</h3>
					{{-- <p class="regular text-muted">Total 50k+ gamers participated in our events hosted or organized by BritBite since 2024</p> --}}
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<i class="ti-thought h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">60k+ Inquiries </h3>
					{{-- <p class="regular text-muted">20K+ members are connected with us in different social media like Facebook, Twitter, YouTube, Instagram, LinkedIn etc and we have also 40k+ members of face group in different games</p>
					</p> --}}
				</div>
			</div>
		</div>
	</div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				<div class="image-content" data-aos="fade-right">
					<img class="img-fluid" src="{{ asset('front/images/feature/feature-new-01.jpg') }}" alt="iphone">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2 class="">Welcome to BritBite.com</h2>
					<!-- Feature Description -->
					<p class="desc">We take care of everything for you – from website setup to hosting, eliminating the need for server purchases. Save time and money while effortlessly building your online presence. Join us today and experience hassle-free website creation.</p>
				</div>
				<!-- Testimonial Quote -->
				<div class="testimonial">
					<p class="">
						"Be the change that you wish to see in the world."
					</p>
					<ul class="list-inline meta">
						{{-- <li class="list-inline-item">
							<img src="{{ asset('front/images/testimonial/feature-testimonial-thumb.jpg') }}" alt="">
						</li> --}}
						<li class="list-inline-item">- Mahatma Gandhi</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2 class="">
                        Digitalize Your Restaurent </h2>
					<!-- Feature Description -->
					<p>We design custom restaurant websites for profit maximization. Our user-friendly, mobile-optimized designs feature SEO integration and online ordering. Elevate your online presence with BritBite.com - contact us today!</p>
				</div>
				<!-- Testimonial Quote -->
				{{-- <div class="testimonial">
					<p class="">
						"InVision is a window into everything that's being designed at Twitter. It gets all of our best work in one
						place."
					</p>
					<ul class="list-inline meta">
						<li class="list-inline-item">
							<img src="{{ asset('front/images/testimonial/feature-testimonial-thumb.jpg') }}" alt="">
						</li>
						<li class="list-inline-item">Jonathon Andrew , Themefisher.com</li>
					</ul>
				</div> --}}
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="{{ asset('front/images/feature/feature-new-02.jpg') }}" alt="ipad">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Feature Grid  ====-->

<!--==============================
=            Services            =
===============================-->
<section class="service section" style="background: #2e7eed">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2 class="text-white">Our Services</h2>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-6 align-self-center">
				<!-- Feature Image -->
				<div class="service-thumb left" data-aos="fade-right">
					<img class="img-fluid" src="{{ asset('front/images/feature/iphone-ipad.jpg') }}" alt="iphone-ipad">
				</div>
			</div>
			<div class="col-lg-5 mr-auto align-self-center">
				<div class="service-box" style="background: ">
					<div class="row align-items-center">
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-bookmark "></i>
								<!-- Heading -->
								<h3 class="">Website Creation</h3>
								<!-- Description -->
								<p class="">Build your dream website effortlessly with our user-friendly website builder. Choose from a variety of customizable templates, drag-and-drop elements, and intuitive tools to create a stunning and professional-looking website that reflects your brand identity.</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-pulse "></i>
								<!-- Heading -->
								<h3 class="">Domain Registration</h3>
								<!-- Description -->
								<p class="">Find the perfect domain name for your website with our domain registration services. Choose from a wide range of domain extensions and secure your online identity with ease. Our seamless integration makes it simple to connect your domain to your website, ensuring a seamless user experience for your visitors.</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-bar-chart "></i>
								<!-- Heading -->
								<h3 class="">E-commerce Integration</h3>
								<!-- Description -->
								<p class="">Take your online business to new heights with our e-commerce integration solutions. Whether you're selling products, services, or digital downloads, our platform provides all the tools you need to set up an online store, manage inventory, process payments, and track orders effortlessly.</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-panel "></i>
								<!-- Heading -->
								<h3 class="">Support and Assistance</h3>
								<!-- Description -->
								<p class="">Count on our dedicated support team to assist you every step of the way. From technical troubleshooting to strategic advice, we're here to help you maximize the potential of your website and achieve your business objectives.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Services  ====-->


<!--=================================
=            Video Promo            =
==================================-->
{{-- <section class="video-promo section bg-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h2>Watch Our Promo Video</h2>
					<!-- Promotional Speech -->
					<p>Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et,
						porttitor at sem. Vivamus </p>
					<!-- Popup Video -->
					<a data-fancybox href="https://www.youtube.com/watch?v=jrkvirglgaQ">
						<i class="ti-control-play video"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!--====  End of Video Promo  ====-->

<!--================================
             Our Team
==================================-->
{{-- <section class="section testimonial" id="testimonial">
	<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="text-white">Meet Our <a href="/team">Team</a></h2>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 5rem;">
            <div class="col-lg-4">
                <div class="card" style="background: ##2e7eed">
                    <div class="image" style="margin: auto;">
                        <img class="fluid" src="{{ asset('front/images/team/featured-person-01.jpg') }}" style="width: 200px;
                        height: 200px;
                        border-radius: 50%;
                        margin-top: -100px">
                    </div>
                    <div class="text">
                        <h3 class="" style="text-align: center;
                        margin-top: 1rem;">Marta Smith</h3>
                        <p style="text-align: center;
                        margin-top: 1rem;">Frontend Developer</p>
                        <ul class="list-inline social-links" style="text-align: center; margin-top: 2rem; margin-bottom: 2rem;">
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="background: ##2e7eed">
                    <div class="image" style="margin: auto;">
                        <img class="fluid" src="{{ asset('front/images/team/featured-person-01.jpg') }}" style="width: 200px;
                        height: 200px;
                        border-radius: 50%;
                        margin-top: -100px">
                    </div>
                    <div class="text">
                        <h3 style="text-align: center;
                        margin-top: 1rem;" class="">Marta Smith</h3>
                        <p style="text-align: center;
                        margin-top: 1rem;">Frontend Developer</p>
                        <ul class="list-inline social-links" style="text-align: center; margin-top: 2rem; margin-bottom: 2rem;">
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="background: ##2e7eed">
                    <div class="image" style="margin: auto;">
                        <img class="fluid" src="{{ asset('front/images/team/featured-person-01.jpg') }}" style="width: 200px;
                        height: 200px;
                        border-radius: 50%;
                        margin-top: -100px">
                    </div>
                    <div class="text">
                        <h3 style="text-align: center;
                        margin-top: 1rem;" class="">Marta Smith</h3>
                        <p style="text-align: center;
                        margin-top: 1rem;">Frontend Developer</p>
                        <ul class="list-inline social-links" style="text-align: center; margin-top: 2rem; margin-bottom: 2rem;">
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section> --}}

<!--====  End of Our Team  ====-->

<!--=================================
=            Testimonial            =
==================================-->
{{-- <section class="section testimonial" id="testimonial">
	<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="">Testimonial</a></h2>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-lg-12">
				<!-- Testimonial Slider -->
				<div class="testimonial-slider owl-carousel owl-theme">
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow" style="background: #2e7eed">
							<!-- Speech -->
							<p class="text-white">
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="{{ asset('front/images/testimonial/feature-testimonial-thumb.jpg') }}" alt="image">
							</div>
							<!-- Name and Company -->
							<cite class="text-white">Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow" style="background: #2e7eed">
							<!-- Speech -->
							<p class="text-white">
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="{{ asset('front/images/testimonial/feature-testimonial-thumb.jpg') }}" alt="image">
							</div>
							<!-- Name and Company -->
							<cite class="text-white">Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow" style="background: #2e7eed">
							<!-- Speech -->
							<p class="text-white">
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="{{ asset('front/images/testimonial/feature-testimonial-thumb.jpg') }}" alt="image">
							</div>
							<!-- Name and Company -->
							<cite class="text-white">Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow" style="background: #2e7eed">
							<!-- Speech -->
							<p class="text-white">
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="{{ asset('front/images/testimonial/feature-testimonial-thumb.jpg') }}" alt="image">
							</div>
							<!-- Name and Company -->
							<cite class="text-white">Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!--====  End of Testimonial  ====-->

{{-- <section class="call-to-action-app section bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>It's time to change your mind</h2>
				<p>Download over 2 million humans .Get <a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a> free forever!
					<br>We say you won’t look back.</p>
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-apple"></i>
							Iphone
						</a>
					</li>
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-android"></i>
							Android
						</a>
					</li>
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-microsoft-alt"></i>
							Windows
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section> --}}
@endsection
