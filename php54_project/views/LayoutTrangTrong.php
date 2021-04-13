<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="http://localhost/php54/vegetable_proj/php54_project/">
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/frontend/css/style.css" type="text/css">
</head>

<body>
<?php   include "views/ViewHeader.php"; ?>

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" style="position: relative;" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn" onclick="return search();">SEARCH</button>
                        </form>
                    </div>

                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="assets/frontend/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Organi Shop</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Department</h4>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Price</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                 data-min="0" data-max="400">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                                <input type="button"
                                       value="Search"
                                       class="site-btn"
                                       style="margin-top: 20px;
                                       border-radius: 10px;
                                       background: #db2222;"
                                       onclick="location.href = 'index.php?controller=search&minamount=' + parseInt((document.getElementById('minamount').value).substring(1)) + '&maxamount=' + parseInt((document.getElementById('maxamount').value).substring(1))" >
<!--                                <button type="submit" class="site-btn" style="margin-top: 20px; border-radius: 10px; background: #db2222;"-->
<!--                                        onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;">SEARCH</button>-->
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__item sidebar__item__color--option">
                        <h4>Colors</h4>
                        <div class="sidebar__item__color sidebar__item__color--white">
                            <label for="white">
                                White
                                <input type="radio" id="white">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--gray">
                            <label for="gray">
                                Gray
                                <input type="radio" id="gray">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--red">
                            <label for="red">
                                Red
                                <input type="radio" id="red">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--black">
                            <label for="black">
                                Black
                                <input type="radio" id="black">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--blue">
                            <label for="blue">
                                Blue
                                <input type="radio" id="blue">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--green">
                            <label for="green">
                                Green
                                <input type="radio" id="green">
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__item">
                        <h4>Popular Size</h4>
                        <div class="sidebar__item__size">
                            <label for="large">
                                Large
                                <input type="radio" id="large">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="medium">
                                Medium
                                <input type="radio" id="medium">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="small">
                                Small
                                <input type="radio" id="small">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="tiny">
                                Tiny
                                <input type="radio" id="tiny">
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__item">
                        <div class="latest-product__text">
                            <h4>Latest Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="assets/frontend/img/latest-product/lp-1.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="assets/frontend/img/latest-product/lp-2.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="assets/frontend/img/latest-product/lp-3.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="assets/frontend/img/latest-product/lp-1.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="assets/frontend/img/latest-product/lp-2.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div>
                                    </a>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="assets/frontend/img/latest-product/lp-3.jpg" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>Crab Pool Security</h6>
                                            <span>$30.00</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
<!--                    <div class="section-title product__discount__title">-->
<!--                        <h2>Sale Off</h2>-->
<!--                    </div>-->
                        <?php echo $this->view; ?>

                </div>
                <div class="filter__item">
<!--                    <div class="row">-->
<!--                        <div class="col-lg-4 col-md-5">-->
<!--                            <div class="filter__sort">-->
<!--                                <span>Sort By</span>-->
<!--                                <select>-->
<!--                                    <option value="0">Default</option>-->
<!--                                    <option value="0">Default</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-4 col-md-4">-->
<!--                            <div class="filter__found">-->
<!--                                <h6><span>16</span> Products found</h6>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-4 col-md-3">-->
<!--                            <div class="filter__option">-->
<!--                                <span class="icon_grid-2x2"></span>-->
<!--                                <span class="icon_ul"></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="row">
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-1.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-2.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-3.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-4.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-5.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-6.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-7.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-8.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-9.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-10.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-11.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-md-6 col-sm-6">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="assets/frontend/img/product/product-12.jpg">-->
<!--                                <ul class="product__item__pic__hover">-->
<!--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                                <h5>$30.00</h5>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="assets/frontend/img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 74c Road CatBi - HaiPhong</li>
                        <li>Phone: +84 0822008026</li>
                        <li>Email: khuongc3@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Our branch</h6>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.1622557871797!2d106.70633580410937!3d20.825153423087166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a700ece8783fd%3A0x713b16482c7b480c!2zQ8OhdCBCaSwgSOG6o2kgQW4sIEjhuqNpIFBow7JuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1617413872439!5m2!1svi!2s" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="https://www.facebook.com/khuongduy1110/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/khuongduy.1110/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.behance.net/khuonghit1112"><i class="fa fa-behance"></i></a>
                        <a href="https://www.pinterest.com/khuongc3/_saved/"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p></div>
                    <div class="footer__copyright__payment"><img src="assets/frontend/img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="assets/frontend/js/jquery-3.3.1.min.js"></script>
<script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="assets/frontend/js/jquery.nice-select.min.js"></script>
<script src="assets/frontend/js/jquery-ui.min.js"></script>
<script src="assets/frontend/js/jquery.slicknav.js"></script>
<script src="assets/frontend/js/mixitup.min.js"></script>
<script src="assets/frontend/js/owl.carousel.min.js"></script>
<script src="assets/frontend/js/main.js"></script>



</body>

</html>