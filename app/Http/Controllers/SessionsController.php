<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except' =>'destroy']);
    }

    public function create()
    {
        return view('layouts.sessions.create');
    }

    public function store()
    {
        if (!auth()->attempt(\request(['name', 'password']))) {
            return back();
        }
        $userName = Auth::user()->name;
        return redirect('/');

    }

//    public function store()
//    {
//        if (!auth()->attempt(\request(['email', 'password']))) {
//            return back()->withErrors([
//                'message' =>'Please check your credentials'
//            ]);
//        }
//
//        return redirect('/');
//    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
