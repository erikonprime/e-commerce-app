<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserPasswordHash implements UserPasswordHashInterface
{
    public function __construct(private readonly UserPasswordHasherInterface $userPasswordHasher)
    {
    }

    public function hash(User $user, string $password): string
    {
        return $this->userPasswordHasher->hashPassword($user, $password);
    }

}