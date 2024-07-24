<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9W2DRL');</script>
<!-- End Google Tag Manager -->
    <meta charset="utf-8"><!--文字のエンコード-->

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes"><!--viewport設定-->
    <!-- サーチコンソールのタグ -->
    <meta name="google-site-verification" content="HzRDtTknp2Q2xlW9KLiT-hlIFGiHWcm_Aym_iXF0Ghc" />

    <?php include("current_page.php");?>
    <?php if($current_page == home_url('/')) : ?>
      <title>STARSKILL</title>
    <?php else :?>
      <title><?php the_title(); ?> | STARSKILL</title>
    <?php endif ;?>

    <?php if( get_field("description") == true) : ?>
      <meta name="description" content="<?php echo the_field("description") ?>"/>
    <?php else :?>
      <meta name="description" content="これはテストです"/>
    <?php endif ?>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" />
    <!-- slickのCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- notosansjpフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>

    <!-- js -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/03f4bb96ca.js" crossorigin="anonymous"></script>

    

    <!--OGPタグ/twitterカード-->
    <meta property="og:url" content="<?php echo home_url('/'); ?>" />
    <meta property="og:title" content="STARSKILL" />
    <meta property="og:type" content="website">
    <meta property="og:description" content="こんなサイト作ります。ホームページ制作は「STARSKILL」へ" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-card.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="" />
    <meta property="og:site_name" content="STARSKILL" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="appIDを入力" />
    <!--サイトアイコンの指定-->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" sizes="16x16" type="image/png" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" sizes="48x48" type="image/png" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" sizes="62x62" type="image/png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" /><!--スマホ用のホーム画面アイコン画像-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

    <script>
  (function(d) {
    var config = {
      kitId: 'gsa3fdj',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

    <?php wp_head(); ?>
</head>