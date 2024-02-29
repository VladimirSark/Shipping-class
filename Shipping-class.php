<?php
/*
Plugin Name: Display Shipping Class
Description: Display shipping class in product page
Version: 1.0.0
Author: Vladimir
*/

/* Display the shipping class on the product page.
*/
function show_shipping_class_on_product_page() {
    global $product;

    $shipping_class_id = $product->get_shipping_class_id();

    if ($shipping_class_id > 0) {
        $shipping_class = get_term($shipping_class_id, 'product_shipping_class');
        $shipping_class_name = $shipping_class->name;
        echo '<p class="shipping-class">Sandėliuojama: ' . $shipping_class_name . '</p>';
    }
}
add_action('woocommerce_single_product_summary', 'show_shipping_class_on_product_page', 25);
