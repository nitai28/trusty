@extends('layout')

@section('content')
    <div>
        <form class="form-design" method="POST" action="/login">
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
                <button type="submit">Login</button>
            </div>
        </form>

    </div>

@endsection