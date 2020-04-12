<?php $lastest_products = get_lastest_products(4); ?>
<aside id="secondary" class="widget-area  col-sm-12 col-md-12 col-lg-3 sidebar sidebar-right">
    <section id="woocommerce_products-3" class="widget woocommerce widget_products">
        <h4 class="widget-title">Sản phẩm mới về</h4>
        <ul class="product_list_widget">
            <?php foreach($lastest_products as $product): ?>
            <li>
                <a href="<?=$app_path.'catalog/?product_id='.$product['productID']?>">
                    <img width="300" height="300" src="<?=$app_path.'images/'.$product['image']?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">		
                    <span class="product-title"><?=$product['productName']?></span>
                </a>
	            <span><?=number_format($product['listPrice'])?> đ</span>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>	
</aside>