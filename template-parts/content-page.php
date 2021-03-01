<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wayne
 */

$featured_image_banner = get_field('featured_image_banner');
?>
<?php 
    if ( $featured_image_banner ): 
?>
    <div class="image-strip">
        <div class="image-gray-strip-top"></div>
        <div class="image-gray-strip-bottom"></div>
        <img src="
            <?php 
                echo esc_url( $featured_image_banner['url'] ); 
            ?>
        " 
        alt="
            <?php 
                echo esc_attr( $featured_image_banner['alt'] ); 
            ?>
        " />
    </div>
<?php 
    endif; 
    // Content Controls
    $pretitle = get_field('pretitle');
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    // Alignment Controls
	$content_alignment = get_field('item_alignment');
	$align_titles_center = get_field('align_titles_center');
	if ( $align_titles_center ): 
		$content_align_text = ' press-text-center';
	else: 
		$content_align_text = '';
	endif;
	if ( $content_alignment == 'center' ): 
		$content_layout_class = ' content-center';
		$content_layout_alignment = 'press-flex-justify-center';
		$content_columns_class = 'col-sm-12 col-md-9';
		$content_buttons_alignment = ' press-flex-justify-center';
	elseif ( $content_alignment == 'right' ): 
		$content_layout_class = ' content-right';
		$content_layout_alignment = 'press-flex-justify-end';
		$content_columns_class = 'col-sm-12 col-md-7';
		$content_buttons_alignment = ' press-flex-justify-start';
	else: 
		$content_layout_class = ' content-left';
		$content_layout_alignment = 'press-flex-justify-space-between';
		$content_columns_class = 'col-sm-12 col-md-7';
		$content_buttons_alignment = ' press-flex-justify-start';
	endif;
    // Styling and Positioning Controls
	$content_background_color = get_field('content_editor_background_color');
	if ( !$content_background_color ): 
		$content_background_color = 'transparent';
	endif;
    $custom_class = get_field('content_editor_custom_class');
    // Link Controls
	$button_1_url = get_field('button_1_url');
    $button_2_url = get_field('button_2_url');
    $button_1_text = get_field('button_1_text');
    $button_2_text = get_field('button_2_text');
    $button_1_activate_chat = get_field('button_1_activate_chat');
    $button_2_activate_chat = get_field('button_2_activate_chat');
    $button_1_new_tab = get_field('button_1_new_tab');
    $button_2_new_tab = get_field('button_2_new_tab');
    $button_1_color = get_field('button_1_color');
    $button_2_color = get_field('button_2_color');
    $button_1_hover = get_field('button_1_hover');
    $button_2_hover = get_field('button_2_hover');
    if ($button_1_color):
        $button_one_color = $button_1_color;
    else:
        $button_one_color = 'orange-county';
    endif;
    if ($button_2_color):
        $button_two_color = $button_2_color;
    else:
        $button_two_color = 'anchorage';
    endif;
    if ($button_1_hover):
        $button_one_hover = $button_1_hover;
    else:
        $button_one_hover = 'miami';
    endif;
    if ($button_2_hover):
        $button_two_hover = $button_2_hover;
    else:
        $button_two_hover = 'miami';
    endif;
    if ( $button_1_activate_chat ):
        $chat_1_activate = ' activate-chat';
    endif; 
    if ( $button_2_activate_chat ):
        $chat_2_activate = ' activate-chat';
    endif; 
?>
<article id="post-
    <?php 
        the_ID(); 
    ?>
" 
<?php 
    post_class(); 
?>
>
<?php 
    if ( $pretitle || $title || $subtitle || !empty( get_the_content() ) ): 
?>
    <div class="content-editor-controls
        <?php 
            echo $content_layout_class; 
            echo $custom_class; 
        ?>
    " 
    style="background-color:
    <?php 
        echo $content_background_color; 
    ?>
    ;">
        <div class="container">
            <div class="row press-flex 
                <?php 
                    echo $content_layout_alignment; 
                ?>
                ">
                    <div class="
                        <?php 
                            echo $content_columns_class; 
                        ?>
                    ">
                    <?php 
                        if ( $pretitle ): 
                    ?>
                        <span class="press-pretitle
                            <?php 
                                echo $content_align_text; 
                            ?>
                        ">
                        <?php 
                            echo $pretitle; 
                        ?>
                        </span>
                    <?php 
                        endif; 
                    ?>
                    <?php 
                        if ( $title ): 
                    ?>
                        <h2 class="content-editor-title
                            <?php 
                                echo $content_align_text; 
                            ?>
                        ">
                        <?php 
                            echo $title; 
                        ?>
                        </h2>
                    <?php 
                        endif; 
                    ?>
                    <?php 
                        if ( $subtitle ): 
                    ?>
                        <span class="press-pretitle
                            <?php 
                                echo $content_align_text; 
                            ?>
                        ">
                        <?php 
                            echo $subtitle; 
                        ?>
                        </span>
                    <?php 
                        endif; 
                    ?>
                    <div class="insert-content">
                        <?php 
                            the_content(); 
                        ?>
                    </div> 
		        </div>
            </div>
        </div>
    </div>
<?php 
    endif; 
?>
</article>