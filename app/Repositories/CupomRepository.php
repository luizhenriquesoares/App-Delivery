<?php

namespace CodeDelivery\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface CupomRepository
 * @package namespace CodeDelivery\Repositories;
 */
interface CupomRepository extends RepositoryInterface
{
    /**
     * @param $code
     * @return mixed
     */
    public function findByCode($code);
}
