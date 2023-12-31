<?php get_header(); ?>

<div class="page-headbox">
  <div class="page-headtextbox">
    <p class="page-headline">CONTACT</p>
    <p class="page-description">お問い合わせ</p>
  </div>
</div>

<div class="content-box">
  <div class="container container--contact">
    <p class="page-contact__headtext">
      入力内容の確認をお願いいたします。<br>
      お間違いがなければ「送信する」を押してください。
    </p>
    <?php the_content(); ?>

    <!-- <ul class="contact-list">
      <li class="contact-list__item">
        <label for="" class="contact-list__label">お名前</label>
        <input type="text" class="contact-list__input">
      </li>
      <li class="contact-list__item">
        <label for="" class="contact-list__label">電話番号</label>
        <input type="text" class="contact-list__input">
      </li>
      <li class="contact-list__item">
        <label for="" class="contact-list__label">メールアドレス</label>
        <input type="text" class="contact-list__input">
      </li>
      <li class="contact-list__item">
        <label for="" class="contact-list__label">企業名・団体名</label>
        <input type="text" class="contact-list__input">
      </li>
      <li class="contact-list__item">
        <label for="" class="contact-list__label">お問い合わせ内容</label>
        <textarea type="text" class="contact-list__textarea"></textarea>
      </li>
    </ul>
    <button class="btn">確認する</button> -->
  </div>
</div>
<?php get_footer(); ?>