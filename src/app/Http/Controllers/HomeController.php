<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
    	$users = User::with('profile')->get();

    	$useconvertor = new UseConvertor;
        $convertor = $useconvertor->use_convertor();

    	foreach ($users as $user) {
            if ($user->profile->currency != "GBP") {
                $user->profile->rate_gbp = $convertor->convert($user->profile->currency, "GBP", $user->profile->hourly_rate);
            }else{
                $user->profile->rate_gbp = $user->profile->hourly_rate;
            }
            if ($user->profile->currency != "EUR") {
                $user->profile->rate_eur = $convertor->convert($user->profile->currency, "EUR", $user->profile->hourly_rate);
            }else{
                $user->profile->rate_eur = $user->profile->hourly_rate;
            }
            if ($user->profile->currency != "USD") {
                $user->profile->rate_usd = $convertor->convert($user->profile->currency, "USD", $user->profile->hourly_rate);
            }else{
                $user->profile->rate_usd = $user->profile->hourly_rate;
            }
    	}

    	return view('home', ['users' => $users, 'menu' => 'show']);
    }
}
