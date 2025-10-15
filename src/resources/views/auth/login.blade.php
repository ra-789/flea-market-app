@extends('layouts.auth')

@section('title', 'ログイン')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="login-container">
        <h2>ログイン</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" name="email" id="email" class="form-input" value="{{ old('email') }}">

                @error('email')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="password">パスワード</label>
                <input type="password" name="password" id="password" class="form-input" value="{{ old('password') }}">

                @error('password')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">ログインする</button>
        </form>
        <p class="text-center mt-4">
            <a href="{{ route('register') }}" class="link">会員登録はこちら</a>
        </p>
    </div>
</div>

@endsection