<?php include '../view/header.php'; ?>

<div>
        <div class="site-inner container">
            <div class="site-content">
                <button type="button" onclick="history.back()" ><i class="fa fa-angle-left"></i> Quay lại</button>
                <nav class="woocommerce-breadcrumb dib">
                    <a href="<?=$app_path?>">Trang chủ</a>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <a href="#"><?=$category['categoryName']?></a>
                </nav>
                <div class="row">
                    <div class="content-area  col-sm-12 col-md-12 col-lg-9  has-sidebar-right">
                        <main class="site-main">
                        <div class="pikowc_header_image pr" style="background-image:url(http://127.0.0.1:8888/theme4/wp-content/uploads/2018/03/h5-s1-1.jpg)">                
                            <header class="woocommerce-products-header pr">
                                <h1 class="woocommerce-products-header__title page-title lh_2 f_s25 f_w5" data-title="<?=$category_name?>"><?=$category_name?></h1>
                            </header>
                        </div>
                        <div class="woocommerce-toolbar"></div>
                        <div class="grid products-grid columns-3 mobile">
                            <div class="yit-wcan-container">
                                <div class="piko-masonry products row">
                                    <?php foreach($products as $product):?>
                                        <article class="post-45 product type-product status-publish has-post-thumbnail brands-sony product_cat-mobile col-12 col-sm-6 col-md-4 first instock shipping-taxable purchasable product-type-simple">
                                            <div class="product-wrap pl-1">
                                                <figure>
                                                    <a href="<?=$app_path."catalog/?product_id=".$product['productID']?>">
                                                        <img width="300" height="300" src="<?=$app_path?>images/<?=$product['image']?>" class="attachment-shop_catalog size-shop_catalog" alt="">
                                                    </a>
                                                </figure>
                                                <a href="<?=$app_path.'cart/?action=add&product_id='.$product['productID'].'&quantity=1'?>" class="button add_to_cart_button">Thêm vào giỏ</a>
                                            </div>
                                            <div class="product-middle">
                                                <div class="product-brand d_flex align-items-center justify-content-between mt15">
                                                    <div class="product_meta"><?=$product['madeBy']?></div>
                                                </div>
                                                <div class="title-wrap">
                                                    <h3 class="product-title">
                                                        <a href="<?=$app_path."catalog/?product_id=".$product['productID']?>"><?=$product['productName']?></a>
                                                    </h3>
                                                </div>
                                                <div class="d_flex align-items-center justify-content-between btn-action">
                                                    <span class="price">
                                                        <span class="woocommerce-Price-amount amount"><?php echo number_format($product['listPrice']).' đ' ?></span>                                                    </span>
                                                </div>
                                            </div>
                                        </article>
                                    <?php endforeach?>
                                </div>
                            </div>
                        </main>
                    </div>
                    <?php include '../view/sidebar.php' ?>
                </div>
            </div>
        </div>
    </div> 

<?php include '../view/footer.php'; ?>