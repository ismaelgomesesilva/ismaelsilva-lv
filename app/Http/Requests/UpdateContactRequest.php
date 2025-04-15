<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:5',
            'email' => [
                'required',
                'email',
                Rule::unique('contacts')->ignore($this->route('contact')->id),
            ],
            'contact' => [
                'required',
                'digits:9',
                Rule::unique('contacts')->ignore($this->route('contact')->id),
            ],
        ];
    }
}
