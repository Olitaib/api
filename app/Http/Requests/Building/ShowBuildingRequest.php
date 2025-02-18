<?php

namespace App\Http\Requests\Building;

use App\Http\Requests\Request;

class ShowBuildingRequest extends Request
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
        ];
    }
}
