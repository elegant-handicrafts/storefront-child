<div class="navbar">
    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-head-removed-bg.png' ?>"
        style="height: 40px" />
    <div style="display: flex; align-items: center">
        <?php storefront_product_search(); ?>
        <nav id="site-navigation" style="display: flex; justify-content: flex-end">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </div>
</div>