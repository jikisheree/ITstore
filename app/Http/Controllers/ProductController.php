<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Strings;

class ProductController extends Controller
{
    public function index($id)
    {
        $products = Product::where('categoryID' , $id )->get();
        return view('home.index', compact('products'));
    }

    public function category()
    {
        $categorys = Category::all();
        return view('home.category', compact('categorys'));
    }

    public function cart()
    {
        $carts = DB::select('select * from carts');
        return view('cart', ['carts' => $carts]);
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = Cart::where('name', '=', $product->name)->first();
        DB::transaction(function () use ($product, $cart) {
            if ($cart != null) {
                $cart->quantity = $cart->quantity + 1;
                $cart->save();
            } else {
                $cart = new Cart();
                $cart->name = $product->name;
                $cart->quantity = 1;
                $cart->price = $product->price;
                $cart->image = $product->image;
                $cart->save();
            }
            $product->stock = $product->stock - 1;
            $product->save();
        });
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove($id)
    {
        $cart = Cart::findOrFail($id);
        $product = Product::where('name', '=', $cart->name)->first();
        DB::transaction(function () use ($product, $cart) {
            $product->stock = $product->stock + $cart->quantity;
            $product->save();
            $cart->delete();
        });
        return back()->with('success', 'Product removed successfully');
    }
}
