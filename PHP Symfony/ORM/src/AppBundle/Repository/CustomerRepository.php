<?php

namespace AppBundle\Repository;

/**
 * CustomerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CustomerRepository extends \Doctrine\ORM\EntityRepository
{

    public function getCustomerSales($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->select('c.name','count(s.id) as sales')
            ->from('AppBundle:Customer', 'c')
            ->join('c.sales', 's')
            ->where('c.id = :id')
            ->setParameter('id', $id)
            ->getQuery()->getOneOrNullResult();

        return $qb->getQuery()->getOneOrNullResult();
    }
}
