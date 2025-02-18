<?php

namespace App\Http\Requests\CompanyPhone;

use App\Http\Requests\Request;

class ShowCompanyPhoneRequest extends Request
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
            'id' => ['required', 'integer', 'exists:company_phones,id'],
        ];
    }
}
