<?php

namespace App\Http\Requests\ActivityType;

use App\Http\Requests\Request;

class IndexActivityTypeRequest extends Request
{

    public function rules(): array
    {
        return [
            'activity_category_id' => ['required', 'integer', 'exists:activity_categories,id'],
        ];
    }
}
