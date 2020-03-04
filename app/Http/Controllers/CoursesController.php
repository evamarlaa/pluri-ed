<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CrudMethods;
use App\Services\CourseService;

use App\Validators\CourseValidator;

/**
 * Class CoursesController.
 *
 * @package namespace App\Http\Controllers;
 */
class CoursesController extends Controller
{
    use CrudMethods;

    /**
     * @var CourseService
     */
    protected $service;

    /**
     * @var CourseValidator
     */
    protected $validator;

    /**
     * CoursesController constructor.
     * @param CourseService $service
     * @param CourseValidator $validator
     */
    public function __construct(CourseService    $service,
                                CourseValidator  $validator)
    {
        $this->service      = $service;
        $this->validator    = $validator;
    }
}
