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

    public function remove($slug)
    {
        if(!session()->has('cart')) {
            return redirect()->route('cart.index');
        }

        $products = session()->get('cart');

        $products = array_filter($products, function ($line) use ($slug) {
            if (is_array($line) && isset($line['slug'])) {
                return $line['slug'] != $slug;
            }
            return false;
        });

        session()->put('cart', $products);

        return redirect()->route('cart.index');
    }
}
