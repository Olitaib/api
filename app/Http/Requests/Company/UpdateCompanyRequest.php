<?php

namespace App\Http\Requests\Company;

use App\Http\Requests\Request;

class UpdateCompanyRequest extends Request
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
            'id' => ['required', 'integer', 'exists:companies,id'],
            'name' => ['required_without:building_id', 'string', 'max:255', 'unique:companies,name'],
            'building_id' => ['required_without:name', 'integer', 'exists:buildings,id'],
        ];
    }
}
