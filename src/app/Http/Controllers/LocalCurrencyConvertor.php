<?php

namespace App\Http\Controllers;

class LocalCurrencyConvertor implements CurrencyConvertorInterface
{
	public function convert($from, $to, $value)
	{
		$rates = ['GBP' => ["USD" => 1.3, "EUR" => 1.1, "GBP" => 1],
      'EUR' => ["GBP" => 0.9, "USD" => 1.2, "EUR" => 1],
      'USD' => ["GBP" => 0.7, "EUR" => 0.8, "USD" => 1]
    ];

    return $value * $rates[$from][$to];
	}
}