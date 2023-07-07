@extends('layout')

@section('nav')
    <x-nav />
@endsection

@section('content')
    <div class="container">
        <div class="my-6">
            <h1 class="text-3xl m-4">Home</h1>
        </div>
        <div class="">
        </div>
        <h2>MAP</h2>
        <div>
            <table class="table-auto my-6 w-full border-collapse">
                <thead>
                    <th class="tbl-header"></th>
                    <th class="tbl-header">Name</th>
                    <th class="tbl-header">Address</th>
                    <th class="tbl-header">Postcode</th>
                    <th class="tbl-header">City</th>
                    <th class="tbl-header">Price</th>
                    <th class="tbl-header">Plot size</th>
                    <th class="tbl-header">Price/m2 plot</th>
                    <th class="tbl-header">Property size</th>
                    <th class="tbl-header">Price/m2 property</th>
                    <th class="tbl-header"># Floors</th>
                    <th class="tbl-header"># Rooms</th>
                    <th class="tbl-header">Garden</th>
                    <th class="tbl-header">Garage</th>
                    <th class="tbl-header"></th>
                </thead>
                <tbody>
                    @foreach ($propertyList as $item)
                        <tr>
                            <td class="table-cell"><input type="checkbox" /></td>
                            <td class="table-cell"><a href="property/{{ $item->id }}"
                                    class="link">{{ $item->name }}</a>
                            </td>
                            <td class="table-cell">{{ $item->address1 }}</td>
                            <td class="table-cell text-center">{{ $item->postcode }}</td>
                            <td class="table-cell">{{ $item->city }}</td>
                            <td class="table-cell text-right">{{ $item->price }} €</td>
                            <td class="table-cell text-center">{{ $item->plot_size }}</td>
                            <td class="table-cell text-center">{{ $item->plot_size }} €</td>
                            <td class="table-cell text-center">{{ $item->property_size }}</td>
                            <td class="table-cell text-center">{{ $item->property_size }} €</td>
                            <td class="table-cell text-center">{{ $item->num_floors }}</td>
                            <td class="table-cell text-center">{{ $item->num_rooms }}</td>
                            <td class="table-cell text-center"><input type="checkbox" value="{{ $item->has_garden }}" />
                            </td>
                            <td class="table-cell text-center"><input type="checkbox" value="{{ $item->has_garage }}" />
                            </td>
                            <td class="table-cell">
                                <a href="property/delete/{{ $item->id }}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn">Compare</button>
            <a href="{{ route('property.new') }}" class="btn">New property</a>
        </div>
    </div>
@endsection
