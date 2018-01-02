	@extends('admin.master')
	@section('title', 'Add Menu')
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

	<form action="/menus" method="post" enctype="multipart/form-data" onSubmit ="">

		{{ csrf_field() }}

<div class="row">
	<div class="col-md-8">

			<div class="form-group">
				<label for="menu-name">Menu Name </label>
				<input type="text" name="name" class="form-control">

			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="price">Product Price</label>
				<input type="number" name="price" class="form-control">
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<label for="menu-description">Description</label>
				<textarea name="description" class="form-control"></textarea>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label for="category">Category</label>

				<select name="category" class="form-control">
					<option value="">Select Category</option>

					@foreach($categories as $category)
					<option value="{{ $category->name }}">{{ $category->name }}</option>
					@endforeach

				</select>


			</div>
		</div>



		<div class="col-md-8">
			<div class="form-group">
				<label>Product Image</label>
				<input type="file" name="image">

			</div>
		</div>


		<div class="col-md-4">
			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-lg" value="Add Menu">
			</div>

		</div>
	
</div>


	</form>
</div>
	@endsection