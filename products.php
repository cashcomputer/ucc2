<?php
$site_title = 'Our Products | Foodix - Fast Foods & Restaurants PHP Template';
$page_banner_title = "Our Products";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'Products',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>

<!--====== Start Menu Page Section ======-->
<section class="menu-grid-section gray-bg pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-box text-center text-md-start mb-30 wow fadeInLeft">
                    <p>Showing 1 - 12 of 30 Results</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="filter-category mb-30 float-md-end wow fadeInRight">
                    <select class="wide">
                        <option data-display="Sort by Newness">Sort by Newness</option>
                        <option value="01">Price High To Low</option>
                        <option value="02">Price Low To High</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="menu-item style-four mb-30 wow fadeInUp">
                    <div class="menu-thumbnail">
                        <img src="assets/images/product/product-1.jpg" alt="Image">
                        <div class="wishlist-btn">
                            <button><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="menu-info">
                        <div class="menu-meta">
                            <span class="price"><span class="currency">$</span>18.00</span>
                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                        </div>
                        <h4 class="title"><a href="menu-details.php">Beefy Bourbon Bliss</a></h4>
                        <ul class="check-list style-one">
                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                        </ul>
                        <a href="menu-details.php" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="menu-item style-four mb-30 wow fadeInUp">
                    <div class="menu-thumbnail">
                        <img src="assets/images/product/product-2.jpg" alt="Image">
                        <div class="wishlist-btn">
                            <button><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="menu-info">
                        <div class="menu-meta">
                            <span class="price"><span class="currency">$</span>32.17</span>
                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                        </div>
                        <h4 class="title"><a href="menu-details.php">Smoked Paprika Sirloin</a></h4>
                        <ul class="check-list style-one">
                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                        </ul>
                        <a href="menu-details.php" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="menu-item style-four mb-30 wow fadeInUp">
                    <div class="menu-thumbnail">
                        <img src="assets/images/product/product-3.jpg" alt="Image">
                        <div class="wishlist-btn">
                            <button><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="menu-info">
                        <div class="menu-meta">
                            <span class="price"><span class="currency">$</span>39.21</span>
                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                        </div>
                        <h4 class="title"><a href="menu-details.php">Thai Basil Beef Stir-Fry</a></h4>
                        <ul class="check-list style-one">
                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                        </ul>
                        <a href="menu-details.php" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="menu-item style-four mb-30 wow fadeInUp">
                    <div class="menu-thumbnail">
                        <img src="assets/images/product/product-4.jpg" alt="Image">
                        <div class="wishlist-btn">
                            <button><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="menu-info">
                        <div class="menu-meta">
                            <span class="price"><span class="currency">$</span>39.21</span>
                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                        </div>
                        <h4 class="title"><a href="menu-details.php">Korean BBQ Beef</a></h4>
                        <ul class="check-list style-one">
                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                        </ul>
                        <a href="menu-details.php" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="menu-item style-four mb-30 wow fadeInUp">
                    <div class="menu-thumbnail">
                        <img src="assets/images/product/product-5.jpg" alt="Image">
                        <div class="wishlist-btn">
                            <button><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="menu-info">
                        <div class="menu-meta">
                            <span class="price"><span class="currency">$</span>18.00</span>
                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                        </div>
                        <h4 class="title"><a href="menu-details.php">Beef Bourguignon</a></h4>
                        <ul class="check-list style-one">
                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                        </ul>
                        <a href="menu-details.php" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="menu-item style-four mb-30 wow fadeInUp">
                    <div class="menu-thumbnail">
                        <img src="assets/images/product/product-6.jpg" alt="Image">
                        <div class="wishlist-btn">
                            <button><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="menu-info">
                        <div class="menu-meta">
                            <span class="price"><span class="currency">$</span>33.21</span>
                            <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                        </div>
                        <h4 class="title"><a href="menu-details.php">Beef Wellington</a></h4>
                        <ul class="check-list style-one">
                            <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                            <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                        </ul>
                        <a href="menu-details.php" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--=== Foodix Pagination ===-->
                <ul class="foodix-pagination d-flex justify-content-center mt-20 wow fadeInDown">
                    <li><a href="blog-grid.php"><i class="far fa-arrow-left"></i></a></li>
                    <li><a href="blog-grid.php">01</a></li>
                    <li><a href="blog-grid.php">02</a></li>
                    <li><a href="blog-grid.php">03</a></li>
                    <li><a href="blog-grid.php"><i class="far fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section><!--====== End Menu Page Section ======-->

<?php
require_once 'parts/footer/footer-default.php';
require_once 'parts/layout/foot.php';