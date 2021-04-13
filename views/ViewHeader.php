<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <?php if(isset($_SESSION["customer_email"])): ?>
                            <li><i class="fa fa-envelope"></i>
                                <?php echo $_SESSION["customer_email"];?>
                            </li>
                            <?php else: ?>
                                <li><i class="fa fa-envelope"></i>
                                    <?php echo "Please register !"?>
                                </li>
                            <?php endif;?>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <?php if(isset($_SESSION["customer_email"])): ?>
                        <div class="header__top__right__language header__top__right__auth">
                            <a href="index.php?controller=account&action=orders">Xin chào <?php echo $_SESSION["customer_email"]; ?></a>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="index.php?controller=account&action=logout"><i class="fa fa-user"></i>logout</a>
                        </div>
                        <?php else: ?>
                        <div class="header__top__right__language header__top__right__auth">
                            <a href="dang-nhap"><i class="fa fa-user"></i>Login</a>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="dang-ky"><i class="fa fa-user"></i>Register</a>
                        </div>
                        <?php endif;?>
<!--                        <div class="header__top__right__language header__top__right__auth">-->
<!--                            <a href="index.php?controller=account&action=login"><i class="fa fa-user"></i> Login</a>-->
<!--                        </div>-->
<!--                        <div class="header__top__right__auth">-->
<!---->
<!--                            <a href="index.php?controller=account&action=register"><i class="fa fa-user"></i> Register</a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="assets/frontend/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <?php
                    //  load MVC bang tay
                        include "controllers/ControllerCategories.php";
                        $obj = new ControllerCategories();
                        $obj->index();
                    ?>
                </nav>
            </div>
            <?php
            $numberProduct = 0;
            if(isset($_SESSION["cart"])){
                foreach ($_SESSION["cart"] as $value){
                    $numberProduct++;
                }
            }
            ?>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="index.php?controller=cart"><i class="fa fa-shopping-bag"></i> <span><?php echo $numberProduct; ?></span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->