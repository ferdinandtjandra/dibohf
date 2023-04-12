<?php
/**
 * Template Name: AboutUs
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>わたしたちについて|dibof</title>
    <meta name="description" content="dibofブランドを制作するわたしたちについてのページです。">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/aboutus.css">
    <?php get_header(); ?>
<body>
    <!-- header-->
        <?php get_sidebar('menuindex'); ?>
    <!-- header-->

     <!-- fv-->
    <div class="aboutus_fv">
        <div class="aboutus_fv_text">
            <h3>ABOUT US</h3>
            <?php the_content(); ?>
        </div>


    </div>
     <!-- fv-->

     <!-- productionsite --> 
     <div class="productionsite">
        <div class="productionsite_block"> 
            <div class="productionsite_text">
                <p id="productionsite_midashi">PRODUCTION SITE</p>
                <h3><?php the_field('subtitle'); ?></h3>
                <?php the_field('subtexteditor'); ?>
            </div>
            <div class="productionsite_image">
                    <div class="productionsite_image_sub">
                    </div>
            </div>  
        </div>
     </div>
       <!-- productionsite -->
       
       <!-- costreduction-->
       <div class="costreduction">
        <div class="costreduction_title">
            <p id="costreduction_midashi">COST REDUCTION</p>
            <h3>コストを抑える努力</h3>
        </div>
            <div class="costreduction_block">
                <div class="costreduction_block_logo">
                    <img src="<?php echo get_template_directory_uri();?>/static/img/costreduction_logo1.png" alt="">
                </div>
                <div class="costreduction_block_text">
                    <h3><?php the_field('effort1_title'); ?></h3>
                    <p><?php the_field('effort1_text'); ?></p>
                </div>
            </div>
            <div class="costreduction_block">
                <div class="costreduction_block_logo">
                    <img src="<?php echo get_template_directory_uri();?>/static/img/costreduction_logo2.png" alt="">
                </div>
                <div class="costreduction_block_text">
                    <h3><?php the_field('effort2_title'); ?></h3>
                    <p><?php the_field('effort2_text'); ?></p>
                </div>
            </div>
            <div class="costreduction_block">
                <div class="costreduction_block_logo">
                    <img src="<?php echo get_template_directory_uri();?>/static/img/costreduction_logo3.png" alt="">
                </div>
                <div class="costreduction_block_text">
                    <h3><?php the_field('effort3_title'); ?></h3>
                    <p><?php the_field('effort3_text'); ?></p>
                </div>
            </div>
       </div>
       <!-- costreduction--> 

        <!-- underlayer_contact --> 
            <?php get_sidebar('underlayer_contact'); ?>
        <!-- underlayer_contact --> 

        <!-- underlayer_footer -->
            <?php get_footer(); ?>
        <!-- underlayer_footer -->

    
</body>
</html>