@extends('admin.master')
@section('title', 'View Menus')
@section('content')

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table id="example" class="table">
                <thead class=".thead-light">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach($menus as $menu)
                <tbody>
                    <tr>
                        <td><img src="{{ asset('/storage/images')."/".$menu->image }}" alt="{{$menu->image}}" height="100" width="100"></td>
                        <td><span id="change">{{$menu->name}}</span></td>
                        <td>{{$menu->category}}</td>
                        <td>{{$menu->price}}</td>
                        <td>{{$menu->description}}</td>
                        <td><a href="/menus/delete/{{$menu->id}}"><button type="button" class="btn btn-danger">Remove
                        </button></a>
                        <br>
                        <input name="_method" type="hidden" value="PUT">
                        <a href="/menus/update/{{$menu->id}}"><button type="button" class="btn btn-danger">Edit</button></a></td>
                        <td></td>
                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
        
    </div>
    
</div>


@endsection
