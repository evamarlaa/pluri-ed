<?php

namespace App\Criterias;

use Illuminate\Http\Request;
use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Contracts\CriteriaInterface;

class FilterStudentsByAgeGroup implements CriteriaInterface
{
    /**
     * @var \Illuminate\Http\Request
     */
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
//        $ageMin = $this->request->query->getInt('ageMin');
//        $ageMax = $this->request->query->getInt('ageMax');
//
//        if ($type == 2) {
//            $model = $model->whereIn('name', ['SkyTeam', 'Rextur', 'Milhas Fácil', 'Maisfly', 'Confiança', 'Esfera Tur']);
//        }
//
//        return $model;
    }
}
