<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAptekaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'region_id' => 'required|numeric',
            'address' => 'required',
            'owner_name' => 'required',
            'owner_phone' => 'required',
        ];
    }
}
