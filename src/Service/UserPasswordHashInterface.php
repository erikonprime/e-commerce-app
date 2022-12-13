<?php

namespace App\Service;

use App\Entity\User;

interface UserPasswordHashInterface
{
    public function hash(User $user, string $password): string;
}