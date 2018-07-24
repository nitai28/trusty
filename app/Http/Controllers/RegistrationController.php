<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('layouts.registration.create');

    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|unique:users',
            'password' => 'required'

        ]);

        $request = request(['name', 'password']);
        $user = User::create([
            'name' => $request['name'],
            'password' => bcrypt($request['password'])
        ]);
        auth()->login($user);

        return redirect('/');
    }
}
