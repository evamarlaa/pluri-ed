<?php

namespace App\Services;

use App\Repositories\EnrollmentRepository;
use App\Services\Traits\CrudMethods;

/**
 * Class CourseService
 * @package App\Services
 */
class EnrollmentService
{
    use CrudMethods {
        all    as public processAll;
        create as public processCreate;
    }

    /**
     * @var EnrollmentRepository
     */
    protected $repository;

    public function __construct(EnrollmentRepository $repository)
    {
        $this->repository = $repository;
    }
}
