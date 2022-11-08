@extends('layouts.app')

@section('content')
    <!-- Start Main Slider Area -->
    <section class="slider-area">
        <div class="main-slider owl-carousel owl-theme">
            <div class="main-slider-item slider-item-bg-1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <span>Delightful</span>
                                <h1>Stay Cool With Wine</h1>
                                <p>Wine improves the age, the older it gets, the better you like it.</p>
                                <a class="default-btn" href="#">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-slider-item slider-item-bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <span>Delightful</span>
                                <h1>Stay Cool With Wine</h1>
                                <p>Wine improves the age, the older it gets, the better you like it.</p>
                                <a class="default-btn" href="#">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-slider-item slider-item-bg-3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <span>Delightful</span>
                                <h1>Stay Cool With Wine</h1>
                                <p>Wine improves the age, the older it gets, the better you like it.</p>
                                <a class="default-btn" href="#">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="support-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-support">
                            <i class="flaticon-customer-service"></i>
                            <div class="support-text">
                                <h3>Online Support 24/7</h3>
                                <p>Lorem ipsum dolor sit, consectr adipiscing elit, sed do  tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-support active">
                            <i class="flaticon-guarantee"></i>
                            <div class="support-text">
                                <h3>Money Back Guarantee</h3>
                                <p>Lorem ipsum dolor sit, consectr adipiscing elit, sed do  tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-support">
                            <i class="flaticon-time-left"></i>
                            <div class="support-text">
                                <h3>Free Shipping & Return</h3>
                                <p>Lorem ipsum dolor sit, consectr adipiscing elit, sed do  tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Slider Area -->

    <!-- Start Since Area -->
    <section class="since-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="since-img">
                        <img src="{{ asset('assets/img/home-two/since-img.png') }}" alt="Welcome">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="since-text">
                        <span>Since 1903</span>
                        <h2>Wine Bussiness - One Name. One Legend.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <ul class="since-list">
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                More Than 20 Years of Experience
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                High Quality Products
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                Delivery support
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                Quick Response
                            </li>
                        </ul>
                        <a class="default-btn" href="about.html">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Since Area -->

    <!-- Start Our Offer Area -->
    <section class="our-offer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="section-title">
                    <span>Our Offer</span>
                    <h2>What We Make For You</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 p-0">
                    <div class="offer-img">
                        <img src="{{ asset('assets/img/home-two/our-offer/1.jpg') }}" alt="">
                        <div class="offer-caption">
                            <span>On-time Offer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/2.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>Seasonal Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/3.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>An Exclusive Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/4.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>On-time Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/5.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>On-time Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/6.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>On-time Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-4 p-0">
                            <div class="offer-img">
                                <img src="{{ asset('assets/img/home-two/our-offer/7.jpg') }}" alt="">
                                <div class="offer-caption">
                                    <span>Special offer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Offer Area -->

    <!-- Start Discover Area -->
    <section class="discover-area ptb-100-70">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <span>Discover</span>
                    <h2>The Process of wine Making</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="single-discover single-discovers">
                                <i class="flaticon-grapes"></i>
                                <h3>Harvesting</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reiciendis.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="single-discover single-discovers">
                                <i class="flaticon-crushing"></i>
                                <h3>Crushing & Pressing</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reiciendis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="discover-img">
                        <img src="{{ asset('assets/img/home-one/discover.png') }}" alt="Discover">
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="discover-wrap">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="single-discover single-discovers">
                                    <i class="flaticon-barrel"></i>
                                    <h3>Farmentation</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reiciendis.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="single-discover single-discovers">
                                    <i class="flaticon-time-left"></i>
                                    <h3>Ageing & Bottling</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reiciendis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Discover Area -->

    <!-- Start Our Product Area -->
    <section class="our-product-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="section-title">
                    <span>Our Product</span>
                    <h2>Featured Wines Collections</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="product-wrap product-wraps owl-carousel owl-theme">
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{ asset('assets/img/home-one/product/1.png') }}" alt="Product">
                    </div>
                    <div class="product-details">
                        <a href="#">Shop Now</a>
                        <h3>Burgundy</h3>
                        <ul>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <span>$229.50</span>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{ asset('assets/img/home-one/product/2.png') }}" alt="Product">
                    </div>
                    <div class="product-details">
                        <a href="#">Shop Now</a>
                        <h3>Red Wine</h3>
                        <ul>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <span>$299.70</span>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{ asset('assets/img/home-one/product/3.png') }}" alt="Product">
                    </div>
                    <div class="product-details">
                        <a href="#">Shop Now</a>
                        <h3>Goose Berry</h3>
                        <ul>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <span>$299.70</span>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{ asset('assets/img/home-one/product/4.png') }}" alt="Product">
                    </div>
                    <div class="product-details">
                        <a href="#">Shop Now</a>
                        <h3>La Katina</h3>
                        <ul>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <span>$259.70</span>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{ asset('assets/img/home-one/product/1.png') }}" alt="Product">
                    </div>
                    <div class="product-details">
                        <a href="#">Shop Now</a>
                        <h3>Burgundy</h3>
                        <ul>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <span>$229.50</span>
                    </div>
                </div>
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{ asset('assets/img/home-one/product/4.png') }}" alt="Product">
                    </div>
                    <div class="product-details">
                        <a href="#">Shop Now</a>
                        <h3>La Katina</h3>
                        <ul>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <span>$259.50</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Product Area -->

    <!-- Start The Events Area -->
    <section class="the-events-area ptb-100-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-events">
                                <img src="{{ asset('assets/img/home-two/events/1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-events events-change">
                                <img src="{{ asset('assets/img/home-two/events/2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-events events-changes">
                                <img src="{{ asset('assets/img/home-two/events/3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-events">
                                <img src="{{ asset('assets/img/home-two/events/4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <span>The Events</span>
                        <h2>Weedding & Private Events</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor incididunt ut labore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risu viver maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor incididunt ut labore magna aliqua.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor incididunt ut labore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risu viver maecenas accumsan.</p>
                        <a class="default-btn" href="event-details.html">Event Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End The Events Area -->

    <!-- Start Our Products Area -->
    <section class="our-products-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <span>Our Products</span>
                    <h2>Deal of The Week</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="products-img">
                        <img src="{{ asset('assets/img/home-two/products.png') }}" alt="Products">
                    </div>
                    <div id="timer">
                        <div class="timer">
                            <img src="{{ asset('assets/img/shape/service-shape-2.png') }}" alt="">
                            <div class="timer-shape">
                                <div class="time-cap" id="days"></div>
                            </div>
                        </div>
                        <div class="timer">
                            <img src="{{ asset('assets/img/shape/service-shape-2.png') }}" alt="">
                            <div class="timer-shape">
                                <div class="time-cap" id="hours"></div>
                            </div>
                        </div>
                        <div class="timer">
                            <img src="{{ asset('assets/img/shape/service-shape-2.png') }}" alt="">
                            <div class="timer-shape">
                                <div class="time-cap" id="minutes"></div>
                            </div>
                        </div>
                        <div class="timer">
                            <img src="{{ asset('assets/img/shape/service-shape-2.png') }}" alt="">
                            <div class="timer-shape">
                                <div class="time-cap" id="seconds"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="products-details">
                        <h3>Buy More Save More</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur sit amet, consectetur adipiscing elit</p>
                        <span>$49.99</span>
                        <a href="shop-details.html">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Products Area -->

    <!-- Start Testimonial Area -->
    <section class="testimonials-area ptb-100-70">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <span>Testimonial</span>
                    <h2>What Client Say</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-wrapper owl-carousel owl-theme">
                    <div class="singel-testimonial">
                        <div class="testimonial-img">
                            <img src="{{ asset('assets/img/home-one/testimonial/1.jpg') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial-text">
                            <h3>John Addison</h3>
                            <span>Designer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            <ul>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="queat">
                                <i class="flaticon-right-quotation-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="singel-testimonial">
                        <div class="testimonial-img">
                            <img src="{{ asset('assets/img/home-one/testimonial/2.jpg') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial-text">
                            <h3>Jon Meair</h3>
                            <span>Businessman</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            <ul>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="queat">
                                <i class="flaticon-right-quotation-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="singel-testimonial">
                        <div class="testimonial-img">
                            <img src="{{ asset('assets/img/home-one/testimonial/1.jpg') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial-text">
                            <h3>John Addison</h3>
                            <span>Designer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            <ul>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="queat">
                                <i class="flaticon-right-quotation-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="singel-testimonial">
                        <div class="testimonial-img">
                            <img src="{{ asset('assets/img/home-one/testimonial/2.jpg') }}" alt="Testimonial">
                        </div>
                        <div class="testimonial-text">
                            <h3>Jon Meair</h3>
                            <span>Businessman</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            <ul>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="queat">
                                <i class="flaticon-right-quotation-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->

    <!-- Start Blog Area -->
    <section class="blog-area">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <span>Vineyard</span>
                    <h2>Blog Wines</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-blog">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-xl-6 pr-0">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('assets/img/home-one/blog/1.jpg') }}" alt="Blog">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 pl-0">
                                <div class="blog-text">
										<span>
											<i class="fa fa-calendar"></i>
											07 April 2019
										</span>
                                    <h3>
                                        <a href="blog-details.html">The Recipe from a Winemaker’s Restaurent</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="read-more" href="blog-details.html">
                                        Continue
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-blog">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-xl-6 pr-0">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('assets/img/home-one/blog/2.jpg') }}" alt="Blog">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 pl-0">
                                <div class="blog-text">
										<span>
											<i class="fa fa-calendar"></i>
											07 May 2019
										</span>
                                    <h3>
                                        <a href="blog-details.html">The Different taste of Wines Collection</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="read-more" href="blog-details.html">
                                        Continue
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-blog">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-xl-6 pr-0">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('assets/img/home-one/blog/3.jpg') }}" alt="Blog">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 pl-0">
                                <div class="blog-text">
										<span>
											<i class="fa fa-calendar"></i>
											07 jun 2019
										</span>
                                    <h3>
                                        <a href="blog-details.html">Bruce Neyar of  Neyars Vineyard Collection</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="read-more" href="blog-details.html">
                                        Continue
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-blog">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-xl-6 pr-0">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('assets/img/home-one/blog/4.jpg') }}" alt="Blog">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 pl-0">
                                <div class="blog-text">
                                <span>
                                    <i class="fa fa-calendar"></i>07 July 2019
                                </span>
                                    <h3>
                                        <a href="blog-details.html">William Shatner’s New Wine Enterprise</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="read-more" href="blog-details.html">
                                        Continue
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Start Subscribe area -->
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Subscribe To Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="widget subscribe">
                        <form class="newsletter-form search-form" data-toggle="validator">
                            <input type="email" class="input-newsletter search-field" placeholder="Enter email address" name="EMAIL" required autocomplete="off">

                            <button type="submit" class="search-submit default-btn">Sbuscribe</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start End Subscribe area -->

    <!-- Start Partner Logo area -->
    <div class="partner-area ptb-100">
        <div class="container">
            <div class="partner-weap owl-carousel owl-theme">
                <div class="single-logo">
                    <img src="{{ asset('assets/img/home-one/partner-logo/1.png') }}" alt="Logo">
                </div>
                <div class="single-logo">
                    <img src="{{ asset('assets/img/home-one/partner-logo/2.png') }}" alt="Logo">
                </div>
                <div class="single-logo">
                    <img src="{{ asset('assets/img/home-one/partner-logo/4.png') }}" alt="Logo">
                </div>
                <div class="single-logo">
                    <img src="{{ asset('assets/img/home-one/partner-logo/5.png') }}" alt="Logo">
                </div>
                <div class="single-logo">
                    <img src="{{ asset('assets/img/home-one/partner-logo/6.png') }}" alt="Logo">
                </div>
            </div>
        </div>
    </div>
    <!-- Start End Partner Logo area -->
@endsection
