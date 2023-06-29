<!DOCTYPE html>
<html lang="en">
<head>
    <title>アート性の高いレジンを使った高級インテリア|dibof</title>
    <meta name="description" content="天然素材×レジンを使った一点モノのアートインテリア。特別な素材・これまでにないユニークなデザインを高級感溢れるレジン素材で表現をしたインテリアです。椅子・テーブル・ドアなど普通では物足りないあなたのためのインテリア|dibof">
    <?php get_header(); ?>
<script>
$(function{
  $(".common_wrapper").css("display","none");
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var videoElement = document.getElementById("fv-video");
  var aftermovieElement = document.querySelector(".aftermovie");
  var commonWrapperElement = document.querySelector(".common_wrapper");

  // common_wrapperを非表示にする
  commonWrapperElement.style.display = "none";

  // 動画のURLを設定
  var url = window.innerWidth >= 768
    ? "https://www.dibohf.com/wp-content/uploads/2023/06/fv_animation_pc.mp4"
    : "https://www.dibohf.com/wp-content/uploads/2023/06/fv_animation_sp_1.mp4";
  videoElement.querySelector("source").src = url;

  // 動画の再生が終わった時の処理
  videoElement.addEventListener("ended", function() {
    videoElement.parentNode.classList.add("fade-out");
    aftermovieElement.classList.add("fade-in");
    commonWrapperElement.style.display = "block";
  });

  // 動画の再生を開始
  videoElement.load();
  videoElement.play();

  // 一定時間経過後にcommon_wrapperを表示する
  var delayTime = 500; // 表示までの遅延時間（ミリ秒）
  setTimeout(function() {
    commonWrapperElement.style.display = "block";
  }, delayTime);
});


</script>
<body>
    <div id="wrapper">
    <!-- header -->
        <header>
            <div class="header_logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri();?>/static/img/logo1.png" alt="">
                </a>
            </div>
            <button class="menu_btn">
            
            </button>
                <nav id="global_nav">
                   <ul>
                    <li><a href="<?php echo site_url(); ?>">TOP</a></li>
                    <li><a href="<?php echo site_url()."/about-us"; ?>">ABOUT US</a></li>
                    <li><a href="<?php echo site_url()."/voice"; ?>"">VOICE</a></li>
                    <li><a href="<?php echo site_url()."/company"; ?>">COMPANY</a></li>
                   </ul>
                </nav>
        </header>
        <!-- header -->
        <div id="fv" class="fv">
          <video id="fv-video" autoplay muted playsinline>
            <source src="" type="video/mp4">
          </video>
        </div>
        <div class="fv aftermovie">
            <div class="fv_left">
                <div class="fv_left_textbox">
                    <h2>dibohf</h2>
                    <h3>代わり映えのない日常に変化を</h3>
                </div>
            </div>
            <div class="fv_right">
                 <!--fv_right_l_top-->
                <div class="fv_right_l">
                    <a href = "#itemlist_link" id="a_link">
                    <div class="fv_itemlist">
                            <div class="fv_right_textbox">
                               <h3>ITEM LIST</h3>
                                <p>アートインテリア
                                <br>商品一覧</p>
                            </div>
                    </div>
                     </a>
                <!--fv_right_l_top-->	
                    <!--fv_right_l_middle-->
                    
                    <div class="fv_right_l_middle">
                       
                        <a id="fv_right_l_middle_a" href="#sence_link" >
                            <div class="fv_sence">
                                    <div class="fv_right_textbox">
                                        <h3>SENCE</h3>
                                        <p>先進性と
                                        <br>デザイン クオリティ</p>
                                    </div>
                            </div>
                        </a>
                        <a id="fv_right_l_middle_a"href="<?php echo site_url()."/voice"; ?>"" >
                            <div class="fv_voice">
                                <div class="fv_right_textbox">
                                    <h3>VOICE</h3>
                                    <p>お客様の声と
                                    <br>購入の流れ</p>
                                </div>
                            </div>
                        </a>
                    </div>
                   
                    <!--fv_right_l_middle-->

                    <!--fv_right_l_bottom-->
                    <a href ="<?php echo site_url()."/company"; ?>" >
                        <div class="fv_company">
                            <div class="fv_right_textbox">
                                <h3>COMPANY</h3>
                                <p>会社情報</p>
                            </div>
                        </div>
                    </a>
                     <!--fv_right_l_bottom-->
                </div>
                    <!--fv_right_r-->
                <div class="fv_right_r">
                    <a href ="#aboutus_link" >
                        <div class="fv_aboutus">
                            <div class="fv_right_textbox">
                                <h3>ABOUT US</h3>
                                <p>こだわりの制作現場
                                <br>コストを抑える努力</p>
                            </div>
                        </div>
                    </a>
                    <div class="fv_right_r_bottom_sp">
                        <div class="fv_left_sp">
                            <div class="fv_right_textbox">
                                <h2>dibohf</h2>
                                <h3>代わり映えのない日常に変化を</h3>
                            </div>
                        </div>
                    </div>
                    <div class="fv_right_r_bottom">
                        <ul>
                            <a href="<?php echo site_url(); ?>"><li>TOP</li></a>
                            <a href="<?php echo site_url()."/about-us"; ?>"><li>ABOUT US</li></a>
                            <a href="<?php echo site_url()."/voice"; ?>""><li>VOICE</li></a>
                            <a href="<?php echo site_url()."/company"; ?>"><li>COMPANY</li></a>
                        </ul>
                        <div class="sns_icon">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/static/img/instagram_icon.png"></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/static/img/twitter_icon.png"></a>
                        </div>
                        <a href="#">
                            <div class="contact_btn">
                                <p>CONTACT</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--fv_right_r-->
            </div>
        </div>
    </div>

    <!-- fv -->


    <!--sp only -->
    <div class="sp_only">
        <div class="sp_only_image">
            <h2>dibohf</h2>
            <div class="sp_only_image_s">
            </div>
           
       </div>
    </div>
    <!--sp only -->

    <!-- news -->
    <div class="common_wrapper">
        <div class="news">
            <div class="news_title">
                <img src="<?php echo get_template_directory_uri();?>/static/img/news_text.png" alt="">
            </div>
            <div class="news_flex">
                <?php
                    $args = array(
                        'post_type' => 'NEWS',
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'orderby' => 'ID',
                        'posts_per_page' => 10,
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post(); 
                ?>
                            <div class="news_box">
                                <a href="<?php echo get_permalink(); ?>">
                                    <div class="news_box_inner">    
                                        <p><?php the_time("Y.m.d"); ?></p>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            </div>

                <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
                <div class="news_btn">
                    <a href="<?php echo site_url()."/news-page"; ?>">
                        <button class="common_btn">
                            <p>VIEW ALL</p>
                                <div class="button_arrow">
                                    <img src="<?php echo get_template_directory_uri();?>/static/img/button_arrow.png" alt="">
                                </div>
                         </button>
                    </a>
                </div>           
        </div>
    </div>
    <!-- news -->

    <!-- sence -->
        <?php 
            $sence_block = get_page_by_path('sence_block');
            echo apply_filters('the_content', $sence_block->post_content);
        ?>
    <!-- sence -->


    <!-- item list -->
    <div class="common_wrapper">
        <div class="itemlist">
            <a id="itemlist_link"></a>
                <div class="itemlist_title">
                    <img src="<?php echo get_template_directory_uri();?>/static/img/itemlist_text.png" alt="">
                </div>
                <div class="itemlist_imagebox">
<?php 

                        $categories = get_categories([
                                            'orderby' => 'meta_value_num',
                                            'meta_key' => 'sort_num',
                                            'order' => 'ASC'
                                         ]);
                        foreach ($categories as $category) {

                            if ($category_count >= 4) {
                                break;
                            }

                            $category_image = get_field('imagecat', $category);
                    ?>

                            <div class="itemlist_image" style="background-image:linear-gradient(rgba(51,51,51,0.1),rgba(51,51,51,0.1)),url(<?php echo $category_image;?>)">
                                <a href="<?php echo get_category_link($category->term_id); ?>">
                                    <h3><?php echo strtoupper($category->name); ?></h3>
                                    <div class="itemlist_array">
                                        <a href="<?php echo get_category_link($category->term_id); ?>">
                                            <img src="<?php echo get_template_directory_uri();?>/static/img/itemlist_array.png" alt="">
                                            <img src="<?php echo get_template_directory_uri();?>/static/img//itemlist_array2.png" alt="">
                                        </a>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    ?>
               <!--
					              <div class="itemlist_image" style="background-image:linear-gradient(rgba(51,51,51,0.1),rgba(51,51,51,0.1)),url(https://www.dibohf.com/wp-content/uploads/2023/06/door2.jpg)">
                                <a href="https://www.dibohf.com/blogs/dibohf-door/">
                                    <h3>Door</h3>
                                    <div class="itemlist_array">
                                        <a href="https://www.dibohf.com/blogs/dibohf-door/ ">
                                            <img src="<?php echo get_template_directory_uri();?>/static/img/itemlist_array.png" alt="">
                                            <img src="<?php echo get_template_directory_uri();?>/static/img//itemlist_array2.png" alt="">
                                        </a>
                                    </div>
                                </a>
                            </div>
					
		-->		
                </div>
            
        </div>
    </div>

    <!-- item list -->


    <!-- about us -->
        <?php 
            $about_page = get_page_by_path('aboutus_block');
            echo apply_filters('the_content', $about_page->post_content);
        ?>
    <!-- about us -->

    <!-- instagram -->

        <div class="common_wrapper">
            <div class="common_wrapper_s">
                <div class="instagram">
                    <div class="insta_left">
                        <h2>INSTAGRM</h2>
                        <p>@dibohf</p>
                        <p class="insta-description">インスタグラムの公式アカウントでは最新のコーディネートを更新しています。</p>
                        <button>Follow Us</button>
                    </div>
                    <div class="insta_right">
                   <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-5ee61fcf-e708-4d6d-9be4-049663d2da13"></div>
                    </div>
                </div>
            </div>
        </div>

    <!-- instagram -->

    <!-- blog -->

    <div class="common_wrapper">
        <div class="blog">
            <div class="blog_title">
                <img src="<?php echo get_template_directory_uri();?>/static/img/blog_text.png" alt="">
            </div>
            <div class="common_wrapper_s">
                <div class="blog_flex_wrap">
                    <?php
                        $args = array(
                            'post_type' => 'blogs',
                            'post_status' => 'publish',
                            'order' => 'DESC',
										'orderby' =>'date',
							        'posts_per_page' => 7,
                        );
                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) :
                            $post_count = 0;
                           
                            while ( $query->have_posts() ) : $query->the_post();
                                // Display the post content here
                                $post_count++;
                                 // Get Tags
                                 $terms = get_the_terms( get_the_ID(), 'blogs_tag' );

                                if($post_count == 1 || $post_count == 4):
                                    echo '<div class="blog_flex">';
                                endif;
                                if ( $post_count <= 3 ) :
                                    // Display the first three posts on the first line
                                        if($post_count == 1):
                                            echo '<a href="'.get_permalink().'" id="blog_a">';
                                            echo '<div class="blog_block_l">';
                                            echo '<div class="blog_block_l_image" style="background-image:url('.get_field('thumbnail').');"></div>';
                                            echo '<div class="blog_block_l_text">';
                                            if ( $terms && ! is_wp_error( $terms ) ) :
                                                foreach ( $terms as $term ) {
                                                    echo '<span class="tag">'.$term->name.'</span>';
                                                }
                                            endif;
                                            echo the_title('<h3>', '</h3>');
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
                                    echo '<p>'.substr(get_the_excerpt(), 0, 200).'</p>';
                                    echo '</div></a></div>';
                                endif;

                                if($post_count == 3 || $post_count == 7):
                                    echo '</div>';
                                endif;
                            endwhile;
                            
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>



            <div class="blog_btn">
                <a href="<?php echo site_url()."/blog"; ?>">
                    <button class="common_btn">
                        <p>VIEW ALL</p>
                        <div class="button_arrow">
                            <img src="<?php echo get_template_directory_uri();?>/static/img/button_arrow.png" alt="">
                        </div>
                    </button>
                </a>
            </div>
            
        </div>
    </div>



    <!-- blog -->

    <!-- contact -->
        <?php 
            $common_contact = get_page_by_path('common_contact');
            echo apply_filters('the_content', $common_contact->post_content);
        ?>
    <!-- contact -->

    </div>
</body>
</html>
