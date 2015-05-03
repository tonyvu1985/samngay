<?php
/* 
 * Authod       Tony Vu
 * Date         2.i3.2015
 * Description  Scroll to top of website 
 */
?>
<?php
        /* Get cart detail */
        global $woocommerce;
        $items = $woocommerce->cart->get_cart();
	if($items != null){
		$html = "<table class='cart-detail'>";
		$html .= "<tr><td colspan='2'><h3 class='heading pull-left'>Giỏ hàng của bạn</h3><i class='icon-remove pull-right'></i></td></tr>";
		foreach($items as $item => $values) { 
			$_product = $values['data']->post; 
			$html .= '<tr>';
			$html .= '<td style="text-align:center;">';
			$html .=        get_the_post_thumbnail($_product->ID, array(60,60), 'thumbnail');
			$html .= '</td>';
			$html .= '<td>';
			$html .=        "<h3><a href='" . get_permalink($_product->ID) . "'>" . $_product->post_title . "</a></h3>";
			$price =        get_post_meta($values['product_id'] , '_price', true);
			$html .=        "<p>" . $values['quantity'] . " x " . wc_price($price) . "</p>";
			$html .= '</td>';
			$html .= '</tr>';
		} 
		$html .= "<tr><td colspan='2'><a class='btn btn-default button' href='" . esc_url($woocommerce->cart->get_checkout_url()). "'>Thanh toán</i></td></tr>";
		$html .= "</table>";
		echo $html;
	}
?>
<!-- lien he -->
<div id="lienhe">
	<div class="info">
		<p style="color:#999">Xin Liên hệ hỏi đáp - tư vấn tại đây</p>
		<i class="bgicon icon-phone"></i>&nbsp; (08) 6258 5840 - (08) 6675 8708<br/><br/>
		<i class="bgicon icon-envelope"></i>&nbsp; <a href="<?php echo get_site_url() . '/lien-he/';?>">Liên hệ</a><br/><br/>
		<i class="bgicon icon-question"></i>&nbsp; <a href="<?php echo get_site_url() . '/huong-dan-mua-hang/';?>" target="_blank">Hướng dẫn mua hàng</a>
	</div>
	<div class="tro-giup">
		<p><a class="lnkhelp">Trợ giúp mua hàng</a></p>	
	</div>
</div>

<!-- Pre Order -->
<div id="preOrder">
	<div class="text">
		<span class="discount">5% OFF</span>
		<p><a data-toggle="modal" data-target="#myModalPreOrder">Đặt hàng trước</a></p>
	</div>
</div>

<script type='text/javascript' defer>
jQuery(document).ready(function() {

	/* slide tro giup */
	jQuery(".lnkhelp").click(function(e){
		e.preventDefault();
		if(parseInt(jQuery("#lienhe").css("margin-left")) == 0){
			jQuery("#lienhe").animate({"margin-left": '-263px'});
		}else{
			jQuery("#lienhe").animate({"margin-left": '0px'});
		}
		return;
	})

	/* Navigation Menu Fixed on Desktop (not on mobile)	*/    
	if (jQuery(window).width() > 768) {  
		var aboveHeight = 140;
		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop() > aboveHeight){
				jQuery('#navigation').addClass('fixed');
			} else {
				jQuery('#navigation').removeClass('fixed').next().css('padding-top','0');
			}
		});
	}

	jQuery('.nav .user-info').bind('mouseover', function(){
		jQuery('.cart-detail').show();
	})
	jQuery('.cart-detail .icon-remove').bind('click', function(){
		jQuery('.cart-detail').hide();
	})
})
</script>
