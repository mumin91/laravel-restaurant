@extends('admin.layout')

@section('content')

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Delete Product</th>
            </tr>
        </thead>
        @foreach($menus as $menu)
        <tbody>
        <tr>
            <td></td>
            <td><img src="{{ asset('/storage/images')."/".$menu->image }}" alt="{{$menu->image}}" height="100" width="100"></td>
            <td><span id="change">{{$menu->name}}</span></td>
            <td>{{$menu->category}}</td>
            <td>{{$menu->price}}</td>
            <td>{{$menu->description}}</td>
            <td><a href="/menus/delete/{{$menu->id}}"><button type="button" class="btn btn-danger">Remove
                                </button></a>
                                <br>
                                <input name="_method" type="hidden" value="PUT">
                                <a href="/menus/update/{{$menu->id}}"><button>Edit</button></a></td>
            <td></td>
        </tr>
        </tbody>
        @endforeach
    
</table>


@endsection
