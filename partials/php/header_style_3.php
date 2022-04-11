<header class="header_3">
    <div class="container">
        <div class="row">
            <div class="logo-wrapper col-lg-2 col-md-8 col-8">
                <div class="logo">
                    <?php
                    $logo = esc_attr(get_option('logo'));
                    ?>
                    <a href="<?php echo home_url(); ?>"><img src="<?php print $logo ?>" alt="Logo" class="logo-img"></a>
                </div>
            </div>
            <div class="activator col-lg-10 col-md-4 col-4">
                <a class="hamburger"></a>
            </div>
        </div>
        <div class="header-overlay">
            <div class="nav">
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_id' => 'header-menue')); ?>
            </div>
        </div>
    </div>
</header>