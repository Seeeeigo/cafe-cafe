@extends('layout2')
@section('title', 'お問い合わせ編集画面')
@section('main')
<div class="contact">
    <div class="contact_box">
        <h2>お問い合わせ編集フォーム</h2>
        <form action="{{ route('update') }}" method="POST">
            @csrf
            <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
            <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
            <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
            <p>
                <span class="required">*</span>
                は必須項目となります。
            </p>
            <input type="hidden" name="id" value="{{ $cafe->id }}">
            <dl>
                <dt>
                    <label for="name">氏名</label>
                    <span class="required">*</span>
                </dt>
                <dd>
                    <input type="text" name="name" value="{{ $cafe->name }}" id="inputName" placeholder="山田太郎">
                    @if ($errors->has('name'))
                    <div class="error_msg">
                        {{$errors->first('name')}}
                    </div>
                    @endif
                </dd>
                <dt>
                    <label for="kana">フリガナ</label>
                    <span class="required">*</span>
                </dt>
                <dd>
                    <input type="text" name="kana" value="{{ $cafe->kana }}" id="inputKana" placeholder="ヤマダタロウ">
                    @if ($errors->has('kana'))
                    <div class="error_msg">
                        {{$errors->first('kana')}}
                    </div>
                    @endif
                </dd>
                <dt>
                    <label for="tel">電話番号</label>
                </dt>
                <dd>
                    <input type="text" name="tel" value="{{ $cafe->tel }}" id="inputTel" placeholder="09012345678">
                    @if ($errors->has('tel'))
                    <div class="error_msg">
                        {{$errors->first('tel')}}
                    </div>
                    @endif
                </dd>
                <dt>
                    <label for="email">メールアドレス</label>
                    <span class="required">*</span>
                </dt>
                <dd>
                    <input type="text" name="email" value="{{ $cafe->email }}" id="email" placeholder="test@test.co.jp">
                    @if ($errors->has('email'))
                    <div class="error_msg">
                        {{$errors->first('email')}}
                    </div>
                    @endif
                </dd>
            </dl>
            <h3>
                <label for="body">
                    お問い合わせ内容をご記入ください
                    <span class="required">*</span>
                </label>
            </h3>
            <dl class="body">
                <dd>
                    <textarea name="body" id="body">{{ $cafe->body }}</textarea>
                    @if ($errors->has('body'))
                    <div class="error_msg">
                        {{$errors->first('body')}}
                    </div>
                    @endif
                </dd>
                <dd>
                    <button type="submit">更新する</button>
                </dd>
            </dl>
        </form>
    </div>
</div>
@endsection