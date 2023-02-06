<?php get_header(); ?>
<div id="another-img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/random.jpg" alt="お問い合わせページ画像">
</div>

  <div id="content" class="w_inner">
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <h1 class="ttl"><?php the_title(); ?></h1>
      <div class="date"><?php the_date('Y.m.d') ?></div>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>

  <?php get_footer(); ?>