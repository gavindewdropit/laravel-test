@extends('layouts.page')

@section('main-content')
	<div class="users col-6">
		<div>
			<img src="/storage/userimages/img_avatar1.png" alt="" height="150" width="150">
		</div>
		<div>
			<h4>{{$user->name}}</h4>
			<p>{{$user->email}}</p>
		</div>
		<div>
			<h4>Description:</h4>
			<p>{{$user->profile->description}}</p>
		</div>
		<div>
			<h4>Hourly Rate:</h4>
			<p>{{$user->profile->currency}} {{$user->profile->hourly_rate}}</p>
		</div>
	</div>
	<div class="d-flex justify-content-between ml-4 col-2">
		<form action="/user/edit/{{$user->id}}" method="GET">
			@csrf
			<button type="submit" class="btn btn-primary">Edit</button>
		</form>
		<form action="/user/delete/{{$user->id}}" method="POST">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn btn-primary">Delete User</button>
		</form>
	</div>
@endsection