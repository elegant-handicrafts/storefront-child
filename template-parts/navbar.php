<div class="navbar-wrapper">
    <div class="navbar">
        <a href="<?php echo get_home_url() ?>">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-head-removed-bg.png' ?>"
                style="height: 40px" />
        </a>
        <div style="display: flex; align-items: center">
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
</div>