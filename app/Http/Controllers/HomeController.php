<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Providers\PropertyProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function index()
    {
        $propertyList = [];

        try {
            $propertyList = Property::all();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return view('index', ['propertyList' => $propertyList]);
    }
}
