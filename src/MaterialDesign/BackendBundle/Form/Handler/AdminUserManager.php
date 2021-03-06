<?php

namespace MaterialDesign\BackendBundle\Form\Handler;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use MaterialDesign\BackendBundle\Entity\AdminUser;

class AdminUserManager
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function save(AdminUser $user)
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}