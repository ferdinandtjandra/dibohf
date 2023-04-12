<?php
/**
 * Template Name: Company
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>dibofを運営する会社情報です。</title>
    <meta name="description" content="dibofを運営する会社の情報です。dibofはこれまでのシーンになかった天然素材とレジンを組み合わせたアート性の高いインテリアです。">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/company.css">
    <?php get_header(); ?>
<body>
    <!-- header-->
        <?php get_sidebar('menuindex'); ?>
    <!-- header-->

    <!-- pagetitle--->
    <div class="company_pagetitle" style="background-image:linear-gradient(rgba(51,51,51,0.4),rgba(51,51,51,0.4)),url(<?php echo get_template_directory_uri();?>/static/img/underlayer_company_cover.png);">
        <h2>COMPANY</h2>
    </div>
    <!-- pagetitle--->

    <!-- companyinfo--->
        <?php the_content(); ?>
    <!-- contents--->
    
    <!-- underlayer_contact -->
        <?php get_sidebar('underlayer_contact'); ?>
    <!-- underlayer_contact -->

    <!-- underlayer_footer -->
        <?php get_footer(); ?>
    <!-- underlayer_footer -->

</body>
</html>