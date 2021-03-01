<?php 
/**
 * Template part displaying Page Parent
 *
 * If this page is a child, the parent page will display
 * as a secondary nav with link to parent page.
 * The secondary nav also displays a search field that only
 * searches pages.
 *
 * @package Wayne
 */
    global $post;
    if ( $post->post_parent ): 
?>
<div class="secondary-nav">
    <div class="container">
        <div class="kb-flex">
            <a href="
                <?php 
                    echo get_permalink( $post->post_parent ); 
                ?>  
                " class="title">
                <?php 
                    echo get_the_title( $post->post_parent ); 
                ?>
            </a>
            <div class="search">
                <?php 
                    get_template_part( 'searchform-pages' ); 
                ?>
            </div>
        </div>
    </div>
</div>
<?php 
    endif; 
?>