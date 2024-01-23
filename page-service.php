<?php get_header(); ?>
<div class="page-headbox">
  <div class="page-headtextbox">
    <p class="page-headline">SERVICE</p>
    <h1 class="page-description">サービス内容</h1>
  </div>
</div>

<div class="content-box">
  <div class="container">
    <!-- <p class="content-firsttext">Webサイト制作/リニューアル・LP(ランディングページ)制作・保守運用代行など、お客様のミッションを達成するために必要なウェブ媒体の制作を行っております。</p> -->
    <ul class="service-tab__list">
      <li id="WebSite" class="service-tab__item active"><a class="pc" href="#">webサイト制作</a><a class="sp" href="#">サイト<br>制作</a></li>
      <li id="Lp" class="service-tab__item"><a class="pc" href="#">LP制作</a><a class="sp" href="#">LP<br>制作</a></li>
      <li id="Operation" class="service-tab__item"><a class="pc" href="#">サイト運用保守</a><a class="sp" href="#">運用<br>保守</a></li> 
    </ul>

    <ul class="service-panel__list">
      <li class="service-panel__item active">
        <?php get_template_part('service01') ?>
      </li>
      <li class="service-panel__item">
        <?php get_template_part('service02') ?>
      </li>
      <li class="service-panel__item">
        <?php get_template_part('service03') ?>
      </li>
    </ul>
  </div>
</div>
<?php get_template_part('works-slider') ?>
<?php get_template_part('contact') ?>
<?php get_footer(); ?>