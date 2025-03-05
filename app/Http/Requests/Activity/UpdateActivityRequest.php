<?php

namespace App\Http\Requests\Activity;

use App\Http\Requests\Request;
use App\Models\Activity;
use Illuminate\Validation\Rule;

class UpdateActivityRequest extends Request
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
            'name' => [
                'sometimes',
                'string',
                'min:1',
                'max:255',
                Rule::unique('activities')->where(function ($query) {
                    $query->where('activity_type_id', $this->input('activity_type_id') ?? Activity::find($this->input('id'))?->activity_type_id);
                })
            ],
            'activity_type_id' => [
                'sometimes',
                'integer',
                'exists:activity_types,id',
                Rule::unique('activities')->where(function ($query) {
                    $query->where('name', $this->input('name') ?? Activity::find($this->input('id'))?->name);
                })
            ],
        ];
    }
}
