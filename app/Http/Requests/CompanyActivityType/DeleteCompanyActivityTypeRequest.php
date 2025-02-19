<?php

namespace App\Http\Requests\CompanyActivityType;

use App\Http\Requests\Request;

class DeleteCompanyActivityTypeRequest extends Request
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
            'id' => ['required', 'integer', 'exists:company_activity_types,id'],
        ];
    }
}
