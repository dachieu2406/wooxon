<?php include '../view/header.php'; ?>
<div>
    <div class="site-inner container">
        <div class="site-content">
            <button type="button" onclick="history.back()" ><i class="fa fa-angle-left"></i> Quay lại</button>
            <nav class="woocommerce-breadcrumb dib">
                <a href="<?=$app_path?>">Trang chủ</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="#">Giỏ hàng</a>
            </nav>
            <div class="row">
                <div class="content-area  col-sm-12">
                    <main class="site-main">
                        <article class="post-8 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form class="woocommerce-cart-form" action="<?=$app_path.'cart'?>" method="get">
                                        <input type="hidden" name="action" value="update">
	                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Sản phẩm</th>
                                                    <th class="product-price">Giá</th>
                                                    <th class="product-quantity">Số lượng</th>
                                                    <th class="product-subtotal">Tổng</th>
                                                    <th class="product-remove"><i class="fa fa-trash" aria-hidden="true"></i></th>
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
                                                        <span><?=number_format($item['list_price'])?> đ</span>
                                                    </td>
						                            <td class="product-quantity">
                                                        <div class="quantity">               
                                                            <input type="number" class="input-text qty text" name="items[<?=$product_id; ?>]" value="<?=$item['quantity']?>" >
                                                        </div>
	                                                </td>
                                                    <td class="product-subtotal">
                                                        <span><?=number_format($item['line_price'])?> đ</span>						
                                                    </td>
                                                    <td class="product-remove pr">
                                                        <a href="<?=$app_path.'cart/?action=remove_item&product_id='.$product_id?>" class="remove mfp-close icon-cross2" aria-label="Xóa sản phẩm này">×</a>						
                                                    </td>
                                                </tr>
                                            <?php endforeach?>
	
                                            <tr>
                                                <td colspan="7" class="actions">
                                                    <button type="submit" class="button f_r_md">Cập nhật giỏ hàng</button>		
                                                </td>
                                            </tr>
					                        </tbody>
	                                    </table>
                                    </form>
                                    <div class="cart-collaterals dib w100 mb50">
	                                    <div class="cart_totals ">
                                            <h2>Tổng giỏ hàng</h2>
                                            <table class="shop_table">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Tạm tính</th>
                                                        <td><?=number_format($sub_total)?> đ</td>
                                                    </tr>
                                                    <tr class="woocommerce-shipping-totals shipping">
                                                        <th>Giao hàng</th>
                                                        <td>
                                                            <ul>
                                                                <li>Giao hàng miễn phí</li>
                                                                <li>Tùy chọn giao hàng sẽ được cập nhật trong quá trình thanh toán.</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Tổng</th>
                                                        <td><strong><?=number_format($sub_total)?> đ</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="<?=$app_path.'cart/?action=checkout'?>" class="checkout-button button alt wc-forward w100 t_u t_c hover">Tiến hành thanh toán</a>
                                            </div>
                                        </div>
                                    </div>
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