<?php get_header(""); ?>
<div class="page-works-content-fv">
  <img class="page-works-content-fv__background rellax" data-rellax-speed="2"  src="<?php echo get_the_post_thumbnail_url(); ?>" alt="制作実績画像">
  <?php if(get_field("スクロールバーの色") == "white"): ?>
    <div class="scrolldown"></div>
  <?php elseif(get_field("スクロールバーの色") == "black"): ?>
    <div class="scrolldown scrolldown--black"></div>
  <?php endif ?>
  <div class="fv-textbox
              <?php if(get_field("サンプル制作物") == "サンプル制作物") : ?>
                works-item__sample-badge
              <?php endif ?>
              rellax"
  data-rellax-speed="2">
    <?php if(get_field("発注元") == "自社") : ?>
      <h1 class="fv-textbox__title"><?php the_title(); ?></h1>
    <?php else : ?>
      <h1 class="fv-textbox__title"><?php the_title(); ?> 様</h1>
    <?php endif ?>
    <p class="fv-textbox__cat">サイト種別：<?php echo the_field("ページの種類") ?> </p>
    <p class="fv-textbox__field st">担当領域：<?php echo the_field("担当業務") ?></p>
    <p class="fv-textbox__field st">担当者：<?php echo the_field("担当者") ?></p>
  </div>
</div>
<div class="page-works-content__content">
  <div class="content-box">
    <div class="container">
      <article class="page-works-content__headtext-box">
        <p class="page-works-content__headtext-title">INFOMATION</p>
        <ul class="works-content__info-list">
          <li class="works-content__info-item">
            <p class="works-content__info-item--title">クライアント名</p>
            <p class="works-content__info-item--body"><?php echo the_field("クライアント名") ?> </p>
          </li>
          <?php if(get_field("制作物リンク先") == true && get_field("発注元") == "他社") : ?>
            <li class="works-content__info-item">
            <p class="works-content__info-item--title">サイトURL</p>
            <a class="works-content__info-item--body" href="<?php echo the_field("制作物リンク先") ?>"><?php echo the_field("制作物リンク先") ?></a>
          </li>
          <?php endif ?>
          <li class="works-content__info-item">
            <p class="works-content__info-item--title">サイトカテゴリ</p>
            <p class="works-content__info-item--body"><?php echo the_field("ページの種類") ?></p>
          </li>
          <li class="works-content__info-item">
            <p class="works-content__info-item--title">エリア</p>
            <p class="works-content__info-item--body"><?php echo the_field("エリア") ?></p>
          </li>
          <li class="works-content__info-item">
            <p class="works-content__info-item--title">制作期間</p>
            <p class="works-content__info-item--body"><?php echo the_field("制作期間") ?>日間</p>
          </li>
        </ul>
        <p class="works-content__headtext-sub">対応させていただいたこと</p>
        <ul class="works-content__info-other-list">
          <li class="works-content__info-other-item 
            <?php if(in_array("企画構成", get_field("対応させていただいたこと"))) :?>
              execution
            <?php endif ?>
            ">企画構成
          </li>
          <li class="works-content__info-other-item 
            <?php if(in_array("顧客競合分析", get_field("対応させていただいたこと"))) :?>
              execution
            <?php endif ?>
            ">顧客競合分析
          </li>
          <li class="works-content__info-other-item 
            <?php if(in_array("デザイン", get_field("対応させていただいたこと"))) :?>
              execution
            <?php endif ?>
            ">オリジナルデザイン
          </li>
          <li class="works-content__info-other-item 
            <?php if(in_array("コーディング", get_field("対応させていただいたこと"))) :?>
              execution
            <?php endif ?>
            ">コーディング
          </li>
          <li class="works-content__info-other-item 
            <?php if(in_array("サーバー契約代行", get_field("対応させていただいたこと"))) :?>
              execution
            <?php endif ?>
            ">サーバー契約代行
          </li>

          <li class="works-content__info-other-item
          <?php if(in_array("ドメイン取得代行", get_field("対応させていただいたこと"))) :?>
            execution
          <?php endif ?>">ドメイン取得代行</li>

          <li class="works-content__info-other-item
          <?php if(in_array("素材準備(撮影込み)", get_field("対応させていただいたこと"))) :?>
            execution
          <?php endif ?>">素材準備(撮影込み)</li>

          <li class="works-content__info-other-item
          <?php if(in_array("WordPress構築", get_field("対応させていただいたこと"))) :?>
            execution
          <?php endif ?>">WordPress構築</li>

          <li class="works-content__info-other-item
          <?php if(in_array("問い合わせフォーム設置", get_field("対応させていただいたこと"))) :?>
            execution
          <?php endif ?>">問い合わせフォーム設置</li>

          <li class="works-content__info-other-item
          <?php if(in_array("運用保守契約", get_field("対応させていただいたこと"))) :?>
            execution
          <?php endif ?>">運用保守契約</li>
        </ul>
        <p class="page-works-content__headtext-title">COMMENT</p>
        <?php the_content(); ?>
        <p class="page-works-content__headtext-title">IMAGE</p>
        <ul class="page-works-content__image-list">
          <li class="page-works-content__image-pc"><img src="<?php the_field("pc版"); ?>" alt=""></li>
          <li class="page-works-content__image-sp"><img src="<?php the_field("sp版"); ?>" alt=""></li>
        </ul>
      </article>
    </div>
  </div>
</div>
<?php get_template_part('works-slider') ?>
<?php get_template_part('contact') ?>
<?php get_footer(); ?>