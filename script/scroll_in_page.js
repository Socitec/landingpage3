$(function($){
  //goSectionクラスがクリックされると関数が実行される
  $(".goSection").on("click", function() {

    // クリックされた要素のhref属性の値を取得
    const scrollTarget = $(this).attr("href");
    // 取得した値のid属性がついた要素の位置を取得
    const offsetTop = $(scrollTarget).offset().top;

    // 取得した箇所に移動
    $("html, body").animate({ scrollTop: offsetTop }, 200, 'swing');

    return false;
  });
})
