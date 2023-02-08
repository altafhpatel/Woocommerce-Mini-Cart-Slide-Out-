<?php
//this is the initial concept will update more
define('INCLUDE_CSS',true);
define('DISPLAY_MINI_CART','true');
$css = "<style>.slide-from-left-menu{position: fixed;top: 0;right: -100%;height: 100%;width: 400px;background-color: #f9f9f9;z-index: 99999;transition: all 0.3s linear;box-shadow: 0 0 20px 0px rgba(0,0,0,0.3) }.open-slide-from-left{right:0;}.product_list_widget{font-size: 0.85em;}.product_list_widget li{background-color: #fff;padding: 5px;border-bottom: 1px solid #f1f1f1 }ul.woocommerce-mini-cart li{padding-left: 2em;}ul.woocommerce-mini-cart li .remove{top: 8px }</style>";

$html ="";
function mini_cart_html(){
ob_start();
?>
<div class="mini_cart_sidebar slide-from-left-menu" id="slide_from_left_menu">
	<div class="text-right text-white">
    <button class="btn btn-danger slide-from-left-close" id="cart_closer">X</button>
  </div>
	<div class="widget woocommerce widget_shopping_cart py-5 px-2">
		<div class="widget_shopping_cart_content">
			<?php 
			if(function_exists('woocommerce_mini_cart'))
				echo woocommerce_mini_cart(); ?>
		</div>
	</div>
</div>
$content = ob_get_contents();
return $content;
}
