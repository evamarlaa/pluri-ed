<?php

namespace App\Presenters;

use App\Transformers\EnrollmentTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EnrollmentPresenter.
 *
 * @package namespace App\Presenters;
 */
class EnrollmentPresenter extends FractalPresenter
{
    /**
     * @return EnrollmentTransformer|\League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EnrollmentTransformer();
    }
}
