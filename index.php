<?php
require_once('util/main.php');
require_once('model/product_db.php');
require_once('model/category_db.php');

$lastest_products['dienthoai'] = get_lastest_products_by_category(1);
$lastest_products['mayanh'] = get_lastest_products_by_category(2); 
$lastest_products['laptop'] = get_lastest_products_by_category(3); 

// Display the home page
include('home_view.php');
?>