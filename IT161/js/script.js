
// ドロワー
jQuery('.drawer-icon').on('click', function(e){
  e.preventDefault();

  jQuery('.drawer-icon').toggleClass('is-active');
  jQuery('.drawer-content').toggleClass('is-active');
  jQuery('.drawer-background').toggleClass('is-active');
  // クラスを付けたり消したりする
  return false;
});

// ヘッダーのクリックイベント
jQuery('.header__nav li a').on('click', function(){
  // どれかがクリックされたら全てからアクティブクラスを削除
  // クリックされたものにだけクラス付与
  jQuery('.header__nav li a').removeClass('is-active');
  jQuery(this).addClass('is-active');
});
