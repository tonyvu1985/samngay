<?php
/* Get Category will show in the homepage
	my-pham, me-va-be, cham-soc-da, cham-soc-co-the, cham-soc-rang-mieng, thuoc-bo, dien-tu
*/
function get_product_category_by_id($cat_Ids) {
	foreach($cat_Ids as $id){
		$term = get_term_by('id', $id, 'product_cat', 'ARRAY_A' );
		echo 	'<a href="' . get_bloginfo('url') . '/product-category/' . $term['slug'] . '"><h1 class="cat"><i class="icon-double-angle-right"></i> ' . $term['name']. '</h1></a>';
		echo do_shortcode('[product_category category="' . $term['slug']  . '" per_page="8" order="asc"]');
	}
}

/* Get Category will show in the homepage
        my pham:6, me va be:11, cham-soc-da:10, cham soc co the:245, cham soc rang mieng:127, thuoc bo:12, dien-tu:193
*/
$cat_Ids = array(6, 11, 10, 245, 127, 12, 193);
$product_category = get_product_category_by_id($cat_Ids);
?>      
