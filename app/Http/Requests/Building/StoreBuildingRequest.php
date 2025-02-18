<?php

namespace App\Http\Requests\Building;

use App\Http\Requests\Request;

class StoreBuildingRequest extends Request
{

    public function rules(): array
    {
        return [
            'address' => ['required', 'string', 'max:255', 'unique:buildings,address'],
            'latitude' => ['required', 'numeric'],
            'longitude' => ['required', 'numeric'],
        ];
    }
}
