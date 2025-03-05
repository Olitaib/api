<?php

namespace App\Http\Requests\ActivityCategory;

use App\Http\Requests\Request;

class IndexActivityCategoryRequest extends Request
{

    public function rules(): array
    {
        return [
            'company_id' => 'sometimes|integer|exists:companies,id',
        ];
    }
}
