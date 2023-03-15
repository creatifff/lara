<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:10|max:50',
            'description' => 'required|min:10',
            'price' => 'required|max:5',
            'photo' => 'nullable|mimes:jpeg,png',
        ];
    }
}
