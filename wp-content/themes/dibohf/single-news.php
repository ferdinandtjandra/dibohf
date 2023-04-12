<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php wp_title('', true, 'right') ?>|news</title>
    <meta name="description" content="dibofのnews「<?php wp_title('', true, 'right')?>」">
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

<!-- article_pagetitle-->


<?php
    if(have_posts()): 
        while(have_posts()) : 
            the_post(); 
?>
<!-- article_main-->
    <div class="article">
        <div class="article_image" style="background-image: url(<?php echo get_field('thumbnail'); ?>);">
        </div>
        <h1><?php the_title(); ?></h1>
        <p><span><?php the_time("Y.m.d"); ?></span></p>
        <?php the_content(); ?>
    </div>
<!-- article_main-->
<?php endwhile; endif;  ?>

<!-- article_button-->
    <div class="article_btn">
        <?php previous_post_link('%link', '<div class="pre_btn"><div class="button_arrow"><img src="'.get_template_directory_uri().'/static/img/prearrow.png" alt=""></div><p>PREV NEWS</p></div>'); ?>

        <a href="<?php echo site_url()."/news-page"; ?>">
            <div class="all_btn">
                <p>ALL</p>
            </div>
        </a>

        <?php next_post_link('%link', '<div class="next_btn"><p>NEXT NEWS</p><div class="button_arrow"><img src="'.get_template_directory_uri().'/static/img/nextarrow.png" alt=""></div></div>'); ?>
  
            
    </div>
<!-- article_button-->

<!-- underlayer_contact -->
    <?php get_sidebar('underlayer_contact'); ?>
<!-- underlayer_contact -->

<!-- underlayer_footer -->
    <?php get_footer(); ?>
<!-- underlayer_footer -->