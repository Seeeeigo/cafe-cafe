// ヘッダーメニューアクション
$(function(){
    $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#g-nav').addClass('motion');
    } else {
        $('#g-nav').removeClass('motion');
    }
    });
});
// jumpアクション
$(window).scroll(function(){
    if($(this).scrollTop()>500){
        $('.jump').addClass("jump_action");
    }else{
        $('.jump').removeClass("jump_action");
    }
});
// jumpボタンで上に戻る
function scrollToTop(){
    window.scrollTo(0,0);
}
// はじめにボタンアクション
function scrollToLoc(){
    window.scrollTo(0,700);
}
// 体験のスクロール処理
function scrollToInfo(){
    window.scrollTo(0,1750);
}
// サインインメニュー
$(function(){
    var open = $('.sign_in'),
        container = $('.overlay');
        menu = $('.signin_box');
        spopen = $('.sp_signin_click');

    //開くボタンをクリックしたらモーダルを表示する
    open.on('click',function(){	
        container.addClass('active');
        return false;
    });
    // 開くボタンでメニューを表示する
    open.on('click',function(){	
        menu.addClass('active2');
        return false;
    });
    // 開くボタンでモーダルとメニューを表示(スマホ)
    spopen.on('click',function(){	
        container.addClass('active');
        return false;
    });
    spopen.on('click',function(){	
        menu.addClass('active2');
        return false;
    });
    //モーダルの外側をクリックしたらモーダルを閉じる
    $(document).on('click',function(e) {
        if(!$(e.target).closest('.signin_box').length) {
            container.removeClass('active');
        }
    });
    $(document).on('click',function(e) {
        if(!$(e.target).closest('.signin_box').length) {
            menu.removeClass('active2');
        }
    })
    // ハンバーガーメニュー操作
    $('#spMenu').on('click', function(e) {
        e.stopPropagation(); // イベントの伝播を止める
        $('.sp_nav').toggleClass('sp_nav_active'); // .sp_nav_activeクラスの付け外しを切り替える
    });

    // ハンバーガーメニューの外側をクリックしたらモーダルを閉じる
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.sp_nav').length) { // クリックされた要素が.sp_nav内の要素ではない場合
            $('.sp_nav').removeClass('sp_nav_active'); // .sp_nav_activeクラスを削除する
        }
    });

});
