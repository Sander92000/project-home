@extends('layout')

@section('content')
    <div class="my-6">
        <h2 class="text-2xl font-bold">Create an account</h2>
    </div>
    @if ($errors->any())
        <div class="bg-red-200 p-4 rounded">
            <p class="text-red-600">{{ $errors->all()[0] }}</p>
        </div>
    @endif
    <form action="create" method="post">
        @csrf
        <div class="block m-2">
            <label>Firstname</label>
            <input type="text" name="firstname" class="form-input" />
        </div>
        <div class="block m-2">
            <label>Lastname</label>
            <input type="text" name="lastname" class="form-input" />
        </div>
        <div class="block m-2">
            <label>Email</label>
            <input type="email" name="email" class="form-input" />
        </div>
        <div class="block m-2">
            <label class="">Password</label>
            <input type="password" name="password" class="form-input" />
        </div>
        <button type="submit" class="btn">Create account</button>
    </form>
@endsection
