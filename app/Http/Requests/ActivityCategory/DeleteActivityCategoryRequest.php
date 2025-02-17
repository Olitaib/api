<?php

namespace App\Http\Requests\ActivityCategory;

use App\Http\Requests\Request;

class DeleteActivityCategoryRequest extends Request
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
            'id' => ['required', 'integer', 'exists:activity_categories,id'],
        ];
    }
}
