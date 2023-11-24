<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Category;
use App\Models\City;
use App\Models\Activity;
use App\Models\Restaurant;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __invoke()
    {
        $city = City::all();
        $city->loadCount(['activities', 'restaurants']);
        $category = Category::all();

        return Inertia::render('Test', [
            'activities' => Activity::all(),
            'cities' => $city,
            'categories' => $category
        ]);
    }
}
