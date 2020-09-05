// --------------------------------
//      ハンバーガーメニュー
// --------------------------------
jQuery('.drawer-btn').on('click', function () {
  jQuery(this).toggleClass('is-active');
  jQuery('.header-links').toggleClass('is-active');
  jQuery('.drawer_menu_text').toggleClass('is-active');
  jQuery('.js-drawer_close').toggleClass('is-active');
  jQuery('body').toggleClass('noScroll');
});


// --------------------------------
//      スクロールトップボタン
// --------------------------------
window.onscroll = () => {

  //ボタンの要素を取得
  let topButton = document.getElementById('scrollTop');

  //スクロール量を取得する関数
  function getScrolled() {
    return (window.pageYOffset !== undefined) ? window.pageYOffset : document.documentElement.scrollTop;
  }

  //ボタンの表示・非表示
  (getScrolled() > 500) ? topButton.classList.add('is-fadeIn') : topButton.classList.remove('is-fadeIn');

  //トップに移動する関数
  function scrollToTop() {
    let scrolled = getScrolled();
    window.scrollTo(0, Math.floor(scrolled / 2));
    if (scrolled > 0) {
      window.setTimeout(scrollToTop, 60);
    }
  };

  // スクロールトップ
  topButton.onclick = () => {
    scrollToTop();
  };
};
