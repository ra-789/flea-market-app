<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MypageController extends Controller
{

    public function show(Request $request)
    {
        $user = auth()->user();

        $page = $request->query('page', 'profile');

        if ($page === 'buy') {
            $items = $user->purchases; // 購入商品一覧
        } elseif ($page === 'sell') {
            $items = $user->products; // 出品商品一覧
        } else {
            $items = collect();
        }

        return view('profile.show', compact('user', 'page', 'items'));
    }
}
