<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('admin@main.ru');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setIsActive(true);
        $password = $this->hasher->hashPassword($user, '123');
        $user->setPassword($password);
        $manager->persist($user);

        $user1 = new User();
        $user1->setEmail('user1@main.ru');
        $user1->setRoles(['ROLE_USER']);
        $user1->setIsActive(true);
        $password = $this->hasher->hashPassword($user1, '123');
        $user1->setPassword($password);
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('user2@main.ru');
        $user2->setRoles(['ROLE_USER']);
        $user2->setIsActive(true);
        $password = $this->hasher->hashPassword($user2, '123');
        $user2->setPassword($password);
        $manager->persist($user2);

        $user3 = new User();
        $user3->setEmail('user3@main.ru');
        $user3->setRoles(['IS_AUTHENTICATED_FULLY']);
        $user3->setIsActive(true);
        $password = $this->hasher->hashPassword($user3, '123');
        $user3->setPassword($password);
        $manager->persist($user3);

        $manager->flush();

        $this->setReference('user_3', $user3);
    }
}
