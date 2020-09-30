@extends('layouts.page')

@section('main-content')
	<form method="POST" action="/users">
		@csrf
		<button class="submit ml-4 mt-4">Save New User</button>
	</form>
@endsection