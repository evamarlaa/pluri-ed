<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Interface AppRepository
 * @package namespace App\Repositories;
 */
abstract class AppRepository extends BaseRepository implements AppRepositoryInterface
{
    protected $fieldsRules = [];

    /**
     * Get Fields Types
     * @return array
     */
    public function getFieldsRules()
    {
        return $this->fieldsRules;
    }

    public function restore($id)
    {
        $this->applyCriteria();
        $this->applyScope();
        $model = $this->model->onlyTrashed()->findOrFail($id);
        $model->restore();
        $this->resetModel();

        return $this->parserResult($model);
    }

}
