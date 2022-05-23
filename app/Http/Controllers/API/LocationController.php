<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Region;

class LocationController extends Controller
{
    public function regions()
    {
        return Region::all();
    }

    public function cities($region_id)
    {
        return City::where('region_id', $region_id)->get();
    }
}
