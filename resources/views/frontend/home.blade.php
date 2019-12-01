@extends('frontend.master')

@section('content')
	<div id="homepage-1">
		<div class="ps-home-banner ps-home-banner--1">
			<div class="ps-container">
				<div class="ps-section__left">
					<div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
						<div class="ps-banner"><a href="#"><img src="img/slider/home-1/slide-1.jpg" alt=""></a></div>
						<div class="ps-banner"><a href="#"><img src="img/slider/home-1/slide-2.jpg" alt=""></a></div>
						<div class="ps-banner"><a href="#"><img src="img/slider/home-1/slide-3.jpg" alt=""></a></div>
					</div>
				</div>
			</div>
		</div>
      <div class="ps-product-list ps-clothings">
        <div class="ps-container">
          <div class="ps-section__header">
            <h3>Consumer Electronics</h3>
            <ul class="ps-section__links">
              <li><a href="shop-grid.html">New Arrivals</a></li>
              <li><a href="shop-grid.html">View All</a></li>
            </ul>
          </div>
          <div class="ps-section__content">
            <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/1.jpg" alt=""/></a>
                  <div class="ps-product__badge">-16%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="{{ route('check')}}"><img src="img/products/electronic/2.jpg" alt=""/></a>
                  <div class="ps-product__badge hot">hot</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/3.jpg" alt=""/></a>
                  <div class="ps-product__badge">-25%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="ps-product-list ps-garden-kitchen">
        <div class="ps-container">
          <div class="ps-section__header">
            <h3>Home, Garden & Kitchen</h3>
            <ul class="ps-section__links">
              <li><a href="shop-grid.html">New Arrivals</a></li>
              <li><a href="shop-grid.html">Best seller</a></li>
              <li><a href="shop-grid.html">View All</a></li>
            </ul>
          </div>
          <div class="ps-section__content">
            <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/1.jpg" alt=""/></a>
                  <div class="ps-product__badge">-16%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/2.jpg" alt=""/></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$101.99</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                    <p class="ps-product__price">$101.99</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/7.jpg" alt=""/></a>
                  <div class="ps-product__badge">-46%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ps-product-list ps-new-arrivals">
        <div class="ps-container">
          <div class="ps-section__header">
            <h3>Hot New Arrivals</h3>
            <ul class="ps-section__links">
              <li><a href="shop-grid.html">Technologies</a></li>
              <li><a href="shop-grid.html">View All</a></li>
            </ul>
          </div>
          <div class="ps-section__content">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                    <p class="ps-product__price">$990.50</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/6.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$41.27 <del>$62.39 </del></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>





      <div class="ps-newsletter">
        <div class="ps-container">
          <form class="ps-form--newsletter" action="http://nouthemes.net/html/martfury/do_action" method="post">
            <div class="row">
              <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="ps-form__left">
                  <h3>Newsletter</h3>
                  <p>Subcribe to get information about products and coupons</p>
                </div>
              </div>
              <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="ps-form__right">
                  <div class="form-group--nest">
                    <input class="form-control" type="email" placeholder="Email address">
                    <button class="ps-btn">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
@endsection
