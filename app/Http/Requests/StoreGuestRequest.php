<?php

namespace App\Http\Requests;

use App\Enums\GenderEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreGuestRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'min:3',
                'max:100',
            ],
            'gender' => [
                'required',
                'string',
                Rule::Enum(GenderEnum::class),
            ],
            'email' => [
                'required',
                'email',
            ],
            'phone_number' => [
                'required',
                'string',
                'min:10',
                'max:15',
            ],
            'company' => [
                'required',
                'string',
                'min:3',
                'max:100',
            ],
            'address' => [
                'required',
                'string',
                'min:3',
                'max:255',
                'regex:/(^[a-zA-Z0-9\s,.-]+$)/',
            ],
            'purpose' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'staff_id' => [
                'required',
                'uuid',
                'exists:staffs,id',
            ],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'staff_id' => 'staff to visit',
        ];
    }
}
