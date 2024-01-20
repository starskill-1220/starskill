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
    <div class="outline">

      <p class="outline__headtext">OUTLINE</p>
        <!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="outline__img"> -->
        <ul class="outline__list">
          <li class="outline__item">
            <p class="outline__title">事務所名</p>
            <p class="outline__body">STARSKILL (個人事業屋号)</p>
          </li>
          <li class="outline__item">
            <p class="outline__title">代表者</p>
            <p class="outline__body">河上 勇人</p>
          </li>
          <li class="outline__item">
            <p class="outline__title">所在地</p>
            <p class="outline__body">東京都東村山市本町3-13-24 102</p>
          </li>
          <li class="outline__item">
            <p class="outline__title">電話番号</p>
            <p class="outline__body">080-3377-2819</p>
          </li>
          <li class="outline__item">
            <p class="outline__title">営業時間</p>
            <p class="outline__body">09：00〜24：00（年中無休）</p>
          </li>
          <li class="outline__item">
            <p class="outline__title">事業内容</p>
            <p class="outline__body">ホームページ制作<br>LP制作<br>運用保守</p>
          </li>
        </ul>
    </div>
  </div>
</div>
<?php get_template_part('works-slider') ?>
<?php get_template_part('contact') ?>
<?php get_footer(); ?>