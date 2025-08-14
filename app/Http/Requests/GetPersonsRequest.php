<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetPersonsRequest extends FormRequest
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
            'start' => ['int', 'min:0'],
            'count' => ['int', 'min:1'],
            'order' => ['string'],
            'desc' => ['boolean'],
            'filter.first_name' => ['string'],
            'filter.last_name' => ['string'],
        ];
    }
}
