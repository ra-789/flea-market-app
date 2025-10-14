@extends('layouts.auth')

@section('title', '会員登録')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="login-container">
        <h2>会員登録</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="name" name="name" placeholder="ユーザー名">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror

            <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}">
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror

            <input type="password" name="password" placeholder="パスワード">
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror
            <input type="password" name="password_confirmation" placeholder="確認用パスワード">

            <button type="submit">登録する</button>
        </form>
        <p class="text-center mt-4">
            <a href="{{ route('login') }}" class="link">ログインはこちら</a>
        </p>
    </div>
</div>

@endsection