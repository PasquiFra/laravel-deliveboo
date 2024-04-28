<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryRestaurantController extends Controller
{
    public function __invoke(string $slug)
    {
        $category = Category::whereSlug($slug);
        if (!$category) return response(null, 404);
        $category->load('restaurants.categories');
        $restaurants = $category->restaurants;
        $categories = Category::all();
        return response()->json(['restaurants' => $restaurants, 'categories' => $categories]);
    }
}
