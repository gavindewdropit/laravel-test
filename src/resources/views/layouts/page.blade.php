@extends('layouts.app')

@section('page')
	<div class="header">
		<div class="title">
			<h1 class="ml-5">Freelancer</h1>
		</div>
		<div>
			@include('partials.menu')
		</div>
	</div>
	<div class="main-content">
		@yield('main-content')
	</div>
@endsection