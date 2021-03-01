<?php
  // check if the flexible content field has rows of data from modules
  if( have_rows('add_custom_modules') ):
    // loop through the rows of modules
    while ( have_rows('add_custom_modules') ) : the_row();
      if( get_row_layout() == 'module_titles' ): 
        get_template_part( 'template-parts/module', 'titles' );
      elseif( get_row_layout() == 'module_text_area' ): 
        get_template_part( 'template-parts/module', 'text-area' );
      elseif( get_row_layout() == 'module_content_cta' ): 
        get_template_part( 'template-parts/module', 'content-cta' );
      elseif( get_row_layout() == 'module_buttons' ): 
        get_template_part( 'template-parts/module', 'buttons' );
      elseif( get_row_layout() == 'module_pricing_bundles' ): 
        get_template_part( 'template-parts/pricing-bundles' );
      elseif( get_row_layout() == 'module_checkbox_content' ): 
        get_template_part( 'template-parts/module', 'checkbox-content' );
      elseif( get_row_layout() == 'module_simple_chart' ): 
        get_template_part( 'template-parts/module', 'simple-chart' ); 
      elseif( get_row_layout() == 'static_competitive_chart' ): 
        get_template_part( 'template-parts/static', 'competitive-chart' );
      elseif( get_row_layout() == 'module_testimonials' ): 
        get_template_part( 'layouts/layout', 'testimonials' );
      elseif( get_row_layout() == 'module_testimonial_video' ): 
        get_template_part( 'template-parts/module', 'testimonial-video' );
      elseif( get_row_layout() == 'module_feature_2' ): 
        get_template_part( 'layouts/layout', 'feature-4' );
      elseif( get_row_layout() == 'module_reviews' ): 
        get_template_part( 'template-parts/module', 'reviews' );
      elseif( get_row_layout() == 'module_two_column_icon_block' ): 
        get_template_part( 'template-parts/module', 'two-col-icon-block' );
      elseif( get_row_layout() == 'static_audiences' ): 
        get_template_part( 'template-parts/static', 'audiences' );
      elseif( get_row_layout() == 'module_stacked_tabs' ): 
        get_template_part( 'template-parts/module', 'hover-tabs' );
      elseif( get_row_layout() == 'module_quick_pricing' ): 
        get_template_part( 'template-parts/module', 'quick-pricing' );
      elseif( get_row_layout() == 'module_pricing' ): 
        get_template_part( 'template-parts/pricing' );
      elseif( get_row_layout() == 'module_alternating_columns' ): 
        get_template_part( 'template-parts/module', 'alternating-columns' );
      elseif( get_row_layout() == 'module_video' ):   
        get_template_part( 'template-parts/module', 'video' );
      elseif( get_row_layout() == 'module_organic_themes' ): 
        get_template_part( 'template-parts/module', 'organic-themes' );
      elseif( get_row_layout() == 'module_ebook' ):   
        get_template_part( 'template-parts/module', 'ebook' );
      elseif( get_row_layout() == 'module_ebook_carousel' ):
        get_template_part( 'template-parts/module', 'ebooks-carousel' );
      elseif( get_row_layout() == 'module_accordion' ): 
        get_template_part( 'template-parts/module', 'accordion' );
      elseif( get_row_layout() == 'module_trustpilot' ): 
        get_template_part( 'template-parts/module', 'trustpilot-carousel' );
      elseif( get_row_layout() == 'module_php_template' ): 
        get_template_part( 'template-parts/module', 'php-template' );
      elseif( get_row_layout() == 'module_customize_plan' ): 
        get_template_part( 'template-parts/module', 'customize-plan' );
      elseif( get_row_layout() == 'module_shadow_boxes' ): 
        get_template_part( 'template-parts/module', 'shadow-boxes' );
      endif;
    endwhile;
else :
    // no layouts found
endif;