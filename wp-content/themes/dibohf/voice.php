<?php

/**
 * Template Name: Voice
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>dibohfを購入した方々の声</title>
  <meta name="description" content="dibohfを購入した方々の声をまとめました。個人から法人までご満足いただいております">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/voice2.css">
  <?php get_header(); ?>

<body>
  <!-- header-->
  <?php get_sidebar('menuindex'); ?>
  <!-- header-->

  <!-- voice_pagetitle-->
  <div class="voice_pagetitle">
    <h2 id="voice_pagetitle_h2">VOICE</h2>
    <p>お客様の声と購入の流れ</p>
  </div>
  <!-- voice_pagetitle-->


  <!-- voice_main-->
  <div class="voice_main">
    <div class="voice_main_cover">
      <h3 class="voice_main_title">お客様の声</h3>
      <div class="voice_sub_contents">
        <?php the_field('BlockVoiceExplain'); ?>
      </div>
      <!-- voicesub-->
      <div class="voice_sub">
        <h3 class="voice_sub_title">購入の流れ</h3>
      </div>
      <div class="voice_main_contents">
        <div class="voice_main_box_wrapper">
          <div class="voice_main_box">
            <div class="voice_number">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/voice_number01.png" alt="">
            </div>
            <div class="voice_icon">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/voice_icon01.png" alt="">
            </div>
            <h3><?php the_field('BlockTitle1'); ?></h3>
            <p><?php the_field('BlockExplain1'); ?></p>
          </div>
        </div>
        <div class="voice_main_box_wrapper">
          <div class="voice_main_box">
            <div class="voice_number">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/voice_number02.png" alt="">
            </div>
            <div class="voice_icon">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/voice_icon02.png" alt="">
            </div>
            <h3><?php the_field('BlockTitle2'); ?></h3>
            <p><?php the_field('BlockExplain2'); ?></p>
          </div>
        </div>
        <div class="voice_main_box_wrapper">
          <div class="voice_main_box">
            <div class="voice_number">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/voice_number03.png" alt="">
            </div>
            <div class="voice_icon">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/voice_icon03.png" alt="">
            </div>
            <h3><?php the_field('BlockTitle3'); ?></h3>
            <p><?php the_field('BlockExplain3'); ?></p>
          </div>
        </div>
        <div class="voice_main_box_wrapper">
          <div class="voice_main_box">
            <div class="voice_number">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/voice_number04.png" alt="">
            </div>
            <div class="voice_icon">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/voice_icon04.png" alt="">
            </div>
            <h3><?php the_field('BlockTitle4'); ?></h3>
            <p><?php the_field('BlockExplain4'); ?></p>
          </div>
        </div>
      </div>
     
      <!-- voice_sub-->

    </div>
  </div>
  <!-- voice_main-->


  <!-- underlayer_contact -->
  <?php get_sidebar('underlayer_contact'); ?>
  <!-- underlayer_contact -->

  <!-- underlayer_footer -->
  <?php get_footer(); ?>
  <!-- underlayer_footer -->

</body>

</html>