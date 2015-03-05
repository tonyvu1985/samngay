<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs">
		<ul class="tabs">
			<?php foreach ( $tabs as $key => $tab ) : ?>

				<li class="<?php echo $key ?>_tab">
					<a href="#tab-<?php echo $key ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
				</li>

			<?php endforeach; ?>
		</ul>
		<?php foreach ( $tabs as $key => $tab ) : ?>
			
			<div class="panel entry-content" id="tab-<?php echo $key ?>">
				<?php 
					call_user_func( $tab['callback'], $key, $tab ) ;

					// get attribute noi-san-xuat
					global $product;
					$noi_san_xuat = $product->get_attribute('noi-san-xuat');
					if (isset($noi_san_xuat) && $noi_san_xuat !=''){
						echo "<p class='noi_san_xuat'>*Nhà sản xuất: " . $noi_san_xuat . ".</p>";
					}

					/* nha phan phoi */
					if ($key == "description") {
						echo "*Nhà nhập khẩu và phân phối: Công ty cổ phần Đại Nam Phát, A16-2, tòa nhà Morning Star, 57 quốc lộ 13, Phường 26, quận Bình Thạnh, Tp.Hồ Chí Minh, điện thoại: (08)38544046 – (08)38544047 – (08) 6675 8708.";
					}
				?>
			</div>

		<?php endforeach; ?>
	</div>

<?php endif; ?>
