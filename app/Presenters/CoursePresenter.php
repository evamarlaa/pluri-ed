<?php

namespace App\Presenters;

use App\Transformers\CourseTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CoursePresenter.
 *
 * @package namespace App\Presenters;
 */
class CoursePresenter extends FractalPresenter
{
    /**
     * @return CourseTransformer|\League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CourseTransformer();
    }
}
