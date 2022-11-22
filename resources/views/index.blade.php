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
                        <span>Since 1944</span>
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
                    <span>Our Products</span>
                    <h2>Featured Wines Collections</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="product-wrap product-wraps owl-carousel owl-theme">
                @foreach($products as $product)
                    <div class="single-product">
                        <div class="product-img">
                            <img src="{{ $product->photo }}" alt="Product">
                        </div>
                        <div class="product-details">
                            <a href="#">Shop Now</a>
                            <h3>{{$product->name}}</h3>
                            <span>${{$product->price}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Product Area -->
@endsection
