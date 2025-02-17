<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Request extends FormRequest
{

    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
