<?php

namespace App\Http\Requests\CompanyActivity;

use App\Http\Requests\Request;

class DeleteCompanyActivityRequest extends Request
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
            'id' => ['required', 'integer', 'exists:company_activities,id'],
        ];
    }
}
