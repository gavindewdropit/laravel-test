
<div class="d-flex justify-content-between col-6">
	<div>
	@php
		if($menu != 'hidden') 
		{
	@endphp
		<a href="/user/create" role="button" class="btn btn-primary ml-4">Add User</a>
		<label for="currencyselector" class="ml-4">Select Currency: </label>
		<select name="menucurrency" id="currencyselector" onchange="currencyselect()">
			<option value="" default></option>
			<option value="GBP">GBP</option>
			<option value="EUR">EUR</option>
			<option value="USD">USD</option>
		</select>
	@php
		}
	@endphp
	</div>
	<script type="text/javascript">
		function currencyselect()
		{
			var currencytags = document.querySelectorAll('[id^=rate]');
			var currencyselect = document.getElementById("currencyselector");
			var currencyshow = document.querySelectorAll("[id=rate_"+currencyselect.value.toLowerCase()+"]");
			var currencyoriginal = document.querySelectorAll("[id=rate]");

			console.log(currencyshow);

			for (var i = 0; i < currencytags.length; i++)
			{
				currencytags[i].style.display = "none";
			}

			if (currencyselect.value != '')
			{
				for (var i = currencyshow.length - 1; i >= 0; i--)
				{
					currencyshow[i].style.display = "block";
				}
			}else{
				for (var i = currencyoriginal.length - 1; i >= 0; i--)
				{
					currencyoriginal[i].style.display = "block";
				}
			}
		}
	</script>
	<a href="/" role="button" class="btn btn-primary ml-4">Home</a>
</div>