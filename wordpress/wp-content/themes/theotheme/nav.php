<nav id="site-navigation" class="main-navigation">
    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_id'        => 'primary-menu',
            'container'      => 'ul',
            'menu_class'     => 'nav-menu',
        ));
        ?>
    </div>
</nav>