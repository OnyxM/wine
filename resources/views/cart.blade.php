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
                    <form method="POST" action="{{ route('cart.update') }}">
                        @csrf
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
                                    @foreach($items as $item)
                                        <tr>
                                            <input type="hidden" name="id[]" value="{{ $item->id }}">
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="{{ $item->attributes['image'] }}" alt="item">
                                                </a>
                                            </td>

                                            <td class="product-name">
                                                <a href="#">{{ $item->name }}</a>
                                            </td>

                                            <td class="product-price">
                                                <span class="unit-amount">${{ $item->price }}</span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="fa fa-minus"></i>
                                                </span>
                                                    <input type="text" min="1" name="qte[]" value="{{ $item->quantity }}">
                                                    <span class="plus-btn">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">${{ $item->price * $item->quantity }}</span>

                                                <a href="#" class="remove">
                                                    <i class="fa fa-trash-alt"></i>
                                                </a>
                                            </td>

                                            <td class="product-subtotal">
                                                <button class="btn btn-outline-danger removeItemFromCart btn-sm" data-id="{{ $item->id }}">Remove</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-buttons">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-sm-8 col-md-8">
                                    <div class="continue-shopping-box">
                                        <a href="{{ route('shop') }}" class="default-btn">Continue Shopping</a>
                                    </div>
                                </div>

                                @if(count($items) > 0)
                                <div class="col-lg-2 col-sm-2 col-md-2 text-right">
                                    <a href="{{ route('cart.clear') }}" class="btn btn-sm btn-outline-danger">Clear Cart</a>
                                </div>
                                <div class="col-lg-2 col-sm-2 col-md-2 text-right">
                                    <input type="submit" class="default-btn" value="Update Cart">
                                </div>
                                @endif
                            </div>
                        </div>

                        @if(count($items) > 0)
                        <div class="cart-totals">
                            <h3>Cart Totals</h3>

                            <ul>
                                <li>Subtotal
                                    @php
                                        $subtotal = 0;
                                        foreach($items as $item) $subtotal += $item->price * $item->quantity;
                                    @endphp
                                    <span>${{$subtotal}}</span>
                                </li>
                                <li>Shipping <span>$30.00</span></li>
                                <li>Total <span><b>${{ $subtotal + 30.0 }}</b></span></li>
                            </ul>
                            <a href="{{ route('checkout') }}" class="default-btn">Proceed to Checkout</a>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Area -->
@endsection

@section("js")
    <script>
        $(document).on("click", ".removeItemFromCart", function(e){
            e.preventDefault();

            let id = $(this).data('id');

            $.ajax({
                url: "{{route('cart.remove')}}",
                type: 'post',
                data: "id=" + id,
                dataType: 'json',
                success: function (response) {
                    location.reload();
                }
            })
        });
    </script>
@endsection
