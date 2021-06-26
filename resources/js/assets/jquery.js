
$(window).on('load', function(){
  $('body').removeClass('fadeout');
});

$(function() {
  // ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
  $('a:not([href^="#"]):not([target])').on('click', function(e){
    e.preventDefault(); // ナビゲートをキャンセル
    url = $(this).attr('href'); // 遷移先のURLを取得
    if (url !== '') {
      $('body').addClass('fadeout');  // bodyに class="fadeout"を挿入
      setTimeout(function(){
        window.location = url;  // 0.8秒後に取得したURLに遷移
      }, 1000);
    }
    return false;
  });
});

$(function () {
  $('.hamburgar').click(function () {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
        $('.navMenu').addClass('active');
        $('.navMenu').fadeIn(500);
    } else {
        $('.navMenu').removeClass('active');
        $('.navMenu').fadeOut(500);
    }
  });

  $('.navmenu-a').click(function () {
    $('.navMenu').removeClass('active');
    $('.navMenu').fadeOut(1000);
    $('.hamburgar').removeClass('active');
  });
});

