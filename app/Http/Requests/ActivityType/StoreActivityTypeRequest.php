<?php

namespace App\Http\Requests\ActivityType;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

class StoreActivityTypeRequest extends Request
{

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:1',
                'max:255',
                Rule::unique('activity_types')->where(function ($query) {
                    $query->where('activity_category_id', $this->input('activity_category_id'));
                })
                ],
            'activity_category_id' => ['required', 'integer', 'exists:activity_categories,id'],
        ];
    }
}
