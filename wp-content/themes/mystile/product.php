<?php
/* Get Category will show in the homepage
	my-pham, me-va-be, cham-soc-da, cham-soc-co-the, cham-soc-rang-mieng, thuoc-bo, dien-tu
*/
function get_product_category_by_id($cat_Ids) {
	foreach($cat_Ids as $id){
		$term = get_term_by('id', $id, 'product_cat', 'ARRAY_A' );
		echo '<hr/ style="clear:both">';
		echo '<div class="row">';
		echo 	'<div class="col-md-8 col-xs-12">';
		echo 		'<a href="' . get_bloginfo('url') . '/product-category/' . $term['slug'] . '"><span class="danhmuc">DM</span><h1 class="cat">' . $term['name']. '</h1></a>';
		echo	'</div>';
		echo	'<div class="col-md-4 col-xs-12 text-right xemtatca">';
		echo		'<a class="btn btn-default" href="' . get_bloginfo('url') . '/product-category/' . $term['slug'] . '">Xem tất cả</a>';
		echo	'</div>';
		echo '</div>';
		echo do_shortcode('[product_category category="' . $term['slug']  . '" per_page="8" order="asc"]');

		// get Brand by Cat
		get_brand_by_cat($term['slug']);
	}
}

function get_brand_by_cat($cat_slug){
	$args = array(
		'posts_per_page' => -1,
		'product_cat' => $cat_slug,
		'post_type' => 'product',
	);

	$the_query = new WP_Query($args);
	// The Loop
	$tam = array();
	$brands = array();
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$brands = get_the_terms(get_the_id(), 'pa_nhan-hieu');
		//var_dump($brands);
		if (is_array($brands)){	
			foreach ((array)$brands as $brand){
				array_push($tam, $brand->term_id);	
			}
		}
	}
	$tam = array_unique($tam);
	$brand = array();
	if (is_array($tam)){	
		foreach((array)$tam as $id){
			$brand = get_the_terms($id, 'pa_nhan-hieu');
			if (is_array($brand)){
				foreach((array)$brand as $b){
					$brand_html .= "<a href='"  . get_bloginfo('url') . '/product-tag/' . $b->slug . "'>" . $b->name . "</a>" . "&nbsp &nbsp";
				}
			}
		}
	}
	if($brand_html){
		echo "<h3 class='shopbybrand'>Mua sắm theo thương hiệu &nbsp</h3>" . $brand_html . "<br/><br/>";
	}
}

/* Get Category will show in the homepage
        my pham:6, me va be:11, cham-soc-da:10, cham soc co the:245, cham soc rang mieng:127, thuoc bo:12, dien-tu:193
*/
$cat_Ids = array(6, 11, 10, 245, 127, 12, 193);
$product_category = get_product_category_by_id($cat_Ids);

/*
//$product->id = 813;
//_thumbnail_id	814 wp_postmeta
$terms1 = get_the_terms(813, 'pa_nhan-hieu');
      foreach ( $terms1 as $term ) {
       //var_dump($term);
       print_r($term);
      // var_dump($term->thumbnail);
       print_r($term->object_id);
	//echo 'tonyvu' . $term->;
//	echo 'tonyvu' . $term->;
//$swatch_term = new WC_Swatch_Term( 813, 253, 'pa_nhan-hieu ', false,             '700' );
//echo $swatch_term->thumbnail_src;
	return;
        }*/
?>      
