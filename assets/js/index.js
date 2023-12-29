// ブラウザバックでも強制リロード
window.addEventListener('pageshow', function (event) {
  if (event.persisted) {
    // bfcache発動時の処理
    window.location.reload();
  }
});

$(".menu-trigger").click(function (){

  if($(this).hasClass('menu-2')){
    $(this).removeClass('menu-2');
    $(this).addClass('menu-1');
    $(this).removeClass('active');
    $('.gnav-box').removeClass('gnav-open')
    $('.gnav-shadow').removeClass('gnav-shadow-open')
    $('.gnav-item-text').removeClass('fadeUp');
    $('.gnav-item-text').addClass('fadeDown');
    $('.sns-icon').removeClass('fadeUp');
    $('.sns-icon').addClass('fadeDown');
    $('.header-logo').removeClass('hide');
  } else {
    $(this).removeClass('menu-1');
    $(this).addClass('menu-2');
    $(this).addClass('active');
    $('.gnav-box').addClass('gnav-open')
    $('.gnav-shadow').addClass('gnav-shadow-open')
    $('.gnav-item-text').removeClass('fadeDown');
    $('.gnav-item-text').addClass('fadeUp');
    $('.sns-icon').removeClass('fadeDown');
    $('.sns-icon').addClass('fadeUp');
    $('.header-logo').addClass('hide');
  };

  if($('.gnav-box').hasClass('gnav-open')){
    $(this).removeClass('gnav-open')
  }else {
    $(this).addClass('gnav-open');
  }
});

$(".gnav-shadow").click(function (){

  if($(".menu-trigger").hasClass('menu-2')){
    $(".menu-trigger").removeClass('menu-2');
    $(".menu-trigger").addClass('menu-1');
    $(".menu-trigger").removeClass('active');
    $('.gnav-box').removeClass('gnav-open')
    $('.gnav-shadow').removeClass('gnav-shadow-open')
    $('.gnav-item-text').removeClass('fadeUp');
    $('.gnav-item-text').addClass('fadeDown');
    $('.sns-icon').removeClass('fadeUp');
    $('.sns-icon').addClass('fadeDown');
    $('.header-logo').removeClass('hide');
  };
  if($('.gnav-box').hasClass('gnav-open')){
    $(this).removeClass('gnav-open')
  }else {
    $(this).addClass('gnav-open');
  }
});








$('.works-list').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.works-list--sp').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});



// スクロールで要素を消す
$(function(){
  var pos = 100;
  var fvMonoImg = $('.fv-mono-img');
  // var headerLogo = $('.header-logo')
  var pcFixed = $(".pc-fixed");

  $(window).on('scroll', function(){
    if($(this).scrollTop() < pos ){
      //上にスクロールしたとき
      // fvMonoImg.removeClass('hide');
      headerLogo.removeClass('hide');
      pcFixed.css("z-index","0");
    }else{
      //下にスクロールしたとき
      // fvMonoImg.addClass('hide');
      headerLogo.addClass('hide');
      pcFixed.css("z-index","-1");
    }
  });

  $(window).on('scroll', function(){
    if($(this).scrollTop() < 1000 ){
      //上にスクロールしたとき
      pcFixed.css("z-index","0");
    }else{
      //下にスクロールしたとき
      pcFixed.css("z-index","-1");
    }
  });

});


// page-serviceのタブ切り替え
$(".service-tab__item").click(function() {
  $('.service-tab__item').removeClass('active');
  $(this).addClass('active');
  $(".service-panel__item").css({"display":"none"}).removeClass('active');
  var clickedIndex = $('.service-tab__item').index($(this));
  $(".service-panel__item").eq( clickedIndex ).fadeIn(1000).css({"display":"block"}).addClass('active');
});







//ローディング時の動き
$(window).on('load', function(){
  setTimeout(function(){
      //bodyに付けているfadeのクラスを取る
      $('body').removeClass('fade');
    }, 400);
});
$(function() {
  //ページ内リンク、target属性がない場合のaタグが押された時
  $('a:not([href^="#"]):not([target])').on('click', function(e){
    e.preventDefault();
    link = $(this).attr('href');
    if (link !== '') {
      //bodyにフェードアウトさせるためのクラスを付与
      $('body').addClass('fadeout');
      setTimeout(function(){
        window.location = link;
      }, 400);
    }
    return false;
  });
});

//SVGアニメーションの描画
var stroke;
stroke = new Vivus('mask', {//アニメーションをするIDの指定
    start:'manual',//自動再生をせずスタートをマニュアルに
    type: 'scenario-sync',// アニメーションのタイプを設定
    duration: 15,//アニメーションの時間設定。数字が小さくなるほど速い
    forceRender: false,//パスが更新された場合に再レンダリングさせない
    animTimingFunction:Vivus.EASE,//動きの加速減速設定
},
function(){
         $("#mask").attr("class", "done");//描画が終わったらdoneというクラスを追加
}
);

$(window).on('load',function(){
  if (sessionStorage.getItem('visit')) {
    $("#splash").css("display", "none");
  } else {
    sessionStorage.setItem('visit', 'true'); 
    $("#splash").delay(4000).fadeOut('slow');//ローディング画面を3秒（3000ms）待機してからフェイドアウト
  $("#splash_logo").delay(4000).fadeOut('slow');//ロゴを3秒（3000ms）待機してからフェイドアウト
        stroke.play();//SVGアニメーションの実行
  }
});

// contact-confirm遷移のためのコード
$(function(){ 
  document.addEventListener( 'wpcf7mailsent', function( event ) { location = 'https://star-skill.jp/confirm'; }, 
  false );});


// 画像表示エフェクト

  // 動きのきっかけの起点となるアニメーションの名前を定義
function BgFadeAnime(){

  // 背景色が伸びて出現（左から右）
$('.bgLRextendTrigger').each(function(){ //bgLRextendTriggerというクラス名が
  var elemPos = $(this).offset().top;//要素より、50px上の
  var scroll = $(window).scrollTop();
  var windowHeight = $(window).height();
  if (scroll >= elemPos - windowHeight){
    $(this).addClass('bgLRextend');// 画面内に入ったらbgLRextendというクラス名を追記
  }
}); 

 // 文字列を囲う子要素
$('.bgappearTrigger').each(function(){ //bgappearTriggerというクラス名が
  var elemPos = $(this).offset().top-200;//要素より、50px上の
  var scroll = $(window).scrollTop();
  var windowHeight = $(window).height();
  if (scroll >= elemPos - windowHeight){
    $(this).addClass('bgappear');// 画面内に入ったらbgappearというクラス名を追記
  }
});   
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function (){
  BgFadeAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

