<?php

/**
 * 
 * 
 * removing various default actions
 */
add_action('init', 'remove_storefront_page_header');
function remove_storefront_page_header()
{
    // to remove title from all but shop page
    remove_action('storefront_page', 'storefront_page_header', 10);
    // to remove "Built with Storefront & WooCommerce.
    remove_action('storefront_footer', 'storefront_credit', 20);

    wp_enqueue_style('some_test_haha', get_template_directory_uri(), );
}


/**
 * 
 * 
 * 
 * to remove title from shop page 
 */
add_filter('woocommerce_show_page_title', 'elegant_hide_shop_page_title');
function elegant_hide_shop_page_title($title)
{
    if (is_shop())
        $title = false;
    return $title;
}

/*
 * 
 * 
 * 
 * for overriding the storefront_handheld_footer_bar at 
 * themes/storefront/woocommerce/storefront-woocommerce-template-functions.php
 */
function elegant_remove_handheld_footer_links($links)
{
    unset($links['my-account']);
    return $links;
}
add_filter('storefront_handheld_footer_bar_links', 'elegant_remove_handheld_footer_links');

/**
 * 
 * 
 * 
 * 
 * remove "Default Sorting" Dropdown @ WooCommerce Shop & Archive Pages
 */
function elegant_remove_default_sorting_storefront()
{
    remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10);
}
add_action('init', 'elegant_remove_default_sorting_storefront');

/**
 * 
 * 
 * 
 * inject footer content
 */
if (!function_exists('elegant_copyright')) {
    function elegant_copyright()
    {
        ?>
        <div>&copy; Elegant Handicrafts.
            <?php echo date('Y') ?>
        </div>
        <?php
    }
}
add_action('storefront_footer', 'elegant_copyright', 10);


if (!function_exists('elegant_styles')) {
    function elegant_styles()
    {
        wp_enqueue_style('navbar', get_stylesheet_directory_uri() . '/assets/css/navbar.css', array(), '1.0', 'all');
        wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', array(), '1.0', 'all');
    }
}
add_action('init', 'elegant_styles');


function elegant_add_search_bar()
{
    ?>
    <div style="margin-bottom:37px">
        <?php
        storefront_product_search();
        ?>
    </div>
    <?php
}
add_action('woocommerce_before_shop_loop', 'elegant_add_search_bar', 10);

register_nav_menus(
    array(
        'default' => __('Default Menu')
    )
);