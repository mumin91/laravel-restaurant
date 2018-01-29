@extends('admin.master')
@section('title', 'Update Menu')
@section('content')

<div class="container">

      {!! Form::model($menu,['url' => '/menu/'.$menu->id, 'method' => 'PUT', 'files'=>true]) !!}
      <div class="row">
      <div class="col-md-8">
        <div class="form-group">
         <label for="name">Name</label>
         {!! Form::text('name',null,['class'=>'form-control']) !!}
      </div>
   </div>

   <div class="col-md-4">
      <div class="form-group">
         <label for="category">Category</label>
         {!! Form::select('category',  $categories, null, ['class' => 'form-control']) !!}
      </div>
   </div>

   <div class="col-md-8">
      <div class="form-group">
         <label for="description">Description</label>
         {!! Form::textarea('description',null,['class'=>'form-control']) !!}
      </div>
   </div>


   <div class="col-md-4">
    <div class="form-group">
      <label for="price">Price</label>
      {!! Form::text('price',null,['class'=>'form-control']) !!}
   </div>
</div>

<div class="col-md-8">
   <div class="form-group">
      <img src="{{ asset('/storage/images')."/".$menu->image }}" height="150">
      <label for="image">Image File</label>
      {!! Form::file('image',null,['class'=>'form-control']) !!}
   </div>
</div>

<div class="col-md-4">
  <button type="submit" class="btn btn-primary">Save</button>
  <a href="{{ url('/all_menus') }}" class="btn btn-warning">Cancel</a>
</div>

</div>
{!! Form::close() !!}


</div>

@endsection