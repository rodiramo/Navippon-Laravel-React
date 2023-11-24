<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Inertia\Inertia;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return Inertia::render('Categories/Categories', [
            'categories' => $categories,
        ]);
    }
}