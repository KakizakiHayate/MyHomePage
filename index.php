<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_url'); ?>/main.js" defer></script>
  <title>WordPress-1</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header>

      <div id="header">
        <div id="fixed-header">
          <div class="title">
            <h1>portfolio</h1>
          </div>

          <div id="burger-btn">
            <span></span>
            <span></span>
            <span></span>
          </div>

        </div>

        <nav>
          <div id="burger-nav">
            <ul>
              <li><a href="<?php bloginfo('url') ;?>">トップ</a></li>
              <li><a href="<?php bloginfo('url') ;?>/service">サービス</a></li>
              <li><a href="<?php bloginfo('url') ;?>/price">料金案内</a></li>
              <li><a href="<?php bloginfo('url') ;?>/news">ニュース</a></li>
              <li><a href="<?php bloginfo('url') ;?>/contact">お問い合わせ</a></li>
            </ul>

          </div>

        </nav>
        <div id="mask"></div>

      </div>

    </header>

    <main>
      <div class="main_title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-img.jpg" alt="トップページ">
      </div>
      <div class="container">


        <section id="service">
          <h2>Works</h2>
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
                <p>責任を持ってあなたのサーバー/ドメインをお守りします。</p>
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
      </section>

  </div>
  <div id="random-img">
    <img src="<?php bloginfo('template_url'); ?>/img/random.jpg" alt="ホームページ制作画像">

  </div>

  </main>

    <footer>

    <section>
      <div id="footer">
        <div id="footer-text">
        <ul>
              <li><a href="<?php bloginfo('url') ;?>">トップ</a></li>
              <li><a href="<?php bloginfo('url') ;?>/service">サービス</a></li>
              <li><a href="<?php bloginfo('url') ;?>/price">料金案内</a></li>
              <li><a href="<?php bloginfo('url') ;?>/news">ニュース</a></li>
              <li><a href="<?php bloginfo('url') ;?>/contact">お問い合わせ</a></li>
            </ul>
        </div>
      </div>
    </section>

    </footer>
  </div>
  <?php wp_footer(); ?>
</body>
</html>