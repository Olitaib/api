<?php

namespace App\Http\Requests\Activity;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

class StoreActivityRequest extends Request
{

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:255',
                Rule::unique('activities')->where(function ($query) {
                    $query->where('activity_type_id', $this->input('activity_type_id'));
                })
                ],
            'activity_type_id' => ['required', 'integer', 'exists:activity_types,id'],
        ];
    }
}
