<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wayne
 */

get_header(); 
// Insert secondary nav which displays Page Parent
get_template_part( 'template-parts/secondary-nav' );
// Insert page title builder
get_template_part( 'template-parts/page', 'title' );

  if ( !empty( get_the_content() ) ) : 

    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'page' );
    endwhile; // End of the loop.

  endif; 
// Insert additional modules - using ACF Flexible Content
get_template_part( 'template-parts/modules' );

get_footer();
