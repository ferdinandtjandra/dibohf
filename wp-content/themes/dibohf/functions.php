<?php
add_theme_support('post-thumbnails'); 
//カスタム投稿タイプ
add_action('init', 'custom_blog_init');
function custom_blog_init() {


  //Type Post BLOGS
  $labels = array(
    'name' => _x('BLOGS', 'post type general name'),
    'singular_name' => _x('BLOGS', 'post type singular name'),
    'all_items' => __('BLOGS一覧'),
);
$args = array(
    'labels' => $labels,
    'public' => true,//管理画面・サイトへの表示の有無
    'publicly_queryable' => true,
    'show_ui' => true, //管理画面のメニューへの表示の有無
    'menu_position' => 5,//管理メニューでの表示位置
    'query_var' => true,
    'rewrite' => true,//パーマリンク設定
    'capability_type' => 'post',//権限タイプ
    'map_meta_cap' => true,//デフォのメタ情報処理を利用の有無
    'hierarchical' => false,//階層(親)の有無
    'menu_icon' => 'dashicons-admin-post',//アイコン画像
    'supports' => array('title','editor','thumbnail','custom-fields','excerpt','trackbacks','comments','revisions','page-attributes'),
    'has_archive' => true//アーカイブの有無
); 
register_post_type('blogs',$args);

$args = array(
'label' => 'タグテキスト',
'public' => true,
'show_ui' => true,
'show_in_nav_menus' => true,
'show_admin_column' => true,
'show_ui' => true,
'hierarchical' => false,
'query_var' => true
);
register_taxonomy('blogs_tag','blogs',$args);
add_action('init', 'blogs_custom_post_type');
//-------------------------------------------------------------------------

//Type Post NEWS
$labels = array(
  'name' => _x('NEWS', 'post type general name'),
  'singular_name' => _x('NEWS', 'post type singular name'),
  'all_items' => __('NEWS一覧'),
);
$args = array(
  'labels' => $labels,
  'public' => true,//管理画面・サイトへの表示の有無
  'publicly_queryable' => true,
  'show_ui' => true, //管理画面のメニューへの表示の有無
  'menu_position' => 5,//管理メニューでの表示位置
  'query_var' => true,
  'rewrite' => true,//パーマリンク設定
  'capability_type' => 'post',//権限タイプ
  'map_meta_cap' => true,//デフォのメタ情報処理を利用の有無
  'hierarchical' => false,//階層(親)の有無
  'menu_icon' => 'dashicons-admin-post',//アイコン画像
  'supports' => array('title','editor','thumbnail','custom-fields','excerpt','trackbacks','comments','revisions','page-attributes'),
  'has_archive' => true//アーカイブの有無
); 
register_post_type('news',$args);

add_action('init', 'news_custom_post_type');
//-------------------------------------------------------------------------
}



//Custom Pagination format
function pagination_column($pages = '', $loopPage, $range = 2){
  $showitems =  1;

  global $paged;
  if(empty($paged)) $paged = 1;

  // you get all pagenation number
   
  $pages = $loopPage->max_num_pages;

  // if the page is not first page 
  if(1 != $pages){

  //  the button for backing first page
  //  if($paged > 2 && $paged > $range+1 && $showitems < $pages){
  //    echo "<li class=\"pagerPrevAll\"><a href=\"".get_pagenum_link(1)."\">First</a></li>";
  //  }

  // jump to prevent page
   if($paged > 1 && $showitems < $pages){
     echo "<li class=\"page_item_prev\"><a href=\"".get_pagenum_link($paged - 1)."\">前へ</a></li>";
   }

  //  paging number . if the $paged is corespondent , add active , if not , system generate link 
    for ($i=1; $i <= $pages; $i++){
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
        echo ($paged == $i)? "<li class=\"page_item active\"><a href=\"".get_pagenum_link($i)."\">".$i."</a></li>":"<li class=\"page_item\" ><a href=\"".get_pagenum_link($i)."\">".$i."</a></li>";
      }
    }

  //   / .....  meaning for many page /
  //   if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){
  //     echo "<li class=\"dot\">...</li>";
  //   }

  //  button for next page
   if ($paged < $pages && $showitems < $pages){
     echo "<li class=\"page_item_next\"><a href=\"".get_pagenum_link($paged + 1)."\">次へ</a></li>";
   }

  //  button for last page 
  //   if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){
  //     echo "<li class=\"page_item\"><a href=\"".get_pagenum_link($pages)."\">Last</a></li>";
  //   }

  }
}

function custom_sort_categories($clauses, $query) {
    global $wpdb;

    if (isset($query->query_vars['meta_query'])) {
        $meta_query = $query->query_vars['meta_query'];
        $clauses['join'] .= "
            LEFT OUTER JOIN {$wpdb->termmeta}
            ON {$wpdb->terms}.term_id={$wpdb->termmeta}.term_id
            AND {$wpdb->termmeta}.meta_key='{$meta_query[0]['key']}'";

        $clauses['orderby'] = "ABS({$wpdb->termmeta}.meta_value+0) {$query->query_vars['order']}";
    }

    return $clauses;
}
