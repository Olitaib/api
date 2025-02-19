<?php

namespace App\Http\Requests\CompanyActivityCategory;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

class StoreCompanyActivityCategoryRequest extends Request
{

    public function rules(): array
    {
        return [
            'activity_category_id' => [
                'required',
                'integer',
                'exists:activity_categories,id',
                Rule::unique('company_activity_categories')->where(function ($query) {
                    $query->where('company_id', $this->input('company_id'));
                })
            ],
            'company_id' => ['required', 'integer', 'exists:companies,id'],
        ];
    }
}
