<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->tab ?? 'recommend';

        if ($tab === 'mylist') {

            $products = auth()->check() ? auth()->user()->favorites : collect();
        } else {
            $products = Product::all();
        }

        return view('products.index', compact('products', 'tab'));
    }
}
