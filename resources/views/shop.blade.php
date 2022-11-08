@extends('layouts.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-3">
        <div class="container">
            <div class="page-title-content">
                <h2>Shop</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Our Product Area -->
    <section class="our-products-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="section-title">
                    <span>Our Product</span>
                    <h2>Featured Wines Collections</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="single-product single-products">
                            <div class="product-img">
                                <img src="{{ $product->photo }}" alt="Product">
                            </div>
                            <div class="product-details">
                                <a href="{{ route('shop_details', ['id' => $product->id, 'slug' => $product->slug]) }}">Shop Now</a>
                                <h3>{{ $product->name }}</h3>
                                <span>${{ $product->price }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Product Area -->
@endsection
