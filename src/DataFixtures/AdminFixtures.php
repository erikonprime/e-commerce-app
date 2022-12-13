<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use App\Entity\User;
use App\Service\UserPasswordHashInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;

class AdminFixtures extends Fixture
{

    public function __construct(private readonly UserPasswordHashInterface $encoder, private EntityManagerInterface $em)
    {

    }

    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {
        $adminsData = [
            0 => [
                'email' => 'admin@example.com',
                'role' => ['ROLE_ADMIN'],
                'password' => 123654
            ]
        ];

        foreach ($adminsData as $user) {
            $newUser = new Admin();
            $newUser->setEmail($user['email']);
            $newUser->setPassword($user['password'], $this->encoder);
            $newUser->setRoles($user['role']);
            $this->em->persist($newUser);
        }

        $this->em->flush();
    }
}