#backup home
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<h1>Selamat Datang di Laravel</h1>
<p>Ini adalah Halaman Beranda</p>
@endsection

//layout
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.header')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>