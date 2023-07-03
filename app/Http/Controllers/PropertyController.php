<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('property.new');
    }

    public function create(Request $request)
    {
        $prop = new Property([
            'name' => $request->input('name'),
            'transaction' => $request->input('transaction'),
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'address3' => $request->input('address3'),
            'postcode' => $request->input('postcode'),
            'city' => $request->input('city'),
            'plot_size' => $request->input('plot_size'),
            'property_size' => $request->input('prop_size'),
            'num_floors' => $request->input('num_floor'),
            'num_rooms' => $request->input('num_rooms'),
            'has_garden' => ($request->input('has_garden') == 'true') ? 1 : 0,
            'has_garage' => ($request->input('has_garage') == 'true') ? 1 : 0,
            'price' => $request->input('price'),
            'ad_link' => $request->input('ad_link'),
            'created_by' => 1,
            'transaction' => $request->input('transaction')
        ]);

        $prop->save();

        return redirect('/', 201);
    }

    public function show(Request $request)
    {
        $id = $request->id;

        $prop = Property::all()->where('id', '=', $id)->first();

        return view('property.index', ["property" => $prop]);
    }
}
