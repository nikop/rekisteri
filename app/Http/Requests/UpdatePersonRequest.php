<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['string', 'min:1'],
            'last_name' => ['string', 'min:1'],
            'phone' => ['string', 'nullable', 'min:1'],
            'email' => ['email', 'nullable', 'min:1'],
            'address' => ['string', 'nullable', 'min:1'],
            'postcode' => ['string', 'nullable', 'min:1'],
            'city' => ['string', 'nullable', 'min:1'],
            'country' => ['string', 'nullable', 'min:1'],
            'note' => ['string', 'nullable'],
        ];
    }
}
