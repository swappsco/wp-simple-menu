<?php 
  //Start Register Custom Navigation
  require_once('wp_bootstrap_navwalker.php');

  register_nav_menus( array(
      'primary' => __( 'Theme Menu', 'wordpress' ),
  ) );
  //End Register Custom Navigator
 ?>