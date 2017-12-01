@extends('admin.layout')

@section('content')

<form action="{{ url('/menus/update') }}" method="post" enctype="multipart/form-data">
	

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $menu->id }}">

	<div class="col-md-8">

		<div class="form-group">
			<label for="menu-name">Menu Name </label>
			<input type="text" name="name" class="form-control" value="{{$menu->name}}">

		</div>


		<div class="form-group">
			<label for="menu-description">Description</label>
			<textarea name="description" class="form-control">{{$menu->description}}</textarea>
		</div>



		<div class="form-group">
			<label for="price">Product Price</label>
			<input type="number" name="price" class="form-control" value="{{$menu->price}}">
		</div>

	</div>





	<aside id="admin_sidebar" class="col-md-4">


		<div class="form-group">
			<button type="submit">Save Changes</button>
		</div>


		<!-- Product Categories-->

		<div class="form-group">
			<label for="category">Category</label>

			<select name="category" class="form-control">
				<option value="{{$menu->category}}">{{$menu->category}}</option>

				@foreach($categories as $category)
				<option value="{{ $category->name }}">{{ $category->name }}</option>
				@endforeach

			</select>


		</div>




	<!-- Product Image -->
<div class="form-group">
		<label>Product Image</label>
		<img src="{{ asset('/storage/images')."/".$menu->image }}" alt="{{$menu->image}}" height="200" width="200">

	</div>

	<div class="form-group">
		<label>Select New Image</label>
		<input type="file" name="image">

	</div>
</form>



</aside><!--SIDEBAR-->



</form>

@endsection