// はじめにボタンアクション
function scrollToLoc(){
    main.scrollTo(0,700);
}
$(function() {
    $('#hazimeniMove').on('click', function(){
        const url = location.href;
        var contactPart = url.substring(url.lastIndexOf('/') + 1);
        sessionStorage.setItem('button', 'hazime');
        if(contactPart == 'contact'){
            // ページ遷移
            window.location.href = '/main';
            sessionStorage.setItem('location', contactPart);
        } else {
            // 指定の場所までスムーススクロール
            scrollTo(0, 700);
        }
    });    
    $('#taikenMove').on('click', function(){
        const url = location.href;
        var contactPart = url.substring(url.lastIndexOf('/') + 1);
        sessionStorage.setItem('button', 'taiken');
        if(contactPart == 'contact'){
            // ページ遷移
            window.location.href = '/main';
            sessionStorage.setItem('location', contactPart);
        } else {
            // 指定の場所までスムーススクロール
            scrollTo(0, 2000);
        }
    });
    $('#hazimeniMoveSp').on('click', function(){
        const url = location.href;
        var contactPart = url.substring(url.lastIndexOf('/') + 1);
        sessionStorage.setItem('button', 'hazime');
        if(contactPart == 'contact'){
            // ページ遷移
            window.location.href = '/main';
            sessionStorage.setItem('location', contactPart);
        } else {
            // 指定の場所までスムーススクロール
            scrollTo(0, 900);
        }
    });    
    $('#taikenMoveSp').on('click', function(){
        const url = location.href;
        var contactPart = url.substring(url.lastIndexOf('/') + 1);
        sessionStorage.setItem('button', 'taiken');
        if(contactPart == 'contact'){
            // ページ遷移
            window.location.href = '/main';
            sessionStorage.setItem('location', contactPart);
        } else {
            // 指定の場所までスムーススクロール
            scrollTo(0, 2350);
        }
    });
    $(window).on('load', function() {
        var url = sessionStorage.getItem('location');
        var urlNow = location.href;
        var contactPart = urlNow.substring(urlNow.lastIndexOf('/') + 1);
        var button = sessionStorage.getItem('button');
        if(url == 'contact' && contactPart != 'contact') {
            if(button == 'hazime') {
                scrollTo(0, 900);
            } else if(button == 'taiken') {
                scrollTo(0, 2350);
            }
        }
        sessionStorage.removeItem('button');
        sessionStorage.removeItem('location');
    });
});

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
    });
});
