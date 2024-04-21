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
use Illuminate\Support\Facades\Storage;

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

        $new_dish = new Dish();

        $new_dish->slug = Str::slug($new_dish->name);

        // Salvataggio dell'immagine nel database
        if (Arr::exists($data, 'image')) {

            if ($new_dish->image) Storage::delete($new_dish->image);

            $extension = $data['image']->extension();

            $img_url = Storage::putFileAs('dish_images', $data['image'], "$new_dish->slug.$extension");
            $new_dish->image = $img_url;
        }

        $new_dish->fill($data);

        $new_dish->ingredient = $ingredient;

        $new_dish->availability = Arr::exists($data, 'availability');

        $new_dish->save();

        return redirect()->route('admin.dishes.show', $new_dish->id)->with('success', 'Gli ingredienti sono stati salvati: ' . $ingredient)
            //Alert creazione piatto
            ->with('message', "Piatto {$new_dish->name} creato con successo")
            ->with('type', 'success');
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

        dd($request);
        $availability = $request->input('availability') ? true : false;
        $data = $request->validated();

        // Salvataggio dell'immagine nel database
        if (Arr::exists($data, 'image')) {

            if ($dish->image) Storage::delete($dish->image);

            $extension = $data['image']->extension();

            $img_url = Storage::putFileAs('dish_images', $data['image'], "$dish->slug.$extension");
            $dish->image = $img_url;
        }

        $dish->slug = Str::slug($dish->name);

        $dish->fill($data);
        $dish->ingredient = $ingredient;
        $dish->availability = $availability;

        $dish->update();

        return redirect()->route('admin.dishes.show', $dish)
            //Alert modifica piatto
            ->with('message', "Piatto {$dish->name} modificato con successo")
            ->with('type', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     */
    //# Action per eliminare il piatto
    public function destroy(Dish $dish)
    {
        $dish->delete();
        //Flash data toast
        return to_route('admin.dishes.index')
            ->with('toast-button-type', 'danger')
            ->with('toast-message', 'Piatto eliminato')
            ->with('toast-label', config('app.name'))
            ->with('toast-method', 'PATCH')
            ->with('toast-route', route('admin.dishes.restore', $dish->id))
            ->with('toast-button-label', 'Annulla');
    }

    //# Action per eliminare il piatto
    public function trash()
    {
        $dishes = Dish::onlyTrashed()->get();
        return view('admin.dishes.trash', compact('dishes'));
    }

    //# Action per ripristianre il piatto
    public function restore(Dish $dish)
    {
        $dish->restore();

        return to_route('admin.dishes.index', $dish->id)
            ->with('type', 'success')
            ->with('message', "Piatto {$dish->name} ripristinato con successo");
    }

    //# Action per eliminare definitivamente il piatto
    public function drop(Dish $dish)
    {
        $dish->forceDelete();
        return to_route('admin.dishes.trash')
            ->with('message', "Piatto {$dish->name} eliminato definitivamente")
            ->with('type', 'danger');
    }

    //# Action svuotare il Cestino
    public function dropAllTrashed()
    {
        //Prendo tutti i piatti eliminati
        $trashedDishes = Dish::onlyTrashed()->get();
        foreach ($trashedDishes as $dish) {
            $dish->forceDelete();
        }
        return to_route('admin.dishes.trash')
            ->with('message', "Piatti eliminati definitivamente")
            ->with('type', 'danger');;
    }
}
