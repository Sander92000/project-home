@extends('layout')

@section('nav')
    <x-nav />
@endsection

@section('content')
    <div class="container">
        <div class="title">
            <h2 class="text-3xl my-6">Property detail <small class="text-slate-500">{{ $property->price }} € -
                    {{ $property->postcode }} -
                    {{ $property->city }}</small></h2>
        </div>
        <div class="grid grid-cols-4">
            <div class="col-span-2">
                <h3 class="text-2xl my-2">Characteristics</h3>
                <p>Number of rooms: {{ $property->num_rooms }}</p>
                <p>Number of floors: {{ $property->num_floors }}</p>
                <p>Has garden: {{ $property->has_garden }}</p>
                <p>Has garage: {{ $property->has_garage }}</p>
            </div>
            <div class="col-span-2">
                <h3 class="text-2xl my-2">Map</h3>
                <div class="bg-grey-200 w-full h-100"></div>
            </div>
        </div>
        <div>
            <h3 class="text-2xl my-2">Contact information</h3>
            <p>Firstname: {{ $property->firstname }}</p>
            <p>Lastname: {{ $property->lastname }}</p>
            <p>Phone: {{ $property->phone }}</p>
            <p>Email: {{ $property->email }}</p>
        </div>
    </div>
@endsection
