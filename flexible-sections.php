<?php 
/*
Template Name: Blocks
Template Post Type: page
*/

  get_header();

    while ( have_rows('blocks') ) : the_row();
      
      $layout = get_row_layout();

      get_template_part("blocks/$layout");

    endwhile;

  get_footer();
?>