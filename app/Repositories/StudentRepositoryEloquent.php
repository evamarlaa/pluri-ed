<?php

namespace App\Repositories;

use App\Presenters\StudentPresenter;
use App\Services\Traits\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\StudentRepository;
use App\Entities\Student;
use App\Validators\StudentValidator;

/**
 * Class StudentRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class StudentRepositoryEloquent extends AppRepository implements StudentRepository
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Student::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {
        return StudentValidator::class;
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
        return StudentPresenter::class;
    }

    /**
     * @return $this|mixed
     */
    public function filterStudentsByAgeGroup()
    {
        $date = Carbon::now();

        $result = [[]];

        $students = DB::select("SELECT students.id, students.gender, students.birthday, enrollments.course_id FROM students INNER JOIN enrollments WHERE enrollments.student_id = students.id");

        foreach ($students as $student) {
            $birthday = Carbon::createFromDate($student->birthday);

            $age = $date->diffInYears($birthday);

            switch ($age) {
                case $age < 15:
                    $result['Até 15 anos'][] = $student;
                    break;
                case $age >= 15 && $age <= 18:
                    $result['Entre 15 e 18 anos'][] = $student;
                    break;
                case $age >= 19 && $age <= 14:
                    $result['Entre 19 e 24 anos'][] = $student;
                    break;
                case $age >= 25 && $age <= 30:
                    $result['Entre 25 e 30 anos'][] = $student;
                    break;
                case $age > 30:
                    $result['Maior que 30 anos'][] = $student;
                    break;
                default:
                    break;
            }
        }
        return $result;
    }

}
