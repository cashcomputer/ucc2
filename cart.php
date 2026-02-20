<?php
$site_title = 'Cart | Foodix - Fast Foods & Restaurants PHP Template';
$page_banner_title = "Cart";
$breadcrumbs = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'Cart',
        'url' => null,
    ],
];

require_once 'parts/layout/head.php';
require_once 'parts/common/flyout-cart.php';
require_once 'parts/headers/header-default.php';
require_once 'parts/common/page-banner.php';
?>


<!--====== Start Cart Section ======-->
<section class="cart-section pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <!--=== Cart Wrapper ===-->
                <div class="cart-wrapper wow fadeInUp">
                    <!--=== Cart Table ===-->
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="thumbnail-title">
                                        <img src="assets/images/product/cart-1.jpg" alt="Cart Image">
                                        <span class="title"><a href="menu-details.php">Gourmet Griddl Masterpiece</a></span>
                                    </td>
                                    <td class="price">$125</td>
                                    <td class="quantity">
                                        <div class="quantity-input">
                                            <button class="quantity-down"><i class="far fa-minus"></i></button>
                                            <input class="quantity" type="text" value="1" name="quantity">
                                            <button class="quantity-up"><i class="far fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="subtotal">$125</td>
                                    <td class="remove">
                                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="thumbnail-title">
                                        <img src="assets/images/product/cart-2.jpg" alt="Cart Image">
                                        <span class="title"><a href="menu-details.php">skyline epicurean delight</a></span>
                                    </td>
                                    <td class="price">$150</td>
                                    <td class="quantity">
                                        <div class="quantity-input">
                                            <button class="quantity-down"><i class="far fa-minus"></i></button>
                                            <input class="quantity" type="text" value="1" name="quantity">
                                            <button class="quantity-up"><i class="far fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="subtotal">$150</td>
                                    <td class="remove">
                                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="thumbnail-title">
                                        <img src="assets/images/product/cart-3.jpg" alt="Cart Image">
                                        <span class="title"><a href="menu-details.php">Burger and Soft Drings</a></span>
                                    </td>
                                    <td class="price">$45</td>
                                    <td class="quantity">
                                        <div class="quantity-input">
                                            <button class="quantity-down"><i class="far fa-minus"></i></button>
                                            <input class="quantity" type="text" value="1" name="quantity">
                                            <button class="quantity-up"><i class="far fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="subtotal">$45</td>
                                    <td class="remove">
                                        <a href="#"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--=== Cart Middle ===-->
                <div class="cart-middle mt-40 wow fadeInUp">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="coupon-box mb-30">
                                <form>
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Coupon Code">
                                        <button class="theme-btn style-one">Appply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="update-cart float-lg-right mb-30">
                                <button class="theme-btn style-one">Update Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!--=== Shopping Cart Total ===-->
                <div class="shopping-cart-total mb-30 wow fadeInUp">
                    <h4 class="title">Cart Totals</h4>
                    <table class="table mb-25">
                        <tbody>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td class="price">$270</td>
                            </tr>
                            <tr>
                                <td>Shipping Fee</td>
                                <td class="price">$50</td>
                            </tr>
                            <tr>
                                <td class="total"><span>Order Total</span></td>
                                <td class="total price"><span>$320</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="theme-btn style-one">Proceed to checkout</button>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Cart Section ======-->
        
<?php
require_once 'parts/footer/footer-default.php';
require_once 'parts/layout/foot.php';