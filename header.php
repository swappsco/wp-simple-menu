<!-- This File has structure BEM -->
<header class="header">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar__logo col-xs-12 col-lg-3">                    
        <a href="/" rel="nofollow">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-header.png" class="img-responsive">
        </a>
      </div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
      <?php
        wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'primary',
          'depth'             => 4,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse navbar-right',
          'container_id'      => 'myNavbar',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
        );
      ?>
    </div>
  </nav>
</header>