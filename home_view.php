<?php include 'view/header.php'; ?>
<div class="slideshow-container">
    <div class="mySlides1">
        <img src="<?=$app_path?>images/banners/galaxy-s10-banner.jpg" style="width:100%">
    </div>
    <div class="mySlides1">
        <img src="<?=$app_path?>images/banners/iphone-xs-banner.png" style="width:100%">
    </div>
  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<div class="site-inner container">
    <div class="site-content">
        <div class="row">
            <div class="content-area  col-sm-12">
                <main class="site-main">
                    <div class="vc_row wpb_row vc_row-fluid mb30 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                            <div class="vc_column-inner vc_custom">
                                <div class="wpb_wrapper">
                                    <div class="icon-layout-1 ">
                                        <div class="d_flex icon-block align-items-center">
                                            <div class="icon-wrap">
                                                <span class="pe-7s-car " aria-hidden="true"></span>
                                            </div>
                                            <div class="icon-content pl25">
                                                <h5>Miễn phí giao hàng</h5>         
                                                <div>Miễn phí giao hàng tất cả các mặt hàng </div>                                        
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                            <div class="vc_column-inner vc_custom">
                                <div class="wpb_wrapper">
                                    <div class="icon-layout-1  ">
                                        <div class="d_flex icon-block align-items-center">
                                            <div class="icon-wrap">
                                                <span class="pe-7s-help2 " aria-hidden="true"></span>
                                            </div>
                                            <div class="icon-content pl25">
                                                <h5>Hỗ trợ 24/7</h5>         
                                                <div>Đội ngũ Wooxon sẵn sàng phục vụ 24/7</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                            <div class="vc_column-inner vc_custom">
                                <div class="wpb_wrapper">
                                    <div class="icon-layout-1  ">
                                        <div class="d_flex icon-block align-items-center">
                                            <div class="icon-wrap">
                                                <span class="pe-7s-refresh-2 " aria-hidden="true"></span>
                                            </div>
                                            <div class="icon-content pl25">
                                                <h5>Chính sách hoàn trả</h5>         
                                                <div>Hoàn trả sản phẩm trong 30 ngày </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="icon-layout-1  ">
                                        <div class="d_flex icon-block align-items-center">
                                            <div class="icon-wrap">
                                                <span class="pe-7s-cash " aria-hidden="true"></span>
                                            </div>
                                            <div class="icon-content pl25">
                                                <h5>Thanh toán an toàn</h5>         
                                                <div>Đảm bảo an toàn giao dịch 100%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid push-col mb30">
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="p-cats-tab-1 type-tab-1 s-item-1 columns-3 fix-p-hover">    
                                        <ul class="tabs piko-filter ul-no d_flex justify-content-start panel-2 mb30 mb20-sm pr">
                                            <li class="tabs-title">
                                                <a class="db pr f_s19 f_w6 t_u t_nowrap c_s">
                                                    <span>Điện thoại di động</span>  
                                                </a>
                                            </li>                       
                                        </ul>
                                        <div class="cols-wrap">
                                            <div class="products piko-tab-slide sip">
                                                <div class="piko-carousel slick-initialized active">
                                                    <?php foreach($lastest_products['dienthoai'] as $product): ?>
                                                        <article class="product type-product slick-slide" style="width: 285px; height: 348px;">
                                                            <div class="product-wrap">                                                    
                                                                <div class="product-top">                        
                                                                    <figure>
                                                                        <a href="<?=$app_path.'catalog/?product_id='.$product['productID']?>">
                                                                        <img width="300" height="300" src="<?=$app_path.'images/'.$product['image']?>" class="attachment-shop_catalog size-shop_catalog"></a>
                                                                    </figure>                                                                       
                                                                    <!-- End .product-action -->
                                                                </div>
                                                                <a href="<?=$app_path.'cart/?action=add&product_id='.$product['productID'].'&quantity=1'?>" class="button add_to_cart_button">Thêm vào giỏ</a>    
                                                                <div class="product-middle">
                                                                    <div class="product-brand d_flex align-items-center justify-content-between mt15">
                                                                        <div class="product_meta"><?=$product['madeBy']?></div>                 
                                                                    </div><!-- End .product-brand -->        
                                                                    <div class="title-wrap">
                                                                        <h3 class="product-title">
                                                                            <a href="<?=$app_path.'catalog/?product_id='.$product['productID']?>"><?=$product['productName']?></a>
                                                                        </h3>
                                                                    </div>        
                                                                    <div class="d_flex align-items-center justify-content-between">
                                                                        <span class="price"><?=number_format($product['listPrice'])?> đ</span>                                                                                                                                                                                                                                        
                                                                    </div>
                                                                </div>                                                            
                                                            </div>
                                                        </article>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div><!-- End .products -->
                                        </div><!-- End .products -->   
                                    </div><!-- End tab-container -->
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="block-wrap vc_custom_heading "> 
                                        <figure class="block-box">
                                            <div class="block-header center-top">
                                                <div style="text-align: center" class="fs20">
                                                    <span class="sub-title font_2 f_s16" style="font-weight:300;font-style:normal">Những cải tiến mạnh mẽ</span>Galaxy s10 plus, Iphone Xs Max<br>
                                                    <strong>NHIỀU</strong> và hơn nữa<br>
                                                    <a href="<?=$app_path?>catalog/?category_id=1" class="banner-btn">Xem ngay </a>
                                                </div>
                                            </div>
                                            <a href="#" title="Explore ">
                                                <img width="255" height="450" src="<?=$app_path?>images/h4-b1-1.jpg" class="attachment-full size-full" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid push-col mb30">
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="p-cats-tab-1 type-tab-1 s-item-1 columns-3 fix-p-hover">    
                                        <ul class="tabs piko-filter ul-no d_flex justify-content-start panel-2 mb30 mb20-sm pr">
                                            <li class="tabs-title">
                                                <a class="db pr f_s19 f_w6 t_u t_nowrap c_s">
                                                    <span>Máy ảnh</span>  
                                                </a>
                                            </li>                       
                                        </ul>
                                        <div class="cols-wrap">
                                            <div class="products piko-tab-slide sip">
                                                <div class="piko-carousel slick-initialized active">
                                                    <?php foreach($lastest_products['mayanh'] as $product): ?>
                                                        <article class="product type-product slick-slide" style="width: 285px; height: 348px;">
                                                            <div class="product-wrap">                                                    
                                                                <div class="product-top">                        
                                                                    <figure>
                                                                        <a href="<?=$app_path.'catalog/?product_id='.$product['productID']?>">
                                                                        <img width="300" height="300" src="<?=$app_path.'images/'.$product['image']?>" class="attachment-shop_catalog size-shop_catalog"></a>
                                                                    </figure>                                                                       
                                                                    <!-- End .product-action -->
                                                                </div>
                                                                <a href="<?=$app_path.'cart/?action=add&product_id='.$product['productID'].'&quantity=1'?>" class="button add_to_cart_button">Thêm vào giỏ</a>    
                                                                <div class="product-middle">
                                                                    <div class="product-brand d_flex align-items-center justify-content-between mt15">
                                                                        <div class="product_meta"><?=$product['madeBy']?></div>                 
                                                                    </div><!-- End .product-brand -->        
                                                                    <div class="title-wrap">
                                                                        <h3 class="product-title">
                                                                            <a href="<?=$app_path.'catalog/?product_id='.$product['productID']?>"><?=$product['productName']?></a>
                                                                        </h3>
                                                                    </div>        
                                                                    <div class="d_flex align-items-center justify-content-between">
                                                                        <span class="price"><?=number_format($product['listPrice'])?> đ</span>                                                                                                                                                                                                                                        
                                                                    </div>
                                                                </div>                                                            
                                                            </div>
                                                        </article>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div><!-- End .products -->
                                        </div><!-- End .products -->   
                                    </div><!-- End tab-container -->
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="block-wrap vc_custom_heading "> 
                                        <figure class="block-box">
                                            <div class="block-header center-top">
                                                <div style="text-align: center" class="fs20">
                                                    <span class="sub-title font_2 f_s16" style="font-weight:300;font-style:normal">Máy ảnh giá tốt nhất</span>Mẫu mới nhất<br>
                                                    <strong>ƯU ĐÃI</strong> và nhiều hơn nữa<br>
                                                    <a href="<?=$app_path?>catalog/?category_id=2" class="banner-btn">Tìm hiểu </a>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <img width="255" height="450" src="<?=$app_path?>images/h4-b4-1.jpg" class="attachment-full size-full">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
<?php include 'view/footer.php'; ?>