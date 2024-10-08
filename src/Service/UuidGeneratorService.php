<?php

namespace Oslovie\FieldReport\Service;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Ramsey\Uuid\Uuid;

class UuidGeneratorService extends AbstractIdGenerator
{
    public function generate(EntityManagerInterface|\Doctrine\ORM\EntityManager $em, $entity)
    {
        return Uuid::uuid4(); // Génère un nouvel UUID
    }
}