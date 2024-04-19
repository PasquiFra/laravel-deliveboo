<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use Illuminate\Support\Str;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();

        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Dish $dish)
    {
        return view('admin.dishes.create', compact('dish'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ingredient = implode(', ', $request->input('ingredients'));

        $data = $request->validated();

        $new_dish = new Dish();

        $new_dish->fill($data);

        $new_dish->slug = Str::slug($new_dish->name);

        $new_dish->save();

        return redirect()->route('admin.dishes.show', $new_dish->id)->with('success', 'Gli ingredienti sono stati salvati: ' . $ingredient);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        //
    }
}
