<?php get_header(); ?>

<div class="page-headbox">
  <div class="page-headtextbox">
    <p class="page-headline">ABOUT</p>
    <h1 class="page-description">STARSKILLについて</h1>
  </div>
</div>

<div class="content-box">
  <div class="container">
    <div class="page-about-box">
    <?php the_content(); ?>
    </div>
    <!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="page-about_img"> -->
    <div class="outline">
      <p class="outline__headtext">OUTLINE</p>
      <div class="outline-box">
        <ul class="outline-box__title-list">
          <li class="outline-box__title-item">
            <p class="outline-box__title">[事務所名(屋号)]<span class="sp">STARSKILL</span></p>
          </li>
          <li class="outline-box__title-item">
            <p class="outline-box__title">[代表]<span class="sp">河上 勇人</span></p>
          </li>
          <li class="outline-box__title-item">
            <p class="outline-box__title">[営業時間]<span class="sp"><?php echo get_post_meta($post->ID, '営業時間', true);?></span></p>
          </li>
          <li class="outline-box__title-item">
            <p class="outline-box__title">[連絡先]<span class="sp"><a class="outline-box__title" href="<?php echo home_url('/'); ?>/contact">お問い合わせページへ</a></span></p>
          </li>
          <li class="outline-box__title-item">
            <p class="outline-box__title">[事業内容]<span class="sp">-LP制作<br>-Web制作<br>-保守・運用</span></p>
          </li>
        </ul>
        <ul class="outline-box__body-list pc">
          <li class="outline-box__body-item">
            <p class="outline-box__body">STARSKILL</p>
          </li>
          <li class="outline-box__body-item">
            <p class="outline-box__body">河上 勇人</p>
          </li>
          <li class="outline-box__body-item">
            <p class="outline-box__body"><?php echo get_post_meta($post->ID, '営業時間', true);?></p>
          </li>
          <li class="outline-box__body-item">
            <a class="outline-box__body" href="<?php echo home_url('/'); ?>/contact">お問い合わせフォームより</a>
          </li>
          <li class="outline-box__body-item">
            <p class="outline-box__body outline-box__body--last">- webサイト制作
              <br><br>- 保守・運用
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('works-slider') ?>
<?php get_template_part('contact') ?>
<?php get_footer(); ?>