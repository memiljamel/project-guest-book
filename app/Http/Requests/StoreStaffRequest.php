<?php

namespace App\Http\Requests;

use App\Enums\GenderEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStaffRequest extends FormRequest
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
            'staff_number' => [
                'required',
                'string',
                'min:8',
                'max:16',
                'unique:staffs,staff_number',
            ],
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
                'unique:staffs,email',
            ],
            'phone_number' => [
                'required',
                'string',
                'min:10',
                'max:15',
            ],
            'job_title' => [
                'required',
                'string',
                'min:3',
                'max:100',
            ],
            'department_id' => [
                'required',
                'uuid',
                'exists:departments,id',
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
            'department_id' => 'department',
        ];
    }
}
