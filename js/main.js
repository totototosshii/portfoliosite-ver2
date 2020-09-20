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
  let topButton = document.getElementById('el_scrollTop');

  //スクロール量を取得する関数
  function getScrolled() {
    return (window.pageYOffset !== undefined) ? window.pageYOffset : document.documentElement.scrollTop;
  };

  //ボタンの表示・非表示(スクロール量が500より大きいなら表示)
  (getScrolled() > 500) ? topButton.classList.add('is-fadeIn') : topButton.classList.remove('is-fadeIn');

  //スクロールトップボタンクリック時
  topButton.onclick = () => {
    let scrolled = getScrolled();
    //トップに移動する関数
    (scrolled > 0) ? window.scrollTo({ top: 0, behavior: 'smooth' }) : '';
  };
};
