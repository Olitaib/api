<?php

namespace App\Http\Requests\ActivityType;

use App\Http\Requests\Request;

class UpdateActivityTypeRequest extends Request
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
            'name' => ['nullable', 'string', 'min:2', 'max:255', 'unique:activity_types,name'],
            'activity_category_id' => ['nullable', 'integer', 'exists:activity_categories,id'],
        ];
    }
}
