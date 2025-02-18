<?php

namespace App\Http\Requests\CompanyPhone;

use App\Http\Requests\Request;

class IndexCompanyPhoneRequest extends Request
{

    public function rules(): array
    {
        return [
            'company_id' => ['required', 'integer', 'exists:companies,id'],
        ];
    }
}
