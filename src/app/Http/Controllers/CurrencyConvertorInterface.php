<?php

namespace App\Http\Controllers;

Interface CurrencyConvertorInterface
{
	public function convert($from, $to, $value);
}