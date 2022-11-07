<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&family=Prompt&display=swap');

        label {
            font-family: 'Prompt', 'Roboto Slab';
            color: rgb(0, 0, 0);
        }

        h1 {
            font-family: 'Harlow Solid';
            color: black;
            text-align: center;
        }
    </style>
</head>
@extends('layouts.auth-master')
@section('content')
<div class="bg-light px-5">
    <form method="post" action="{{ route('login.perform') }}" class="row g-0 justify-content-center">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <h1 class="mb-3 mt-5 display-1">Login</h1>
        @include('layouts.partials.messages')
        <div class="border-info p-5 m-5 card rounded" style="width: 50rem; ">
            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control " name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <label for="floatingName">Email or Username</label>
                @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="justify-content-center mt-4">
                <button class="btn btn-lg btn-info btn-outline-dark" style="width: 10rem;" type="submit">Enter</button>
            </div>
        </div>

        @include('auth.partials.copy')
    </form>
    @endsection
</div>