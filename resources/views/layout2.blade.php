<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/appSp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('/js/contact.js') }}"></script>
    <title>@yield('title')</title>
</head>
<!-- ヘッダーここから -->
<header>
    @include('Cheader')
</header>

@yield('main')

<!-- フッターここから -->
<footer>
    @include('footer')
</footer>