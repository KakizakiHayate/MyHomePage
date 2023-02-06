<?php get_header(); ?>

<div id="another-img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/random.jpg" alt="お問い合わせページ画像">
</div>

   <div id="content" class="w_works">
   <?php if (have_posts()): while(have_posts()) : the_post(); ?>
    <div class="works_thumb">
      <img src="<?php echo CFS()->get('thumbnail'); ?>" alt="制作実績画像">
    </div>

    <div class="works_txt">
      <div class="info"><!-- info=情報 -->
        <div class="type"><span>業種：</span><?php echo CFS()->get(' workTypes'); ?></div>
        <div class="client"><span>クライアント：</span><?php echo CFS()->get('client'); ?></div>
      </div>

      <div class=work_flow>
        <div class="head">ワークフロー</div>
        <div class="con"><?php echo CFS()->get('workflow'); ?></div>
      </div>

      <div class="igt"> 
        <div class="head">こだわった所</div>
      <div class="con"><?php echo CFS()->get('Ingenuity'); ?></div>
      </div>
    </div>

    <div class="works_link">
     	<a href="<?php echo CFS()->get('link'); ?>">制作実績を見る</a>
    </div>

    <?php endwhile; endif; ?>

   </div>
<?php get_footer(); ?>

