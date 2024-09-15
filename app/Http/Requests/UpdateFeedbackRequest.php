<?php

namespace App\Http\Requests;

use App\Enums\FeedbackTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFeedbackRequest extends FormRequest
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
            'description' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'feedback_type' => [
                'required',
                'string',
                Rule::Enum(FeedbackTypeEnum::class),
            ],
        ];
    }
}
