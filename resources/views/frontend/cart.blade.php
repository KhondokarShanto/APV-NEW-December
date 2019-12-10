@extends('frontend.master')

@section('content')
  <div class="ps-page--simple">
    <div class="ps-section--shopping ps-shopping-cart">
      <div class="container">
        <div class="ps-section__header">
          <h1>Shopping Cart</h1>
        </div>
        <div class="ps-section__content">
          <div class="table-responsive">
            <table class="table ps-table--shopping-cart">
              <thead>
                <tr>
                  <th>PRODUCT NAME</th>
                  <th>PRICE</th>
                  <th>QUANTITY</th>
                  <th>TOTAL</th>
                </tr>
              </thead>
              <tbody>
                @foreach($carts as $cart)
                <tr>
                  <td>
                    <div class="ps-product--cart">
                      <div class="ps-product__thumbnail">
                        <a href="">
                          <img src="{{ url('/uploads/image', $cart->product->image) }}" alt="">
                        </a>
                      </div>
                      <div class="ps-product__content">
                        <a href="">{{ $cart->product->name}}</a>
                        <p>Sold By:<strong> {{ $cart->product->brand}}</strong></p>
                      </div>
                    </div>
                  </td>
                  <td>{{ $cart->product->price}}</td>
                  <td>{{ $cart->quantity}}</td>
                  <td>{{ $cart->price}}</td>
                </tr>
                @endforeach
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td >Total Price: {{ $totalPrice}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="ps-section__cart-actions">
            <a class="ps-btn" href="{{ url('/home')}}"><i class="icon-arrow-left"></i> Back to Shop</a>
            @if(!empty($cart))
              @if($cart->status=='pending')
              <a class="ps-btn" href="{{ url('/store/order')}}"><i class=""></i> Confirm Order</a>
              @elseif($cart->status=='confirm')
              <a class="ps-btn" href=""><i class=""></i> Order Confirmed</a>
              @endif
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection