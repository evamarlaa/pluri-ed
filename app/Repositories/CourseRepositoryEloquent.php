<?php

namespace App\Repositories;

use App\Presenters\CoursePresenter;
use App\Services\Traits\SoftDeletes;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Course;
use App\Validators\CourseValidator;

/**
 * Class CourseRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CourseRepositoryEloquent extends AppRepository implements CourseRepository
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Course::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return CourseValidator::class;
    }

    /**
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * @return mixed
     */
    public function presenter()
    {
        return CoursePresenter::class;
    }
}
