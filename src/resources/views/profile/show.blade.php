@extends('layouts.app1')

@section('title', $user->name . 'のプロフィール')

@section('content')
<div class="container mx-auto px-6 py-8">

    {{-- プロフィール基本情報 --}}
    <div class="flex items-center space-x-6 mb-8">
        <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('images/default_profile.png') }}"
            alt="プロフィール画像" class="w-24 h-24 rounded-full object-cover">
        <h2 class="text-2xl font-bold">{{ $user->name }}</h2>
    </div>

    {{-- 出品した商品 --}}
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-4">出品した商品</h3>
        @if($user->products->isEmpty())
        <p>出品した商品はありません</p>
        @else
        <div class="grid grid-cols-3 gap-4">
            @foreach($user->products as $product)
            <div class="border rounded p-2">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-40 object-cover mb-2">
                <p class="font-semibold">{{ $product->name }}</p>
                <p class="text-gray-500">{{ number_format($product->price) }}円</p>
            </div>
            @endforeach
        </div>
        @endif
    </div>

    {{-- 購入した商品 --}}
    <div>
        <h3 class="text-xl font-semibold mb-4">購入した商品</h3>
        @if($user->purchases->isEmpty())
        <p>購入した商品はありません</p>
        @else
        <div class="grid grid-cols-3 gap-4">
            @foreach($user->purchases as $product)
            <div class="border rounded p-2">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-40 object-cover mb-2">
                <p class="font-semibold">{{ $product->name }}</p>
                <p class="text-gray-500">{{ number_format($product->price) }}円</p>
            </div>
            @endforeach
        </div>
        @endif
    </div>

</div>
@endsection