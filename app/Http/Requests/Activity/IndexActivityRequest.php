<?php

namespace App\Http\Requests\Activity;

use App\Http\Requests\Request;

class IndexActivityRequest extends Request
{

    public function rules(): array
    {
        return [
            'activity_type_id' => ['required', 'integer', 'exists:activity_types,id'],
        ];
    }
}
