@extends('layout2')
@section('title', '削除しました')
@section('main')
<div class="text-area">
    <p>削除しました。</p>
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