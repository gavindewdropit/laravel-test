<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
    	$users = User::with('profile')->get();

    	return view('home', ['users' => $users, 'menu' => 'show']);
    }
}
