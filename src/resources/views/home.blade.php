@extends('layouts.page')

@section('main-content')
	<div class="users col-6" style="display: grid; grid-template-columns: auto auto auto;">
		<div class="card" style="max-width: 300px;">
			<img src="storage/userimages/img_avatar1.png" alt="" class="card-img-top">
			<div class="card-body">
				<h4 class="card-title">Test</h4>
				<p class="card-text">My job</p>
				<p class="rate" id="rate">Hourly Rate: </p>
			</div>
		</div>
	</div>
@endsection