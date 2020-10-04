@extends('layouts.page')

@section('main-content')
<div class="col-6 pt-5">
	<div>
		All Fields are required.
	</div>
	<form method="POST" action="/users">
		@csrf
		<div class="form-group row mt-4">
			<label for="inputName" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input name="name" type="text" class="form-control" id="inputName" required>
			</div>
		</div>
		<div class="form-group row mt-4">
			<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input name="email" type="email" class="form-control" id="inputEmail" required>
			</div>
		</div>
		<div class="form-group row mt-4">
			<label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-10">
				<textarea name="desc" id="inputDescription" cols="30" rows="4" class="form-control" required></textarea>
			</div>
		</div>
		<div class="form-group row mt-4">
			<label for="inputRate" class="col-sm-2 col-form-label">Hourly Rate</label>
			<div class="col-sm-10">
				<input name="rate" type="text" class="form-control" id="inputRate" required>
			</div>
		</div>
		<div class="form-group row mt-4">
			<label for="inputCurrency" class="col-sm-2 col-form-label">Currency</label>
			<select name="cur" id="inputCurrency" class="form-control col-2" required>
				<option value="" selected="selected"></option>
				<option value="GBP">GBP</option>
				<option value="EUR">EUR</option>
				<option value="USD">USD</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary ml-4 mt-4">Save New User</button>
		<a href="/" class="btn btn-primary ml-4 mt-4" role="button">Cancel</a>
	</form>
</div>
@endsection