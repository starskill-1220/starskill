
<footer class="">
  <div class="footer-box">
    <div class="footer__logo-box">
      <p class="footer__catch-text">お客様に寄り添うホームページ制作事務所</p>
      <p class="footer__logo">STARSKILL</p>
      <p class="footer__address">東京都東村山市本町3-13-24 102</p>
      <p class="footer__phone">080-3377-2819</p>
    </div>
    <ul class="footer__nav-list">
      <li class="footer__nav-item"><a class="footer__nav-item-text" href="<?php echo home_url('/'); ?>">トップページ</a></li>
      <li class="footer__nav-item"><a class="footer__nav-item-text"href="<?php echo home_url('/'); ?>/service">サービス内容</a></li>
      <li class="footer__nav-item"><a class="footer__nav-item-text"href="<?php echo home_url('/'); ?>/works">制作事例</a></li>
      <li class="footer__nav-item"><a class="footer__nav-item-text"href="<?php echo home_url('/'); ?>/about">STARSKILLとは？</a></li>
      <li class="footer__nav-item"><a class="footer__nav-item-text"href="<?php echo home_url('/'); ?>/contact">お問い合わせ</a></li>
      <li class="footer__nav-item"><a class="footer__nav-item-text"href="<?php echo home_url('/'); ?>/privacy">プライバシーポリシーについて</a></li>
    </ul>
    <ul class="sns-list">
      <li class="sns-item">
        <a href="https://twitter.com/starskill_hk" target="_blank">
          <i class="fa-brands fa-x-twitter"></i>
        </a>
      </li>
      <li class="sns-item">
        <a href="https://www.facebook.com/profile.php?id=100090575318830" target="_blank">
          <i class="fa-brands fa-facebook"></i>
        </a>
      </li>
    </ul>
    <p class="footer__copyright">© 2024 STARSKILL ALL RIGHTS RESERVED.</p>
  </div>
  <?php wp_footer(); ?>
</footer>


    
    
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/rellax.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/easing.js" type="text/javaScript" charset="utf-8"></script>
    <!-- スクロールアニメーション -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <?php include("current_page.php");?>
    <?php if($current_page == home_url('/')) : ?>
      <script src="<?php echo get_template_directory_uri() ?>/assets/js/particles.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>/assets/js/app.js"></script>
      <script src="//cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>/assets/js/top.js" type="text/javaScript" charset="utf-8"></script>
    <?php else :?>
      <script src="<?php echo get_template_directory_uri() ?>/assets/js/index.js" type="text/javaScript" charset="utf-8"></script>
    <?php endif ;?>
    <script>
      var rellax = new Rellax('.rellax');

      // スクロールアニメーション


      // ScrollReveal().reveal(".section2 .section-headtext", {
      //   scale: '0.5',
      //   duration: 500,
      //   easing: 'ease',
      //   opacity: 0,
      //   }
      // )
      ScrollReveal().reveal(".service-item", {
        origin: "bottom",
        distance: '30px',
        duration: 250,
        easing: 'ease-in',
        opacity: 0,
        }
      )
      ScrollReveal().reveal(".works-slider .section-headtext", {
        scale: '0.5',
        duration: 500,
        easing: 'ease',
        opacity: 0,
        }
      )
      ScrollReveal().reveal(".works-list--sp", {
        origin: "right",
        distance: '500px',
        duration: 500,
        easing: 'ease-out',
        opacity: 0,
        }
      )
      ScrollReveal().reveal(".contact-box", {
        scale: '0.5',
        duration: 500,
        easing: 'ease',
        opacity: 0,
        }
      )

      ScrollReveal().reveal(".page-works-item:nth-child(1)", {
        origin: "bottom",
        distance: '30px',
        scale: '0.5',
        duration: '300',
        delay: '100',
        easing: 'ease-in',
        opacity: 0,
        }
      )
      ScrollReveal().reveal(".page-works-item:nth-child(2)", {
        origin: "bottom",
        distance: '30px',
        scale: '0.5',
        duration: '300',
        delay: '300',
        easing: 'ease',
        opacity: 0,
        }
      )
      ScrollReveal().reveal(".page-works-item:nth-child(3)", {
        origin: "bottom",
        distance: '30px',
        scale: '0.5',
        duration: '300',
        delay: '450',
        easing: 'ease',
        opacity: 0,
        }
      )
      ScrollReveal().reveal(".page-works-item", {
        origin: "bottom",
        distance: '30px',
        scale: 0.5,
        duration: '300',
        easing: 'ease',
        opacity: 0,
        }
      )


    </script>

  </body>
</html>
