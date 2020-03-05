<?php

namespace App\Repositories;

use App\Presenters\EnrollmentPresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EnrollmentRepository;
use App\Entities\Enrollment;
use App\Validators\EnrollmentValidator;

/**
 * Class EnrollmentRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EnrollmentRepositoryEloquent extends AppRepository implements EnrollmentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Enrollment::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return EnrollmentValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
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
        return EnrollmentPresenter::class;
    }
}
