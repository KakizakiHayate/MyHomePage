<?php get_header(); ?>
<div id="another-img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/random.jpg" alt="お問い合わせページ画像">
</div>

<div id="contact" class="w_archive">
      <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="a_list">
        <a href="<?php the_permalink(); ?>">
        <div class="a_img">
          <img src="<?php echo CFS()->get('thumbnail'); ?> ;?>" alt="">
        </div>
        <div class="a_con">
          <div class="a_type">業種：<?php echo CFS()->get(' workTypes'); ?></div>
          <div class="a_client">クライアント：<?php echo CFS()->get('client'); ?></div>
        </div>
        </a>
      </div>
      <?php endwhile; endif; ?>

 
</div>
<?php the_posts_pagination(
  array(
  'end_size' => 3,
  'prev_next' => true,
  'type' => 'list',
  )
); ?>
<?php get_footer(); ?>