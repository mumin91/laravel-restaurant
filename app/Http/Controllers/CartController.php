<?php

namespace App\Http\Controllers;
use App\Cart;
use App\CartItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

     

     public function addItem ($menuId){
 
        $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
 
        $cartItem  = new Cartitem();
        $cartItem->menu_id=$menuId;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();
 
        return redirect('/cart');
 
    }
 
    public function showCart(){
        $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
 
        $items = $cart->cartItem;
        $total=0;
        foreach($items as $item){
            $total+=$item->menu->price;
        }
 
        return view('/cart',['items'=>$items,'total'=>$total]);
    }
 
    public function removeItem($id){
 
        CartItem::destroy($id);
        return redirect('/cart');
    }
 

}
