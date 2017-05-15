<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use App\Mail\WelcomeAgain;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

//        $user = User::create(request(['name', 'email', bcrypt('password')]));
        $user = User::create([
            'name' => \request('name'),
            'email' => \request('email'),
            'password' => bcrypt(\request('password'))
        ]);
        auth()->login($user);
        \Mail::to($user)->send(new WelcomeAgain);

        \request()->session()->flash('message', 'This is a message');

        return redirect()->home();
    }
}
