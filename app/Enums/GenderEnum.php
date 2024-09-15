<?php

namespace App\Enums;

enum GenderEnum: string
{
    /**
     * define the gender as male.
     */
    case MALE = 'M';

    /**
     * define the gender as female.
     */
    case FEMALE = 'F';

    /**
     * Get the label for the gender enum.
     */
    public function label(): string
    {
        return match ($this) {
            GenderEnum::MALE => __('Male'),
            GenderEnum::FEMALE => __('Female'),
        };
    }
}
