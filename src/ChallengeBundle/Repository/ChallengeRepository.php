<?php

namespace ChallengeBundle\Repository;

/**
 * QuestionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChallengeRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByNom($nom){

        $query=$this->getEntityManager()->createQuery("SELECT m from ChallengeBundle:Challenge m where m.nom<'$nom'");

        return $query->getResult();

    }
}