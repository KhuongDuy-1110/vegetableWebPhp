<?php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Login into account</h4>
            <form method="post" action="index.php?controller=account&action=loginPost">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="email" required="">
                                </div>
                            </div>
<!--                            <div class="col-lg-6">-->
<!--                                <div class="checkout__input">-->
<!--                                    <p>Last Name<span>*</span></p>-->
<!--                                    <input type="text">-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                        <div class="checkout__input">
                            <p>Password<span>*</span></p>
                            <input type="password" name="password" required="">
                        </div>
                        <div class="checkout__input">
                            <button type="submit" class="site-btn">Log in</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="index.php?controller=account&action=register" class="site-btn">Register</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--<div class="template-customer">-->
<!--    <h1>Đăng nhập tài khoản</h1>-->
<!--    <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>-->
<!--    <div class="row" style="margin-top:50px;">-->
<!--        <div class="col-md-6">-->
<!--            <div class="wrapper-form">-->
<!--                <form method='post' action="index.php?controller=account&action=loginPost">-->
<!--                                       <input name="__RequestVerificationToken" type="hidden" value="CfDJ8NCDIeDSHgNIh7wY7X1HBtTC5UoDhnpPY_bZxEAeHg3_XzL3KFfHY1L7RC4b6K5PPzwy7cBnVlo7o43qXnf1fjxMAvl49i2tyH2k-qFbQOFYRs5LeSDFHBI6XXee3ODmKapQeEAQcEVH5_7dlOO309Y" />-->
<!--                    <p class="title"><span>Đăng nhập tài khoản</span></p>-->
<!--                    <div class="form-group">-->
<!--                        <label>Email:<b id="req">*</b></label>-->
<!--                        <input type="email" class="input-control" name="email" required="">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label>Mật khẩu:<b id="req">*</b></label>-->
<!--                        <input type="password" class="input-control" name="password" required="">-->
<!--                    </div>-->
<!--                    <input type="submit" class="button" value="Đăng nhập">-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-6">-->
<!--            <div class="wrapper-form">-->
<!--                <p class="title"><span>Tạo tài khoản mới</span></p>-->
<!--                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>-->
<!--                <a href="index.php?controller=account&action=register" class="button">Đăng ký</a> </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->