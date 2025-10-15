@extends('layouts.app')

@section('title', '商品一覧')

@section('content')
<div class="container mx-auto px-6 py-8">

    {{-- タブメニュー --}}
    <div class="flex space-x-6 border-b mb-6 text-sm">
        <a href="{{ route('items.index', ['tab' => 'recommend']) }}"
            class="{{ $tab === 'recommend' ? 'text-red-500 border-b-2 border-red-500' : 'text-gray-500' }}">
            おすすめ
        </a>
        <a href="{{ route('items.index', ['tab' => 'mylist']) }}"
            class="{{ $tab === 'mylist' ? 'text-red-500 border-b-2 border-red-500' : 'text-gray-500' }}">
            マイリスト
        </a>
    </div>

    {{-- 商品一覧 --}}
    <div class="grid grid-cols-4 gap-6">
        @forelse($products as $product)
        <div class="border rounded-lg overflow-hidden shadow hover:shadow-lg transition duration-300">
            <img src="{{ $product->img_url }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
            </div>
        </div>
        @empty
        <p class="text-gray-500 col-span-4">表示できる商品がありません。</p>
        @endforelse
    </div>

</div>
@endsection