<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreDishRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'slug' => 'string',
            'course' => 'string|required',
            'price' => 'decimal:2|numeric|min:0|required',
            'image' => 'nullable|image',
            'diet' => 'nullable',
            'ingredients' => 'string|nullable',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Il nome del piatto è obbligatorio',
            'availability.required' => 'Indica se pubblicare o no il prodotto',
            'image.image' => 'Il tipo di file non è corretto',
            'course.required' => 'La portata è obbligatoria',
            'course.string' => 'La portata dev\'essere una stringa',
            'price.numeric' => 'Il prezzo dev\'essere un numero',
            'price.min' => 'Il prezzo non può essere negativo',
            'price.required' => 'Il prezzo dev\'essere inserito',
        ];
    }
}
