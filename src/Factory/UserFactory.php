<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFactory
{
    public function __construct(private readonly UserPasswordHasherInterface $userPasswordHasher)
    {
    }

    public function create(string $email, string $password, array $roles = []): User
    {
        $user = new User();
        $password = $this->userPasswordHasher->hashPassword($user, $password);

        return $user
            ->setEmail($email)
            ->setPassword($password)
            ->setRoles($roles);
    }

}