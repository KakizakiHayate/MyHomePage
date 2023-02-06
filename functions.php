<?php
  function post_has_archive($args,$post_type) {
  if('post'==$post_type) {
    $args['rewrite']=true;
    $args['has_archive']='news';
    $args['label']='お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args','post_has_archive',10,2); 


function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

      if ( $query->is_post_type_archive() ) {
        $query->set( 'posts_per_page', '7' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

function change_posts_per_pages($querys) {
  if (is_admin() || ! $querys->is_main_query() )
    return;
  if ($querys->is_archive('works') ) {//カスタム投稿タイプを指定
    $querys->set('posts_per_page', '6' ); //表示件数を指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_pages' );

/* カスタム投稿タイプarchive */
function works_custom_page() {
  register_post_type('works',
    array(
      'public' => true,
      'label' => 'works',
      'show_in_rest' => true,
      'supports' => array('title','editor','thumbnail','revisions','excerpt','custom-fields','page-attributes'),
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-admin-customizer',
      'hierarchical' => true,
      'labels' => array(
        'menu_name' => 'テスト投稿(menu_nameキー)',
        'all_items' => 'テスト投稿一覧(all_itemsキー)',
        'add_new' => '新規テストページ追加(add_newキー)',
        'exclude_from_search' => false,
      ),
    )
  );
}
add_action('init', 'works_custom_page');

/* archive-works.phpのサムネイル画像表示 */
add_theme_support('post-thumbnails');
add_image_size('post-thumbnails', 400, 200, true);

