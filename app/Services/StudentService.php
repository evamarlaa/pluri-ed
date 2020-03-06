<?php

namespace App\Services;

use App\Repositories\StudentRepository;
use App\Services\Traits\CrudMethods;

/**
 * Class StudentService
 * @package App\Services
 */
class StudentService extends AppService
{
    use CrudMethods {
        all    as public processAll;
        create as public processCreate;
    }

    /**
     * @var StudentRepository
     */
    protected $repository;

    /**
     * StudentService constructor.
     * @param StudentRepository $repository
     */
    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }

    //TENTATIVA DE USAR CRITERIAS, MAS COM O TEMPO CURTO NÃO CONSEGUI IDENTIFICAR A INCOMPATIBILIDADE QUE OCORREU
//    /**
//     * Display a listing of the resource.
//     *
//     * @param int $limit
//     * @return array|mixed
//     */
//    public function all($limit = 20)
//    {
//        $this->repository
//            ->resetCriteria()
//            ->pushCriteria(app('App\Criterias\FilterStudentsByEmail'))
//            ->pushCriteria(app('App\Criterias\FilterStudentsByName'))
//            ->pushCriteria(app('App\Criterias\FilterStudentsByAgeGroup'));
//
//        return $this->returnSuccess($this->processAll($limit));
//    }

    /**
     * @return mixed
     */
    public function filterStudentsByAgeGroup()
    {
        return $this->repository->filterStudentsByAgeGroup();
    }
}
