<section class="works-slider works">
  <div class="section-headbox">
    <h2 class="section-headtext" >W<span class="strong-color">O</span>RKS</h2>
    <span class="section-desc">制作事例</span>
    <!-- <p class="section-head-description">LP制作・Webサイト制作/リニューアル・サイト保守運用代行など<br class="pc">お客様のミッションを達成するために必要なウェブ媒体の制作を行っております。</p> -->
  </div>
  <div class="works-box">
    <ul class="works-slider__list">
      <li li class="works-slider__item">
        <a href="">
          <div class="works-slider__item--img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img01.png">
          </div>
          <div class="works-slider__item--text-box">
            <p class="date">2024/07/11</p>
            <p class="cat">コーポレートサイト</p>
            <p class="client-name">株式会社SUNCREATE様</p>
          </div>
        </a>
      </li>
      <li class="works-slider__item">
        <a href="">
          <div class="works-slider__item--img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img01.png">
          </div>
          <div class="works-slider__item--text-box">
            <p class="date">2024/07/11</p>
            <p class="cat">コーポレートサイト</p>
            <p class="client-name">株式会社SUNCREATE様</p>
          </div>
        </a>
      </li>
      <li li class="works-slider__item">
        <a href="">
          <div class="works-slider__item--img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img01.png">
          </div>
          <div class="works-slider__item--text-box">
            <p class="date">2024/07/11</p>
            <p class="cat">コーポレートサイト</p>
            <p class="client-name">株式会社SUNCREATE様</p>
          </div>
        </a>
      </li>
      <li class="works-slider__item">
        <a href="">
          <div class="works-slider__item--img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img01.png">
          </div>
          <div class="works-slider__item--text-box">
            <p class="date">2024/07/11</p>
            <p class="cat">コーポレートサイト</p>
            <p class="client-name">株式会社SUNCREATE様</p>
          </div>
        </a>
      </li>

      

    </ul>

    <!-- <script>
      $('.slider01').slick({
        autoplay: true, // 自動再生
        centerMode: true,// 前後スライドを部分表示
        centerPadding: '5%',// 両端の見切れるスライド幅
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        dots: true,
      });
    </script> -->




    <ul class="works-list--sp sp">
      <?php
      $args = array( 'post_type' => 'works' );  // カスタム投稿タイプ works
      $the_query = new WP_Query($args); if($the_query->have_posts()):
      ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="works-item">
            <a href="<?php the_permalink(); ?>">
              <img class="works-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="slider-img">
              <div class="
              works-item-textbox
              <?php if(get_field("サンプル制作物") == "サンプル制作物") : ?>
                works-item__sample-badge
              <?php endif ?>
              ">
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
  <!-- <h2 class="section-headtext strong-color">WORKS</h2>
  </div>
  <a class="c-btn" href="<?php echo home_url('/'); ?>/works">制作事例一覧へ</a> -->
</section>




