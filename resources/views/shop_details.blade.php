@extends('layouts.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-3">
        <div class="container">
            <div class="page-title-content">
                <h2>Shop Details</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Shop Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Product Details Area -->
    <section class="product-details-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image">
                        <img src="{{ $product->photo }}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3>{{ $product->name }}</h3>

                        <div class="price">
                            <span class="new-price">${{ $product->price }}</span>
                        </div>

{{--                        <div class="product-review">--}}
{{--                            <div class="rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star-half-alt"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="rating-count">3 reviews</a>--}}
{{--                        </div>--}}

                        <p>{!! $product->description !!}</p>

                        <div class="product-add-to-cart">
                            <div class="input-counter">
                                <span class="minus-btn">
                                    <i class="fa fa-minus"></i>
                                </span>
                                <input type="text" min="1" value="1">
                                <span class="plus-btn">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>

                            <button type="submit" class="default-btn">
                                <i class="fa fa-cart-plus"></i>Add to Cart
                            </button>
                        </div>

                        <div class="buy-checkbox-btn">
                            <div class="item">
                                <input class="inp-cbx" id="cbx" type="checkbox">
                                <label class="cbx" for="cbx">
										<span>
											<svg width="12px" height="10px" viewbox="0 0 12 10">
												<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
											</svg>
										</span>
                                    <span>I agree with the terms and conditions</span>
                                </label>
                            </div>

                            <div class="item">
                                <a href="#" class="default-btn">Buy it now!</a>
                            </div>
                        </div>

                        <div class="custom-payment-options">
                            <span>Guaranteed safe checkout:</span>

                            <div class="payment-methods">
                                <a href="#">
                                    <img src="{{ asset('assets/img/product-details/payment/1.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/product-details/payment/2.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/product-details/payment/3.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/product-details/payment/4.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/product-details/payment/5.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/product-details/payment/6.svg') }}" alt="image">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/product-details/payment/7.svg') }}" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="tab products-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li><a href="#">
                                        <div class="dot"></div> Description
                                    </a></li>

                                    <li><a href="#">
                                        <div class="dot"></div> Additional information
                                    </a></li>

                                    <li><a href="#">
                                        <div class="dot"></div> Reviews
                                    </a></li>
                                </ul>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <p>Design inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum.  Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nulla libero. Vivamus pharetra posuere sapien.</p>
                                        </div>
                                    </div>

                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <ul class="additional-information">
                                                <li><span>Brand:</span> {{ $product->brand }}</li>
                                                <li><span>Color:</span> {{ $product->color }}</li>
                                                <li><span>Size:</span> {{ $product->size }}</li>
                                                <li><span>Weight:</span> {{ $product->weight }}</li>
                                                <li><span>Dimensions:</span> {{ $product->dimensions }}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <div class="product-review-form">
                                                <h3>Customer Reviews</h3>

                                                <div class="review-title">
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>Based on 3 reviews</p>

                                                    <a href="#" class="btn default-btn">Write a Review</a>
                                                </div>

                                                <div class="review-comments">
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                    </div>

                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                    </div>

                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                    </div>
                                                </div>

                                                <div class="review-form">
                                                    <h3>Write a Review</h3>

                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Review Title</label>
                                                                    <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Body of Review (1500)</label>
                                                                    <textarea name="review-body" id="review-body" cols="30" rows="3" placeholder="Write your comments here" class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <button type="submit" class="btn default-btn">Submit Review</button>
                                                            </div>
                                                        </div>
                                                    </form>
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
        </div>
    </section>
    <!-- End Product Details Area -->

    <!-- Start Our Product Area -->
    <section class="our-products-area ptb-100-70">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <span>Our Product</span>
                    <h2>Related Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-product single-products">
                        <div class="product-img">
                            <img src="assets/img/shop/1.png" alt="Product">
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
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-product single-products">
                        <div class="product-img">
                            <img src="assets/img/shop/2.png" alt="Product">
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
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 offset-sm-3 offset-lg-0">
                    <div class="single-product single-products">
                        <div class="product-img">
                            <img src="assets/img/shop/3.png" alt="Product">
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
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Product Area -->
@endsection
