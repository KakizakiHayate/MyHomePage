<?php get_header(); ?>

<div id="another-img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/random.jpg" alt="お問い合わせページ画像">
</div>

<div id="container" class="news-wrapper">

  <div class="news-headline">
    <h2>ニュース</h2>
</div>
  <ul>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <a href="">
      <li>
        <div id="news-list">
          <div class="news-list-date"><?php echo get_the_date("Y.m.d"); ?></div>
          <div class="news-list-title"><?php the_title(); ?></div>
        </div>
      </li>
      </a>
      <?php endwhile; endif; ?>
  </ul>

  <?php the_posts_pagination(
  array(
  'end_size' => 3,
  'prev_next' => true,
  'type' => 'list',
  )
); ?>

</div>

<?php get_footer(); ?>