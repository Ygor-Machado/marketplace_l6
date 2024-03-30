<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartData = session()->has('cart') ? session()->get('cart') : [];

        $cart = array_filter($cartData, function ($item) {
            return is_array($item) && isset($item['name'], $item['price'], $item['amount']);
        });

        return view('cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $product = $request->get('product');

        if(session()->has('cart')) {

            session()->push('cart', $product);

        } else {

            $products[] = $product;

            session()->put('cart', $products);
        }

        flash('Produto adicionado no carrinho!')->success();
        return redirect()->route('product.single', ['slug' => $product['slug']]);

    }
}
