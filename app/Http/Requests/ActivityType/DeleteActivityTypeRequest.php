<?php

namespace App\Http\Requests\ActivityType;

use App\Http\Requests\Request;

class DeleteActivityTypeRequest extends Request
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
            'id' => ['required', 'integer', 'exists:activity_types,id'],
        ];
    }
}
