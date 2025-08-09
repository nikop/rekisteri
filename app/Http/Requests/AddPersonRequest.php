<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPersonRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'min:1'],
            'last_name' => ['required', 'string', 'min:1'],
            'phone' => ['string', 'min:1'],
            'email' => ['email', 'min:1'],
            'address' => ['string', 'min:1'],
            'postcode' => ['string', 'min:1'],
            'city' => ['string', 'min:1'],
            'country' => ['string', 'min:1'],
            'note' => ['string'],
        ];
    }
}
