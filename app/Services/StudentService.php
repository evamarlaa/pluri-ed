<?php

namespace App\Services;

use App\Repositories\StudentRepository;
use App\Services\Traits\CrudMethods;

/**
 * Class StudentService
 * @package App\Services
 */
class StudentService
{
    use CrudMethods {
        all    as public processAll;
        create as public processCreate;
    }

    /**
     * @var StudentRepository
     */
    protected $repository;

    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }
}
