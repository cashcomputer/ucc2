<?php
$site_title = 'Contact us | Foodix - Fast Foods & Restaurants PHP Template';
$page_banner_title = "Contact us";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'Contact',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>
        
<!--====== Start Contact Section ======-->
<section class="contact-section pt-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <!--=== Section Content Box ===-->
                <div class="contact-wrapper">
                    <!--===  Section title  ===-->
                    <div class="section-title mb-50 wow fadeInDown">
                        <span class="sub-title">Get in touch</span>
                        <h2>have questions?
                            get in touch!</h2>
                    </div>
                    <!--===  Contact Form  ===-->
                    <form class="contact-form wow fadeInUp">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" class="form_control" placeholder="Your Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text"  class="form_control" placeholder="Your Email" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text"  class="form_control" placeholder="Your Subject" name="Subject" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text"  class="form_control" placeholder="Your Service" name="Service" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <textarea class="form_control" rows="5" cols="10" placeholder="Write message" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <button class="theme-btn style-one">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 d-none d-xl-block">
                <!--=== Contact Image Box ===-->
                <div class="contact-image-box text-end wow fadeInDown">
                    <img src="assets/images/gallery/contact-1.png" alt="Contact Image">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Section ======-->
<!--====== End Contact Info Section ======-->
<section class="contact-info-section pt-130 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!--=== Iconic Info Box ===-->
                <div class="iconic-info-box style-one text-center mb-30 wow fadeInDown">
                    <div class="icon">
                        <i class="far fa-map-marker-alt"></i>
                    </div>
                    <div class="content">
                        <h4>Address</h4>
                        <p>4140 Parker Rd. Allentown, <br> 
                            New Mexico 31134</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!--=== Iconic Info Box ===-->
                <div class="iconic-info-box style-one text-center mb-30 wow fadeInDown">
                    <div class="icon">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="content">
                        <h4>Email</h4>
                        <p><a href="mailto:foodixsupport@gmail.com">foodixsupport@gmail.com</a></p>
                        <p><a href="mailto:foodixinfo@gmail.com">foodixinfo@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!--=== Iconic Info Box ===-->
                <div class="iconic-info-box style-one text-center mb-30 wow fadeInDown">
                    <div class="icon">
                        <i class="far fa-map-marker-alt"></i>
                    </div>
                    <div class="content">
                        <h4>Phone</h4>
                        <p><a href="tel:+555-1234567890">+555-123 456 7890</a></p>
                        <p><a href="tel:+555-1234567890">+555-123 776 8875</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Info Section ======-->
<!--====== Start Map Section ======-->
<section class="contact-map-section">
    <div class="contact-map-box wow fadeInDown">
        <iframe height="600" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd" loading="lazy"></iframe>
    </div>
</section><!--====== End Map Section ======-->

<?php
require_once 'parts/footer/footer-default.php';
require_once 'parts/layout/foot.php';