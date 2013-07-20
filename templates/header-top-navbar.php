<header role="banner" class="banner container">

          <h1 class="text-center">
            <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
          </h1>
          <h2 class="text-center"><?php bloginfo('description'); ?></h2>

  <div class="banner navbar navbar-inverse" >
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <nav class="nav-main nav-collapse collapse" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            endif;
          ?>
        </nav>
      </div>
    </div>
  </div>
</header>

