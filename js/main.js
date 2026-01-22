
jQuery(function ($) {

  /* ハンバーガーメニュー */
  $('.hamburger').on('click', function () {
    $(this).toggleClass('active');
    $('.g-nav-area').toggleClass('active');
    $('body').toggleClass('no-scroll'); // スクロール防止（任意）
  });

  /* ヘッダーのスクロール表示・非表示 */
  let lastScrollTop = 0;
  const $header = $('#header');

  $(window).on('scroll', function () {
    const scrollTop = $(this).scrollTop();

    if (scrollTop > lastScrollTop && scrollTop > 100) {
      $header.addClass('hide').removeClass('show');
    } else {
      $header.addClass('show').removeClass('hide');
    }

    lastScrollTop = scrollTop;
  });

});
