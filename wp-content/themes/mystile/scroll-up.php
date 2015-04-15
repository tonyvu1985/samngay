<?php
/* 
 * Authod       Tony Vu
 * Date         2.i3.2015
 * Description  Scroll to top of website 
 */
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


<div id='scroll-div'>
	<a id='scroll'><i class="icon-chevron-up icon-2x" alt="To the top"></i></a><br/>
</div>

<script type='text/javascript' defer>
    
    jQuery(window).scroll(function(){
        if(jQuery(document).scrollTop() == 0){
            jQuery('#scroll-div').hide();
        }else{
            jQuery('#scroll-div').show();
        }
    });
    
    jQuery("#scroll").click(function() {
       jQuery("html, body").animate({ scrollTop: 0 }, "slow");
       return false;
   });

	/* slide tro giup */
	jQuery(".lnkhelp").click(function(e){
		e.preventDefault();
		if(parseInt(jQuery("#lienhe").css("margin-left")) == 0){
			jQuery("#lienhe").animate({"margin-left": '-255px'});
		}else{
			jQuery("#lienhe").animate({"margin-left": '0px'});
		}
		return;
	})
</script>

