<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::with(['images', 'facilities', 'strategicLocations'])
            ->active()
            ->get();

        $settings = Setting::first();

        return view('welcome', compact('properties', 'settings'));
    }
}