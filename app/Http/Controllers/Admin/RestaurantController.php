<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RestaurantController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurant = new Restaurant();
        $categories = Category::select('label', 'id')->get();
        return view('admin.restaurants.create', compact('restaurant', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:50',
            'address' => 'required|string|min:5|max:50',
            'phone' => 'string|min:10|max:15|nullable',
            'email' => 'email|string|lowercase|nullable',
            'vat' => 'required|unique:restaurants|string|min:13|max:13',
            'categories' => 'required|exists:categories,id',
            'image' => 'nullable|url'
        ], [
            'name.required' => 'Il nome del ristorante è obbligatorio',
            'name.min' => 'Il nome non può essere più corto di :min caratteri',
            'name.max' => 'Il nome non può essere più corto di :max caratteri',
            'address.required' => 'L\'indirizzo del ristorante è obbligatorio',
            'address.min' => 'L\'indirizzo del ristorante non può contenere meno di :min caratteri',
            'address.max' => 'L\'indirizzo del ristorante non può contenere più di :max caratteri',
            'phone.min' => 'Il numero di telefono non può avere meno di :min cifre',
            'phone.max' => 'Il numero di telefono non può avere più di :max cifre',
            'email.email' => 'L\'email inserita non è valida',
            'email.lowercase' => 'L\'email non può contenere lettere maiuscole',
            'vat.required' => 'La P.IVA è obbligatoria',
            'vat.unique' => 'P.IVA già usata',
            'vat.min' => 'La P.IVA non può contenere meno di :min cifre',
            'vat.max' => 'La P.IVA non può contenere più di :max cifre',
            'categories.required' => 'Categoria obbligatoria',
            'categories.exists' => 'Categoria non valida',
            'image.url' => 'Devi inserire un url'
        ]);

        $data = $request->all();

        $restaurant = new Restaurant();

        $restaurant->fill($data);

        $restaurant->slug = Str::slug($data['name']);

        $restaurant->user_id = Auth::user()->id;

        $restaurant->save();

        if (Arr::exists($data, 'categories')) $restaurant->categories()->attach($data['categories']);

        return to_route('admin.restaurants.show', $restaurant->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('admin.restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        $prev_categories = $restaurant->categories->pluck('id')->toArray();

        $categories = Category::select('label', 'id')->get();

        return view('admin.restaurants.edit', compact('restaurant', 'categories', 'prev_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:50',
            'address' => 'required|string|min:5|max:50',
            'phone' => 'string|min:10|max:15|nullable',
            'email' => 'email|string|lowercase|nullable',
            'vat' => ['required', 'string', 'min:13', 'max:13', Rule::unique('restaurants')->ignore($restaurant->id)],
            'image' => 'nullable|url',
            'categories' => 'required|exists:categories,id'
        ], [
            'name.required' => 'Il nome del ristorante è obbligatorio',
            'name.min' => 'Il nome non può essere più corto di :min caratteri',
            'name.max' => 'Il nome non può essere più corto di :max caratteri',
            'address.required' => 'L\'indirizzo del ristorante è obbligatorio',
            'address.min' => 'L\'indirizzo del ristorante non può contenere meno di :min caratteri',
            'address.max' => 'L\'indirizzo del ristorante non può contenere più di :max caratteri',
            'phone.min' => 'Il numero di telefono non può avere meno di :min cifre',
            'phone.max' => 'Il numero di telefono non può avere più di :max cifre',
            'email.email' => 'L\'email inserita non è valida',
            'email.lowercase' => 'L\'email non può contenere lettere maiuscole',
            'vat.required' => 'La P.IVA è obbligatoria',
            'vat.min' => 'La P.IVA non può contenere meno di :min cifre',
            'vat.max' => 'La P.IVA non può contenere più di :max cifre',
            'image.url' => 'Devi inserire un url',
            'categories.required' => 'Categoria obbligatoria',
            'categories.exists' => 'Categoria non valida'
        ]);

        $data = $request->all();

        $restaurant->slug = Str::slug($data['name']);

        $restaurant->update($data);

        if (Arr::exists($data, 'categories')) $restaurant->categories()->sync($data['categories']);
        elseif (!Arr::exists($data, 'categories') && $restaurant->has('categories')) $restaurant->categories()->detach();

        return to_route('admin.restaurants.show', $restaurant->id);
    }
}
