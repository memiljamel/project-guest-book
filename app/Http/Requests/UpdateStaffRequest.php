<?php

namespace App\Http\Requests;

use App\Enums\AccessLevelEnum;
use App\Enums\GenderEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateStaffRequest extends FormRequest
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
                Rule::unique('staffs', 'staff_number')->ignore($this->staff),
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
                Rule::unique('staffs', 'email')->ignore($this->staff),
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
                Rule::unique('departments', 'id')->ignore($this->staff->department),
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
