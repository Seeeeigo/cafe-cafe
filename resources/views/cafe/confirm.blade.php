@extends('layout2')
@section('title', 'お問い合わせ内容確認')
@section('main')

<div class="contact">
    <div class="contact_box">
        <h2>お問い合わせ</h2>
        <form action="{{ route('complete') }}" method="POST">
            @csrf
            <p>下記の内容をご確認の上送信ボタンを押してください。</p>
            <p>内容を訂正する場合は戻るを押してください。</p>
            <dl class="confirm">
                <dt>氏名</dt>
                <input name="name" type="hidden" value="{{ $inputs['name'] }}">
                <dd>{{ $inputs['name'] }}</dd>
                <dt>フリガナ</dt>
                <input name="kana" type="hidden" value="{{ $inputs['kana'] }}">
                <dd>{{ $inputs['kana'] }}</dd>
                <dt>電話番号</dt>
                <input name="tel" type="hidden" value="{{ $inputs['tel'] }}">
                <dd>{{ $inputs['tel'] }}</dd>
                <dt>メールアドレス</dt>
                <input name="email" type="hidden" value="{{ $inputs['email'] }}">
                <dd>{{ $inputs['email'] }}</dd>
                <dt>お問い合わせ内容</dt>
                <input name="body" type="hidden" value="{{ $inputs['body'] }}">
                <dd>{{ $inputs['body'] }}</dd>
            </dl>
            <dd class="confirm_btn">
                <button type="submit">送 信</button>
                <a onclick="history.back()">戻る</a>
            </dd>
        </form>
    </div>
</div>
<script>
    function delete_check(){
        var select = confirm("削除しますか？\n「OK」で削除\n「キャンセル」で中止");
        return select;
    }
</script>
@endsection