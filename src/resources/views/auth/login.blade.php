@extends('layouts.auth')

@section('title', 'ログイン')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="login-container">
        <h2>ログイン</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}">
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror

            <input type="password" name="password" placeholder="パスワード">
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">ログインする</button>
        </form>
        <p class="text-center mt-4">
            <a href="{{ route('register') }}" class="link">会員登録はこちら</a>
        </p>
    </div>
</div>

@endsection