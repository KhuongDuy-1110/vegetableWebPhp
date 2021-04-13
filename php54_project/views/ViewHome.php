<?php
//    load file layout
    $this->fileLayout = "LayoutTrangChu.php";
?>
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php
                    $hotProduct = $this->modelHotProduct();
                ?>
                <?php
                    foreach ($hotProduct as $rows):
                ?>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="assets/upload/products/<?php echo $rows->photo; ?>">
                        <h5 style=" font-family: 'Microsoft Sans Serif', Tahoma, Arial, Verdana, Sans-Serif;"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id?>"><?php echo $rows->name; ?></a></h5>
                    </div>
                </div>
<!--                <div class="col-lg-3">-->
<!--                    <div class="categories__item set-bg" data-setbg="assets/frontend/img/categories/cat-2.jpg">-->
<!--                        <h5><a href="#">Dried Fruit</a></h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3">-->
<!--                    <div class="categories__item set-bg" data-setbg="assets/frontend/img/categories/cat-3.jpg">-->
<!--                        <h5><a href="#">Vegetables</a></h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3">-->
<!--                    <div class="categories__item set-bg" data-setbg="assets/frontend/img/categories/cat-4.jpg">-->
<!--                        <h5><a href="#">drink fruits</a></h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3">-->
<!--                    <div class="categories__item set-bg" data-setbg="assets/frontend/img/categories/cat-5.jpg">-->
<!--                        <h5><a href="#">drink fruits</a></h5>-->
<!--                    </div>-->
<!--                </div>-->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges">Oranges</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".fastfood">Fastfood</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php
            $hotProduct = $this->modelHotProduct();
            ?>
            <?php
            foreach ($hotProduct as $rows):
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="assets/upload/products/<?php echo $rows->photo; ?>">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name?></a></h6>
                        <h5>$ <?php echo $rows->price; ?></h5>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
<!--            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">-->
<!--                <div class="featured__item">-->
<!--                    <div class="featured__item__pic set-bg" data-setbg="assets/frontend/img/featured/feature-2.jpg">-->
<!--                        <ul class="featured__item__pic__hover">-->
<!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="featured__item__text">-->
<!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                        <h5>$30.00</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">-->
<!--                <div class="featured__item">-->
<!--                    <div class="featured__item__pic set-bg" data-setbg="assets/frontend/img/featured/feature-3.jpg">-->
<!--                        <ul class="featured__item__pic__hover">-->
<!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="featured__item__text">-->
<!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                        <h5>$30.00</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">-->
<!--                <div class="featured__item">-->
<!--                    <div class="featured__item__pic set-bg" data-setbg="assets/frontend/img/featured/feature-4.jpg">-->
<!--                        <ul class="featured__item__pic__hover">-->
<!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="featured__item__text">-->
<!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                        <h5>$30.00</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">-->
<!--                <div class="featured__item">-->
<!--                    <div class="featured__item__pic set-bg" data-setbg="assets/frontend/img/featured/feature-5.jpg">-->
<!--                        <ul class="featured__item__pic__hover">-->
<!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="featured__item__text">-->
<!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                        <h5>$30.00</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">-->
<!--                <div class="featured__item">-->
<!--                    <div class="featured__item__pic set-bg" data-setbg="assets/frontend/img/featured/feature-6.jpg">-->
<!--                        <ul class="featured__item__pic__hover">-->
<!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="featured__item__text">-->
<!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                        <h5>$30.00</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">-->
<!--                <div class="featured__item">-->
<!--                    <div class="featured__item__pic set-bg" data-setbg="assets/frontend/img/featured/feature-7.jpg">-->
<!--                        <ul class="featured__item__pic__hover">-->
<!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="featured__item__text">-->
<!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                        <h5>$30.00</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">-->
<!--                <div class="featured__item">-->
<!--                    <div class="featured__item__pic set-bg" data-setbg="assets/frontend/img/featured/feature-8.jpg">-->
<!--                        <ul class="featured__item__pic__hover">-->
<!--                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="featured__item__text">-->
<!--                        <h6><a href="#">Crab Pool Security</a></h6>-->
<!--                        <h5>$30.00</h5>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>
<!-- Featured Section End -->
