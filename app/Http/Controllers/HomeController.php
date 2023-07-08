<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $propertyList = [];

        try {
            $propertyList = Property::all()->where('created_by', '=', $user->id);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        return view('index', ['propertyList' => $propertyList]);
    }
}
