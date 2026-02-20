<?php
$site_title = 'Menu Style Three - Fast Foods & Restaurants PHP Template';
$page_banner_title = "Menu Restaurant";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'Menu Grid',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>
<!--====== Start Menu Page Section ======-->
<section class="menu-grid-section gray-bg pt-110 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-55">
                    <h2>CHOOSE MENU</h2>
                    <p>Indulge in an array of meticulously crafted sushi rolls, artfully blending <br> fresh ingredients for a delightful taste experience.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="foodix-tabs style-two mb-70">
                    <ul class="nav nav-tabs wow fadeInDown">
                        <li>
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#cat1">Beef</button>
                        </li>
                        <li>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat2" >Grilled</button>
                        </li>
                        <li>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat3">Sizzling</button>
                        </li>
                        <li>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat4">Steak Bliss</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="cat1">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Beefy Bourbon Bliss</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-2.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Smoked Paprika Sirloin</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-3.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Thai Basil Beef Stir-Fry</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-4.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Korean BBQ Beef</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-5.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Beef Bourguignon</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-6.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Beef Wellington</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cat2">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_1.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Beefy Bourbon Bliss</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_2.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Smoked Paprika Sirloin</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_3.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Thai Basil Beef Stir-Fry</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_4.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Korean BBQ Beef</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_5.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Beef Bourguignon</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_6.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Beef Wellington</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cat3">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_7.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Prawn Sizzling</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_8.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Mutton Sizzling</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_9.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Prawn Sizzling</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_10.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Korean BBQ Sizzling</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_11.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Mutton Sizzling</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_12.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Beef Wellington</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cat4">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_13.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">T-Bone Steak</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_14.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Tomahawk Steak</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_15.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Filet Steak</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_16.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Flank Steak</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_17.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Ribeye Steak</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12">
                                <div class="menu-item style-four mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/product/product-1_8.jpg" alt="Image">
                                    </div>
                                    <div class="menu-info">
                                        <div class="menu-meta">
                                            <span class="price"><span class="currency">$</span>18.00</span>
                                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                        </div>
                                        <h4 class="title"><a href="menu-details.html">Porterhouse Steak</a></h4>
                                        <ul class="check-list style-one">
                                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                        </ul>
                                        <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Menu Page Section ======-->

<?php
require_once 'parts/footer/footer-default.php';
require_once 'parts/layout/foot.php';