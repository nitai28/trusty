<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
