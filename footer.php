
<footer class="">
  <div class="footer-box">
    <ul class="sns-list">
      <li class="sns-item">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="Twitterリンク">
        </a>
      </li>
      <li class="sns-item">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebookリンク">
        </a>
      </li>
    </ul>
    <div class="footer-textbox">
      <a class="logo" href="<?php echo home_url('/'); ?>">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.png" alt=""> -->
        <p>STARSKILL</p>
      </a>
      <p class="copyright">© STARSKILL All Rights Reserved.</p>
    </div>
    <a href="#"><img class="top-scroll" src="<?php echo get_template_directory_uri(); ?>/img/top-scroll.png" alt=""></a>
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
