<?php

namespace App\Http\Controllers;

use App\Http\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    //
    public function index()
    {
        $cart = Session::get('cart');
        return view('shop.index', compact('cart'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        Session::put('cart', $cart);
        Session::flash('success', 'Thêm sản phẩm khỏi giỏ hàng thành công');
        return redirect()->route('products.home');
    }

    public function destroy($id)
    {
       if(Session::has('cart')){
           $currentCart=Session::get('cart');
           if(count($currentCart->items)>0){
               $cart=new Cart($currentCart);
               $cart->delete($id);
               Session::put('cart',$cart);
               Session::flash('success', 'Xoa sản phẩm khỏi giỏ hàng thành công');
           }
       }
       return redirect()->route('shop.index');
    }
}
