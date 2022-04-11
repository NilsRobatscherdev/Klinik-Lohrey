<header class="header_1">
    <div class="container">
        <div class="row">
            <div class="logo-wrapper col-12">
                <div class="logo">
                    <?php
                    $logo = esc_attr(get_option('logo'));
                    ?>
                    <a href="<?php echo home_url(); ?>">Transformational Coaching</a>
                </div>
            </div>
            <div class="activator col-md-4 col-4">
                <a class="hamburger"></a>
            </div>
            <div class="nav-wrapper col-lg-10 col-sm-8">
                <nav class="nav">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_id' => 'header-menue')); ?>
                </nav>
            </div>
        </div>
        <div class="header-overlay">
            <div class="nav">
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_id' => 'header-menue')); ?>
            </div>
        </div>
    </div>
</header>