<?php
$site_title = 'Menu Style Two - Fast Foods & Restaurants PHP Template';
$page_banner_title = "Menu Restaurant";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'Menu Two',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>

<!--====== Start Menu Section ======-->
<section class="menu-section pt-110 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-55 wow fadeInDown">
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
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat4">Steak</button>
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
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Beefy Bourbon Bliss</a></h4>
                                        <p>Bourbon-infused beefy bliss savory, smoky, sublime perfection.</p>
                                        <p class="price"><span class="currency">$</span>69.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-5.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Grilled American Fillet</a></h4>
                                        <p>Grilled American fillet, a succulent culinary
                                            Pizza.</p>
                                        <p class="price"><span class="currency">$</span>56.82</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-6.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Smoked Paprika Sirloin</a></h4>
                                        <p>Sirloin infused, smoked paprika perfection on grill.</p>
                                        <p class="price"><span class="currency">$</span>39.62</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-7.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Thai Basil Beef Stir-Fry</a></h4>
                                        <p>Stir-fried Thai basil beef  aromatic, savory delight.</p>
                                        <p class="price"><span class="currency">$</span>39.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-8.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Guinness Glazed  Ribs</a></h4>
                                        <p>Guinness-glazed ribs: rich, savory, Irish-inspired indulgence.</p>
                                        <p class="price"><span class="currency">$</span>69.58</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-9.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Grilled Gourmet Galore</a></h4>
                                        <p>Gourmet delight grilled to perfection and more.</p>
                                        <p class="price"><span class="currency">$</span>76.23</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cat2">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_1.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Smoky BBQ Ribs</a></h4>
                                        <p>Bourbon-infused beefy bliss savory, smoky, sublime perfection.</p>
                                        <p class="price"><span class="currency">$</span>69.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_2.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Grilled American Fillet</a></h4>
                                        <p>Grilled American fillet, a succulent culinary
                                            Pizza.</p>
                                        <p class="price"><span class="currency">$</span>56.82</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_3.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Classic Grilled Shashlik</a></h4>
                                        <p>Sirloin infused, smoked paprika perfection on grill.</p>
                                        <p class="price"><span class="currency">$</span>39.62</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_4.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Spicy BBQ Chicken</a></h4>
                                        <p>Stir-fried Thai basil beef  aromatic, savory delight.</p>
                                        <p class="price"><span class="currency">$</span>39.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_5.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Classic Grilled Shashlik</a></h4>
                                        <p>Guinness-glazed ribs: rich, savory, Irish-inspired indulgence.</p>
                                        <p class="price"><span class="currency">$</span>69.58</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_6.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Grilled Gourmet Galore</a></h4>
                                        <p>Gourmet delight grilled to perfection and more.</p>
                                        <p class="price"><span class="currency">$</span>76.23</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cat3">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_7.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Beef Sizzling</a></h4>
                                        <p>Bourbon-infused beefy bliss savory, smoky, sublime perfection.</p>
                                        <p class="price"><span class="currency">$</span>69.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_8.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Mutton Sizzling</a></h4>
                                        <p>Grilled American fillet, a succulent culinary
                                            Pizza.</p>
                                        <p class="price"><span class="currency">$</span>56.82</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_9.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Chicken Sizzling</a></h4>
                                        <p>Sirloin infused, smoked paprika perfection on grill.</p>
                                        <p class="price"><span class="currency">$</span>39.62</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_10.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Prawn Sizzling</a></h4>
                                        <p>Stir-fried Thai basil beef  aromatic, savory delight.</p>
                                        <p class="price"><span class="currency">$</span>39.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_11.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Beef Sizzling</a></h4>
                                        <p>Guinness-glazed ribs: rich, savory, Irish-inspired indulgence.</p>
                                        <p class="price"><span class="currency">$</span>69.58</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_12.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Mutton Sizzling</a></h4>
                                        <p>Gourmet delight grilled to perfection and more.</p>
                                        <p class="price"><span class="currency">$</span>76.23</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cat4">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_13.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">T-Bone Steak</a></h4>
                                        <p>Bourbon-infused beefy bliss savory, smoky, sublime perfection.</p>
                                        <p class="price"><span class="currency">$</span>69.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_14.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Tomahawk Steak</a></h4>
                                        <p>Grilled American fillet, a succulent culinary
                                            Pizza.</p>
                                        <p class="price"><span class="currency">$</span>56.82</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_15.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Filet Steak</a></h4>
                                        <p>Sirloin infused, smoked paprika perfection on grill.</p>
                                        <p class="price"><span class="currency">$</span>39.62</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_16.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Flank Steak</a></h4>
                                        <p>Stir-fried Thai basil beef  aromatic, savory delight.</p>
                                        <p class="price"><span class="currency">$</span>39.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_17.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Ribeye Steak</a></h4>
                                        <p>Guinness-glazed ribs: rich, savory, Irish-inspired indulgence.</p>
                                        <p class="price"><span class="currency">$</span>69.58</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="menu-item style-three mb-30">
                                    <div class="menu-thumbnail">
                                        <img src="assets/images/menu/menu-4_18.jpg" alt="Menu Thumbnail">
                                    </div>
                                    <div class="menu-info">
                                        <h4 class="title"><a href="menu-details.php">Porterhouse Steak</a></h4>
                                        <p>Gourmet delight grilled to perfection and more.</p>
                                        <p class="price"><span class="currency">$</span>76.23</p>
                                    </div>
                                </div>
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