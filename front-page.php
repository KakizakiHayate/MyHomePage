<?php get_header() ;?>

<div class="main_title">
  <img src="<?php echo get_template_directory_uri(); ?>/img/top-img.jpg" alt="トップページ">
</div>
<div id="container">


  <section id="service">
    <h2>Service</h2>
    <ul>
      <li class="service-list one-sr">
        <!-- ホームページ制作 -->
        <img src="<?php bloginfo('template_url'); ?>/img/service1.png" alt="ホームページ制作画像">
        <div id="servise-list-text">
          <h3>ホームページ制作</h3>
          <p>WordPressを使ったホームページをお作りします。</p>
        </div>
      </li>
      <li class="service-list two-sr">
        <!-- HTML・CSSコーディング -->
        <img src="<?php bloginfo('template_url'); ?>/img/service2.jpg" alt="ホームページ制作画像">
        <div id="servise-list-text">
          <h3>コーディング</h3>
          <p>HTML/CSS JavaScriptでwebサイトをコーディングします。</p>
        </div>
      </li>
      <li class="service-list three-sr">
        <!-- サーバー/ドメイン保持 -->
        <img src="<?php bloginfo('template_url'); ?>/img/service3.png" alt="ホームページ制作画像">
        <div id="servise-list-text">
          <h3>サーバー/ドメイン保持</h3>
          <p>責任を持ってあなたのサーバー/ドメインをお守りします。</p>
        </div>
      </li>
    </ul>
  </section>


  <section id="news">
    <h2>News</h2>
    <div id="news-wrapper">

      <!-- ループ開始 -->
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <div id="news-block">
          <p id="news-date"><?php echo get_the_date("Y.m.d"); ?></p>
          <p id="news-background">お知らせ</p>
          <h1><?php the_title(); ?></h1>
		
      </a>
	</div>
    
    <?php endwhile; endif; ?>
    
</div>
<div class="news_btn">
    <a href="<?php echo esc_url(home_url('news')); ?>">一覧を見る</a>
  </div>
</section>

<section id="works">
  <h2>Works</h2>
  
    <?php
      $args = array(
        'post_type' => 'works',
        'posts_per_page' => 3
      );
      $works_query = new WP_Query($args);
      ?>
      <div class="works-list">

        <?php if($works_query->have_posts()) : while($works_query->have_posts()) : $works_query->the_post(); ?>
      
         <div class="w_link">
         <a href="<?php the_permalink(); ?>" >
         
            <div class="works_img">
              <img src="<?php echo CFS()->get('thumbnail'); ?>" alt="制作実績画像">
            </div>
            <div class="works_con">
            <div class="works_type">業種：<?php echo CFS()->get(' workTypes'); ?></div>
            <div class="works_client">クライアント：<?php echo CFS()->get('client'); ?></div>
            </div>
          </a>
         </div>
        <?php endwhile; ?>
        <?php else : ?>
        <div class="w_error">
          <p>記事はまだありません。</p>
        </div>
        <?php endif; ?>
  </div>

  <div class="works_btn">
    <a href="<?php echo esc_url(home_url('works')); ?>">一覧を見る</a>
  </div>
  <?php wp_reset_postdata(); ?>
</section>
  
</div>
<div id="random-img">
  <img src="<?php bloginfo('template_url'); ?>/img/random.jpg" alt="ホームページ制作画像">

</div>




<?php get_footer() ;?>