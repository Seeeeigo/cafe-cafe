@extends('layout2')
@section('title', 'お問い合わせ完了')
@section('main')

<div class="contact">
    <div class="contact_box">
        <h2>お問い合わせ</h2>
        <div class="comp_msg">
            <p>お問い合わせ頂きありがとうございます。</p>
            <p>送信頂いたの件につきましては、当社より折り返しご連絡を差し上げます。</p>
            <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
            <a href="{{ route('main') }}">トップへ戻る</a>
        </div>
    </div>
</div>
@endsection