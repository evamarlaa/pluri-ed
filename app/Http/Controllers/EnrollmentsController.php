<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CrudMethods;
use App\Services\EnrollmentService;

use App\Validators\EnrollmentValidator;

/**
 * Class EnrollmentsController.
 *
 * @package namespace App\Http\Controllers;
 */
class EnrollmentsController extends Controller
{
    use CrudMethods;

    /**
     * @var EnrollmentService
     */
    protected $service;

    /**
     * @var EnrollmentValidator
     */
    protected $validator;

    /**
     * EnrollmentsController constructor.
     * @param EnrollmentService $service
     * @param EnrollmentValidator $validator
     */
    public function __construct(EnrollmentService    $service,
                                EnrollmentValidator  $validator)
    {
        $this->service      = $service;
        $this->validator    = $validator;
    }
}
