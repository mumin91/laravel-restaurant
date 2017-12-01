@extends('layouts.main')
@section('title', 'Menu')

@section('content')


<div class="container" style="padding-top: 50px">
    @foreach($menus as $menu)
<div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('/storage/images')."/".$menu->image }}" alt="{{$menu->image}}" height="700" width="400">
          </a>
        </div>
        <div class="col-md-5">
          <h3>{{$menu->name}} | Price:{{$menu->price}}</h3>
          <p>{{$menu->description}}</p>
          <a class="btn btn-primary" href="/view_menus/{{$menu->id}}">View Details</a>
          <a href="/addProduct/{{$menu->id}}" class="btn btn-primary">Add to Menu List</a>
        </div>
      </div>
        <hr>

        @endforeach

          <!-- /.row -->



</div>




</div>






@endsection