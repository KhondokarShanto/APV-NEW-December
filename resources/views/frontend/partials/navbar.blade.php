<header class="header header--1" data-sticky="true">
  <div class="header__top">
    <div class="ps-container">
      <div class="header__left">
        <div class="menu--product-categories">
          <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
          <div class="menu__content">
            <ul class="menu--dropdown">
              <li><a href="#"><i class="icon-star"></i> Hot Promotions</a>
              </li>
              <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                <div class="mega-menu">
                  <div class="mega-menu__column">
                    <h4>Electronic<span class="sub-toggle"></span></h4>
                    <ul class="mega-menu__list">
                      <li><a href="#">Home Audio &amp; Theathers</a>
                      </li>
                    </ul>
                  </div>
                  <div class="mega-menu__column">
                    <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                    <ul class="mega-menu__list">
                      <li><a href="#">Digital Cables</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
              </li>
              <li><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
              </li>
              <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                <div class="mega-menu">
                  <div class="mega-menu__column">
                    <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                    <ul class="mega-menu__list">
                      <li><a href="#">Computer &amp; Tablets</a>
                      </li>
                      <li><a href="#">Laptop</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
              </li>
            </ul>
          </div>
        </div><a class="ps-logo" href="{{ url('/home') }}"><img src="img/logo_light.png" alt=""></a>
      </div>
      <div class="header__center">
        <form class="ps-form--quick-search" action="{{ url('main')}}" method="get">
          <div class="form-group--icon"><i class="icon-chevron-down"></i>
            <select class="form-control">
              <option value="0" selected="selected">All</option>
              <option class="level-0" value="babies-moms">Babies & Moms</option>
            </select>
          </div>
          <input class="form-control" type="text" placeholder="I'm shopping for...">
          <button>Search</button>
        </form>
      </div>
      <div class="header__right">
        <div class="header__actions">
          @auth()
          <div class="ps-cart--mini">
            <a class="header__extra" href="#">
              <i class="icon-bag2"></i>
              <span><i>{{ $productQty ?? '' }}</i></span>
            </a>
            <div class="ps-cart__content">
              @foreach($carts as $cart)
              <div class="ps-cart__items">
                <div class="ps-product--cart-mobile">
                  <div class="ps-product__thumbnail">
                    <a href="#">
                      <img src="{{ url('/uploads/image', $cart->product->image) }}" alt="">
                    </a>
                  </div>
                  <div class="ps-product__content">
                    <a class="ps-product__remove" href="#">
                      <i class="icon-cross"></i>
                    </a>
                    <a href="">
                      <span class="badge">
                        {{ $cart->product->name}}
                      </span> 
                    </a>
                    <p><strong>Sold by:</strong>{{ $cart->product->brand}}</p><small>{{ $cart->product->quantity}} x {{ $cart->product->price}}</small>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="ps-cart__footer">
                <h3>Total:<strong>{{ $totalPrice}}</strong></h3>
                <figure>
                  <a class="ps-btn" href="">Checkout</a>
                  <a class="ps-btn" href="{{ route('show.cart')}}">View Cart</a></figure>
              </div>
            </div>
          </div>
          @endauth
          @guest()
          <div class="ps-cart--mini">
            <a class="header__extra" href="#">
              <i class="icon-bag2"></i>
              <span><i></i></span>
            </a>
            <div class="ps-cart__content">
              <div class="ps-cart__items">
                <div class="ps-product--cart-mobile">
                  <div class="ps-product__thumbnail">
                    <a href="#">
                      <img  alt="Image">
                    </a>
                  </div>
                  <div class="ps-product__content">
                    <a class="ps-product__remove" href="#">
                      <i class="icon-cross">Product</i>
                    </a>
                    <a href="">
                      <span class="badge">
                      </span> 
                    </a>
                    <p><strong>Sold by:</strong></p><small></small>
                  </div>
                </div>
              </div>
              <div class="ps-cart__footer">
                <h3>Total:<strong></strong></h3>
                <figure>
                  <a class="ps-btn" href="">Checkout</a>
                  <a class="ps-btn" href="">View Cart</a></figure>
              </div>
            </div>
          </div>
          @endguest
          <div class="ps-block--user-header">
            <div class="ps-block__left"><i class="icon-user"></i></div>
            <div class="ps-block__right">
              @auth()
              <a href="{{ route ('panel')}}">Dashboard</a>
              <a href="{{ route ('logout')}}">{{ auth()->user()->user_name }}|Log Out</a>
              @endauth
              @guest()
              <a href="{{ url('login')}}">Login</a>
              <a href="{{ url('registration')}}">Register</a>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <nav class="navigation">
    <div class="ps-container">
      <div class="navigation__left">
        <div class="menu--product-categories">
          <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
          <div class="menu__content">
            <ul class="menu--dropdown">
              <li><a href="#"><i class="icon-star"></i> Hot Promotions</a>
              </li>
              <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                <div class="mega-menu">
                  <div class="mega-menu__column">
                    <h4>Electronic<span class="sub-toggle"></span></h4>
                    <ul class="mega-menu__list">
                      <li><a href="#">Home Audio &amp; Theathers</a>
                      </li>
                      <li><a href="#">TV &amp; Videos</a>
                      </li>
                    </ul>
                  </div>
                  <div class="mega-menu__column">
                    <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                    <ul class="mega-menu__list">
                      <li><a href="#">Digital Cables</a>
                      </li>                        </ul>
                  </div>
                </div>
              </li>
              <li><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
              </li>
              <li><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
              </li>
              <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                <div class="mega-menu">
                  <div class="mega-menu__column">
                    <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                    <ul class="mega-menu__list">
                      <li><a href="#">Computer &amp; Tablets</a>
                      </li>
                      <li><a href="#">Laptop</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
              </li>
              <li><a href="#"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="navigation__right">
        <ul class="menu">
          <li class="current-menu-item"><a href="index.html">Home</a>
          </li>
          <li class="current-menu-item"><a href="shop-default.html">Shop</a>
          </li>
          <li class="current-menu-item"><a href="#">Pages</a>
          </li>
          <li class="current-menu-item"><a href="#">Blogs</a>
          </li>
        </ul>
        <ul class="navigation__extra">
          <li><a href="#">Sell on Martfury</a></li>
        </ul>
      </div>
    </div>
  </nav>

</header>
