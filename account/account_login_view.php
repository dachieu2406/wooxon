<?php include '../view/header.php'; ?>
<div>
    <div class="site-inner container">
        <div class="site-content">
            <button type="button" onclick="history.back()" ><i class="fa fa-angle-left"></i> Quay lại</button>
            <nav class="woocommerce-breadcrumb dib">
                <a href="<?=$app_path?>">Trang chủ</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="#">Đăng nhập</a>
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
                                                <span class="title" style="text-align:center; font-weight: bold">Đăng nhập</span>
                                                <?php if (!empty($password_message)) : ?>         
                                                    <span class="error"><?php echo htmlspecialchars($password_message); ?></span><br>
                                                <?php endif; ?>
                                                    <form action="." method="post" class="woocommerce-form woocommerce-form-login login">
                                                        <input type="hidden" name="action" value="login">
                                                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
                                                            <label for="username">Địa chỉ email <span class="required">*</span></label>
                                                            <?php echo $fields->getField('email')->getHTML(); ?><br>
                                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text input form-control" name="email" id="username" autocomplete="username" value="">
                                                        </div>
                                                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide login-password form-group">
                                                            <label for="password" class="lb-user-pw">Mật khẩu <span class="required">*</span></label>
                                                            <?php echo $fields->getField('password')->getHTML(); ?><br>
                                                            <input class="woocommerce-Input woocommerce-Input--text input-text input form-control" type="password" name="password" id="password" autocomplete="current-password">
                                                        </div>
                                                        <div class="login-submit form-group"> 
                                                            <input type="submit" class="button" name="login" value="Đăng nhập">
                                                            <a href="<?=$app_path?>account/?action=view_register" style="float: right" style="float: right">Bạn chưa có tài khoản?</a>
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
