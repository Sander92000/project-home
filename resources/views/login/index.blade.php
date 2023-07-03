@extends('layout')

@section('content')
    <div class="container mx-auto w-40">
        <div class="title my-6">
            <h2 class="text-3xl">Login</h2>
        </div>
        <div id="login-form">
            <form action="authenticate" method="POST" class="center">
                @csrf
                <div class="block">
                    <label class="w-8">Email</label>
                    <input type="email" name="email" class="form-input" />
                </div>
                <div class="block">
                    <label>Password</label>
                    <input type="password" name="password" class="form-input" />
                </div>
                <a href="{{ route('user.forgot.password') }}" class="link">Forgot password</a>
                <a href="{{ route('user.register') }}" class="link">Create an account</a>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
@endsection
