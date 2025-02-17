<?php

namespace App\Http\Requests\ActivityCategory;

use App\Http\Requests\Request;

class StoreActivityCategoryRequest extends Request
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:activity_categories,name'],
        ];
    }
}
