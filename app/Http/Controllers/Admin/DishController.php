<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use Illuminate\Support\Str;

use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Support\Arr;

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
    public function store(StoreDishRequest $request)
    {
        $ingredient = implode(', ', $request->input('ingredients'));

        $data = $request->validated();

        $dish = new Dish();

        $dish->slug = Str::slug($dish->name);

        $dish->fill($data);

        $dish->ingredient = $ingredient;

        $dish->availability = Arr::exists($data, 'availability');

        $dish->save();

        return redirect()->route('admin.dishes.show', $dish->id)->with('success', 'Gli ingredienti sono stati salvati: ' . $ingredient);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        $ingredients = explode(', ', $dish->ingredient);
        $dish->ingredient = $ingredients;
        return view('admin.dishes.show', compact('dish'));
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
    public function update(UpdateDishRequest $request, Dish $dish)
    {
        $ingredient = implode(', ', $request->input('ingredients'));

        $data = $request->validated();

        $dish->slug = Str::slug($dish->name);

        $dish->fill($data);

        $dish->ingredient = $ingredient;

        $dish->availability = Arr::exists($data, 'availability');

        $dish->update();

        return redirect()->route('admin.dishes.show', $dish)
            ->with('Link', 'success')
            ->with('message', "$dish->name modificato con successo.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        //
    }
}
