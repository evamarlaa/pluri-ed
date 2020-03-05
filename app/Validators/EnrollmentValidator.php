<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class EnrollmentValidator.
 *
 * @package namespace App\Validators;
 */
class EnrollmentValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'student_id'    => 'exists:students,id',
            'course_id'     => 'exists:courses,id',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'student_id'    => 'exists:students,id',
            'course_id'     => 'exists:courses,id',
        ],
    ];
}
