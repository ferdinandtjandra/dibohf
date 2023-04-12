<?php
/**
 * Template Name: News
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>dibofのニュース一覧ページです</title>
    <meta name="description" content="dibofの最新のニュースを紹介します。">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/article.css">
    <?php get_header(); ?>
<body>
    <!-- header-->
        <?php get_sidebar('menuindex'); ?>
    <!-- header-->




<!-- article_pagetitle-->
<div class="article_pagetitle">
    <h2 id="article_pagetitle_h2">NEWS</h2>
</div>

<!-- blog -->
<div class="common_wrapper">
    <div class="blog">
        <div class="common_wrapper_s">
            
        <div class="blog_flex_wrap">
                    <?php
                        $currenctPage = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $args = array(
                            'paged' => $currenctPage,
                            'post_type' => 'NEWS',
                            'post_status' => 'publish',
                            'order' => 'DESC',
                            'orderby' => 'ID',
                            'posts_per_page' => 10,
                        );
                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) :
                            $post_count = 0;
                           
                            while ( $query->have_posts() ) : $query->the_post();
                                // Display the post content here
                                $post_count++;
                                 // Get Tags
                                 $terms = get_the_terms( get_the_ID(), 'blogs_tag' );

                                if($post_count == 1 || $post_count == 4 || $post_count == 8 || $post_count == 12):
                                    echo '<div class="blog_flex">';
                                endif;
                                if ( $post_count <= 3 ) :
                                    // Display the first three posts on the first line
                                        if($post_count == 1):
                                            echo '<a href="'.get_permalink().'">';
                                            echo '<div class="blog_block_l">';
                                            echo '<div class="blog_block_l_image" style="background-image:url('.get_field('thumbnail').');"></div>';
                                            echo '<div class="blog_block_l_text">';
                                            if ( $terms && ! is_wp_error( $terms ) ) :
                                                foreach ( $terms as $term ) {
                                                    echo '<span class="tag">'.$term->name.'</span>';
                                                }
                                            endif;
                                            echo the_title('<h3>', 'bif</h3>');
                                            echo '<p>'.substr(get_the_excerpt(), 0, 200).'</p>';
                                            echo '</div></div></a>';
                                        else:
                                            echo '<div class="blog_block_s">';
                                            echo '<a href="'.get_permalink().'">';
                                            echo '<div class="blog_block_s_image" style="background-image:url('.get_field('thumbnail').');"></div>';
                                            echo '<div class="blog_block_s_text">';
                                            if ( $terms && ! is_wp_error( $terms ) ) :
                                                foreach ( $terms as $term ) {
                                                    echo '<span class="tag">'.$term->name.'</span>';
                                                }
                                            endif;
                                            echo the_title('<h3>', 'small</h3>');
                                            echo '<p>'.substr(get_the_excerpt(), 0, 200).'</p>';
                                            echo '</div></a></div>';
                                        endif;
                                     
                                else :
                                    // Display the remaining posts on the second line
                                    echo '<div class="blog_block_s">';
                                    echo '<a href="'.get_permalink().'">';
                                    echo '<div class="blog_block_s_image" style="background-image:url('.get_field('thumbnail').');"></div>';
                                    echo '<div class="blog_block_s_text">';
                                    if ( $terms && ! is_wp_error( $terms ) ) :
                                        foreach ( $terms as $term ) {
                                            echo '<span class="tag">'.$term->name.'</span>';
                                        }
                                    endif;
                                    echo the_title('<h3>', 'oko</h3>');
                                    echo '<p>'.substr(get_the_excerpt(), 0, 200).'</p>';
                                    echo '</div></a></div>';
                                endif;

                                if($post_count == 3 || $post_count == 7 || $post_count == 11 || $post_count == 15):
                                    echo '</div>';
                                endif;
                            endwhile;
                            
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
            <div class="pagination">
                <ul class="page_list">
                    <!-- <li class="page_item_prev">前へ</li> 
                    <li class="page_item active">1</li>
                    <li class="page_item">2</li>
                    <li class="page_item_next">次へ</li>  -->
                    <?php pagination_column($currenctPage, $query); ?>
                </ul>
            </div>  
        </div>
    </div>
</div>
 <!-- blog -->

<!-- underlayer_contact -->
    <?php get_sidebar('underlayer_contact'); ?>
<!-- underlayer_contact -->

<!-- underlayer_footer -->
    <?php get_footer(); ?>
<!-- underlayer_footer -->