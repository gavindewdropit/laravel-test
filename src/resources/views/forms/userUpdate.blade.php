@extends('layouts.page')

@section('main-content')
<div class="col-6 pt-5">
	<div>
		All Fields are required.
	</div>
	<form method="POST" action="/user/update/{{$user->id}}">
		@csrf
		@method('PATCH')
		<div class="form-group row mt-4">
			<label for="inputName" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input name="name" type="text" class="form-control" id="inputName"  value="{{$user->name}}">
			</div>
		</div>
		<div class="form-group row mt-4">
			<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input name="email" type="email" class="form-control" id="inputEmail" value="{{$user->email}}">
			</div>
		</div>
		<div class="form-group row mt-4">
			<label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-10">
				<textarea name="desc" id="inputDescription" cols="30" rows="4" class="form-control" >{{$user->profile->description}}</textarea>
			</div>
		</div>
		<div class="form-group row mt-4">
			<label for="inputRate" class="col-sm-2 col-form-label">Hourly Rate</label>
			<div class="col-sm-10">
				<input name="rate" type="text" class="form-control" id="inputRate" value="{{$user->profile->hourly_rate}}">
			</div>
		</div>
		<div class="form-group row mt-4">
			<label for="inputCurrency" class="col-sm-2 col-form-label">Currency</label>
			<select name="cur" id="inputCurrency" class="form-control col-2" >
				<option value="GBP" @if ($user->profile->currency == 'GBP') selected="selected" @endif>GBP</option>
				<option value="EUR" @if ($user->profile->currency == 'EUR') selected="selected" @endif >EUR</option>
				<option value="USD" @if ($user->profile->currency == 'USD') selected="selected" @endif >USD</option>
			</select>
		</div>
		<div class="form-group row mt-4">
			<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
				<input name="pwd" type="password" class="form-control" id="inputPassword">
			</div>
		</div>
		<div>
			<button type="submit" class="btn btn-primary ml-4 mt-4">Update User</button>
			<a href="/user/show/{{$user->id}}" class="btn btn-primary ml-4 mt-4" role="button">Cancel</a>
		</div>
	</form>
</div>
@endsection