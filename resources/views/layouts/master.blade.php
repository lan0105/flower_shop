<!doctype html>
<html class="no-js" lang="zxx">
<head>
    @include('layouts.header'))
</head>
<body>
<!-- header start -->
    @include('layouts.navbar'))
    @yield('slider')
<div class="product-area pt-40 pb-70">
    <div class="container">
        <div class="product-top-bar section-border mb-35">
            <div class="section-title-wrap">
                <h3 class="section-title section-bg-white">Featured Products</h3>
            </div>
            <div class="product-tab-list nav section-bg-white">
                <a class="active" data-toggle="tab" href="#tab1">
                    <h4>All </h4>
                </a>
                <a data-toggle="tab" href="#tab2">
                    <h4>Winter </h4>
                </a>
                <a data-toggle="tab" href="#tab3">
                    <h4> Various  </h4>
                </a>
                <a data-toggle="tab" href="#tab4">
                    <h4>Greens </h4>
                </a>
            </div>
        </div>
        <div class="tab-content jump">
            <div id="tab1" class="tab-pane active">
                <div class="featured-product-active owl-carousel product-nav">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-1.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Dutchman's Breeches </a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-2.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Flowers Bouquet Pink	</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-3.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Evergreen Candytuft </a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-4.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Pearly Everlasting</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-2.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Yellow Loosestrife</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab-pane">
                <div class="featured-product-active owl-carousel product-nav">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-5.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Golden Marguerite</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-6.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Pearly Everlasting</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-7.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Polka Dot Plant</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-8.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Glory of the Snow</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-6.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Jack in the Pulpit</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-pane">
                <div class="featured-product-active owl-carousel product-nav">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-4.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Dutchman's Breeches </a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-2.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Flowers Bouquet Pink</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-1.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Evergreen Candytuft </a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-3.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Pearly Everlasting</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-2.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Yellow Loosestrife</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab4" class="tab-pane">
                <div class="featured-product-active owl-carousel product-nav">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-8.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Golden Marguerite</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-6.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Pearly Everlasting</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-5.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Polka Dot Plant</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-7.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Glory of the Snow</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img alt="" src="assets/img/product/product-4.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
                                    <i class="icon-heart"></i>
                                </a>
                                <a class="action-cart" href="#" title="Add To Cart">
                                    <i class="icon-handbag"></i>
                                </a>
                                <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                    <i class="icon-magnifier-add"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h4>
                                <a href="product-details.html">Jack in the Pulpit</a>
                            </h4>
                            <div class="product-price-wrapper">
                                <span>$100.00</span>
                                <span class="product-price-old">$120.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonials-area bg-img pt-120 pb-115" style="background-image:url({{asset('assets/img/bg/bg-1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto col-12">
                <div class="testimonial-active owl-carousel">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <img alt="" src="assets/img/icon-img/testi.png">
                        </div>
                        <p>When a beautiful design is combined with powerful technology,<br> it truly is an artwork. I love how my website operates and looks with this theme. <br>Thank you for the awesome product. </p>
                        <h4>Samia Robiul</h4>
                    </div>
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <img alt="" src="assets/img/icon-img/testi.png">
                        </div>
                        <p>“ Lorem ipsum dolor sit, con adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <br>exercitati ullamco laboris  ” </p>
                        <h4> Tayeb Rayed</h4>
                    </div>
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <img alt="" src="assets/img/icon-img/testi.png">
                        </div>
                        <p>When a beautiful design is combined with powerful ,<br> technology it truly is an artwork. I love how my website operates and looks with this  <br>theme. Thank you for the awesome product. </p>
                        <h4>Hamim Ahamed</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="best-selling-product pt-70 pb-75 gray-bg">
    <div class="container">
        <div class="product-top-bar section-border mb-35">
            <div class="section-title-wrap">
                <h3 class="section-title section-bg-gray">Best Selling Products</h3>
            </div>
        </div>
        <div class="best-selling-wrap">
            <div class="best-selling-active owl-carousel product-nav">
                <div class="single-best-selling">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5 col-md-6">
                            <div class="single-best-img">
                                <img class="tilter" src="{{asset('assets/img/banner/deal-1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-md-6">
                            <div class="deals-content text-center deal-mrg">
                                <img alt="" src="{{asset('assets/img/icon-img/deals-2.png')}}">
                                <h2>Hot Deal ! Sale Up To <span>20% Off</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
                                <div class="timer timer-style">
                                    <div data-countdown="2018/09/01"></div>
                                </div>
                                <div class="deals-btn">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-best-selling">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5 col-md-6">
                            <div class="single-best-img">
                                <img class="tilter" src="{{asset('assets/img/banner/deal-1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-md-6">
                            <div class="deals-content text-center deal-mrg">
                                <img alt="" src="{{asset('assets/img/icon-img/deals-2.png')}}">
                                <h2>Hot Deal ! Sale Up To <span>20% Off</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
                                <div class="timer timer-style">
                                    <div data-countdown="2018/09/01"></div>
                                </div>
                                <div class="deals-btn">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pt-70 pb-70">
    <div class="container">
        <div class="product-top-bar section-border mb-35">
            <div class="section-title-wrap">
                <h3 class="section-title section-bg-white">Hot Flower</h3>
            </div>
        </div>
        <div class="featured-product-active hot-flower owl-carousel product-nav">
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.html">
                        <img alt="" src="{{asset('assets/img/product/product-5.jpg')}}">
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="icon-heart"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="icon-handbag"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="icon-magnifier-add"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h4>
                        <a href="product-details.html">Pearly Everlasting</a>
                    </h4>
                    <div class="product-price-wrapper">
                        <span>$100.00</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.html">
                        <img alt="" src="assets/img/product/product-6.jpg">
                    </a>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="icon-heart"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="icon-handbag"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="icon-magnifier-add"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h4>
                        <a href="product-details.html">Polka Dot Plant</a>
                    </h4>
                    <div class="product-price-wrapper">
                        <span>$100.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.html">
                        <img alt="" src="assets/img/product/product-7.jpg">
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="icon-heart"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="icon-handbag"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="icon-magnifier-add"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h4>
                        <a href="product-details.html">Glory of the Snow</a>
                    </h4>
                    <div class="product-price-wrapper">
                        <span>$100.00</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.html">
                        <img alt="" src="assets/img/product/product-8.jpg">
                    </a>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="icon-heart"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="icon-handbag"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="icon-magnifier-add"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h4>
                        <a href="product-details.html">Jack in the Pulpit</a>
                    </h4>
                    <div class="product-price-wrapper">
                        <span>$100.00</span>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="product-details.html">
                        <img alt="" src="assets/img/product/product-6.jpg">
                    </a>
                    <span>-30%</span>
                    <div class="product-action">
                        <a class="action-wishlist" href="#" title="Wishlist">
                            <i class="icon-heart"></i>
                        </a>
                        <a class="action-cart" href="#" title="Add To Cart">
                            <i class="icon-handbag"></i>
                        </a>
                        <a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                            <i class="icon-magnifier-add"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h4>
                        <a href="product-details.html">Flowers Bouquet Pink	</a>
                    </h4>
                    <div class="product-price-wrapper">
                        <span>$100.00</span>
                        <span class="product-price-old">$120.00 </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="new-year-offer-area pb-75">
    <div class="container">
        <div class="new-year-offer-wrap pt-70 pb-75 bg-img" style="background-image:url({{asset('assets/img/banner/banner-4.jpg')}});">
            <div class="new-year-offer-content text-center">
                <h4>New Year Offer</h4>
                <h3>Fresh flowers for any special occasion</h3>
                <a href="#">Discover now</a>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/img/product-details/product-detalis-l1.jpg" alt="">
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/img/product-details/product-detalis-l2.jpg" alt="">
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/img/product-details/product-detalis-l3.jpg" alt="">
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/img/product-details/product-detalis-l4.jpg" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <div class="thumb-menu owl-carousel nav nav-style" role="tablist">
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/img/product-details/product-detalis-s1.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-2"><img src="assets/img/product-details/product-detalis-s2.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-3"><img src="assets/img/product-details/product-detalis-s3.jpg" alt=""></a>
                                <a data-toggle="tab" href="#pro-4"><img src="assets/img/product-details/product-detalis-s4.jpg" alt=""></a>
                            </div>
                        </div>
                        <!-- Thumbnail image end -->
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="modal-pro-content">
                            <h3>Dutchman's Breeches </h3>
                            <div class="product-price-wrapper">
                                <span class="product-price-old">£162.00 </span>
                                <span>£120.00</span>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">L</option>
                                    </select>
                                </div>
                                <div class="quickview-color-wrap">
                                    <label>Color*</label>
                                    <div class="quickview-color">
                                        <ul>
                                            <li class="blue">b</li>
                                            <li class="red">r</li>
                                            <li class="pink">p</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-quantity">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                </div>
                                <button>Add to cart</button>
                            </div>
                            <span><i class="fa fa-check"></i> In stock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->





<!-- all js here -->
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/ajax-mail.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
