@extends('admin.layout')

@section('content')

{!! Form::model($menu,['url' => '/menu/'.$menu->id, 'method' => 'PUT', 'files'=>true]) !!}

      <img src="{{ asset($menu->image) }}" height="150" />
      <div class="form-group">
         <label for="image">Image File</label>
         {!! Form::file('image',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="name">Caption</label>
         {!! Form::text('name',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="category">Caption</label>
         {!! Form::select('category',$categories, $menu->category, ['class'=>'form-control']) !!}
      </div>

      Form::select('size', ['L' => 'Large', 'S' => 'Small']);

      <div class="form-group">
         <label for="price">Caption</label>
         {!! Form::text('price',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="description">Description</label>
         {!! Form::textarea('description',null,['class'=>'form-control']) !!}
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ url('/all_menus') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
























@endsection