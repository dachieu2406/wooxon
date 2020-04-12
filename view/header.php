<!DOCTYPE html>
<html lang="vi-VN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wooxon</title>
    <link rel='stylesheet' href="<?=$app_path?>css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" type="text/css"/>
    <link rel='stylesheet' href="<?=$app_path?>css/custom.css" type="text/css"/>
    <link rel='stylesheet' href="<?=$app_path?>css/js_composer.min.css" type="text/css"/>
</head>
<body class="woocommerce header-layout-2 woocommerce-account ">
    <header class="site-header">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 columns">
                        <div class="header-left">
                            <div class="site-logo">
                                <a class="dib" href="#">
                                    <img class="site-logo-image" width="170px" src="<?=$app_path?>images/logo.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="main-menu-wrap">
                                <ul class="main-menu mega-menu effect-down subeffect-fadein-left show-arrow">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home  narrow "><a href="<?=$app_path?>" class="">Trang chủ</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children active has-sub narrow "><a href="#" class=" current ">Sản phẩm</a>
                                        <div class="popup" style="display: block;">
                                            <div class="inner" style="">
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-menu-item active" data-cols="1"><a href="<?=$app_path.'catalog/?category_id=1'?>" class="">Điện thoại</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat " data-cols="1"><a href="<?=$app_path.'catalog/?category_id=2'?>" class="">Máy ảnh</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat " data-cols="1"><a href="<?=$app_path.'catalog/?category_id=3'?>" class="">Laptop</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat " data-cols="1"><a href="#" class="">Tivi</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  sub" data-cols="1"><a href="#" class="">Phụ kiện</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Đồng hồ</a></li>
                                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Tai nghe</a></li>
                                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat "><a href="#" class="">Khác</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>                                     
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home  narrow "><a href="<?=$app_path?>cart" class="">Giỏ hàng</a></li>
                                    <?php if(!isset($_SESSION['user'])): ?>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home  narrow "><a href="<?=$app_path?>account" class="">Đăng nhập</a></li>
                                    <?php else: ?>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home  narrow "><a href="<?=$app_path?>account/?action=logout" class="">Đăng xuất</a></li>
                                    <?php endif?>
                                </ul>
                                <div class="header-actions">
                                    <ul class="ul-no d_flex flex-row-reverse">
                                    
                                        <li class="cart-button">
                                            <a href="<?=$app_path.'cart'?>">
                                            <span class="tools_button_icon pr">
                                                <span class="icon-cart"></span><span class="cart-items">
                                                    <?=count($_SESSION['cart']) ?>
                                                </span>
                                            </span>
                                            </a>
                                        </li>
                                        <?php if(isset($_SESSION['user'])): ?>
                                        <li class="search-button"><a>Xin chào <?=$_SESSION['user']['lastName']?></a></li>
                                    <?php endif?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>