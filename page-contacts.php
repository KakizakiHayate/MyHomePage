<?php get_header(); ?>
<div id="another-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/random.jpg" alt="お問い合わせページ画像">
  </div>
<div id="container" class="mail">

  <div id="mail-title">
    <h2><?php the_title(); ?></h2>
  </div>

  <?php echo do_shortcode('[contact-form-7 id="78" title="(hayatehemes2)お問い合わせ"]'); ?>

</div>

  <?php get_footer(); ?>