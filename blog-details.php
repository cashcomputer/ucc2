<?php
$site_title = 'Blog Details | Foodix - Fast Foods & Restaurants PHP Template';
$page_banner_title = "Blog Details";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'Blog Details',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>

<!--====== Start Blogs Page ======-->
<section class="blogs-grid-section pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <!--=== Blogs Details Wrapper ===-->
                <div class="blog-details-wrapper">
                    <div class="blog-post-item wow fadeInUp">
                        <div class="main-post">
                            <div class="post-content">
                                <h4 class="post-title">Gourmet Griddle Masterpiece</h4>
                                <div class="post-meta">
                                    <span><a href="#">Creativity</a></span>
                                    <span><a href="#">JUly 5 , 2024</a></span>
                                </div>
                                <figure>
                                    <img src="assets/images/blog/blog-10.jpg" alt="Post Thumbnail">
                                </figure>
                                <p>Embark on a delectable journey as we delve into the world of culinary delights and gastronomic adventures. Food is not just sustenance; it's an art that connects cultures, evokes memories, and stirs emotions. In this blog, we invite you to join us as we explore the fascinating realm of flavors, aromas, and the stories behind every dish. Whether you're a seasoned foodie or simply curious about the magic that happens in the kitchen, our culinary exploration promises to satisfy your appetite for knowledge and inspiration</p>
                                <p>Discover the artistry of blending flavors and techniques from different cuisines. Explore how culinary fusion can result in unique and tantalizing dishes that transcend cultural boundaries. From Japanese-Peruvian fusion to modern twists on classic comfort foods, we'll take you on a global taste tour that celebrates the beauty of culinary creativity.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="block-image mb-40">
                                            <img src="assets/images/blog/blog-single-1.jpg" alt="Post Thumbnail">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="block-image mb-40">
                                            <img src="assets/images/blog/blog-single-2.jpg" alt="Post Thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-footer wow fadeInUp">
                            <div class="tag-links">
                                <span>Tag:</span>
                                <a href="#">BEER</a>
                                <a href="#">Burgers</a>
                                <a href="#">pizza</a>
                            </div>
                            <div class="social-share">
                                <span>share:</span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="far fa-paper-plane"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--===  Comments Area  ===-->
                    <div class="comments-area mt-60 mb-50 wow fadeInUp">
                        <h3 class="comments-title">Popular Comments</h3>
                        <ul class="comments-list">
                            <li>
                                <div class="comment">
                                    <div class="comment-avatar">
                                        <img src="assets/images/blog/comment-1.jpg" alt="comment author">
                                    </div>
                                    <div class="comment-wrap">
                                        <div class="comment-author-content">
                                            <span class="author-name">albert flores<span class="date">May 25, 2023</span></span>
                                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
                                                molestiae consequatur qui dolorem eum fugiat voluptas</p>
                                                <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="comment-reply">
                                    <li class="comment">
                                        <div class="comment-avatar">
                                            <img src="assets/images/blog/comment-2.jpg" alt="comment author">
                                        </div>
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name">Michel holder<span class="date">May 25, 2023</span></span>
                                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
                                                    molestiae consequatur qui dolorem eum fugiat voluptas</p>
                                                    <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment">
                                    <div class="comment-avatar">
                                        <img src="assets/images/blog/comment-2.jpg" alt="comment author">
                                    </div>
                                    <div class="comment-wrap">
                                        <div class="comment-author-content">
                                            <span class="author-name">Michel holder<span class="date">May 25, 2023</span></span>
                                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi consequatur</p>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--===  Comments Form  ===-->
                    <div class="comments-respond mb-30 wow fadeInUp" id="comment-respond">
                        <h3 class="comments-heading">Leave a Comments</h3>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Enter Name" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Email Address" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <textarea name="message" class="form_control" rows="4" placeholder="Write Comments"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <button class="theme-btn style-one">Post Your Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                <li><a href="#">Burger <span>(6)</span></a></li>
                                <li><a href="#">Pizza <span>(4)</span></a></li>
                                <li><a href="#">Sushi <span>(7)</span></a></li>
                                <li><a href="#">Chicken  <span>(8)</span></a></li>
                                <li><a href="#">Mutton  <span>(9)</span></a></li>
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