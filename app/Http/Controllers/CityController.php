<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Inertia\Inertia;
use App\Models\City;

class CityController extends Controller
{

    public function show(City $city)
    {
        $city = $city->load('activities', 'restaurants');

        return inertia('Cities/CityDetail', [
            'city' => $city,
        ]);
    }
}
