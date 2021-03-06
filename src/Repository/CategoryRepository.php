<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{

    /**
     * This is Description of findCategoryBySlug
     *
     * @param string $cslug
     *
     * @return mixed
     */
    public function findCategoryBySlug($cslug)
    {
        $dql = 'SELECT cat FROM App:Category cat WHERE cat.cslug = :cslug';

        $result = $this->getEntityManager()
            ->createQuery($dql)
            ->setParameter('cslug', $cslug)
            ->getOneOrNullResult();

        return $result;
    }
}
