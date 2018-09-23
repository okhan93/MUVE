@extends('pages.app')

@section('content')

    <!-- MAIN WRAPPER -->
    <div class="body-wrap">
        <div id="st-container" class="st-container">

            <nav class="st-menu st-effect-1" id="menu-1">
        <div class="st-profile">
            <div class="st-profile-user-wrapper">
                <div class="profile-user-image">
                    <img src="../../assets/images/prv/people/person-1.jpg" class="img-circle" />
                </div>

            </div>
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
        <nav class="navbar navbar-expand-lg  navbar-light bg-default ">
            <div class="container navbar-container">
                <!-- Brand/Logo -->
                            <a class="navbar-brand" href="../../index.html">
                    <img src="{{asset('images/logo/newTagAsset 1muve.png')}}" class="" alt="MUVE">
                                </a>

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
        <!--
        <ul class="navbar-nav">
            <li class="nav-item dropdown megamenu">
                <a class="nav-link" href="../../index.html">
                    Overview
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Pages
                </a>

                <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden" aria-labelledby="navbar_1_dropdown_1">
                    <div class="list-group rounded">
                        <a href="../../pages-home.html" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-content">
                                <div class="list-group-heading heading heading-6 mb-1">Home pages</div>
                                <p class="text-sm mb-0">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                        <a href="../../pages-inner.html" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-content">
                                <div class="list-group-heading heading heading-6 mb-1">Inner pages</div>
                                <p class="text-sm mb-0">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                        <a href="../../pages-profile.html" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-content">
                                <div class="list-group-heading heading heading-6 mb-1">Profile pages</div>
                                <p class="text-sm mb-0">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                        <a href="../../pages-blog.html" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-content">
                                <div class="list-group-heading heading heading-6 mb-1">Blog pages</div>
                                <p class="text-sm mb-0">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                        <a href="../../pages-shop.html" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-content">
                                <div class="list-group-heading heading heading-6 mb-1">Shop pages</div>
                                <p class="text-sm mb-0">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                        <a href="../../pages-real-estate.html" class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-content">
                                <div class="list-group-heading heading heading-6 mb-1">Real estate pages</div>
                                <p class="text-sm mb-0">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown megamenu">
                <a class="nav-link" href="../../demos.html">
                    Demos
                </a>
            </li>
            <li class="nav-item dropdown megamenu">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Components
                </a>

                <div class="dropdown-menu">
                    <div class="mega-dropdown-menu row row-no-padding">
                        <div class="mega-dropdown-col mega-dropdown-col-cover mega-dropdown-col-cover--left col-lg-5 d-none d-lg-block d-xl-block" style="background-image: url(../../assets/images/prv/other/img-14-1000x900.jpg); background-position: center center;">
                            <span class="mask mask-base-1--style-1 alpha-8"></span>
                            <div class="mega-dropdown-col-inner d-flex align-items-center no-padding">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="px-4">
                                                <h2 class="heading heading-2 strong-600 c-white">
                                                    Documentation and Shortcodes
                                                </h2>
                                                <p class="strong-300 c-white mt-4">

                                                </p>
                                                <div class="btn-container mt-5">
                                                    <a href="../../documentation/getting-started/introduction.html" target="_blank" class="btn btn-styled btn-white btn-outline btn-circle">Read the Docs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
-->
        <ul class="navbar-nav ml-lg-auto">

        </ul>
    </div>


    <div class="pl-4 d-none d-lg-inline-block">

    </div>
            </div>
        </nav>
    </div>

                        <section class="slice-xl slice--offset sct-color-3 has-bg-cover bg-size-cover flex flex-items-xs-middle" style="background-image: url(images/prv/real-estate/page-title-1.jpg); background-position: center top;">

                            <span class="mask mask-dark--style-2"></span>

                            <div class="flex-wrap-item">
                                <div class="container sct-inner">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2 class="heading heading-1 strong-400 c-white">
                                                    {{$propAdd}}
                                                </h2>

                                                <h3 class="heading heading-5 text-normal strong-300 c-white my-4">
                                                    ${{$propPrice}}
                                                </h3>

                                                <ul class="inline-links inline-links--style-2">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-heart"></i> 50
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-eye"></i> 750
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-comment"></i> 9
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Properties listing -->
                        <section class="slice sct-color-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="light-gallery">
                                            <!-- Gallery -->
                                            <div class="gallery-top">
                                                <a href="{{asset('images/prv/real-estate/img-1.jpg')}}" class="item" data-fancybox>
                                                    <img src="{{asset('images/prv/real-estate/img-1.jpg')}}">
                                                </a>
                                            </div>

                                            <div class="gallery-bottom">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="gallery-thumb">
                                                            <a class="item" href="{{asset('images/prv/real-estate/img-2.jpg')}}" data-fancybox="group">
                                                                <img src="{{asset('images/prv/real-estate/img-2.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="gallery-thumb">
                                                            <a class="item" href="{{asset('images/prv/real-estate/img-3.jpg')}}" data-fancybox="group">
                                                                <img src="{{asset('images/prv/real-estate/img-3.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="gallery-thumb">
                                                            <a class="item" href="{{asset('images/prv/real-estate/img-4.jpg')}}" data-fancybox="group">
                                                                <img src="{{asset('images/prv/real-estate/img-4.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="gallery-thumb">
                                                            <a class="item" href="{{asset('images/prv/real-estate/img-5.jpg')}}" data-fancybox="group">
                                                                <img src="{{asset('images/prv/real-estate/img-5.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="gallery-thumb">
                                                            <a class="item" href="{{asset('images/prv/real-estate/img-6.jpg')}}" data-fancybox="group">
                                                                <img src="{{asset('images/prv/real-estate/img-6.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <div class="gallery-thumb">
                                                            <a class="item" href="{{asset('images/prv/real-estate/img-7.jpg')}}" data-fancybox="group">
                                                                <img src="{{asset('images/prv/real-estate/img-7.jpg')}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <span class="space-md-md"></span>

                                        <!-- Description -->
                                        <div class="card">
                                            <div class="card-title b-xs-bottom">
                                                <h3 class="heading heading-sm text-uppercase">Property description</h3>
                                            </div>
                                            <div class="card-body">
                                                <p>
                                                    {{$propRemark}}
                                                </p>

                                            </div>
                                        </div>

                                        <span class="space-md-md"></span>

                                        <!-- Address/Location -->
                                        <div class="card">
                                            <div class="card-title b-xs-bottom">
                                                <h3 class="heading heading-sm text-uppercase">Location</h3>
                                                <a href="#" class="btn-aux">
                                                    <i class="ion-location"></i>
                                                    <span class="aux-text">See location on map</span>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <table class="table table-no-border table-striped table-responsive">
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>Address</strong></td>
                                                                    <td>{{$propAdd}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>City</strong></td>
                                                                    <td>Calgary</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Country</strong></td>
                                                                    <td>Canada</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <table class="table table-no-border table-striped table-responsive">
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>Province</strong></td>
                                                                    <td>Alberta</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Pincode</strong></td>
                                                                    <td>{{$propPin}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Community</strong></td>
                                                                    <td>{{$propComm}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <span class="space-md-md"></span>

                                        <!-- Property details -->
                                        <div class="card">
                                            <div class="card-title b-xs-bottom">
                                                <h3 class="heading heading-sm text-uppercase">Property details</h3>
                                                <span href="#" class="btn-aux">
                                                    Updated 1 week ago
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-no-border table-striped table-responsive">
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>Property Size:</strong> 2300 Sq Ft</td>
                                                                    <td><strong>MLS ID:</strong> {{$mlsNum}}</td>
                                                                    <td><strong>Price:</strong> ${{$propPrice}}</td>
                                                                </tr>
                                                                <tr>

                                                                    <td><strong>Bedrooms:</strong> {{$propBed}}</td>
                                                                    <td><strong>Bathrooms:</strong> {{$propBath}}</td>
                                                                    <td><strong>Year built:</strong> {{$propYr}}</td>
                                                                </tr>
                                                                <tr>



                                                                </tr>
                                                                <tr>


                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <span class="space-md-md"></span>

                                        <!-- Video -->

                                    </div>

                                    <div class="col-md-3">
                                        <div class="sidebar">
        <div class="sidebar-object">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn btn-block btn-base-1">
                        Call agent
                    </a>
                    <div class="text-xs-center">
                        <a href="#" class="link link--style-1 strong-500">
                            <small>Get support by calling the 24h helpline.</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-object">
            <div class="card">
                <div class="card-title b-xs-bottom">
                    <h3 class="heading heading-sm text-uppercase">Agent details</h3>
                </div>
                <div class="list-group-item">
                    <span class="strong-400">Name</span>
                    <span class="pull-right">Abc Xyz</span>
                </div>
                <div class="list-group-item">
                    <span class="strong-400">Phone</span>
                    <span class="pull-right">123 - 796 456</span>
                </div>

                <div class="card-body">
                    <a href="#" class="btn btn-block btn-base-4">
                        Send message
                    </a>
                    <a href="#" class="btn btn-block btn-base-4 btn-outline mt-1">
                        Favorite this property
                    </a>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="sidebar-object">
                <div class="card">
                    <div class="card-title b-xs-bottom">
                        <h3 class="heading heading-sm text-uppercase">Advanced search</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-default" data-toggle="validator" role="form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-lg has-feedback">
                                        <label>Location</label>
                                        <input class="form-control" type="text" placeholder="Community">
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-lg has-feedback">
                                        <label>Search radius</label>
                                        <select class="form-control selectpicker">
                                            <option>Any</option>
                                            <option>Within 1/4 km</option>
                                            <option>Within 1/2 km</option>
                                            <option>Within 1 km</option>
                                            <option>Within 3 km</option>
                                            <option>Within 5 km</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-lg has-feedback">
                                        <label>Type</label>
                                        <select class="form-control selectpicker">
                                            <option>All types</option>
                                            <option>Houses</option>
                                            <option>Flats/Apartments</option>
                                            <option>Bungalows</option>
                                            <option>Lands</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-lg has-feedback">
                                        <label>I want</label>
                                        <select class="form-control selectpicker">
                                            <option>All</option>
                                            <option>To rent</option>
                                            <option>To buy</option>
                                        </select>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback">
                                        <label>Price range</label>
                                        <div class="range-slider-wrapper mt-1">
                                            <!-- Range slider container -->
                                            <div id="filterPrinceRange"></div>

                                            <!-- Range slider values -->
                                            <div class="row mt-1">
                                                <div class="col-6">
                                                    <small>&#36; </small>
                                                    <span class="range-slider-value value-low" id="filterPrinceValueLow"></span>
                                                </div>

                                                <div class="col-6 text-right">
                                                    <small>&#36; </small>
                                                    <span class="range-slider-value value-hight" id="filterPrinceValueHigh"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-base-1 mt-2">Search properties</button>
                        </form>
                    </div>
                </div>
            </div>




            <div class="sidebar-object">
                <div class="card">
                    <div class="card-title b-xs-bottom">
                        <h3 class="heading heading-sm text-uppercase">Latest viewed</h3>
                    </div>
                    <!--
                    <div class="card-body">
                        <ul class="list-recent">
                            <li class="clearfix">
                                <a href="#" class="post-thumb">
                                    <img src="../../assets/images/prv/real-estate/img-1-square.jpg" alt="">
                                </a>
                                <span class="post-author">
                                    <a href="#">3015 Grand Avenue, CocoWalk</a>
                                </span>
                                <span class="post-entry">
                                    Sed molestie augue sit consequat.
                                </span>
                            </li>
                            <li class="clearfix">
                                <a href="#" class="post-thumb">
                                    <img src="../../assets/images/prv/real-estate/img-2-square.jpg" alt="">
                                </a>
                                <span class="post-author">
                                    <a href="#">9975 Emerald Escape, New York</a>
                                </span>
                                <span class="post-entry">
                                    Sed molestie augue sit consequat.
                                </span>
                            </li>
                            <li class="clearfix">
                                <a href="#" class="post-thumb">
                                    <img src="../../assets/images/prv/real-estate/img-3-square.jpg" alt="">
                                </a>
                                <span class="post-author">
                                    <a href="#">2030 Misty Wagon, Canyon</a>
                                </span>
                                <span class="post-entry">
                                    Sed molestie augue sit consequat.
                                </span>
                            </li>
                        </ul>
                    </div>
                -->
                </div>
            </div>
        </div>
    </div>
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
                            <img src="{{asset('images/logo/newTagAsset 1muve.png')}}">
                            <span class="clearfix"></span>
                            <span class="heading heading-sm c-gray-light strong-400"></span>
                            <p class="mt-3">
                                Dummy Footer Text
                            </p>

                            <div class="copyright mt-4">
                                <p>
                                    Copyright &copy; 2018                                <a href="https://nothing here to see" target="_blank">
                                        <strong>Strathon</strong>
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
                                <li><a href="#" title="Help center">Help center</a></li>
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
