<?php

namespace App\Http\Controllers;

class UseConvertor
{
	public function use_convertor($classname = null): CurrencyConvertorInterface
	{
		if ($classname == null) {
			return new LocalCurrencyConvertor;
		}else{
			$convertorclass = "App\\Http\\Controllers\\".$classname;
			return new $convertorclass;
		}
	}
}