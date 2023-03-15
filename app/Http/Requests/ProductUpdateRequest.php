<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'nullable|min:10|max:50',
            'description' => 'nullable|min:10',
            'price' => 'nullable|max:5',
            'photo' => 'nullable|mimes:jpeg,png',
        ];
    }
}
