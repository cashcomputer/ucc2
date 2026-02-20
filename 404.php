<?php
$site_title = '404 | Foodix - Fast Foods & Restaurants PHP Template';
$page_banner_title = "404";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => '404',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>

<!--====== Start Error  Section ======-->
<section class="error-section pb-130 pt-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--====== Error Wrapper ======-->
                <div class="error-wrapper bg_cover pt-130 pb-130" style="background-image: url(assets/images/bg/error-bg.jpg);">
                    <div class="error-content text-center text-white">
                        <span class="number">404</span>
                        <h1>Oops! Page Not Found</h1>
                        <p>It looks like you've encountered a "Page Not Found" error, also known as a 404 error. <br> This typically happens when the web server cannot locate</p>
                        <div class="error-button">
                            <a href="index.php" class="theme-btn style-one">Go To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Error Section ======-->

<?php
require_once 'parts/footer/footer-default.php';
require_once 'parts/layout/foot.php';