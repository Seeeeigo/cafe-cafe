@extends('layout2')
@section('title', 'お問い合わせ')
@section('main')

<div class="contact">
    <div class="contact_box">
        <h2>お問い合わせ</h2>
        <form action="{{ route('comfirm') }}" method="POST">
            @csrf
            <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
            <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
            <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
            <p>
                <span class="required">*</span>
                は必須項目となります。
            </p>
            <dl>
                <dt>
                    <label for="name">氏名</label>
                    <span class="required">*</span>
                </dt>
                <dd>
                    <input type="text" name="name" value="{{ old('name') }}" id="inputName" placeholder="山田太郎">
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
                    <input type="text" name="kana" value="{{ old('kana') }}" id="inputKana" placeholder="ヤマダタロウ">
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
                    <input type="text" name="tel" value="{{ old('tel') }}" id="inputTel" placeholder="09012345678">
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
                    <input type="text" name="email" value="{{ old('email') }}" id="email" placeholder="test@test.co.jp">
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
                    <textarea name="body" id="body">{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                    <div class="error_msg">
                        {{$errors->first('body')}}
                    </div>
                    @endif
                </dd>
                <dd>
                    <button type="submit">送信</button>
                </dd>
            </dl>
        </form>
    </div>
</div>
    <!-- 
<table>
    <tr>
        <th>ID</th>
        <th>氏名</th>
        <th>フリガナ</th>
        <th>電話番号</th>
        <th>メールアドレス</th>
        <th>お問い合わせ内容</th>
        <th>お問い合わせ日時</th>
    </tr>
     @foreach ($cafes as $cafe)
    <tr>
        <td>{{ $cafe->id }}</td>
        <td>{{ $cafe->name }}</td>
        <td>{{ $cafe->kana }}</td>
        <td>{{ $cafe->tel }}</td>
        <td>{{ $cafe->email }}</td>
        <td>{{ $cafe->body }}</td>
        <td>{{ $cafe->created_at }}</td>
        <td><a href="edit/{{ $cafe->id }}">編集</a></td>
        <td>
            <form action="{{ route('delete', $cafe->id) }}" method="POST">
            @csrf
                <button type="submit" onclick = "return delete_check()">削除</button>
            </form>
        </td>
    </tr>
    @endforeach
</table> -->
<style>
    table{
        margin: auto;
        border: 2px solid black;
        word-break: break-all;
        margin-bottom: 5%;
    }
    th,td{
        border: 1px solid black;
        background-color: white;
        padding: 3px;
    }
    table a {
        color: blue;
        text-decoration: underline;
    }

</style>
<script>
    function delete_check(){
        var select = confirm("削除しますか？\n「OK」で削除\n「キャンセル」で中止");
        return select;
    }
</script>
@endsection