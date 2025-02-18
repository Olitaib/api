<?php

namespace App\Http\Requests\Building;

use App\Http\Requests\Request;

class UpdateBuildingRequest extends Request
{

    protected function prepareForValidation(): void
    {
        $this->merge([
            'id' => $this->route('id'),
        ]);
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:buildings,id'],
            'address' => ['required_without_all:latitude,longitude', 'string', 'max:255', 'unique:buildings,address'],
            'latitude' => ['required_without_all:address,longitude', 'numeric'],
            'longitude' => ['required_without_all:address,latitude', 'numeric'],
        ];
    }
}
