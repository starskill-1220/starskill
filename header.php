<!DOCTYPE html>
<html >
<?php get_template_part('head') ?>

<!--Bodyここから！！！！！！！！！！-->
  <body class="fade">
  <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9W2DRL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

      <header class="
        <?php if(get_field("ヘッダーの色") == "white"): ?>
          header-white
        <?php else :?>
          header-black
        <?php endif ?>
      ">
        <a class="logo header-logo" href="<?php echo home_url('/'); ?>">
        <?php include("current_page.php");?>
        <?php if($current_page == home_url('/')) : ?>
          <h1 data-text3="STARSKILL">STARSKILL</h1>
        <?php else : ?>
          <p data-text3="STARSKILL">STARSKILL</p>
        <?php endif ?>
        </a>
        <?php get_template_part('gNav') ?>

      </header>
    