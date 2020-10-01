
<div class="d-flex justify-content-between col-6">
	<div>
	@php
		if($menu != 'hidden') 
		{
	@endphp
		<a href="/user/create" role="button" class="btn btn-primary ml-4">Add User</a>
		<label for="currency" class="ml-4">Select Currency: </label>
		<select name="menucurrency" id="currency">
			<option value="" default></option>
			<option value="GBP">GBP</option>
			<option value="EUR">EUR</option>
			<option value="USD">USD</option>
		</select>
	@php
		}
	@endphp
	</div>
	<a href="/" role="button" class="btn btn-primary ml-4">Home</a>
</div>