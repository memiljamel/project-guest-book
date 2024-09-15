<?php

namespace App\Enums;

enum FeedbackTypeEnum: int
{
    /**
     * define the type of feedback as bug.
     */
    case BUG = 1;

    /**
     * define the type of feedback as comment.
     */
    case COMMENT = 2;

    /**
     * define the type of feedback as others.
     */
    case OTHER = 3;

    /**
     * Get the label for the gender enum.
     */
    public function label(): string
    {
        return match ($this) {
            FeedbackTypeEnum::BUG => __('Bug'),
            FeedbackTypeEnum::COMMENT => __('Comment'),
            FeedbackTypeEnum::OTHER => __('Other'),
        };
    }
}
