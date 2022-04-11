<header class="header_2">
    <div class="container">
        <div class="row">
            <div class="logo-wrapper col-lg-12 col-md-12 col-12">
                <div class="logo">
                    <?php
                    $logo = esc_attr(get_option('logo'));
                    ?>
                    <a href="<?php echo home_url(); ?>"><img src="<?php print $logo ?>" alt="Logo" class="logo-img"></a>
                </div>
            </div>
            <div class="nav-wrapper col-lg-12 col-sm-12">
                <nav class="nav">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_id' => 'header-menue')); ?>
                </nav>
            </div>
        </div>
    </div>
</header>