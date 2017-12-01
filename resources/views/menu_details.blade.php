@extends('layouts.main')
@section('title', 'Menu Details')

@section('content')

    <div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">{{$menu->name}}
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="{{ asset('/storage/images')."/".$menu->image }}" alt="{{$menu->image}}">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">Menu Description</h3>
                <p>{{$menu->description}}</p>
                <a href="/addProduct/{{$menu->id}}" class="btn btn-primary">Add to Menu List</a>
            </div>

        </div>
        <!-- /.row -->



        <!-- Related Projects Row -->
        <h3 class="my-4">Related Projects</h3>

        <div class="row">

            @for ($i=0; $i<4; $i++)
            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
            @endfor



        </div>
        <!-- /.row -->

    </div>



@endsection