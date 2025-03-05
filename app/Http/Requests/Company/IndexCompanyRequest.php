<?php

namespace App\Http\Requests\Company;

use App\Http\Requests\Request;

class IndexCompanyRequest extends Request
{

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string', 'max:255'],
            'address' => ['sometimes', 'string', 'max:255'],
            'building_id' => ['sometimes', 'integer', 'exists:companies,building_id'],
            'activity_category_id' => ['sometimes', 'integer', 'exists:activity_categories,id'],
            'activity_type_id' => ['sometimes', 'integer', 'exists:activity_types,id'],
            'activity_id' => ['sometimes', 'integer', 'exists:activities,id'],
        ];
    }
}
