@extends('layout2')
@section('title', '編集が完了しました')
@section('main')
<div class="text-area">
    <p>編集しました。</p>
    <p><a href="{{ route('main') }}">メイン画面に戻ります。</a></p>
</div>

<style>
    .text-area {
    width: 40%;
    background-color: rgb(240, 233, 233);
    opacity: 0.7;
    margin: 100px auto 0 auto;
    padding: 30px;
    border-radius: 5%;
    border: solid 1px white;
    font-size: 28px;
}
</style>
@endsection