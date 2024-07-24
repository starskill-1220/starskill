<div class="menu-trigger-box">
  <p class="menu-trigger sp" href="#">
    <span></span>
    <span></span>
    <span></span>
  </p>
</div>
<div class="gnav-shadow"></div>
<nav class="gnav-box">
  <ul class="gnav-list">
    <!-- 現在のURLを取得する -->
    <?php include("current_page.php");?>
    <li class="gnav-item">
      <?php if( $current_page == home_url('/')) : ?>
        <p class="gnav-item-text gnav-text-gray">トップへ</p>
      <?php else : ?>
        <a class="gnav-item-text" href="<?php echo home_url('/'); ?>/" class="gnav-text">トップへ</a>
      <?php endif ; ?>
    </li>
    <li class="gnav-item">
      <?php if( $current_page == home_url('/'). "service/") : ?>
        <p class="gnav-item-text gnav-text-gray">サービス内容</p>
      <?php else : ?>
        <a class="gnav-item-text" href="<?php echo home_url('/'); ?>/service">サービス内容</a>
      <?php endif ; ?>
    </li>
    <li class="gnav-item">
      <?php if( $current_page == home_url('/'). "works/") : ?>
        <p class="gnav-item-text gnav-text-gray">制作事例</p>
      <?php else : ?>
        <a class="gnav-item-text" href="<?php echo home_url('/'); ?>/works">制作事例</a>
      <?php endif ; ?>
    </li>
    <li class="gnav-item">
    <?php if( $current_page == home_url('/'). "about/") : ?>
        <p class="gnav-item-text gnav-text-gray">STARSKILLとは？</p>
      <?php else : ?>
        <a class="gnav-item-text" href="<?php echo home_url('/'); ?>/about">STARSKILLとは？</a>
      <?php endif ; ?>
    </li>
    <li class="gnav-item">
      <?php if( $current_page == home_url('/'). "contact/") : ?>
        <p class="gnav-item-text gnav-text-gray">お問い合わせ</p>
      <?php else : ?>
        <a class="gnav-item-text" href="<?php echo home_url('/'); ?>/contact">お問い合わせ</a>
      <?php endif ; ?>
      
    </li>
    <ul class="sns-list sp">
      <li class="sns-item">
        <a href="https://twitter.com/starskill_hk" target="_blank">
          <i class="fa-brands fa-x-twitter sns-icon"></i>
        </a>
      </li>
      <li class="sns-item">
        <a href="https://www.facebook.com/profile.php?id=100090575318830" target="_blank">
        <i class="fa-brands fa-facebook sns-icon"></i>
        </a>
      </li>
    </ul>
  </ul>
</nav>