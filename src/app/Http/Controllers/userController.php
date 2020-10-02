<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userNew',['menu' => 'hidden']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $user = new User;
        $profile = new UserProfile;

        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['pwd'];
        $user->save();

        $profile->description = $input['desc'];
        $profile->hourly_rate = $input['rate'];
        $profile->currency = $input['cur'];
        $profile->user_id = $user->id;
        $profile->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {
        $user = User::with('profile')->find($id);

        return view("userShow",['user' => $user, 'menu' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('profile')->find($id);
        $menu = 'hidden';

        return view('forms.userUpdate', compact('user','menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $profile = UserProfile::where("user_id", $id)->get();
        $input = $request->all();

        $user->name = $input['name'];
        $user->email = $input['email'];
        if ($input['pwd'])
        {
            $user->password = $input['pwd'];
        }
        $user->save();

        $profile->description = $input['desc'];
        $profile->hourly_rate = $input['rate'];
        $profile->currency = $input['cur'];
        $profile->user_id = $id;
        $profile->push();

        return redirect("/user/show/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect("/");
    }
}
