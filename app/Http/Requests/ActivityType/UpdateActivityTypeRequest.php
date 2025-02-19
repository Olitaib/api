<?php

namespace App\Http\Requests\ActivityType;

use App\Http\Requests\Request;
use App\Models\ActivityType;
use Illuminate\Validation\Rule;

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
            'name' => [
                'nullable',
                'string',
                'min:2',
                'max:255',
                Rule::unique('activity_types')->where(function ($query) {
                    $query->where('activity_category_id', $this->input('activity_category_id') ?? ActivityType::find($this->input('id'))?->activity_category_id);
                })
            ],
            'activity_category_id' => [
                'nullable',
                'integer',
                'exists:activity_categories,id',
                Rule::unique('activity_types')->where(function ($query) {
                    $query->where('name', $this->input('name') ?? ActivityType::find($this->input('id'))?->name);
                })
            ],
        ];
    }
}
