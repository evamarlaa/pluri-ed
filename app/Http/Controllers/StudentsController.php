<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CrudMethods;
use App\Services\StudentService;

use App\Validators\StudentValidator;

/**
 * Class StudentsController.
 *
 * @package namespace App\Http\Controllers;
 */
class StudentsController extends Controller
{
    use CrudMethods;

    /**
     * @var StudentService
     */
    protected $service;

    /**
     * @var StudentValidator
     */
    protected $validator;

    /**
     * StudentsController constructor.
     * @param StudentService $service
     * @param StudentValidator $validator
     */
    public function __construct(StudentService    $service,
                                StudentValidator  $validator)
    {
        $this->service      = $service;
        $this->validator    = $validator;
    }

    /**
     * @return mixed
     */
    public function filterStudentsByAgeGroup()
    {
        return $this->service->filterStudentsByAgeGroup();
    }
}
