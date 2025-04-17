<?php
if (!function_exists('newsxo_single_small_admin')) :
    /**  Single Small Author
     */
    function newsxo_single_small_admin() { ?>
        <span class="bs-author">
            <a class="bs-author-pic" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"> 
                <?php echo get_avatar( get_the_author_meta( 'ID') , 150); ?> 
                <?php esc_html_e('By','newsxo'); ?> <?php the_author(); ?>
            </a>
        </span>
        <?php
    }
endif;
add_action('newsxo_action_single_small_admin','newsxo_single_small_admin'); 

if (!function_exists('newsxo_single_featured_image')) :
    /**  Single Featured Image
     */
    function newsxo_single_featured_image() { 
        if(has_post_thumbnail()){
            echo '<div class="bs-blog-thumb">';
            the_post_thumbnail( '', array( 'class'=>'' ) );
            echo '</div>';
        }
    }
endif;
add_action('newsxo_action_single_featured_image','newsxo_single_featured_image'); 

if (!function_exists('newsxo_single_next_prev_links')) :
    function newsxo_single_next_prev_links() {          
        $left = is_rtl() ? 'right': 'left';
        $right = is_rtl() ? 'left': 'right';
        the_post_navigation(array(
            'prev_text' => '<div class="fas fa-angle-double-'.$left.'"></div><span> %title</span>',
            'next_text' => '<span>%title</span> <div class="fas fa-angle-double-'.$right.'"></div>',
            'in_same_term' => false,
        ));
    }
endif;
add_action('newsxo_action_single_next_prev_links','newsxo_single_next_prev_links');