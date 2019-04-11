@extends('layouts.app')
@section('content')

<form action="{{url('products')}}" method="POST">
	@csrf
	<h1>Create New Product </h1>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name">
	</div>
	
		<div class="form-group">
		<label for="description">Description</label>
		<input type="text" name="description">
	</div>

	
		<div class="form-group">
		<label for="category_id">Category</label>
		<input type="number" name="category_id">
	</div>


		<div class="form-group">
		<label for="price">Price</label>
		<input type="number" name="price">
	</div>

		<div class="form-group">
		<input type="Submit" value="Save">
	</div>
</form>
@endsection
