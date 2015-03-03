<?php
/* 
 * Authod       Tony Vu
 * Date         2.i3.2015
 * Description  Scroll to top of website 
 */
?>
<div id='scroll-div'>
	<a id='scroll'><i class="icon-chevron-up icon-2x"></i></a><br/>
	<a href="<?php echo get_site_url() . '/lien-he' ; ?>"><i class="icon-question icon-2x"></i></a>
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
</script>

