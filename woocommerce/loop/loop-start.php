<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if(class_exists('Redux')){
    $courses_columns = paradox_settings('courses_columns');
}
?>
<div class="flex_for_pagination">
<ul class="products display_grid_<?php echo esc_attr($courses_columns); ?> columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?> <?php echo (!is_shop())?'single_archive_page':''; ?>">
