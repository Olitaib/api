<?php

namespace App\Http\Requests\CompanyActivityType;

use App\Http\Requests\Request;
use App\Models\ActivityType;
use Illuminate\Validation\Rule;

class StoreCompanyActivityTypeRequest extends Request
{

    public function rules(): array
    {
        return [
            'activity_type_id' => [
                'required',
                'integer',
                'exists:activity_types,id',
                Rule::unique('company_activity_types')->where(function ($query) {
                    $query->where('company_id', $this->input('company_id'));
                }),
            ],
            'company_id' => ['required',
                'integer',
                'exists:companies,id',
                Rule::exists('company_activity_categories')->where(function ($query) {
                    $query->where('company_id', $this->input('company_id'))
                        ->where('activity_category_id', ActivityType::where('id', $this->input('activity_type_id'))->first()?->activity_category_id);
                })
            ]
        ];
    }
}
