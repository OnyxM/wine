@extends('layouts.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-3">
        <div class="container">
            <div class="page-title-content">
                <h2>Cart</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Cart Area -->
    <section class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form>
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets/img/cart/1.png" alt="item">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="#">Analytical Balances 2</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">$14.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="fa fa-minus"></i>
                                                </span>
                                                <input type="text" min="1" value="1">
                                                <span class="plus-btn">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$14.00</span>

                                            <a href="#" class="remove">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-buttons">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="continue-shopping-box">
                                        <a href="{{ route('shop') }}" class="default-btn">Continue Shopping</a>
                                    </div>
                                </div>

{{--                                <div class="col-lg-5 col-sm-5 col-md-5 text-right">--}}
{{--                                    <a href="#" class=" default-btn">Update Cart</a>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <div class="cart-totals">
                            <h3>Cart Totals</h3>

                            <ul>
                                <li>Subtotal <span>$14.00</span></li>
                                <li>Shipping <span>$30.00</span></li>
                                <li>Total <span><b>$44.00</b></span></li>
                            </ul>
                            <a href="#" class="default-btn">Proceed to Checkout</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Area -->
@endsection
