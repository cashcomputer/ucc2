<?php
$site_title = 'Blog Classic | Foodix - Fast Foods & Restaurants PHP Template';
$page_banner_title = "Blog Classic";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'Blog',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>

<!--====== Start Blogs Page ======-->
<section class="blogs-grid-section pt-130 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <!--=== Blog Classic Wrapper ===-->
                <div class="blog-classic-wrapper mb-50">
                    <!--=== Blog Post Item ===-->
                    <div class="blog-post-item style-two mb-35 wow fadeInUp">
                        <div class="post-content">
                            <h4 class="post-title"><a href="blog-details.php">Gourmet Griddl Masterpiece</a></h4>
                            <div class="post-meta">
                                <span><a href="#">Creativity</a></span>
                                <span><a href="#">JUly 5 , 2024</a></span>
                            </div>
                            <figure>
                                <img src="assets/images/blog/blog-10.jpg" alt="Post Thumbnail">
                            </figure>
                            <p>Plant-based dining is no longer a niche; it's a movement. Chefs are pushing the boundaries of creativity with plant-powered dishes that are not only delicious but also eco-friendly.</p>
                            <a href="blog-details.php" class="read-more">Learn more<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--=== Blog Post Item ===-->
                    <div class="blog-post-item style-two mb-35 wow fadeInUp">
                        <div class="post-content">
                            <h4 class="post-title"><a href="blog-details.php">skyline epicurean delight</a></h4>
                            <div class="post-meta">
                                <span><a href="#">Creativity</a></span>
                                <span><a href="#">JUly 5 , 2024</a></span>
                            </div>
                            <figure>
                                <img src="assets/images/blog/blog-11.jpg" alt="Post Thumbnail">
                            </figure>
                            <p>Plant-based dining is no longer a niche; it's a movement. Chefs are pushing the boundaries of creativity with plant-powered dishes that are not only delicious but also eco-friendly.</p>
                            <a href="blog-details.php" class="read-more">Learn more<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--=== Blog Post Item ===-->
                    <div class="blog-post-item style-two mb-35 wow fadeInUp">
                        <div class="post-content">
                            <h4 class="post-title"><a href="blog-details.php">Burger and Soft Drings</a></h4>
                            <div class="post-meta">
                                <span><a href="#">Creativity</a></span>
                                <span><a href="#">JUly 5 , 2024</a></span>
                            </div>
                            <figure>
                                <img src="assets/images/blog/blog-12.jpg" alt="Post Thumbnail">
                            </figure>
                            <p>Plant-based dining is no longer a niche; it's a movement. Chefs are pushing the boundaries of creativity with plant-powered dishes that are not only delicious but also eco-friendly.</p>
                            <a href="blog-details.php" class="read-more">Learn more<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--=== Foodix Pagination ===-->
                    <ul class="foodix-pagination d-flex mt-60 wow fadeInDown">
                        <li><a href="blog-grid.php"><i class="far fa-arrow-left"></i></a></li>
                        <li><a href="blog-grid.php">01</a></li>
                        <li><a href="blog-grid.php">02</a></li>
                        <li><a href="blog-grid.php">03</a></li>
                        <li><a href="blog-grid.php"><i class="far fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4">
                <!--=== Sidebar Widget Area ===-->
                <div class="sidebar-widget-area">
                    <!--=== Sidebar Widget ===-->
                    <div class="sidebar-widget sidebar-search-widget mb-30 wow fadeInDown">
                        <div class="widget-content">
                            <h4 class="sidebar-title">Search</h4>
                            <form>
                                <div class="form_group">
                                    <input type="search" placeholder="Search here..." name="search" required>
                                    <button class="search-btn"><i class="far fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--=== Sidebar Widget ===-->
                    <div class="sidebar-widget sidebar-post-widget mb-30 wow fadeInDown">
                        <div class="widget-content">
                            <h4 class="sidebar-title">Recent Post</h4>
                            <ul class="recent-post-list">
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-1.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.php">Flavorful Fusion: Exploring the Art
                                            of culinary blending</a></h6>
                                            <span class="posted-on"><a href="#">May 10, 2024</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-2.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.php">Chef Spotlight: Behind the scenes
                                            of culinary mastery</a></h6>
                                            <span class="posted-on"><a href="#">May 10, 2024</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-3.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.php">Time-Honored recipes with a 
                                            modern twist</a></h6>
                                        <span class="posted-on"><a href="#">May 14, 2024</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-4.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h6><a href="blog-details.php">Exploring authentic cuisine from
                                            around the world</a></h6>
                                        <span class="posted-on"><a href="#">May 20, 2024</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--=== Sidebar Widget ===-->
                    <div class="sidebar-widget sidebar-category-widget mb-30 wow fadeInDown">
                        <div class="widget-content">
                            <h4 class="sidebar-title">Categories</h4>
                            <ul>
                                <li><a href="#"><i class="far fa-angle-right"></i>Burger <span>(6)</span></a></li>
                                <li><a href="#"><i class="far fa-angle-right"></i>Pizza <span>(4)</span></a></li>
                                <li><a href="#"><i class="far fa-angle-right"></i>Sushi <span>(7)</span></a></li>
                                <li><a href="#"><i class="far fa-angle-right"></i>Chicken  <span>(8)</span></a></li>
                                <li><a href="#"><i class="far fa-angle-right"></i>Mutton  <span>(9)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--=== Sidebar Widget ===-->
                    <div class="sidebar-widget sidebar-tag-widget wow fadeInDown mb-30">
                        <div class="widget-content">
                            <h4 class="sidebar-title">Popular Tags</h4>
                            <div class="tagcloud">
                                <a href="#">BEER</a>
                                <a href="#">Burgers</a>
                                <a href="#">Delicious</a>
                                <a href="#">Fast Food</a>
                                <a href="#">Beef</a>
                                <a href="#">Muton</a>
                                <a href="#">Good Meal</a>
                                <a href="#">Pizza</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Blogs Page ======-->

<?php
require_once 'parts/footer/footer-default.php';
require_once 'parts/layout/foot.php';