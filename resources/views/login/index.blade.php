@extends('layout')

@section('content')
    <form action="authenticate" method="POST">
        @csrf
        <h2 class="text-3xl">Login</h2>

        <label>Email</label>
        <input type="email" name="email" class="form-input" />
        <label>Password</label>
        <input type="password" name="password" class="form-input" />

        <button type="submit" class="btn">Login</button>
    </form>
    <a href="/register" class="link">Create an account</a>
@endsection
