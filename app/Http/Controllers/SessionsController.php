<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('layouts.sessions.create');
    }

    public function store()
    {
        if (!auth()->attempt(request(['name', 'password']))) {
            return back();
        }
//        dd(Auth::user()->name);
        if (Auth::user()->name) {
            $userName = Auth::user()->name;
        }
//        dd($userName);
//        view('layout',compact('userName'));
        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
