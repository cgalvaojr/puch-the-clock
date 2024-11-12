<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlatformRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'platform' => 'required|string',
            'options' => 'required|array',
            'options.*.option_name' => 'required|string',
            'options.*.option_value' => 'required|string',
        ];
    }
}
