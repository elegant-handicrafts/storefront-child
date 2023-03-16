<footer>
    <div class="footer-info">
        <img class="footer-logo"
            src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-head-removed-bg.png' ?> " />
        <h2 class="horley-italic white-color">Lalita Handmade Collections</h2>
        <h4 class="horley-italic orange-color">Wear The Best</h4>
    </div>
    <div class="useful-links">
        <span class="small-title">useful Links</span>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'default',
            )
        );
        ?>
    </div>
    <div class="footer-contacts">
        <span class="small-title">Contact</span>
        <ul>
            <li class="white-color">Lalita Handmade Collections Pvt. Ltd.</li>
            <li class="white-color">Khauma, Bhaktapur, Nepal</li>
            <li class="white-color">+977-9840252557</li>
            <li class="white-color">eleganthandicreafts02@gmail.com</li>
        </ul>
    </div>
</footer>
<div class="copyright">
    Copyright &copy;
    <script>document.write(new Date().getFullYear());</script> All rights reserved
</div>