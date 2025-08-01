<?php
wp_enqueue_style( 'dashicons' );
wp_enqueue_style( 'asp-all-products-css' );

ob_start();
//Page
?>
<div class="wp-asp-post-grid wp-asp-grid">
	_%search_box%_
	<div id="wp-asp-members-list">
		_%products_list%_
	</div>
	_%pagination%_
</div>
<?php
$tpl['page'] = ob_get_clean();
ob_start();
$strSearch      = __( 'Search', 'stripe-payments' );
$strClearSearch = __( 'Clear search', 'stripe-payments' );
$strViewItem    = __( 'View Item', 'stripe-payments' );
//Search box
?>

<div id="asp-sort-wrapper">	
<form method="GET" id="asp-sort-by-form">
<select id="asp-sort-by" name="asp-sortby">
	<option value=""><?php echo esc_html__( 'Select sorting option', 'stripe-payments' ); ?></option>
	<option <?php echo ("id-desc"==$sort_by?"selected='selected'":"") ?> value="id-desc"><?php echo esc_html__( 'Sort by latest', 'stripe-payments' ); ?></option>
	<option <?php echo ("title-asc"==$sort_by?"selected='selected'":"") ?> value="title-asc"><?php echo esc_html__( 'Sort by title', 'stripe-payments' ); ?></option>
	<option <?php echo ("price-asc"==$sort_by?"selected='selected'":"") ?> value="price-asc"><?php echo esc_html__( 'Sort by price (low to high)', 'stripe-payments' ); ?></option>
	<option <?php echo ("price-desc"==$sort_by?"selected='selected'":"") ?> value="price-desc"><?php echo esc_html__( 'Sort by price(high to low)', 'stripe-payments' ); ?></option>
</select>
</form>
</div>


<form id="wp-asp-search-form" method="GET">
	<div class="wp-asp-listing-search-field">
		<input type="text" class="wp-asp-search-input" name="asp_search" value="_%search_term%_" placeholder="<?php echo esc_attr($strSearch); ?> ...">
	<button type="submit" class="wp-asp-search-button" value="<?php echo esc_attr($strSearch); ?>" title="<?php echo esc_attr($strSearch); ?>"><span class="dashicons dashicons-search"></button>
	</div>
</form>
<div class="wp-asp-search-res-text">
	_%search_result_text%__%clear_search_button%_
</div>
<?php
$tpl['search_box']          = ob_get_clean();
$tpl['clear_search_button'] = ' <a href="_%clear_search_url%_">' . $strClearSearch . '</a>';
ob_start();
//Member item
?>
<div class="wp-asp-grid-item wp-asp-product-id-%[product_id]%">
	<div class="wp-asp-product-thumb"><img src="%[product_thumb]%"></div>
	<div class="wp-asp-product-price">%[product_price]%</div>
	<div class="wp-asp-product-name">%[product_name]%</div>
	%[view_product_btn]%
</div>
<?php
$tpl['products_item']      = ob_get_clean();
$tpl['products_list']      = '';
$tpl['products_per_row']   = 3;
$tpl['products_row_start'] = '<div class="wp-asp-grid-row">';
$tpl['products_row_end']   = '</div>';
ob_start();
//Pagination
?>
<div class="wp-asp-pagination">
	<ul>
		_%pagination_items%_
	</ul>
</div>
<?php
$tpl['pagination'] = ob_get_clean();
//Pagination item
$tpl['pagination_item'] = '<li><a href="%[url]%">%[page_num]%</a></li>';
//Pagination item - current page
$tpl['pagination_item_current'] = '<li><span>%[page_num]%</span></li>';

//Profile button
$tpl['view_product_btn'] = '<div class="wp-asp-view-product-btn"><a href="%[product_url]%" class="wp-asp-view-product-lnk"><button>' . $strViewItem . '</button></a></div>';


