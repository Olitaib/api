<?php

namespace App\Http\Requests\ActivityType;

use App\Http\Requests\Request;

class StoreActivityTypeRequest extends Request
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:activity_types,name'],
            'activity_category_id' => ['required', 'integer', 'exists:activity_categories,id'],
        ];
    }
}
