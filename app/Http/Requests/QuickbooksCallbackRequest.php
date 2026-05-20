<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class QuickbooksCallbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required", "string", "min:5", "max:255"],
            "email" => ["required", "email", "min:5", "max:255"],
            "phone" => ["required", "string", "max:255"],
            "issue" => ["required", "string", "max:255"]
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            "name" => ucwords(strtolower($this->input("name"))),
            "email" => strtolower($this->input("email"))
        ]);
    }
}
