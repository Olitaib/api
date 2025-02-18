<?php

namespace App\Http\Requests\CompanyPhone;

use App\Http\Requests\Request;
use App\Models\CompanyPhone;
use Illuminate\Validation\Rule;

class UpdateCompanyPhoneRequest extends Request
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
            'country_code' => [
                'required_without_all:area_code,phone_number,company_id',
                'integer',
                Rule::unique('company_phones')->where(function ($query) {
                    $query->where('area_code', $this->input('area_code') ?? CompanyPhone::find($this->input('id'))->area_code)
                        ->where('phone_number', $this->input('phone_number') ?? CompanyPhone::find($this->input('id'))->phone_number);
                })
            ],
            'area_code' => [
                'required_without_all:country_code,phone_number,company_id',
                'integer',
                Rule::unique('company_phones')->where(function ($query) {
                    $query->where('country_code', $this->input('country_code') ?? CompanyPhone::find($this->input('id'))->country_code)
                        ->where('phone_number', $this->input('phone_number') ?? CompanyPhone::find($this->input('id'))->phone_number);
                })
            ],
            'phone_number' => [
                'required_without_all:country_code,area_code,company_id',
                'integer',
                Rule::unique('company_phones')->where(function ($query) {
                    $query->where('country_code', $this->input('country_code') ?? CompanyPhone::find($this->input('id'))->country_code)
                        ->where('area_code', $this->input('area_code') ?? CompanyPhone::find($this->input('id'))->area_code);
                })
            ],
            'company_id' => ['required_without_all:country_code,area_code,phone_number', 'integer', 'exists:companies,id'],
        ];
    }
}
