<?php get_header("white"); ?>

<div class="page-works-content-fv">
  <img class="page-works-content-fv__background" src="<?php echo get_template_directory_uri(); ?>/img/page-works-content-background.png" alt="">
  
</div>
<div class="page-works-content__content">
  <div class="fv-textbox">
    <p class="fv-textbox__title">STARSKILL.jp</p>
    <p class="fv-textbox__cat">コーポレートサイト</p>
    <p class="fv-textbox__field">FIELD：Direction,Design,coding</p>
    <a href="#" class="fv-textbox__link">WEB SITE</a>
  </div>
  <div class="content-box">
    <div class="container">
      <div class="page-works-content__headtext-box">
        <p class="page-works-content__headtext-title">COMMENT</p>
        <p class="page-works-content__headtext-body">最初に考えたことは「説得力を最大限に感じていただけるプラットフォームを作り上げなければ」ということでした。

まず私どものグループ名STARSKILL.jpに含まれた意味である、「さまざまな技術が集まって起きる化学反応」をデザインとして起こすことから始め、 テクノロジカルな印象も含ませるべく、パララックス効果の導入やグラフィックキャンバス要素でリアルタイム描写を取り入れたりと試行錯誤を凝らしてみましたが、
最終的には操作性と視認性の観点から、最小限に抑えた形に落ち着きました</p>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/page-works__starskill-img01.png" alt="" class="page-works-content__works-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/page-works__starskill-img02.png" alt="" class="page-works-content__works-img">
    </div>
  </div>
</div>
<?php get_template_part('works-slider') ?>
<?php get_template_part('contact') ?>
<?php get_footer(); ?>