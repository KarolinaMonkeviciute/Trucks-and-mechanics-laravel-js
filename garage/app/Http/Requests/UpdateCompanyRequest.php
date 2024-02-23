<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'name' => 'required|min:2|max:100',
            'type' => 'required|in:UAB,AB,MB,VŠĮ,IĮ',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Būtina įrašyti įmonės pavadinimą',
            'name.min' => 'Įmonės pavadinimas ne trumpesnis nei 2 simboliai',
            'name.max' => 'Įmonės pavadinimas ne ilgesnis nei 100 simbolių',
            'type.required' => 'Būtina įrašyti įmonės tipą',
            'type.in' => 'Neegzistuojantis įmonės tipas',
        ];
    }
}
