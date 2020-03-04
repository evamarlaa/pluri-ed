<?php

namespace App\Services;

use App\Repositories\CourseRepository;
use App\Services\Traits\CrudMethods;

/**
 * Class CourseService
 * @package App\Services
 */
class CourseService
{
    use CrudMethods {
        all    as public processAll;
        create as public processCreate;
    }

    /**
     * @var CourseRepository
     */
    protected $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }
}
