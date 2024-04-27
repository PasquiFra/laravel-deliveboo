<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $restaurants = Restaurant::orderByDesc('updated_at')->orderByDesc('created_at')->with('categories', 'user')->get();
        $categories = Category::all();
        return response()->json(['restaurants' => $restaurants, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {


        // Recupera il ristorante con il dato slug e carica solo i piatti con disponibilità 1
        $restaurant = Restaurant::whereSlug($slug)
            ->with(['dishes' => function ($query) {
                $query->where('availability', 1);
            }])
            ->first();

        // Verifica se il ristorante esiste
        if (!$restaurant) {
            return response()->json(['error' => 'Restaurant not found'], 404);
        }

        // Restituisci i piatti disponibili come risposta JSON
        return response()->json($restaurant->dishes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function showDish(string $restaurantSlug, string $dishSlug)
    {
        $restaurant = Restaurant::whereSlug($restaurantSlug)->first();

        if (!$restaurant) {
            return response()->json(['message' => 'Ristorante non trovato'], 404);
        }

        $dish = $restaurant->dishes()->where('slug', $dishSlug)->first();

        if (!$dish) {
            return response()->json(['message' => 'Piatto non trovato'], 404);
        }

        return response()->json($dish);
    }
}
