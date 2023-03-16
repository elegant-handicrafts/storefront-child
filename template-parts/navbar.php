<div style="display:flex; justify-content:center; padding-left:24px; padding-right:24px">
    <div
        style="background:transparent; position:static; top:0; z-index:10;  width:100vw; display:flex; justify-content:space-between;  align-items:center; padding:20px 0; max-width:1063px">
        <a href="<?php echo get_home_url() ?>">
            <img id="navbar-logo"
                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-head-removed-bg.png' ?>"
                style="height: 40px" />
        </a>
        <div style="display: flex; align-items: center">
            <nav id="site-navigation" style="display: flex; justify-content: flex-end">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'default',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </div>
    </div>
</div>