<?php

namespace App\Http\Requests\CompanyPhone;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

class StoreCompanyPhoneRequest extends Request
{

    public function rules(): array
    {
        return [
            'country_code' => [
                'required',
                'integer',
                Rule::unique('company_phones')->where(function ($query) {
                    $query->where('area_code', $this->input('area_code'))
                        ->where('phone_number', $this->input('phone_number'));
                })
                ],
            'area_code' => [
                'required',
                'integer',
                Rule::unique('company_phones')->where(function ($query) {
                    $query->where('country_code', $this->input('country_code'))
                        ->where('phone_number', $this->input('phone_number'));
                })
                ],
            'phone_number' => [
                'required',
                'integer',
                Rule::unique('company_phones')->where(function ($query) {
                    $query->where('country_code', $this->input('country_code'))
                        ->where('area_code', $this->input('area_code'));
                })
                ],
            'company_id' => ['required', 'integer', 'exists:companies,id'],
        ];
    }
}
