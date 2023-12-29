<?php get_header(); ?>

<div class="page-headbox">
  <div class="page-headtextbox">
    <h1 class="page-headline">WORKS</h1>
    <p class="page-description">制作実績</p>
  </div>
</div>

<div class="content-box">
  <div class="container">
    <p class="content-firsttext">STARSKILLの制作実績の一部をご紹介しています。</p>
  </div>
  <ul class="page-works-list">
    <?php
    $args = array( 'post_type' => 'works' );  // カスタム投稿タイプ works
    $the_query = new WP_Query($args); if($the_query->have_posts()):
    ?>
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
      <li class="page-works-item">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="page-works-img">
          <div class="works-item-textbox">
            <?php if(get_field("発注元") == "自社") : ?>
              <p class="works-name"><?php echo get_the_title(); ?></p>
            <?php else : ?>
              <p class="works-name"><?php echo get_the_title(); ?> 様</p>
            <?php endif ?>
            <p class="works-cat"><?php echo the_field("ページの種類") ?></p>
          </div>
        </a>
      </li>
      <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
  </ul>
</div>
<?php get_template_part('contact') ?>
<?php get_footer(); ?>