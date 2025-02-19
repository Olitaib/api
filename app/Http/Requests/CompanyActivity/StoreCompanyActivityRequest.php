<?php

namespace App\Http\Requests\CompanyActivity;

use App\Http\Requests\Request;
use App\Models\Activity;
use App\Models\ActivityType;
use Illuminate\Validation\Rule;

class StoreCompanyActivityRequest extends Request
{

    public function rules(): array
    {
        return [
            'activity_id' => [
                'required',
                'integer',
                'exists:activities,id',
                Rule::unique('company_activities')->where(function ($query) {
                    $query->where('company_id', $this->input('company_id'));
                }),
            ],
            'company_id' => ['required',
                'integer',
                'exists:companies,id',
                Rule::exists('company_activity_types')->where(function ($query) {
                    $query->where('company_id', $this->input('company_id'))
                        ->where('activity_type_id', Activity::where('id', $this->input('activity_id'))->first()?->activity_type_id);
                })
            ]
        ];
    }
}
