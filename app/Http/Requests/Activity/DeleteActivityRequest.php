<?php

namespace App\Http\Requests\Activity;

use App\Http\Requests\Request;

class DeleteActivityRequest extends Request
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
            'id' => ['required', 'integer', 'exists:activities,id'],
        ];
    }
}
