<?php

namespace App\Repositories;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface AppRepositoryInterface
 *
 * @package namespace App\Repositories;
 */
interface AppRepositoryInterface extends RepositoryInterface
{

    /**
     * Get Fields Types
     *
     * @return array
     */
    public function getFieldsRules();

}
