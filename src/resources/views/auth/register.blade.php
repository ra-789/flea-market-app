@extends('layouts.auth')

@section('title', '会員登録')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="login-container">
        <h2>会員登録</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name" class="form-label">ユーザー名</label>
            <input type="name" name="name" id="name" class="form-input" value="{{ old('name') }}">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="email" class="form-label">メールアドレス</label>
            <input type="email" name="email" id="email" class="form-input" value="{{ old('email') }}">
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="password" class="form-label">パスワード</label>
            <input type="password" name="password" id="password" class="form-input" value="{{ old('password') }}">
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="password" class="form-label">確認用パスワード</label>
            <input type="password" name="password" id="password" class="form-input" value="{{ old('password') }}">

            <button type="submit">登録する</button>
        </form>
        <p class="text-center mt-4">
            <a href="{{ route('login') }}" class="link">ログインはこちら</a>
        </p>
    </div>
</div>

@endsection