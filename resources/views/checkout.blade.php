@extends('layouts.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-3">
        <div class="container">
            <div class="page-title-content">
                <h2>Checkout </h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Checkout Area -->
    <section class="checkout-area ptb-100">
        <div class="container">
            @guest
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="user-actions">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Returning customer? <a href="{{ route('login') }}">Click here to login</a></span>
                        </div>
                    </div>
                </div>
            @endguest

            <form method="POST" action="{{ route('cart.order') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">Billing Details</h3>

                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ auth()->user()->firstname ?? old('firstname')}}">
                                        @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ auth()->user()->lastname ?? old('lastname')}}">
                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ auth()->user()->address ?? old('address') }}" required>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ auth()->user()->city ?? old('city') }}" required>
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ auth()->user()->postcode ?? old('postcode') }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email ?? old('email') }}" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ auth()->user()->phone ?? old('phone') }}" required>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="create-an-account" value="yes" name="new_user">
                                        <label class="form-check-label" for="create-an-account">Create an account?</label>
                                    </div>
                                </div>

{{--                                <div class="col-lg-12 col-md-12">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input type="checkbox" class="form-check-input" id="ship-different-address">--}}
{{--                                        <label class="form-check-label" for="ship-different-address">Ship to a different address?</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="order-details">
                            <h3 class="title">Your Order</h3>

                            <div class="order-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td class="product-name">
                                                <a href="#">{{ $item->name }}</a>
                                            </td>

                                            <td class="product-total">
                                                <span class="subtotal-amount">${{ $item->price * $item->quantity }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr><td class="product-name"></td><td class="product-total"></td><tr>
                                    <tr>
                                        <td class="order-subtotal">
                                            @php
                                                $subtotal = 0;
                                                foreach($items as $item) $subtotal += $item->price * $item->quantity;
                                            @endphp
                                            <span>Cart Subtotal</span>
                                        </td>

                                        <td class="order-subtotal-price">
                                            <span class="order-subtotal-amount">${{$subtotal}}</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="order-shipping">
                                            <span>Shipping</span>
                                        </td>

                                        <td class="shipping-price">
                                            <span>$5.00</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="total-price">
                                            <span>Order Total</span>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">${{$subtotal + 5.0}}</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="payment-box">
                                <div class="payment-method">
                                    <p>
                                        <input type="radio" id="direct-bank-transfer" value="Direct Bank Transfer" name="payment_mode" checked>
                                        <label for="direct-bank-transfer">Direct Bank Transfer</label>

                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                    </p>
                                    <p>
                                        <input type="radio" id="paypal" value="PayPal" name="payment_mode">
                                        <label for="paypal">PayPal</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="cash-on-delivery" value="Cash on Delivery" name="payment_mode">
                                        <label for="cash-on-delivery">Cash on Delivery</label>
                                    </p>
                                </div>

                                <input type="submit" class="default-btn" value="Place Order">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection
