@extends('layout')

@section('nav')
    <x-nav />
@endsection

@section('content')
    <h1 class="text-3xl">Settings</h1>



    <label for="">Language:</label>
    <select>
        <option value="fr">Français</option>
        <option value="nl">Nederlands</option>
    </select>
    <label for="">Currency:</label>
    <select>
        <option value="EUR">EUR - €</option>
        <option value="DOL">DOL - $</option>
    </select>
@endsection
