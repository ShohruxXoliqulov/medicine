<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'producttype_id' => 'required|numeric',
            'name' => 'required',
            'price' => 'required|numeric',
        ];
    }
}
