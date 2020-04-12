<?php include '../view/header.php'; ?>
<div>
    <div class="site-inner container">
        <div class="site-content">
            <button type="button" onclick="history.back()" ><i class="fa fa-angle-left"></i> Quay lại</button>
            <nav class="woocommerce-breadcrumb dib">
                <a href="<?=$app_path?>">Trang chủ</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="#">Đăng ký</a>
            </nav>
            <div class="row">
                <div class="content-area  col-sm-12 col-md-12 has-sidebar-right">
                    <main class="site-main">
                        <article>
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="piko-my-account">
                                        <div class="inner-my-acount">
                                            <div id="piko-login-form-5d0a67be4824f" class="piko-login-form login-form piko-woo piko-my-account-form show slide">
                                                <span class="title" style="text-align:center; font-weight: bold">Đăng ký</span>
                                                <?php if (!empty($password_message)) : ?>         
                                                    <span class="error"><?php echo htmlspecialchars($password_message); ?></span><br>
                                                <?php endif; ?>
                                                    <form action="." method="post" class="woocommerce-form woocommerce-form-login login">
                                                        <input type="hidden" name="action" value="register">
                                                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
                                                            <label>Địa chỉ email <span class="required">*</span></label>
                                                            <?php echo $fields->getField('email')->getHTML(); ?><br>
                                                            <input type="text" name="email" id="username" autocomplete="username" value="">
                                                        </div>
                                                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide login-password form-group">
                                                            <label>Mật khẩu <span class="required">*</span></label>
                                                            <?php echo $fields->getField('password_1')->getHTML(); ?><br>
                                                            <input type="password" name="password_1" size="30">
                                                        </div> 
                                                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide login-password form-group">
                                                            <label>Nhập lại mật khẩu <span class="required">*</span></label>
                                                            <?php echo $fields->getField('password_2')->getHTML(); ?><br>
                                                            <input type="password" name="password_2" size="30">
                                                        </div>
                                                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide login-password form-group">
                                                            <label>Họ</label>
                                                            <input type="text" name="first_name"
                                                                value="<?php echo htmlspecialchars($first_name); ?>" 
                                                                size="30">
                                                        </div>
                                                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide login-password form-group">
                                                            <label>Tên</label>
                                                            <input type="text" name="last_name"
                                                                value="<?php echo htmlspecialchars($last_name); ?>"
                                                                size="30">
                                                        </div>
                                                        <div class="login-submit form-group"> 
                                                            <input type="submit" class="button" name="login" value="Đăng ký">
                                                            <a href="<?=$app_path?>account" style="float: right">Bạn đã có tài khoản?</a>
                                                        </div>  
                                                    </form>
                                                    <span class="hr"></span>
                                                </div><!-- /.piko-login-form  -->
                                            </div><!-- /.inner-my-acount -->
                                        </div><!-- /.piko-my-account -->
                                    </div>
                                </div><!-- .entry-content -->
                            </article>
                        </main>
                    </div>
                </div>            
            </div>
        </div>
    </div> 

<?php include '../view/footer.php'; ?>
