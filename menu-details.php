<?php
$site_title = 'Menu Style Three - Fast Foods & Restaurants PHP Template';
$page_banner_title = "Menu Details";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'Menu Details',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>

<!--====== Start Menu Section ======-->
<section class="menu-details-section pt-130 pb-65">
    <div class="container">
        <!--=== Menu Details Wrapper ===-->
        <div class="menu-details-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!--=== Menu Image ===-->
                    <div class="menu-image mb-50 wow fadeInLeft">
                        <img src="assets/images/product/product-single-1.jpg" alt="Product Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--=== Menu Info ===-->
                    <div class="menu-info-content mb-50 wow fadeInRight">
                        <h4 class="title">Gourmet Griddl Masterpiece</h4>
                        <p>Plant-based dining is no longer a niche it's a movement. Chefs are pushing the boundaries of creativity.</p>
                        <span class="price"><span class="currency">$</span>39.92 <span class="pre-price"><span class="currency">$</span>45.25</span></span>
                        <div class="product-cart-variation">
                            <ul>
                                <li>
                                    <div class="quantity-input">
                                        <button class="quantity-down"><i class="far fa-minus"></i></button>
                                        <input class="quantity" type="text" value="1" name="quantity">
                                        <button class="quantity-up"><i class="far fa-plus"></i></button>
                                    </div>
                                </li>
                                <li>
                                    <select class="wide">
                                        <option data-display="Variation Size">Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="add-to-cart">
                            <button class="theme-btn style-one">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <!--=== Description Content Wrapper ===-->
                    <div class="description-content-wrapper mb-30 wow fadeInDown">
                        <!--=== Foodix Tabs ===-->
                        <div class="foodix-tabs style-three mb-20">
                            <ul class="nav nav-tabs wow fadeInDown">
                                <li>
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#cat1">Food Details</button>
                                </li>
                                <li>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat2" >Food Video</button>
                                </li>
                                <li>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat3">Reviews</button>
                                </li>
                            </ul>
                        </div>
                        <!--=== Foodix Tab Content ===-->
                        <div class="tab-content">
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade show active" id="cat1">
                                <div class="content-box">
                                    <p>Indulge in a mouthwatering culinary delight with our Chicken Skewers paired with vibrant slices of sweet bell peppers. Tender pieces of succulent chicken are marinated to perfection, resulting in a flavorful and juicy experience.</p>
                                    <h4>Ingredients:</h4>
                                    <ul class="check-list mb-30">
                                        <li>Fresh chicken breast or thigh meat, cubed</li>
                                        <li>Assorted sweet bell peppers sliced into rings</li>
                                        <li>Marinade (your choice of herbs, spices, and seasonings)</li>
                                        <li>Olive oil</li>
                                        <li>Salt and pepper</li>
                                    </ul>
                                    <h4>Preparation:</h4>
                                    <ul class="check-list mb-30">
                                        <li>Enjoy the skewers with a side of fresh salad or rice</li>
                                        <li>Drizzle with a zesty lemon or lime juice for an extra burst of flavor</li>
                                        <li>Pair with your favorite dipping sauce or chutney for added variety</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cat2">
                                <div class="content-box">
                                    <p>Indulge in a mouthwatering culinary delight with our Chicken Skewers paired with vibrant slices of sweet bell peppers. Tender pieces of succulent chicken are marinated to perfection, resulting in a flavorful and juicy experience.</p>
                                    <h4>Ingredients:</h4>
                                    <ul class="check-list mb-30">
                                        <li>Fresh chicken breast or thigh meat, cubed</li>
                                        <li>Assorted sweet bell peppers sliced into rings</li>
                                        <li>Marinade (your choice of herbs, spices, and seasonings)</li>
                                        <li>Olive oil</li>
                                        <li>Salt and pepper</li>
                                    </ul>
                                    <h4>Preparation:</h4>
                                    <ul class="check-list mb-30">
                                        <li>Enjoy the skewers with a side of fresh salad or rice</li>
                                        <li>Drizzle with a zesty lemon or lime juice for an extra burst of flavor</li>
                                        <li>Pair with your favorite dipping sauce or chutney for added variety</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cat3">
                                <div class="content-box">
                                    <p>Indulge in a mouthwatering culinary delight with our Chicken Skewers paired with vibrant slices of sweet bell peppers. Tender pieces of succulent chicken are marinated to perfection, resulting in a flavorful and juicy experience.</p>
                                    <h4>Ingredients:</h4>
                                    <ul class="check-list mb-30">
                                        <li>Fresh chicken breast or thigh meat, cubed</li>
                                        <li>Assorted sweet bell peppers sliced into rings</li>
                                        <li>Marinade (your choice of herbs, spices, and seasonings)</li>
                                        <li>Olive oil</li>
                                        <li>Salt and pepper</li>
                                    </ul>
                                    <h4>Preparation:</h4>
                                    <ul class="check-list mb-30">
                                        <li>Enjoy the skewers with a side of fresh salad or rice</li>
                                        <li>Drizzle with a zesty lemon or lime juice for an extra burst of flavor</li>
                                        <li>Pair with your favorite dipping sauce or chutney for added variety</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="foodix-banner-wrapper">
                        <!--=== Foodix Banner ===-->
                        <div class="foodix-banner-item style-three mb-30 wow fadeInUp">
                            <div class="banner-inner-wrap bg_cover" style="background-image: url(assets/images/bg/banner-bg-3.jpg);">
                                <div class="banner-img"><img src="assets/images/bg/bn-img-1.png" alt="banner image"></div>
                                <div class="banner-content">
                                    <span>Premium skewers</span>
                                    <h3>chicken skewers</h3>
                                    <p>Savor the tantalizing taste of our expertly grilled chicken skewers, marinated.</p>
                                </div>
                            </div>
                        </div>
                        <!--=== Foodix Banner ===-->
                        <div class="foodix-banner-item style-three mb-30 wow fadeInUp">
                            <div class="banner-inner-wrap bg_cover" style="background-image: url(assets/images/bg/banner-bg-4.jpg);">
                                <div class="banner-img"><img src="assets/images/bg/bn-img-2.png" alt="banner image"></div>
                                <div class="banner-content">
                                    <span>Premium Wrap</span>
                                    <h3>chicken Wrap</h3>
                                    <p>Indulge in our savory chicken wrap, a delightful blend of tender grilled chicken.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Releted Item WRapper ===-->
            <div class="releted-item-wrap pt-45">
                <!--=== Releted Title ===-->
                <h3 class="releted-title mb-30 wow fadeInDown">Related items</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Menu Item ===-->
                        <div class="menu-item related-menu-item text-center mb-30 wow fadeInUp">
                            <div class="menu-image">
                                <img src="assets/images/product/releted-1.png" alt="Image">
                            </div>
                            <div class="menu-info">
                                <h4 class="title"><a href="menu-v3.html">Cheese Pizza</a></h4>
                                <p>Melting mozzarella atop a crisp
                                    crust a timeless cheese pizza</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Menu Item ===-->
                        <div class="menu-item related-menu-item text-center mb-30 wow fadeInUp">
                            <div class="menu-image">
                                <img src="assets/images/product/releted-2.png" alt="Image">
                            </div>
                            <div class="menu-info">
                                <h4 class="title"><a href="menu-v3.html">chicken pizza</a></h4>
                                <p>Melting mozzarella atop a crisp
                                    crust a timeless cheese pizza</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Menu Item ===-->
                        <div class="menu-item related-menu-item text-center mb-30 wow fadeInUp">
                            <div class="menu-image">
                                <img src="assets/images/product/releted-3.png" alt="Image">
                            </div>
                            <div class="menu-info">
                                <h4 class="title"><a href="menu-v3.html">Garden veggie</a></h4>
                                <p>Melting mozzarella atop a crisp
                                    crust a timeless cheese pizza</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Menu Section ======-->

<?php
require_once 'parts/footer/footer-default.php';
require_once 'parts/layout/foot.php';