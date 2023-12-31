<section class="works-slider works">
  <div class="works-box">
    <ul class="works-list pc">
      <?php
      $args = array( 'post_type' => 'works' );  // カスタム投稿タイプ works
      $the_query = new WP_Query($args); if($the_query->have_posts()):
      ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="works-item">
            <a href="<?php the_permalink(); ?>">
              <img class="works-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="slider-img">
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


    <ul class="works-list--sp sp">
      <?php
      $args = array( 'post_type' => 'works' );  // カスタム投稿タイプ works
      $the_query = new WP_Query($args); if($the_query->have_posts()):
      ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="works-item">
            <a href="<?php the_permalink(); ?>">
              <img class="works-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="slider-img">
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
  <h2 class="section-headtext strong-color">WORKS</h2>
  </div>
  <a class="btn" href="<?php echo home_url('/'); ?>/works">制作事例一覧へ</a>
</section>
