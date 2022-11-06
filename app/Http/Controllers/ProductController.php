<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Strings;
use Illuminate\Support\Facades\Auth;

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
        $cart = Cart::where('productCode', '=', $product->productCode)->first();
        DB::transaction(function () use ($product, $cart) {
            if ($cart != null) {
                $cart->quantityOrdered = $cart->quantityOrdered + 1;
                $cart->save();
            } else {
                $cart = new Cart();
                $user = Auth::user();
                $cart->productCode = $product->productCode;
                $cart->Pname=$product->Pname;
                $cart->quantityOrdered = 1;
                $cart->priceEach = $product->price;
                $cart->image = $product->image;
                $cart->userNumber = $user->userNumber;
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
        $product = Product::where('Pname', '=', $cart->Pname)->first();
        DB::transaction(function () use ($product, $cart) {
            $product->stock = $product->stock + $cart->quantityOrdered;
            $product->save();
            $cart->delete();
        });
        return back()->with('success', 'Product removed successfully');
    }
}