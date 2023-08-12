<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $currCat = get_category(get_query_var('cat'));
        $cat_name = $currCat->name;
      
    ?>
    <title>アートインテリアdibohfの<?php echo strtoupper($cat_name); ?>のページです。</title>
    <meta name="description" content="<?php echo strtoupper($cat_name); ?>の高級インテリアdibohfは天然素材にレジンを合わせた世界で一つだけの一点もののアートインテリアです。高級感溢れる<?php echo strtoupper($cat_name); ?>をお探しならdibohfをご検討ください">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/itemlist.css">
    <?php get_header(); ?>
<body>
     <!-- header-->
        <?php get_sidebar('menuindex'); ?>
    <!-- header-->

<!-- itemlist_pagetitle-->
<div class="itemlist_pagetitle">
<h2 id="itemlist_pagetitle_h2"><?php echo strtoupper($cat_name); ?></h2>
</div>

<!-- itemlist_pagetitle-->

<!-- tab-->
<div class="tab">
    <div class="tab_block">
        <?php 
            $categories = get_categories();
            $count = 0;
            foreach ( $categories as $category ) {
                $count++;
                if ( $count <= 2 ) {	
                    if($category->term_id == 1){
                        echo '<p><a href="' . site_url() . '/blog">' . strtoupper($category->name) . '</a></p>';
                    }else{
                    	echo '<p><a href="' . get_category_link( $category->term_id ) . '">' . strtoupper($category->name) . '</a></p>';
					}
                } else {
                    echo '</div><div class="tab_block"><p><a href="' . get_category_link( $category->term_id ) . '">' . strtoupper($category->name) . '</a></p>';
                    $count = 1;
                }
            }
        ?>
    </div>
</div>
<!-- tab-->

<!-- pick up post-->
<?php
$pickup_posts = get_term_meta($currCat->term_id, 'pickup_article', true); 

if($pickup_posts){
    // Check total Pickup post. if more than 4. will sort the ID and limit it 4
    $check_total_posts = count($pickup_posts);
    
    if($check_total_posts > 4){
        $post_ids = [];
        $post_count = 0;
        arsort($pickup_posts);
        foreach($pickup_posts as $id){
            if ($post_count >= 4) {
                break; // Stop after displaying 4 posts
            }
            $post_ids[] = $id;
            $post_count++;
        }
    }else{
        $post_ids = $pickup_posts;
    }

    $total_posts = count($post_ids);
    $count = 0;
    echo '<div class="mainitem">';
    foreach($post_ids as $post){
        $count++;
        // var_dump(get_the_title( $post ));
        if($count == 1): ?>
            <a id=main_a href="<?php echo get_field('external_link', $post); ?>">
                <div class="mainitem_left"  style="background-image: url(<?php echo get_field('item_image', $post); ?>);">
                    <div class="mainitem_text">
                        <h3><?php get_the_title( $post ); ?></h3>
                        <p class="value">¥<?php echo number_format(get_field('price', $post));?></p>
                        <p class="mainitem_tag"><?php echo strtoupper(get_field('sub_title', $post));?></p>
                    </div>
                </div>
            </a>
        <?php
        endif;

        if($total_posts == 2): 
            if($count == 2):?>
       
            <div class="mainitem_middle">
                <a id="mainitem_middle_a" href="<?php echo get_field('external_link', $post); ?>">
                    <div class="mainitem_middle_top"  style="background-image: url(<?php echo get_field('item_image', $post); ?>">
                        <div class="mainitem_text">
                            <h3><?php get_the_title( $post ); ?></h3>
                            <p class="value">¥<?php echo number_format(get_field('price', $post));?></p>
                            <p class="mainitem_tag"><?php echo strtoupper(get_field('sub_title', $post));?></p>
                        </div>
                    </div> 
                </a>
            </div>
        <?php endif;
        endif;
    
        if($total_posts == 3 || $total_posts == 4){
            if($count == 2): 
                echo '<div class="mainitem_middle">';
            endif;
        
            if($count == 2 || $count == 3): ?>
                <a id="mainitem_middle_a" href="<?php echo get_field('external_link', $post); ?>">
                    <div class="mainitem_middle_top"  style="background-image: url(<?php echo get_field('item_image', $post); ?>">
                        <div class="mainitem_text">
                            <h3><?php get_the_title( $post ); ?></h3>
                            <p class="value">¥<?php echo number_format(get_field('price', $post));?></p>
                            <p class="mainitem_tag"><?php echo strtoupper(get_field('sub_title', $post));?></p>
                        </div>
                    </div> 
                </a>
            <?php
            endif;
        
            if($count == 3): 
                echo '</div>';
            endif;
        }
    
        if($count == 4):?>
    
            <a id=main_a href="<?php echo get_field('external_link', $post); ?>">
                <div class="mainitem_right"  style="background-image: url(<?php echo get_field('item_image', $post); ?>);">
                    <div class="mainitem_text">
                        <h3><?php get_the_title( $post ); ?></h3>
                        <p class="value">¥<?php echo number_format(get_field('price', $post));?></p>
                        <p class="mainitem_tag"><?php echo strtoupper(get_field('sub_title', $post));?></p>
                    </div>
                </div>
            </a>
        <?php 
        endif;
    }
    echo '</div>';
}
?>
<!-- pick up post-->
	
<!-- subitem -->
<div class="subitem">
<?php
    $args = array(
        'cat' => $currCat->term_id,
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'ID',
    );
    $query = new WP_Query( $args );
    $total_post = $query->post_count;
    // echo $total_post.'<br>';
    if ( $query->have_posts() ) :
        $count = 0;
        $behind_count = 0;
        echo '<div class="subitem_block">';
        while ( $query->have_posts() ) : $query->the_post();
            $count++;
            $behind_count++;
            if ( $count == 1  ) {
                echo '<div class="subitem_block_left">';
            } elseif ( $count  == 3) {
                echo '<div class="subitem_block_right">';
            }
            ?>

            <div class="subitem_box">
                <a href="<?php echo get_field('external_link'); ?>" target="_blank">
                    <div class="subitem_box_img" style="background-image: url(<?php echo get_field('item_image'); ?>);">
                    </div>
                    <div class="subitem_box_text">
                        <div class="subitem_box_text_box">
                            <?php the_title('<h3>', '</h3>'); ?>
                            <p class="value">¥<?php echo number_format(get_field('price'));?></p>
                            <p class="subitem_tag"><?php echo strtoupper(get_field('sub_title'));?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php

        
            if ( $count == 2  ) {
                echo '</div>';
            } elseif ( $count  == 4) {
                echo '</div>';
            }

            if($behind_count == $total_post){
                if ( $behind_count % 4 == 1  ) {
                    echo '</div>';
                } elseif ( $behind_count % 4 == 3  ) {
                    echo '</div>';
                }
            }

            if($behind_count != $total_post){
                if ( $count % 4 == 0 ) {
                    echo '</div><div class="subitem_block">';
                    $count = 0;
                }
            }
        endwhile;
        echo '</div>';
    endif;
    wp_reset_postdata();
?>

</div>

<!--subitem-->

    <!-- underlayer_contact --> 
        <?php get_sidebar('underlayer_contact'); ?>
    <!-- underlayer_contact --> 

    <!-- underlayer_footer -->
        <?php get_footer(); ?>
    <!-- underlayer_footer -->

</body>
</html>
