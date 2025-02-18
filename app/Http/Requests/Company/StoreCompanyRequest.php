<?php

namespace App\Http\Requests\Company;

use App\Http\Requests\Request;

class StoreCompanyRequest extends Request
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:companies,name'],
            'building_id' => ['required', 'integer', 'exists:buildings,id'],
        ];
    }
}
