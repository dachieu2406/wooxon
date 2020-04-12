<div>
    <div class="site-inner container">
        <div class="site-content">
            <button type="button" onclick="history.back()" ><i class="fa fa-angle-left"></i> Quay lại</button>
            <nav class="woocommerce-breadcrumb dib">
                <a href="<?=$app_path?>">Trang chủ</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="<?=$app_path.'catalog/?category_id='.$category['categoryID'] ?>"><?=$category['categoryName']?></a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="#"><?=$product['productName']?></a>
            </nav>
            <div class="row">
                <div class="content-area  col-sm-12 col-md-12 col-lg-9  has-sidebar-right">
                    <main class="site-main">
                        <div class="post-45 product type-product status-publish has-post-thumbnail brands-sony product_cat-mobile bottom  product-single first instock shipping-taxable purchasable product-type-simple">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images  pr piko-product-imges">
                                        <figure class="woocommerce-product-gallery__wrapper piko-thumb ">
                                            <img src="<?=$app_path.'images/'.$product['image']?>" width="500px"/>
                                        </figure>    
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="summary entry-summary product-details">
                                        <h1 class="product_title entry-title"><?=$product['productName']?></h1>
                                        <div class="shear-brand mt15">
                                            <p class="price">Giá bán: <?=number_format($product['listPrice'])?> ₫</p>                                            
                                        </div>
                                        <div>
                                            <p class="price">Hãng sản xuất: <?=$product['madeBy']?></p>
                                        </div>
                                        
                                        <div class="woocommerce-product-details__short-description">
                                            <ul>
                                                <?=$product['description']?>
                                            </ul>
                                        </div>
                                        <div class="btn-details-action mt25">
                                            <form class="cart" action="<?=$app_path?>cart" method="get">
                                                <input type="hidden" name="action" value="add">
                                                <input type="hidden" name="product_id" value="<?=$product['productID']?>">
                                                <div class="quantity">              
                                                    <input type="number" class="input-text qty text" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric">
                                                </div>
                                                <button type="submit" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <?php include 'sidebar.php' ?>
            </div>
            
        </div>
    </div>
</div> 
