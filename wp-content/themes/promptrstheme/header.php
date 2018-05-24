<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="#">PRS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
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
