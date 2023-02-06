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
          <div class="header-title">
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
              <li><a href="<?php echo esc_url(home_url('')); ?>">トップ</a></li>
              <li><a href="#service">サービス</a></li>
              <li><a href="<?php echo esc_url(home_url('price')); ?>">料金案内</a></li>
              <li><a href="<?php echo esc_url(home_url('news')); ?>">ニュース</a></li>
              <li> <a href="<?php echo esc_url(home_url('works')); ?>">制作実績</a></li>
              <li><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
            </ul>

          </div>

        </nav>
        <div id="mask"></div>

      </div>

    </header>

    <main>