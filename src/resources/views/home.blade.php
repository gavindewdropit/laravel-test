@extends('layouts.page')

@section('main-content')
<div class="users col-6" style="display: grid; grid-template-columns: auto auto auto;">
	@foreach ($users as $user)
	<a href="/user/show/{{$user->id}}">
		<div class="card mt-2" style="max-width: 300px;">
			<img src="storage/userimages/img_avatar1.png" alt="" class="card-img-top">
			<div class="card-body">
				<h4 class="card-title">{{$user->name}}</h4>
				@if ($user->profile)
				<p class="card-text">{{$user->profile->description}}</p>
				<p class="rate" id="rate">Hourly Rate: {{$user->profile->currency}} {{$user->profile->hourly_rate}}</p>
				@endif
			</div>
		</div>
	</a>
	@endforeach
</div>
@endsection