<?php

namespace App\Http\Requests\CompanyActivityCategory;

use App\Http\Requests\Request;

class DeleteCompanyActivityCategoryRequest extends Request
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
            'id' => ['required', 'integer', 'exists:company_activity_categories,id'],
        ];
    }
}
