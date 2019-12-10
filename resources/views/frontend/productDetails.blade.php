@extends('frontend.master')

@section('content')
<form method="post" action="{{ route('addToCart',[$product->id]) }}">
@csrf
  <div class="ps-page--product">
    <div class="ps-container">
      <div class="ps-page__container">
        <div class="ps-page__left">
          <div class="ps-product--detail ps-product--fullwidth">
            <div class="ps-product__header">
              <div class="ps-product__thumbnail" data-vertical="true">
                <figure>
                  <div class="ps-wrapper">
                    <div class="ps-product__gallery" data-arrow="true">
                      <div class="item">
                        <a href="img/products/detail/fullwidth/1.jpg">
                          <img src="{{ url('/uploads/image', $product->image) }}" alt="">
                        </a>
                      </div>
                      <div class="item">
                        <a href="img/products/detail/fullwidth/2.jpg">
                          <img src="{{ url('/uploads/image', $product->image) }}" alt="">
                        </a>
                      </div>
                      <div class="item">
                        <a href="img/products/detail/fullwidth/3.jpg">
                          <img src="{{ url('/uploads/image', $product->image) }}" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </figure>
                <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                  <div class="item">
                    <img src="{{ url('/uploads/image', $product->image) }}" alt="">
                  </div>
                  <div class="item">
                    <img src="{{ url('/uploads/image', $product->image) }}" alt="">
                  </div>
                  <div class="item">
                    <img src="{{ url('/uploads/image', $product->image) }}" alt="">
                  </div>
                </div>
              </div>
              <div class="ps-product__info">
                <h1>{{ $product->name}} | {{ $product->category->name}}</h1>
                <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">  
                <div class="ps-product__meta">
                  <p>Brand: {{ $product->brand}}</p>
                </div>
                <h4 class="ps-product__price">Price: {{ $product->price}}</h4>
                <input type="hidden" id="product_price" name="product_price" value="{{$product->price}}">
                <div class="ps-product__desc">
                  <p>Supplier:<strong> {{ $product->supplier->user_name}}</strong></p>
                </div>
                <div class="ps-product__desc">
                  <p>Quantity:<strong> {{ $product->quantity}}</strong></p>
                </div>
                <div class="ps-product__variations">
                  <ul class="ps-list--dot">
                    <li>{{ $product->description}}</li>
                  </ul>
                </div>
                <div class="ps-product__shopping">
                  <figure name="quantity" >
                    <figcaption>Quantity</figcaption>
                    <div class="form-group--number">
                      <input class="form-control" type="text" name="quantity" placeholder="In KG unit">
                    </div>
                  </figure>
                  <figure>
                    <figcaption>Area</figcaption>
                    <select class="form-group--number form-control" id="area_id" name="area_id" >
                      @foreach($areas as $area)
                      <option value="{{$area->id}}">
                        {{$area->name}}
                      </option>
                      @endforeach
                    </select>
                  </figure>
                </div>
                <div>
                  <button type="submit" class="ps-btn">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
