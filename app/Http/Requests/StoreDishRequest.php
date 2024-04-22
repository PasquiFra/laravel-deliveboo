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
            'course' => 'nullable',
            'price' => 'decimal:2|required',
            'image' => 'nullable|image',
            'diet' => 'nullable',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Il nome del piatto è obbligatorio',
            'availability.required' => 'Indica se pubblicare o no il prodotto',
            'image.image' => 'Il tipo di file non è corretto',
        ];
    }
}
