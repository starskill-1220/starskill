<?php get_header(""); ?>
<div class="page-works-content-fv">
  <img class="page-works-content-fv__background rellax" data-rellax-speed="2"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
  <?php if(get_field("スクロールバーの色") == "white"): ?>
    <div class="scrolldown"></div>
  <?php elseif(get_field("スクロールバーの色") == "black"): ?>
    <div class="scrolldown scrolldown--black"></div>
  <?php endif ?>
  <div class="fv-textbox rellax" data-rellax-speed="2">
    <?php if(get_field("発注元") == "自社") : ?>
      <p class="fv-textbox__title"><?php the_title(); ?></p>
    <?php else : ?>
      <p class="fv-textbox__title"><?php the_title(); ?> 様</p>
    <?php endif ?>
    <p class="fv-textbox__cat">サイト種別：<?php echo the_field("ページの種類") ?> </p>
    <p class="fv-textbox__field st">担当領域：<?php echo the_field("担当業務") ?></p>
    <p class="fv-textbox__field st">担当者：<?php echo the_field("担当者") ?></p>
  </div>
</div>
<div class="page-works-content__content">
  <div class="content-box">
    <div class="container">
      <div class="page-works-content__headtext-box">
        <?php if(get_field("制作物リンク先") == true && get_field("発注元") == "自社") : ?>
          <a class="btn works-content-pageBtn" href="<?php echo the_field("制作物リンク先") ?>"><?php the_title() ?> のページへ</a>
        <?php elseif(get_field("制作物リンク先") == true && get_field("発注元") == "他社") : ?>
          <a class="btn works-content-pageBtn" href="<?php echo the_field("制作物リンク先") ?>"><?php the_title() ?> 様のページへ</a>
        <?php endif ?>
        <p class="page-works-content__headtext-title">COMMENT</p>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('works-slider') ?>
<?php get_template_part('contact') ?>
<?php get_footer(); ?>