<?php 
/**
 * Template part which displays the page title
 *
 * This page title is part of a custom header builder.
 * Here you will find the ACF fields and the controls that
 * display the content correctly based on the options selected on the page.
 *
 * @package Wayne
 */
// Header Layout Controls
$header_layout = get_field('header_layout');
// Header Content Controls
$title_override = get_field('title_override');
$header_pretitle = get_field('header_pretitle');
$header_description = get_field('header_description');
$header_subtitle = get_field('header_subtitle');
// Header Images Controls
$header_image = get_field('header_image');
$feature_icon = get_field('feature_icon');
// Header Link Controls
$header_link_1_url = get_field('header_link_1_url');
$header_link_2_url = get_field('header_link_2_url');
$header_link_1_button_text = get_field('header_link_1_button_text');
$header_link_2_button_text = get_field('header_link_2_button_text');
$header_link_1_activate_popup = get_field('header_link_1_activate_popup');
$header_link_2_activate_popup = get_field('header_link_2_activate_popup');
$header_link_1_activate_chat = get_field('header_link_1_activate_chat');
$header_link_2_activate_chat = get_field('header_link_2_activate_chat');
$header_link_1_new_tab = get_field('header_link_1_new_tab');
$header_link_2_new_tab = get_field('header_link_2_new_tab');
// Header Styling Controls 
$mode = get_field('mode'); // Controls light / dark layout
$header_background_color = get_field('header_background_color');
$top_padding = get_field('top_padding');
$bottom_padding = get_field('bottom_padding');
$header_background_image = get_field('header_background_image');
$header_background_image_position = get_field('header_background_image_position');
$add_header_class = get_field('add_header_class');
?>

<?php 
/**
 * Conditional Control Settings
 */
if ( $header_layout == 'center' ): 
    $header_layout_class = ' header-center';
    $header_layout_alignment = 'press-flex-justify-center';
    $header_columns_class = 'col-sm-12 col-md-8';
    $header_buttons_alignment = ' press-flex-justify-center';
elseif ( $header_layout == 'right' ): 
    $header_layout_class = ' header-right';
    $header_layout_alignment = 'press-flex-justify-space-between';
    $header_columns_class = 'col-sm-12 col-md-12 col-lg-6';
    $header_buttons_alignment = ' press-flex-justify-start';
else: 
    $header_layout_class = ' header-left';
    $header_layout_alignment = 'press-flex-justify-space-between';
    $header_columns_class = 'col-sm-12 col-md-12 col-lg-6';
    $header_buttons_alignment = ' press-flex-justify-start';
endif;
if ( $mode ): 
    $darkmode = 'dark-mode';
    $outline = '';

else: 
    $outline = '-dark';
endif;
if ( $header_background_color ): 
    $backgroundColor = ' background-color: '. $header_background_color . '; ';
endif;
if ( $header_background_image ):
    $final_background_image = $header_background_image;
    $darkmode = 'dark-mode';
    $outline = '';
    if ( $header_background_image_position ): 
        $final_background_position = $header_background_image_position;
    else:
        $final_background_position = 'top';
    endif; 
else: 
    $final_background_image = '';
endif;  
if ( $top_padding ):
    $padding_top = 'padding-top:'.$top_padding.'px;';
endif;
if ( $bottom_padding ):
    $padding_bottom = 'padding-bottom:'.$bottom_padding.'px;';
endif;
/**
 * Specific Section Conditionals
 */
if ( is_singular('customer-stories') ): 
    $darkmode = 'press-background-light-gray';
endif;
if ( is_singular('customer-stories') || is_singular('strategic-partners') ): 
    $header_layout_class = ' header-center';
    $header_layout_alignment = 'press-flex-justify-center';
    $header_columns_class = 'col-sm-12 col-md-8';
    $header_buttons_alignment = ' press-flex-justify-center';
endif;
?>
<div class="press-title-1
    <?php 
        echo $header_layout_class; 
        echo ' '.$darkmode; 
        if ( $add_header_class ): 
            echo ' '.$add_header_class; 
        endif; 
    ?>
    " style="
    <?php 
        echo $backgroundColor; 
        echo $padding_top; 
        echo $padding_bottom;
        echo 'background-image: url('.$final_background_image.');';
        echo 'background-position: '. $final_background_position .';'; 
    ?>
    ">
    <div class="container">
        <div class="v5-header-flex row 
        <?php 
            echo $header_layout_alignment; 
        ?>
        ">
        <?php 
        if ( $header_image ): 
            if ( $header_layout == 'center' || $header_layout == 'right' ): 
        ?>
            <div class="press-flex press-flex-justify-end 
            <?php 
                echo $header_columns_class; 
            ?>
            ">
                <div class="header-image">
                    <img src="
                    <?php 
                        echo esc_url( $header_image['url'] ); 
                    ?>
                    " 
                    alt="
                    <?php 
                        echo esc_attr( $header_image['alt'] ); 
                    ?>
                    " />
                </div>
            </div>
        <?php
            endif; 
        endif; 
        ?>  
            <div class="
            <?php 
                echo $header_columns_class; 
            ?>
            ">
            <?php 
                if ( $header_pretitle ):
                    echo '<span class="press-pretitle">'.$header_pretitle.'</span>';
                endif;
            ?>  
            <h1>
            <?php 
                if ( $title_override ):
                    echo $title_override; 
                else :
                    the_title();
                endif;
            ?>
            </h1>
            <?php 
                if ( $header_subtitle ):
                    echo '<h2>'.$header_subtitle.'</h2>';
                endif;
            ?> 
            <?php 
                if ( $header_description ): 
            ?>
                <div class="header-desc">
                <?php 
                    echo $header_description; 
                ?>
                </div>
            <?php 
                endif; 
            ?>
            <?php if ( $header_link_1_url || $header_link_2_url ): ?>
                    <div class="press-btn-group 
                    <?php 
                        echo $header_buttons_alignment; 
                    ?>
                    ">
                    <?php 
                        if ( $header_link_1_button_text && $header_link_1_url ): 
                    ?>
                    <div>
                        <a href="
                        <?php 
                            echo $header_link_1_url; 
                        ?>
                        " 
                        <?php 
                            if ( $header_link_1_activate_popup ): 
                                echo 'rel="modal:open" '; 
                            endif; 
                        ?>
                        class="link press-btn press-btn-orange-county press-btn-md
                        <?php 
                            if ( $header_link_1_activate_chat ): 
                                echo ' activate-chat'; 
                            endif; ?>
                        " title="
                        <?php 
                            echo $header_link_1_button_text; 
                        ?>
                        " 
                        <?php 
                            if ( $header_link_1_new_tab ): 
                                echo 'target="_blank"'; 
                            endif; 
                        ?>
                        >
                        <?php 
                            echo $header_link_1_button_text; 
                        ?>
                        </a>
                    </div>
            <?php 
                endif; 
            ?>
            <?php 
                if ( $header_link_2_button_text && $header_link_2_url ): 
            ?>
                <div>
                    <a href="
                        <?php 
                            echo $header_link_2_url; 
                        ?>
                    " 
                    <?php 
                        if ( $header_link_2_activate_popup ): 
                            echo 'rel="modal:open" '; 
                        endif; 
                    ?>
                    class="link press-btn press-btn-outline
                        <?php 
                            echo $outline; 
                        ?> 
                        <?php 
                            if ( $header_link_2_activate_chat ): 
                            echo ' activate-chat'; 
                            endif; 
                        ?>
                        " 
                        title="
                            <?php 
                                echo $header_link_2_button_text; 
                            ?>
                        " 
                        <?php 
                            if ( $header_link_2_new_tab ): 
                                echo 'target="_blank"'; 
                            endif; 
                        ?>
                        >
                        <?php 
                            echo $header_link_2_button_text; 
                        ?>
                    </a>
                </div>
            <?php 
                endif; 
            ?>
        </div>
    <?php 
        endif; 
    ?>
    </div>
<?php 
    if ( $header_image ): 
?>
    <?php 
        if ( $header_layout == 'left' ): 
    ?>
            <div class="press-flex press-flex-justify-end 
                <?php 
                    echo $header_columns_class; 
                ?>
            ">
                <div class="header-image">
                    <img src="
                        <?php 
                            echo esc_url( $header_image['url'] ); 
                        ?>
                    " 
                    alt="
                        <?php 
                            echo esc_attr($header_image['alt']); 
                        ?>
                    " />
                </div>
            </div>
    <?php 
        endif; 
    ?>  
<?php 
    endif;
?>  
        </div>
    </div>
</div>