@extends('pages.app')

@section('content')

<!-- MAIN WRAPPER -->
<div class="body-wrap">
    <div id="st-container" class="st-container">

        <nav class="st-menu st-effect-1" id="menu-1">
    <div class="st-profile">
        <div class="st-profile-user-wrapper">
            <div class="profile-user-image">
                <img src={{asset('images/prv/people/person-1.jpg')}} class="img-circle" />
            </div>
            <div class="profile-user-info">
                <span class="profile-user-name">Bertram Ozzie</span>
                <span class="profile-user-email">username@example.com</span>
            </div>
        </div>
    </div>

    <div class="st-menu-list mt-2">
        <ul>
            <li>
                <a href="#">
                    <i class="ion-ios-bookmarks-outline"></i> Theme documentation
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-ios-cart-outline"></i> Purchase Tribus
                </a>
            </li>
        </ul>
    </div>

    <h3 class="st-menu-title">Account</h3>
    <div class="st-menu-list">
        <ul>
            <li>
                <a href="#">
                    <i class="ion-ios-person-outline"></i> User profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-ios-location-outline"></i> My addresses
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-card"></i> My cards
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-ios-unlocked-outline"></i> Password update
                </a>
            </li>
        </ul>
    </div>

    <h3 class="st-menu-title">Support center</h3>
    <div class="st-menu-list">
        <ul>
            <li>
                <a href="#">
                    <i class="ion-ios-information-outline"></i> About Tribus
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ion-ios-email-outline"></i> Contact &amp; support
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-camera"></i> Getting started
                </a>
            </li>
        </ul>
    </div>
</nav>

        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <!-- Header -->
                    <div class="header">
    <!-- Top Bar -->

    <!-- Global Search -->
    <section id="sctGlobalSearch" class="global-search global-search-overlay">
    <div class="container">
        <div class="global-search-backdrop mask-dark--style-2"></div>

        <!-- Search form -->
        <form class="form-horizontal form-global-search z-depth-2-top" role="form">
            <div class="px-4">
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="search-input" placeholder="Type and hit enter ...">
                    </div>
                </div>
            </div>
            <a href="#" class="close-search" data-toggle="global-search" title="Close search bar"></a>
        </form>
    </div>
</section>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-bold navbar-transparent navbar-inverse sticky-top">
         <div class="container container-lg navbar-container">
            <!-- Brand/Logo -->
                        <a class="navbar-brand" href="index.html">
                <img src={{asset('images/logo/logo-1-a.png')}} class="d-none d-lg-inline-block" alt="Muve">
                <img src={{asset('images/logo/logo-1-a.png')}} class="d-lg-none" alt="Muve">            </a>

            <div class="d-inline-block">
                <!-- Navbar toggler  -->
                <button class="navbar-toggler hamburger hamburger-js hamburger--spring" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>

            <div class="collapse navbar-collapse align-items-center justify-content-end" id="navbar_main">
    <!-- Navbar search - For small resolutions -->
    <div class="navbar-search-widget b-xs-bottom py-3 d-lg-none d-none">
        <form class="" role="form">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-base-3" type="button">Go!</button>
                </span>
            </div>
        </form>
    </div>

    <!-- Navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown megamenu">
            <a class="nav-link" href="index.html">
                Home
            </a>
        </li>
        <li class="nav-item dropdown">
            <a href="about.html" class="nav-link">
               About
            </a>
		</li>
    <li class="nav-item dropdown">
        <a href="/maplisting" class="nav-link">
           Map Listings
        </a>
      </li>

        <li class="nav-item dropdown megamenu">
            <a class="nav-link" href="#">
                Why Muve</a>
        </li>
        <li class="nav-item dropdown megamenu">
            <a class="nav-link" href="contact.html">
                Contact
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item">
            <a href="#" class="nav-link">
               Seller
            </a>
        </li>
    </ul>
</div>

<div class="pl-4 d-none d-lg-inline-block">
    <a href="search.html" class="btn btn-styled btn-sm btn-base-5 text-uppercase btn-circle" target="_blank">
       Search Listing!
        </a>
</div>
        </div>
    </nav>
</div>

                    <section class="swiper-js-container background-image-holder">
                        <div class="swiper-container" data-swiper-autoplay="true" data-swiper-effect="slide" data-swiper-items="1" data-swiper-space-between="0">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide" data-swiper-autoplay="8000">
                                    <div class="holder-item holder-item-light has-bg-cover bg-size-cover" style="padding-bottom: 350px; background-image: url({{asset('images/backgrounds/slider/img-52.jpg')}}); background-position: bottom center;">
                                        <span class="mask mask-base-1--style-1"></span>
                                        <div class="container container-lg slice--offset-top d-flex align-items-center">
                                            <div class="col px-0">
                                                <div class="row align-middle">
                                                    <div class="col-lg-12">
                                                        <form class="form-material">
                                                        <h2 class="heading heading-xl strong-600 text-normal line-height-1_2 animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                                                            I'm looking to

                                                            <select class="heading heading-xl">
                                                            <option value="buy">Buy</option>
  															<option value="sell">Sell</option>
                                                            </select>

                                                            a 2bd

                                                            <select class="heading heading-xl">
                                                            <option value="condo">Condo</option>
  															<option value="apartment">apartment</option>
  															<option value="apartment">house</option>
  															<option value="apartment">duplex</option>
                                                            </select>
                                                            </h2>
                                                        <br> <a href="#" class="btn btn-styled btn-lg btn-white btn-circle btn-outline mt-5 animated" data-animation-in="fadeInUpBig" data-animation-delay="1000" data-scroll-to="#sct_what_we_do">
                                                            Search
                                                        </a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="shape-container" data-shape-fill="sct-color-1" data-shape-position="bottom" style="height: 350px;">
                                <svg class="shape-item" fill="" viewBox="0 0 1000 300" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M 0 246.131 C 0 246.131 31.631 250.035 47.487 249.429 C 65.149 248.755 82.784 245.945 99.944 241.732 C 184.214 221.045 222.601 171.885 309.221 166.413 C 369.892 162.581 514.918 201.709 573.164 201.709 C 714.375 201.709 772.023 48.574 910.547 21.276 C 939.811 15.509 1000 24.025 1000 24.025 L 1000 300.559 L -0.002 300.559 L 0 246.131 Z" />

                                </svg>
                            </div>
                        </div>
                    </section>


					<section class="slice-sm sct-color-1" id="about-muve">
                        <div class="container container-lg">
                            <div class="row cols-xs-space cols-sm-space cols-md-space">
                                <div class="col-lg-7">
                                    <small class="heading heading-sm strong-300 text-uppercase ls-2 c-gray-light">ABOUT MUVE</small>
                                    <h2 class="heading heading-1 c-base-1 strong-600 mt-3">
                                        Muve is a new step in real estate you and try to tell others of them, seldom are you believed.
                                    </h2>
                                </div>
                            </div>

                            <span class="space-xs-xl"></span>

                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="lead">
                                        She exposed painted fifteen are noisier mistake led waiting. Surprise not wandered speedily h
                                    </p>
                                    <span class="clearfix"></span>
                                    <a href="#" class="btn btn-styled btn-base-1 btn-circle mt-5">Contact Us</a>
                                </div>

                                <div class="col-lg-6 ml-lg-auto">
                                    <h3>Our Fee Calculator</h3>
									<h2 class="heading heading-lg">$<span id="input-slider-value" class="range-slider-value heading heading-1" data-range-value-low="500000"></span></h2>

									<div class="input-slider-container">
 								   <div id="myRange" class="input-slider" data-range-value-min="300000" data-range-value-max="800000"><span></div>

    						<!-- Input slider values -->
 									   <div class="row mt-4">
   							     			<div class="col-6">
    						       				 <span id="input-slider-value" class="range-slider-value" data-range-value-low="500000"></span>
     						   				</div>
   										</div>
									</div>

									<p style="text-align: center">Move slider to select your home value</p>

									<div class="row">

									<div class="col-12 col-lg-6 animate-on-scroll fadeInDown">

									<p style="text-align: left">Average realtor commission of</p>
									<h3 style="text-align: left; color:purple;"><span id="commision-slider-value" style="color:purple; class="range-slider-value heading heading-lg" data-range-value-low="3"></span>%</h4>
										<div class="input-slider-container">
											<div id="commision-slider" class="input-slider" data-range-value-min="1" data-range-value-max="5"></div>

											<!-- Input slider values -->
											<div class="row mt-4">
												<div class="col-6">
													<span id="commision-slider-value" class="range-slider-value" data-range-value-low="3"></span>
												</div>
											</div>
										</div>

  									</div>
  									<div class="col-12 col-lg-6 animate-on-scroll fadeInDown">
  									<p style="text-align: center;">You'll Save</p>
  									<h1 class="heading heading-xl " style="text-align:center;">$ 8,350</h2>

                                </div>
									</div>
                                </div>
                            </div>

                            <span class="space-xs-xl"></span>

                            <div class="row align-items-md-center cols-xs-space cols-md-space cols-lg-space">
                                <div class="col-lg-3 col-md-6">
                                    <div class="icon-block icon-block--style-1-v5 text-center">
                                        <div class="block-icon block-icon-lg mb-0">
                                            <i class="icon-basic-heart"></i>
                                        </div>
                                        <div class="block-content">
                                            <h3 class="heading heading-lg c-base-1">97%</h3>
                                            <h3 class="heading heading-5 strong-500">Happy clients</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="icon-block icon-block--style-1-v5 text-center">
                                        <div class="block-icon block-icon-lg mb-0">
                                            <i class="icon-basic-clockwise"></i>
                                        </div>
                                        <div class="block-content">
                                            <h3 class="heading heading-lg c-base-1">365x7</h3>
                                            <h3 class="heading heading-5 strong-500">Round the clock support</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="icon-block icon-block--style-1-v5 text-center">
                                        <div class="block-icon block-icon-lg mb-0">
                                            <i class="icon-basic-webpage-multiple"></i>
                                        </div>
                                        <div class="block-content">
                                            <h3 class="heading heading-lg c-base-1">20+</h3>
                                            <h3 class="heading heading-5 strong-500">Agents</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="icon-block icon-block--style-1-v5 text-center">
                                        <div class="block-icon block-icon-lg mb-0">
                                            <i class="icon-software-layers2"></i>
                                        </div>
                                        <div class="block-content">
                                            <h3 class="heading heading-lg c-base-1">10,000+</h3>
                                            <h3 class="heading heading-5 strong-500">Listings</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="slice-sm sct-color-1" id="featured">
                    <div class="section-title section-title--style-1 text-center mb-2 animate-on-scroll fadeInDown">
                                <h3 class="section-title-inner text-normal strong-600">
                                    <span>Featured Properties</span>
                                </h3>
                                <span class="section-title-delimiter clearfix d-none"></span>
                            </div>
                        <div class="container-fluid">

                            <div class="swiper-container-coverflow" data-swiper-initial-slide="3" data-swiper-items="5" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-sm-space-between="0" data-swiper-xs-items="1" data-swiper-xs-space-between="0">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide animate-on-scroll fadeIn" data-wow-delay="0.9s">
                                        <div class="block block--style-5 mb-0">
                                            <div>
     										<div class="block block--style-3">
            <div class="block-image relative">
                <div class="view view-first">
                    <a href="#">
                        <img src={{asset('images/prv/real-estate/img-1.jpg')}}" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="aux-info-wrapper border-bottom">
                <ul class="aux-info">
                    <li class="heading strong-400 text-center">
                        <i class="icon-real-estate-017"></i> 150 sqft</span>
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-022"></i> 5
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-158"></i> Baths
                    </li>
                </ul>
            </div>

            <div class="block-body">
                <h3 class="heading heading-sm">
                    <a href="#">
                        3015 Grand Avenue, CocoWalk
                    </a>
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisg elitm.
                </p>
            </div>
            <div class="block-footer border-top py-3">
                <div class="row align-items-center">
                    <div class="col-7">
                        <span class="block-price">$250.800</span>
                        <span class="block-price-text"></span>
                    </div>
                    <div class="col-5 text-right">
                         <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>2 members</strong>">
                            <i class="icon ion-person"></i>
                            <i class="icon ion-person"></i>
                        </span>
                    </div>
                </div>
            </div>
       									 </div>
    									</div>

                                        </div>
                                    </div>

                                    <div class="swiper-slide animate-on-scroll fadeIn" data-wow-delay="0.6s">
                                        <div class="block block--style-5 mb-0">
                                            <div>
     										<div class="block block--style-3">
            <div class="block-image relative">
                <div class="view view-first">
                    <a href="#">
                        <img src={{asset('images/prv/real-estate/img-1.jpg')}} class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="aux-info-wrapper border-bottom">
                <ul class="aux-info">
                    <li class="heading strong-400 text-center">
                        <i class="icon-real-estate-017"></i> 150 sqft</span>
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-022"></i> 5
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-158"></i> Baths
                    </li>
                </ul>
            </div>

            <div class="block-body">
                <h3 class="heading heading-sm">
                    <a href="#">
                        3015 Grand Avenue, CocoWalk
                    </a>
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisg elitm.
                </p>
            </div>
            <div class="block-footer border-top py-3">
                <div class="row align-items-center">
                    <div class="col-7">
                        <span class="block-price">$250.800</span>
                        <span class="block-price-text"></span>
                    </div>
                    <div class="col-5 text-right">
                         <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>2 members</strong>">
                            <i class="icon ion-person"></i>
                            <i class="icon ion-person"></i>
                        </span>
                    </div>
                </div>
            </div>
       									 </div>
    									</div>

                                        </div>
                                    </div>

                                    <div class="swiper-slide animate-on-scroll fadeIn" data-wow-delay="0.3s">
                                        <div class="block block--style-5 mb-0">
                                            <div>
     										<div class="block block--style-3">
            <div class="block-image relative">
                <div class="view view-first">
                    <a href="#">
                        <img src={{asset('images/prv/real-estate/img-1.jpg')}} class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="aux-info-wrapper border-bottom">
                <ul class="aux-info">
                    <li class="heading strong-400 text-center">
                        <i class="icon-real-estate-017"></i> 150 sqft</span>
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-022"></i> 5
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-158"></i> Baths
                    </li>
                </ul>
            </div>

            <div class="block-body">
                <h3 class="heading heading-sm">
                    <a href="#">
                        3015 Grand Avenue, CocoWalk
                    </a>
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisg elitm.
                </p>
            </div>
            <div class="block-footer border-top py-3">
                <div class="row align-items-center">
                    <div class="col-7">
                        <span class="block-price">$250.800</span>
                        <span class="block-price-text"></span>
                    </div>
                    <div class="col-5 text-right">
                         <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>2 members</strong>">
                            <i class="icon ion-person"></i>
                            <i class="icon ion-person"></i>
                        </span>
                    </div>
                </div>
            </div>
       									 </div>
    									</div>

                                        </div>
                                    </div>

                     				<div class="swiper-slide animate-on-scroll fadeIn" data-wow-delay="0.3s">
                                        <div class="block block--style-5 mb-0">
                                            <div>
     										<div class="block block--style-3">
            <div class="block-image relative">
                <div class="view view-first">
                    <a href="#">
                        <img src={{asset('images/prv/real-estate/img-1.jpg')}} class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="aux-info-wrapper border-bottom">
                <ul class="aux-info">
                    <li class="heading strong-400 text-center">
                        <i class="icon-real-estate-017"></i> 150 sqft</span>
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-022"></i> 5
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-158"></i> Baths
                    </li>
                </ul>
            </div>

            <div class="block-body">
                <h3 class="heading heading-sm">
                    <a href="#">
                        3015 Grand Avenue, CocoWalk
                    </a>
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisg elitm.
                </p>
            </div>
            <div class="block-footer border-top py-3">
                <div class="row align-items-center">
                    <div class="col-7">
                        <span class="block-price">$250.800</span>
                        <span class="block-price-text"></span>
                    </div>
                    <div class="col-5 text-right">
                         <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>2 members</strong>">
                            <i class="icon ion-person"></i>
                            <i class="icon ion-person"></i>
                        </span>
                    </div>
                </div>
            </div>
       									 </div>
    									</div>

                                        </div>
                                    </div>

                                    <div class="swiper-slide animate-on-scroll fadeIn" data-wow-delay="0.3s">
                                        <div class="block block--style-5 mb-0">
                                            <div>
     										<div class="block block--style-3">
            <div class="block-image relative">
                <div class="view view-first">
                    <a href="#">
                        <img src={{asset('images/prv/real-estate/img-1.jpg')}} class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="aux-info-wrapper border-bottom">
                <ul class="aux-info">
                    <li class="heading strong-400 text-center">
                        <i class="icon-real-estate-017"></i> 150 sqft</span>
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-022"></i> 5
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-158"></i> Baths
                    </li>
                </ul>
            </div>

            <div class="block-body">
                <h3 class="heading heading-sm">
                    <a href="#">
                        3015 Grand Avenue, CocoWalk
                    </a>
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisg elitm.
                </p>
            </div>
            <div class="block-footer border-top py-3">
                <div class="row align-items-center">
                    <div class="col-7">
                        <span class="block-price">$250.800</span>
                        <span class="block-price-text"></span>
                    </div>
                    <div class="col-5 text-right">
                         <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>2 members</strong>">
                            <i class="icon ion-person"></i>
                            <i class="icon ion-person"></i>
                        </span>
                    </div>
                </div>
            </div>
       									 </div>
    									</div>

                                        </div>
                                    </div>

                                    <div class="swiper-slide animate-on-scroll fadeIn" data-wow-delay="0.6s">
                                        <div class="block block--style-5 mb-0">
                                            <div>
     										<div class="block block--style-3">
            <div class="block-image relative">
                <div class="view view-first">
                    <a href="#">
                        <img src={{asset('images/prv/real-estate/img-1.jpg')}} class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="aux-info-wrapper border-bottom">
                <ul class="aux-info">
                    <li class="heading strong-400 text-center">
                        <i class="icon-real-estate-017"></i> 150 sqft</span>
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-022"></i> 5
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-158"></i> Baths
                    </li>
                </ul>
            </div>

            <div class="block-body">
                <h3 class="heading heading-sm">
                    <a href="#">
                        3015 Grand Avenue, CocoWalk
                    </a>
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisg elitm.
                </p>
            </div>
            <div class="block-footer border-top py-3">
                <div class="row align-items-center">
                    <div class="col-7">
                        <span class="block-price">$250.800</span>
                        <span class="block-price-text"></span>
                    </div>
                    <div class="col-5 text-right">
                         <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>2 members</strong>">
                            <i class="icon ion-person"></i>
                            <i class="icon ion-person"></i>
                        </span>
                    </div>
                </div>
            </div>
       									 </div>
    									</div>

                                        </div>
                                    </div>

                                    <div class="swiper-slide animate-on-scroll fadeIn" data-wow-delay="0.9s">
                                        <div class="block block--style-5 mb-0">
                                            <div>
     										<div class="block block--style-3">
            <div class="block-image relative">
                <div class="view view-first">
                    <a href="#">
                        <img src={{asset('images/prv/real-estate/img-1.jpg')}} class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="aux-info-wrapper border-bottom">
                <ul class="aux-info">
                    <li class="heading strong-400 text-center">
                        <i class="icon-real-estate-017"></i> 150 sqft</span>
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-022"></i> 5
                    </li>
                    <li class="heading strong-400 text-center">
                        <i class="icon-hotel-restaurant-158"></i> Baths
                    </li>
                </ul>
            </div>

            <div class="block-body">
                <h3 class="heading heading-sm">
                    <a href="#">
                        3015 Grand Avenue, CocoWalk
                    </a>
                </h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisg elitm.
                </p>
            </div>
            <div class="block-footer border-top py-3">
                <div class="row align-items-center">
                    <div class="col-7">
                        <span class="block-price">$250.800</span>
                        <span class="block-price-text"></span>
                    </div>
                    <div class="col-5 text-right">
                         <span class="capacity" data-toggle="tooltip" data-placement="left" data-original-title="Capacity:<br><strong>2 members</strong>">
                            <i class="icon ion-person"></i>
                            <i class="icon ion-person"></i>
                        </span>
                    </div>
                </div>
            </div>
       									 </div>
    									</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="slice-sm sct-color-1">
                        <div class="container container-lg">
                            <div class="row cols-xs-space cols-sm-space cols-md-space align-items-center">
                                <div class="col-lg-6 order-lg-2 animate-on-scroll fadeIn">
                                    <div class="block block-image-holder">
                                        <div class="block-image">
                                            <img src={{asset('images/prv/other/img-15-1000x900.jpg')}} class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 order-lg-1 animate-on-scroll fadeIn" data-wow-delay="0.3s">
                                    <div class="feature feature--boxed-border floating-content float--width-200 sct-color-1 border-0 no-bg px-0">
                                        <h2 class="heading heading-5 c-gray-light text-uppercase strong-600">
                                            About our business
                                        </h2>
                                        <h2 class="heading heading-1 strong-600 mt-4">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.
                                        </h2>

                                        <a href="#" class="btn btn-styled btn-base-1 btn-circle mt-5">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

					<section class="slice sct-color-1" id="sct_what_we_do">
                        <div class="container container-lg">
                            <div class="row cols-xs-space cols-sm-space cols-md-space">
                                <div class="col-12 col-lg-4 animate-on-scroll fadeInDown">
                                    <div class="icon-block icon-block--style-1-v5 px-4">
                                        <div class="block-icon">
                                            <img src={{asset('images/icons/purple/png/positive-dynamic.png')}}>
                                        </div>
                                        <div class="block-content">
                                            <h3 class="heading heading-4 strong-600 text-capitalize">Growing up sales</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 animate-on-scroll fadeInDown" data-wow-delay="0.3s">
                                    <div class="icon-block icon-block--style-1-v5 px-4">
                                        <div class="block-icon">
                                            <img src={{asset('images/icons/purple/png/light-on.png')}}>
                                        </div>
                                        <div class="block-content">
                                            <h3 class="heading heading-4 strong-600 text-capitalize">Business strategy</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 animate-on-scroll fadeInDown" data-wow-delay="0.6s">
                                    <div class="icon-block icon-block--style-1-v5 px-4">
                                        <div class="block-icon">
                                            <img src={{asset('images/icons/purple/png/money-bag.png')}}>
                                        </div>
                                        <div class="block-content">
                                            <h3 class="heading heading-4 strong-600 text-capitalize">Increase profits</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <section class="slice-sm pt-5 sct-color-1">
                        <div class="container container-lg">
                            <div class="section-title section-title--style-1 text-center mb-2 animate-on-scroll fadeInDown">
                                <h3 class="section-title-inner text-normal strong-600">
                                    <span>Reasons to work with us</span>
                                </h3>
                                <span class="section-title-delimiter clearfix d-none"></span>
                            </div>

                            <span class="clearfix"></span>

                            <div class="fluid-paragraph fluid-paragraph-sm c-gray-light strong-300 text-center animate-on-scroll fadeInDown" data-wow-delay="0.3s">
                                Start building fast, beautiful and modern looking websites in no time using our theme.
                            </div>

                            <span class="space-xs-xl"></span>

                            <div class="row-wrapper">
                                <div class="row cols-xs-space cols-sm-space cols-md-space">
                                    <div class="col-lg-6 col-sm-12 col-12">
                                        <div class="feature feature--boxed-border feature--bg-1 z-depth-2-top animate-on-scroll fadeInLeft">
                                            <div class="icon-block icon-block--style-1-v2">
                                                <div class="block-icon text-xs-left">
                                                    <i class="icon-mouse"></i>
                                                </div>
                                                <div class="block-content">
                                                    <h3 class="heading heading-4 strong-600">Customizable within a few clicks</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque congue augue rutrum neque iaculis porta.
                                                    </p>
                                                    <a href="#" class="link link-sm mt-3">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12 col-12">
                                        <div class="feature feature--boxed-border feature--bg-1 z-depth-2-top animate-on-scroll fadeInRight">
                                            <div class="icon-block icon-block--style-1-v2">
                                                <div class="block-icon text-xs-left">
                                                    <i class="icon-screen-tablet"></i>
                                                </div>
                                                <div class="block-content">
                                                    <h3 class="heading heading-4 strong-600">Fully responsive on any device</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque congue augue rutrum neque iaculis porta.
                                                    </p>
                                                    <a href="#" class="link link-sm mt-3">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row cols-xs-space cols-sm-space cols-md-space">
                                    <div class="col-lg-6 col-sm-12 col-12">
                                        <div class="feature feature--boxed-border feature--bg-1 z-depth-2-top animate-on-scroll fadeInLeft">
                                            <div class="icon-block icon-block--style-1-v2">
                                                <div class="block-icon text-xs-left">
                                                    <i class="icon-cloud-download"></i>
                                                </div>
                                                <div class="block-content">
                                                    <h3 class="heading heading-4 strong-600">New layouts and features every month</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque congue augue rutrum neque iaculis porta.
                                                    </p>
                                                    <a href="#" class="link link-sm mt-3">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-12 col-12">
                                        <div class="feature feature--boxed-border feature--bg-1 z-depth-2-top animate-on-scroll fadeInRight">
                                            <div class="icon-block icon-block--style-1-v2">
                                                <div class="block-icon text-xs-left">
                                                    <i class="icon-like"></i>
                                                </div>
                                                <div class="block-content">
                                                    <h3 class="heading heading-4 strong-600">Built around your suggestions</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque congue augue rutrum neque iaculis porta.
                                                    </p>
                                                    <a href="#" class="link link-sm mt-3">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                   <!-- <section class="slice-sm slice-video d-flex align-items-center" data-vide-bg="assets/media/video/broadwaycrew.mp4" data-vide-options="loop: true, muted: false, position: 0% 0%">
                        <span class="mask mask-dark--style-1 alpha-7"></span>
                        <div class="container container-lg">
                            <div class="col">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 text-center">
                                        <h2 class="heading heading-responsive heading-6 c-gray-lighter text-uppercase strong-600">
                                            Ready to grow faster?
                                        </h2>
                                        <h3 class="heading heading-inverse heading-xl strong-600 mt-3 text-capitalize">Create your own experience</h3>
                                        <a href="https://www.youtube.com/watch?v=zodT9bCdIiI" class="play-video play-video-inline play-video--2 mt-4" data-fancybox="">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <section class="slice-sm sct-color-1 border-top">
                        <div class="container container-lg">
                            <div class="section-title section-title--style-1 text-center">
                                <h3 class="section-title-inner text-normal strong-600">
                                    <span>In the news</span>
                                </h3>
                            </div>

                            <div class="row cols-md-space cols-sm-space cols-xs-space">
                                <div class="col-lg-4">
                                    <div class="block block-image-holder image-animate-wrapper">
                                        <div class="block-image image-animate--hover">
                                            <img src="assets/images/prv/travel/img-wide-1.jpg" class="img-fluid img-center">
                                        </div>

                                        <div class="pt-4">
                                            <span class="heading heading-xs text-uppercase strong-300">Oct 15, 2018</span>
                                            <a href="#" class="heading heading-4 d-block strong-600 mt-1">Beware the mountain</a>
                                            <p class="mt-3">
                                                When we strive to become better than we are, everything around us becomes better, too.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="block block-image-holder image-animate-wrapper">
                                        <div class="block-image image-animate--hover">
                                            <a href="#">
                                                <img src="assets/images/prv/travel/img-wide-2.jpg">
                                            </a>
                                        </div>

                                        <div class="pt-4">
                                            <span class="heading heading-xs text-uppercase strong-300">Oct 15, 2018</span>
                                            <a href="#" class="heading heading-4 d-block strong-600 mt-1">Listen to the nature</a>
                                            <p class="mt-3">
                                                When we strive to become better than we are, everything around us becomes better, too.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="block block-image-holder image-animate-wrapper">
                                        <div class="block-image image-animate--hover">
                                            <a href="#">
                                                <img src="assets/images/prv/travel/img-wide-3.jpg">
                                            </a>
                                        </div>

                                        <div class="pt-4">
                                            <span class="heading heading-xs text-uppercase strong-300">Oct 15, 2018</span>
                                            <a href="#" class="heading heading-4 d-block strong-600 mt-1">Rules not to follow</a>
                                            <p class="mt-3">
                                                When we strive to become better than we are, everything around us becomes better, too.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <span class="space-xs-xl"></span>

                            <div class="text-center">
                                <a href="#" class="link link-sm link--style-2 text-upeprcase text-uppercase strong-600">
                                    All posts
                                    <i class="ion-ios-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </section> -->

                    <section class="slice-sm bg-base-1" style="padding-top: 350px; padding-bottom: 200px;">
                        <div class="shape-container" data-shape-fill="sct-color-1" data-shape-style="opaque_waves_1" data-shape-position="top" style="height: 350px;">
                            <svg class="shape-item" fill="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">
                            <path d="M 1000 299 l 2 -279 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -232 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path> <path d="M 1000 286 l 2 -252 c -157 -43 -302 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -145.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 10.61 v 22.39 z"></path> <path d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path>
                             </svg>
                        </div>

                        <div class="container container-lg">
                            <div class="row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <h2 class="heading heading-inverse heading-1 strong-600 mt-3">
                                        Let us know when its time to Muve
                                    </h2>
                                    <a href="https://goo.gl/9BbH7R" class="btn btn-styled btn-lg btn-white btn-outline btn-circle mt-5">Contact Us!</a>
                                </div>
                            </div>
                        </div>
                    </section>



                    <!-- FOOTER -->
                     <footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-5">
                    <div class="col">
                        <img src={{asset('images/logo/logo-1-c.png')}}>
                        <span class="clearfix"></span>
                        <span class="heading heading-sm c-gray-light strong-400">One Company. Infinite Possibilities.</span>
                        <p class="mt-3">
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>

                        <div class="copyright mt-4">
                            <p>
                                Copyright &copy; 2018                                <a href="#" target="_blank">
                                    <strong>Muve</strong>
                                </a> -
                                All rights reserved
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="col">
                       <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                           Support
                       </h4>

                       <ul class="footer-links">
                            <li><a href="#" title="Discussions">Discussions</a></li>
                            <li><a href="#" title="Contact support">Contact</a></li>
                            <li><a href="#" title="Blog">Blog</a></li>
                            <li><a href="#" title="Jobs">FAQ</a></li>
                        </ul>
                     </div>
                </div>

                <div class="col-lg-2">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            Company
                        </h4>

                        <ul class="footer-links">
                             <li>
                                 <a href="#" title="Home">
                                     Home
                                 </a>
                             </li>
                             <li>
                                 <a href="#" title="About us">
                                     About us
                                 </a>
                             </li>
                             <li>
                                 <a href="#" title="Services">
                                     Services
                                 </a>
                             </li>
                             <li>
                                 <a href="#" title="Blog">
                                     Blog
                                 </a>
                             </li>
                             <li>
                                 <a href="#" title="Contact">
                                     Contact
                                 </a>
                             </li>
                         </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            Get in touch
                        </h4>

                        <ul class="social-media social-media--style-1-v4">
                            <li>
                                <a href="#" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram" target="_blank" data-toggle="tooltip" data-original-title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Github">
                                    <i class="fa fa-github"></i>
                                </a>
                            </li>
                        </ul>
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-3">
                            Muve Calgary
                        </h4>
                        <p>
                            #10 805 5th Ave SW
                            <br>
                            Calgary AB, T2P0N6
                        </p>
                        <p class="lead mt-4 mb-4">
                            E: <a href="#">help@timetomuve.com</a>
                            <br>
                            T: 403.454.3429
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

                </div>
            </div>
        </div><!-- END: st-pusher -->
    </div><!-- END: st-container -->
</div><!-- END: body-wrap -->

@endsection
