<?php
/**
 * Created by PhpStorm.
 * User: Aldo
 * Date: 2018-05-16
 * Time: 12:07 AM
 */

namespace AppBundle\Repositories;

use Doctrine\ORM\EntityRepository;

class Payments_Repository extends EntityRepository
{

    public function getPayments(){

        return $this->createQueryBuilder('p')
            ->where("p.isprocessed= TRUE")
            ->innerJoin('p.academicYear','ac','WITH','ac.start_date < current_date() and ac.end_date > current_date()')
            ->getQuery()
            ->execute();
    }

}