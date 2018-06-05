<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">    
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <img src="<?php bloginfo('template_directory')?>/images/logonotext.png" class=" img-fluid topbrandimage">
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: #262626">
        <a class="navbar-brand" href="<?php echo home_url();?>"> <?php bloginfo('name');?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-chevron-circle-down"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php
            wp_nav_menu( array(
            'theme_location'    => 'primarymenurs',
            'depth'             => 0,
            'container'         => 'div',
            'container_class'   => 'ml-auto',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'navbar-nav firstnavul',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
        </div>
    </nav>
