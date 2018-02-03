<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

use Session;

use Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $item)
    {
        //
    $menu = Menu::find($item);
   
       $cartItem =  Cart::add([
            'id'    => $menu->id,
            'name'  => $menu->name,
            'qty'   => 1,
            'price' =>$menu->price
        ]);
       Cart::associate($cartItem->rowId, 'App\Menu');  // Display an image to cart Page
    Session::flash('status', 'Product added to cart');
       return redirect('/cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //dd($qty);
      dd($id);
     // dd($id);
         break;
         //$r = Cart::update($id, $request->qty);
         
        Session::flash('status', 'Product quantity updated');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Cart::remove($id);
        Session::flash('status', 'Product removed from cart');
        return redirect()->back();
    }
}
