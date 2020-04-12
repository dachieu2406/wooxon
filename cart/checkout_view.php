<?php include '../view/header.php'; ?>
<div>
    <div class="site-inner container">
        <div class="site-content">
            <button type="button" onclick="history.back()" ><i class="fa fa-angle-left"></i> Quay lại</button>
            <nav class="woocommerce-breadcrumb dib">
                <a href="<?=$app_path?>">Trang chủ</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="<?=$app_path?>cart">Giỏ hàng</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="#">Thanh toán</a>
            </nav>
            <div class="row">
                <div class="content-area  col-sm-12">
                    <main class="site-main">
                        <article class="post-8 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form class="woocommerce-cart-form" action="" method="get">
                                        <input type="hidden" name="action" value="update">
	                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Sản phẩm</th>
                                                    <th class="product-price">Giá</th>
                                                    <th class="product-quantity">Số lượng</th>
                                                    <th class="product-subtotal">Tổng</th>
                                                </tr>
                                            </thead>
		                                    <tbody>
                                            <?php foreach ($cart as $product_id => $item) : ?>
                                                <tr class="woocommerce-cart-form__cart-item cart_item">
						                            <td class="product-thumbnail " style="text-align: center;">
                                                        <a href="<?=$app_path.'catalog/?product_id='.$product_id?>">
                                                            <img width="100" height="100" src="<?=$app_path.'images/'.$item['image']?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
                                                        </a>
                                                    </td>
						                            <td class="product-name">
                                                        <?=$item['name']?>
                                                    </td>                                                
						                            <td class="product-price">
                                                        <span class="woocommerce-Price-amount amount"><?=number_format($item['list_price'])?><span class="woocommerce-Price-currencySymbol">₫</span></span>
                                                    </td>
						                            <td class="product-quantity">
                                                        <div class="quantity">               
                                                            <span><?=$item['quantity']?></span>
                                                        </div>
	                                                </td>
                                                    <td class="product-subtotal">
                                                        <span class="woocommerce-Price-amount amount"><?=number_format($item['line_price'])?><span class="woocommerce-Price-currencySymbol">₫</span></span>						
                                                    </td>
                                                </tr>
                                            <?php endforeach?>
	
                                            <tr>
                                                <td colspan="3">
                                                    <?php  if(isset($_SESSION['user'])):?>
                                                        <span>Khách hàng: <?=$_SESSION['user']['firstName'].' '.$_SESSION['user']['lastName']?>
                                                    <?php endif ?>
                                                    <ul>
                                                        <li>Giao hàng miễn phí</li>
                                                        <li>Tùy chọn giao hàng sẽ được cập nhật trong quá trình thanh toán.</li>
                                                    </ul>
                                                </td>
                                                <td colspan="7" class="actions">
                                                    <span class="f_r_md"><strong>Tổng: </strong><?=number_format($sub_total)?> đ</p>
                                                </td>
                                            </tr>
					                        </tbody>
	                                    </table>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>           
        </div>
    </div>
</div> 

<?php include '../view/footer.php'; ?>