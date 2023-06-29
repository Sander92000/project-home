@extends('layout');

@section('content')
    <h2>Create an account</h2>
    <form action="create" method="post">
        <label>Firstname</label>
        <input type="text" name="firstname" class="form-input" />
        <label>Lastname</label>
        <input type="text" name="lastname" class="form-input" />
        <label>Email</label>
        <input type="email" name="email" class="form-input" />
        <label>Password</label>
        <input type="password" name="password" class="form-input" />
        <button type="submit" class="btn">Create account</button>
    </form>
@endsection
