<?php

namespace App\Http\Requests\Company;

use App\Http\Requests\Request;

class DeleteCompanyRequest extends Request
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
        ];
    }
}
