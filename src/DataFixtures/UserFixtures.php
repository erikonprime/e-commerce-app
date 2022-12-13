<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Service\UserPasswordHashInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;


class UserFixtures extends Fixture
{

    public function __construct(private readonly UserPasswordHashInterface $encoder, private EntityManagerInterface $em)
    {

    }

    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {
        $usersData = [
            0 => [
                'email' => 'user@example.com',
                'role' => ['ROLE_USER'],
                'password' => 123654
            ]
        ];

        foreach ($usersData as $user) {
            $newUser = new User();
            $newUser->setEmail($user['email']);
            $newUser->setPassword($user['password'], $this->encoder);
            $newUser->setRoles($user['role']);
            $this->em->persist($newUser);
        }

        $this->em->flush();
    }
}