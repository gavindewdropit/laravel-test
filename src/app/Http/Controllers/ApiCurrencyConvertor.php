<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ApiCurrencyConvertor implements CurrencyConvertorInterface
{
	private $api_url;
	private $client;

	public function __construct()
	{
		$this->api_url = "https://api.exchangeratesapi.io/latest?base=";
		$this->client = new Client;
	}

	public function convert($from, $to, $value)
	{
		$url = $this->api_url.$from;

		$response = $this->client->get($url);

		$rate = json_decode($response->getBody()->getContents())->rates->$to;

    return $value * $rate;
	}
}