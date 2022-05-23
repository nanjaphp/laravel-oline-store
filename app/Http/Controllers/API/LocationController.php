<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function regions()
    {
        return Province::all();
    }

    public function cities($region_id)
    {
        return Regency::where('region_id', $region_id)->get();
    }
}
