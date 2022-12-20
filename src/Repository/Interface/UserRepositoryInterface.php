<?php

namespace App\Repository\Interface;

use App\Entity\User;

interface UserRepositoryInterface
{
    public function add(User $user): void;
}