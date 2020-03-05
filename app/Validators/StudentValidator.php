<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class StudentValidator.
 *
 * @package namespace App\Validators;
 */
class StudentValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name'      => 'required|max:150',
            'email'     => 'required|email|max:100',
            'birthday'  => 'required|date',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name'      => 'required|max:150',
            'email'     => 'required|email|max:100',
            'birthday'  => 'required|date',
        ],
    ];
}
