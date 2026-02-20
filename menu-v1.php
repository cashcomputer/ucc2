<?php
$site_title = 'Menu Style One - Fast Foods & Restaurants PHP Template';
$page_banner_title = "Menu Restaurant";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'Menu One',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>
        
<!--====== Start Menu Section ======-->
<section class="menu-page-section gray-bg pt-110 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-55 wow fadeInDown">
                    <h2>Choose our Foods</h2>
                    <p>Indulge in an array of meticulously crafted sushi rolls, artfully blending <br> fresh ingredients for a delightful taste experience.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="menu-image-box mb-50 wow fadeInLeft">
                    <img src="assets/images/gallery/menu-image-1.jpg" alt="Image">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="menu-item-list">
                    <div class="menu-item style-three mb-30 wow fadeInUp">
                        <div class="menu-thumbnail">
                            <img src="assets/images/menu/menu-4.jpg" alt="Menu Thumbnail">
                        </div>
                        <div class="menu-info">
                            <h4 class="title"><a href="menu-details.php">Smoked Paprika Sirloin</a></h4>
                            <p>Sirloin infused, smoked paprika perfection on grill.</p>
                            <p class="price"><span class="currency">$</span>39.92</p>
                        </div>
                    </div>
                    <div class="menu-item style-three mb-30 wow fadeInUp">
                        <div class="menu-thumbnail">
                            <img src="assets/images/menu/menu-5.jpg" alt="Menu Thumbnail">
                        </div>
                        <div class="menu-info">
                            <h4 class="title"><a href="menu-details.php">Red Wine Reduction Ribe</a></h4>
                            <p>Ribeye, luxuriously glazed, red wine reduction perfection.</p>
                            <p class="price"><span class="currency">$</span>32.82</p>
                        </div>
                    </div>
                    <div class="menu-item style-three mb-30 wow fadeInUp">
                        <div class="menu-thumbnail">
                            <img src="assets/images/menu/menu-6.jpg" alt="Menu Thumbnail">
                        </div>
                        <div class="menu-info">
                            <h4 class="title"><a href="menu-details.php">Raspberry Chipotle Bone</a></h4>
                            <p>T-Bone tango with raspberry chipotle, bold harmony.</p>
                            <p class="price"><span class="currency">$</span>56.62</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Menu Section ======-->
<!--====== Start Menu Section ======-->
<section class="menu-page-section pt-110 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-55 wow fadeInDown">
                    <h2>Delightful Culinary Selection</h2>
                    <p>Indulge in an array of meticulously crafted sushi rolls, artfully blending <br> fresh ingredients for a delightful taste experience.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="menu-item-list">
                    <div class="menu-item style-three mb-30 wow fadeInUp">
                        <div class="menu-thumbnail">
                            <img src="assets/images/menu/menu-7.jpg" alt="Menu Thumbnail">
                        </div>
                        <div class="menu-info">
                            <h4 class="title"><a href="menu-details.php">Smoked Paprika Sirloin</a></h4>
                            <p>Sirloin infused, smoked paprika perfection on grill.</p>
                            <p class="price"><span class="currency">$</span>39.92</p>
                        </div>
                    </div>
                    <div class="menu-item style-three mb-30 wow fadeInUp">
                        <div class="menu-thumbnail">
                            <img src="assets/images/menu/menu-8.jpg" alt="Menu Thumbnail">
                        </div>
                        <div class="menu-info">
                            <h4 class="title"><a href="menu-details.php">Red Wine Reduction Ribe</a></h4>
                            <p>Ribeye, luxuriously glazed, red wine reduction perfection.</p>
                            <p class="price"><span class="currency">$</span>32.82</p>
                        </div>
                    </div>
                    <div class="menu-item style-three mb-30 wow fadeInUp">
                        <div class="menu-thumbnail">
                            <img src="assets/images/menu/menu-9.jpg" alt="Menu Thumbnail">
                        </div>
                        <div class="menu-info">
                            <h4 class="title"><a href="menu-details.php">Raspberry Chipotle Bone</a></h4>
                            <p>T-Bone tango with raspberry chipotle, bold harmony.</p>
                            <p class="price"><span class="currency">$</span>56.62</p>
                        </div>
                    </div>
                    <div class="menu-item style-three mb-30 wow fadeInUp">
                        <div class="menu-thumbnail">
                            <img src="assets/images/menu/menu-10.jpg" alt="Menu Thumbnail">
                        </div>
                        <div class="menu-info">
                            <h4 class="title"><a href="menu-details.php">Raspberry Chipotle Bone</a></h4>
                            <p>T-Bone tango with raspberry chipotle, bold harmony.</p>
                            <p class="price"><span class="currency">$</span>56.62</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="menu-image-box mb-50 wow fadeInRight">
                    <img src="assets/images/gallery/menu-image-2.jpg" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Menu Section ======-->

<?php
require_once 'parts/footer/footer-default.php';
require_once 'parts/layout/foot.php';