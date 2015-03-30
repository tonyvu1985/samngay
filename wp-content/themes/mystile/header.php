<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
global $woo_options, $woocommerce;
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php if ( $woo_options['woo_boxed_layout'] == 'true' ) echo 'boxed'; ?> <?php if (!class_exists('woocommerce')) echo 'woocommerce-deactivated'; ?>">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php woo_title(''); ?></title>
<?php woo_meta(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	wp_head();
	woo_head();
?>

</head>

<body <?php body_class(); ?>>
<?php woo_top(); ?>

<div id="wrapper">
	<!-- call scroll up template -->
	<?php include_once('scroll-up.php'); ?>

	<!-- load script when it is product page --!>
	<?php if (is_product()):?>
		<script defer>
			jQuery(document).ready(function(){
				jQuery('.single_add_to_cart_button').after("<p class='huong-dan-mua-hang'><i class='icon-bookmark-empty'></i>&nbsp; <a href='http://www.samngay.local/huong-dan-mua-hang/' target='_blank'>Hướng dẫn mua hàng</a></p>");
			})
		</script>
	<?php endif; ?>
	<div id="top">
		<nav class="col-full" role="navigation">
			<?php if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'top-menu' ) ) { ?>
			<?php wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'top-nav', 'menu_class' => 'nav fl', 'theme_location' => 'top-menu' ) ); ?>
			<?php } ?>
			<?php
				if ( class_exists( 'woocommerce' ) ) {
					echo '<ul class="nav wc-nav">';
					woocommerce_cart_link();
					echo '<li cliass="checkout"><a href="'.esc_url($woocommerce->cart->get_checkout_url()).'">'.__('Checkout','woothemes').'</a></li>';
//					echo get_search_form();
					echo '</ul>';
				}
			?>
		</nav>
	</div><!-- /#top -->
    <?php woo_header_before(); ?>

	<header id="header" class="col-full">
		<?
		// register WooCommerce Predictive Search
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Search Sidebar') ) : 
		endif; 
		?>

	       <div class ="usp">
			<div class="block1 col-left" title="Sắm Ngay cung cấp dịch vụ giao hàng miễn phí với mọi đơn hàng trên toàn quốc">
				<i class="icon-truck icon-3x"></i>
				<div class="text">Miễn phí<br/>giao hàng</div>
			</div>
			<div class="block2 col-left" title="Bạn không hài lòng sản phẩm? Bạn có thể trả hoặc đổi hàng trong 30 ngày từ ngày mua hàng, miễn phí hoàn toàn!">
				<i class="icon-calendar icon-3x"></i>
				<div class="text">30 Ngày đổi trả<br/>sản phẩm</div>
			</div>
			<div class="block3 col-left" title="Bạn có thể chuyển khoản cho chúng tôi trước hoặc thanh toán sau khi nhận hàng">
				<i class="icon-credit-card icon-3x"></i>
				<div class="text">Thanh toán<br/>lúc nhận hàng</div>    
			</div>
			<div class="block4 col-left" title="Sắm Ngay sẽ hoàn lại 100% tiền, nếu bạn không hài lòng với sản phẩm.">
				<i class="icon-money icon-3x"></i>
				<div class="text">Hoàn trả lại 100%<br/>nếu không hài lòng</div>        
			</div>
		</div>
		<div style="clear:both"></div>
	    <hgroup>

	    	 <?php
			    $logo = esc_url( get_template_directory_uri() . '/images/logo.png' );
				if ( isset( $woo_options['woo_logo'] ) && $woo_options['woo_logo'] != '' ) { $logo = $woo_options['woo_logo']; }
				if ( isset( $woo_options['woo_logo'] ) && $woo_options['woo_logo'] != '' && is_ssl() ) { $logo = preg_replace("/^http:/", "https:", $woo_options['woo_logo']); }
			?>
			<?php if ( ! isset( $woo_options['woo_texttitle'] ) || $woo_options['woo_texttitle'] != 'true' ) { ?>
			    <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( get_bloginfo( 'description' ) ); ?>">
			    	<img src="<?php echo $logo; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
			    </a>
		    <?php } ?>

			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<h3 class="nav-toggle"><a href="#navigation"><mark class="websymbols">&#178;</mark> <span><?php _e('Navigation', 'woothemes'); ?></span></a></h3>

		</hgroup>


        <?php woo_nav_before(); ?>

		<nav id="navigation" class="col-full" role="navigation">

			<?php
			if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
				wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav fr', 'theme_location' => 'primary-menu' ) );
			} else {
			?>
	        <ul id="main-nav" class="nav fl">
				<?php if ( is_page() ) $highlight = 'page_item'; else $highlight = 'page_item current_page_item'; ?>
				<li class="<?php echo $highlight; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'woothemes' ); ?></a></li>
				<?php wp_list_pages( 'sort_column=menu_order&depth=6&title_li=&exclude=' ); ?>
			</ul><!-- /#nav -->
	        <?php } ?>

		</nav><!-- /#navigation -->

		<?php woo_nav_after(); ?>

	</header><!-- /#header -->

	<?php woo_content_before(); ?>
