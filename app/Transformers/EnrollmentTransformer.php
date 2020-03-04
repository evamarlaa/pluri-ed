<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Enrollment;

/**
 * Class EnrollmentTransformer.
 *
 * @package namespace App\Transformers;
 */
class EnrollmentTransformer extends TransformerAbstract
{
    /**
     * Transform the Enrollment entity.
     *
     * @param \App\Entities\Enrollment $model
     *
     * @return array
     */
    public function transform(Enrollment $model)
    {
        return [
            'id'         => (int) $model->id,

            'course_id'     => $model->course_id,
            'student_id'    => $model->student_id,

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
