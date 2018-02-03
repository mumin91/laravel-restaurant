@extends('layouts.main')
@section('title', 'Your Cart')

@section('content')

<div class="container">

    @if(Session::has('status'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ Session::get('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
     
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              <td class="image">Menu</td>
              <td class="description">Description</td>
              <td class="price">Price</td>
              <td class="quantity">Quantity</td>
              <td class="total">Sub-Total</td>
              <td></td>
            </tr>
          </thead>

          @foreach(Cart::content() as $menu)

          <tbody>
            <tr>
              <td class="cart_product">
                <a href=""><img src="{{ asset('/storage/images')."/".$menu->model->image }}" alt="" height="100px" width="100px"></a>
              </td>
              <td class="cart_description">
                <h4><a href="">{{ $menu->name }}</a></h4>
              </td>
              <td class="cart_price">
                <p>BDT {{$menu->price}}</p>
              </td>
              <td class="cart_quantity">
                <div class="cart_quantity_button">
                   <input title="qty" id="qty" class="email input-text qty text" value="{{ $menu->qty }}" type="text">
                </div>
              </td>
              <td class="cart_total">
                <p class="cart_total_price">BDT {{ $menu->subtotal }}</p> 
              </td>
              <td class="cart_update">
                     <a href="{{ route('cart.update',['id' =>$menu->rowId, 'qty' =>$menu->qty]) }}"><button class="btn btn-warning">Update</button></a>
              </td>
              <td class="cart_delete">
                     <a href="{{ route('cart.delete',['id' =>$menu->rowId]) }}" class="product-del remove" title="Delete"><button class="btn btn-danger">Delete</button></a>
              </td>
            </tr>
            <tr>
              @endforeach
       <th class="text-right">Shipping</th>
       <td class="text-right">BDT 50</td>
     </tr>
            <tr>
       <th class="text-right">Total</th>
       <td class="text-right"><b>{{ Cart::subtotal() + 50 }}</b></td>
     </tr>
          </tbody>
        </table>
      </div>



      <div align="center">
       
          <a href="/menus" class="product-del remove" title="Delete"><button class="btn btn-lg btn-secondary" style="margin-bottom: 20px">Continue Shopping</button></a>
        <a href="/order/create" class="product-del remove" title="Delete"><button class="btn btn-lg btn-success" style="margin-bottom: 20px">Place Order</button></a>
        
        
      </div>
    </div>


  



@endsection