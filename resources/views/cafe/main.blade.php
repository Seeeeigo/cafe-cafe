@extends('layout')
@section('title', 'cafe-cafe')
@section('main')
<section class="place">
    <div class="place_container">
        <div class="place_box">
            <div class="photo">
                <img src="../../img/cafe1.jpg">
            </div>
            <div class="access">
                <p>東京</p>
                <p>車で15分</p>
            </div>
        </div>
        <div class="place_box">
            <div class="photo">
                <img src="../../img/cafe2.jpg">
            </div>
            <div class="access">
                <p>神奈川</p>
                <p>車で30分</p>
            </div>
        </div>
        <div class="place_box">
            <div class="photo">
                <img src="../../img/cafe3.jpg">
            </div>
            <div class="access">
                <p>愛知</p>
                <p>車で1時間</p>
            </div>
        </div>
        <div class="place_box">
            <div class="photo">
                <img src="../../img/cafe4.jpg">
            </div>
            <div class="access">
                <p>京都</p>
                <p>車で40分</p>
            </div>
        </div>
        <div class="place_box">
            <div class="photo">
                <img src="../../img/cafe5.jpg">
            </div>
            <div class="access">
                <p>岡山</p>
                <p>車で1.5時間</p>
            </div>
        </div>
        <div class="place_box">
            <div class="photo">
                <img src="../../img/cafe6.jpg">
            </div>
            <div class="access">
                <p>鹿児島</p>
                <p>車で50分</p>
            </div>
        </div>
        <div class="place_box">
            <div class="photo">
                <img src="../../img/cafe7.jpg">
            </div>
            <div class="access">
                <p>沖縄</p>
                <p>車で2時間</p>
            </div>
        </div>
    </div>
</section>
<!-- 好きなロケーションを選ぼうセクション -->
<section class="location">
    <h2>好きなロケーションを選ぼう</h2>
    <div class="loc1">
        <div class="loc1_box">
            <div class="info">
                <div class="photo">
                    <img src="../../img/intro1.jpg">
                </div>
                <p>クラシック</p>
            </div>
        </div>
        <div class="loc1_box">
            <div class="info">
                <div class="photo">
                    <img src="../../img/intro2.jpg">
                </div>
                <p>バー</p>
                </div>
        </div>
        <div class="loc1_box">
            <div class="info">
                <div class="photo">
                    <img src="../../img/intro3.jpg">
                </div>
                <p>キャンプ</p>
            </div>
        </div>
        <div class="loc1_box">
            <div class="info">
                <div class="photo">
                    <img src="../../img/intro4.jpg">
                </div>
                <p>リゾート</p>
            </div>
        </div>
    </div>
    <div class="loc2">
        <div class="loc2_ttl">
            <div class="loc2_text">
.               <h3>Go To Eats</h3>
                <p>
                    キャンペーンを利用して、全国で食事しよう。<br>
                    いつもと違う景色に囲まれてカラダもココロもリフレッシュ。
                </p>
            </div>
            <img src="../../img/goto.jpg">
        </div>

    </div>
</section>
<!-- カフェ作りを体験セクション -->
<section class="cafe_info">
    <div id="cafeInfo">
        <h2>カフェ作りを体験しよう</h2>
        <p>お店のエキスパートが案内するユニークな体験（直接対面型またはオンライン）</p>
        <div class="info_exp">
            <div class="info_box">
                <div class="info_container">
                    <div class="photo">
                        <img src="../../img/exp1.jpg">
                    </div>
                    <div class="text">ジョブ体験</div>
                    <p>カフェカウンターを体験しよう。</p>
                </div>
            </div>
            <div class="info_box">
                <div class="info_container">
                    <div class="photo">
                        <img src="../../img/exp2.jpg">
                    </div>
                    <div class="text">レシピ体験</div>
                    <p>美味しいレシピを考えてみよう。</p>
                </div>
            </div>
            <div class="info_box">
                <div class="info_container">
                    <div class="photo">
                        <img src="../../img/exp3.jpg">
                    </div>
                    <div class="text">プロモーション体験</div>
                    <p>お店の宣伝を手伝ってみよう。</p>
                </div>
            </div>
        </div> 
    </div>
</section>
<!-- ホストに仲間入りセクション -->
<section class="other_info">
    <h2>全国のホストに仲間入りしよう</h2>
    <div class="other_box_container">
        <div class="other_box">
            <div class="other_wrap">
                <div class="photo">
                    <img src="../../img/host1.jpg">
                </div>
                <p>ビジネス</p>
            </div>
        </div>
        <div class="other_box">
            <div class="other_wrap">
                <div class="photo">
                    <img src="../../img/host2.jpg">
                </div>
                <p>コミュニティ</p>
            </div>
        </div>
        <div class="other_box">
            <div class="other_wrap">
                <div class="photo">
                    <img src="../../img/host3.jpg">
                </div>
                <p>食べ歩き</p>
            </div>
        </div>
    </div>
</section>
<div onclick="scrollToTop()" class="jump">Jump to Top</div>
@endsection