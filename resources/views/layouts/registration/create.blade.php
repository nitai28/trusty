@extends('layout');

@section('content')
    <div>
        <h2>Sign Up</h2>
        <form method="POST" action="/register">
            {{csrf_field()}}
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name">

            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" name="password" type="text">

            </div>

            <div>
                <button type="submit">Sign Up</button>
            </div>
        </form>

    </div>

@endsection