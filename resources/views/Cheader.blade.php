<style>
    header{
        background-image:none;
        min-height:0px;
    }
    .sp_nav a{
        text-decoration:none;
        color:black;
    }
</style>
<nav id="g-nav" class="motion">
    <div class="logo">
        <a href="/main">
            <img src="../../img/logo.png">
        </a>
    </div>
    <div class="menu">
        <div class="menu_button">
            <div id="hazimeniMove" class="menu_click">はじめに</a></div>
            <div id="taikenMove" class="menu_click">体験</a></div>
            <a href="/contact">お問い合わせ</a>
        </div>
    </div>
    <div class="sign_in">
        <span>サインイン</span>
    </div>
    <!-- スマホのハンバーグメニュー -->
    <div id="spMenu" class="sp_click">
        <img src="../../img/menu.png">
    </div>
    <div class="sp_nav">
        <div class="sp_signin_click">サインイン</div>
        <div id="hazimeniMoveSp" class="sp_menu_click">はじめに</a></div>
        <div id="taikenMoveSp" class="sp_menu_click">体験</a></div>
        <div class="sp_menu">
            <a href="/contact">お問い合わせ</a>
        </div>
    </div>
</nav>
<!-- サインインメニュー -->
<open-modal>
    <div class="overlay">
        <div class="signin_box">
            <h2>ログイン</h2>
            <form action="" method="post">
                <dl>
                    <dd><input type="text" name="name" placeholder="メールアドレス"></dd>
                    <dd><input type="password" name="pass" placeholder="パスワード"></dd>
                    <dd><button type="submit">送 信</button></dd>
                </dl>
                <dl class="sns">
                    <dd>
                        <button name="twitter">
                            <img src="../../img/twitter.png">
                        </button>
                    </dd>
                    <dd>
                        <button name="fb">
                            <img src="../../img/fb.png">
                        </button>
                    </dd>
                    <dd>
                        <button name="google">
                            <img src="../../img/google.png">
                        </button>
                    </dd>
                    <dd>
                        <button name="apple">
                            <img src="../../img/apple.png">
                        </button>
                    </dd>
                </dl>
            </form>
        </div>
    </div>
</open-modal>