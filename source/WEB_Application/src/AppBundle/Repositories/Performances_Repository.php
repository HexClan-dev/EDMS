<?php
/**
 * Created by PhpStorm.
 * User: archey
 * Date: 02.05.18
 * Time: 11:16
 */

namespace AppBundle\Repositories;


use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;


class Performances_Repository extends EntityRepository
{


    public function getAllStudentPerformances(){

//        $rsm = new ResultSetMapping();
//        $em = $this->getEntityManager();
//
//        $sql = "SELECT *
//                FROM person p, performances pf
//                where p.id = pf.student_id and p.isAccepted = TRUE
//                GROUP BY p.id;
//            ";
//
//
//        $query = $em->createNativeQuery($sql,$rsm);
//
//        return $query;

        // TODO -> this is to be checked again

        return $this->createQueryBuilder('p')
            ->innerJoin('p.student','student','WITH','student.isaccepted = TRUE AND student.id = p.student')
//            ->innerJoin('p.student','st','WITH',"st.academic_year LIKE '%current_date()%' ")
//            ->innerJoin('p.academic_year','ac','WITH','ac.start_date < current_date() and ac.end_date > current_date()')
//            ->groupBy('p.student')
                ->orderBy('p.dateAssigned','desc')
            ->getQuery()
            ->execute();

    }


}