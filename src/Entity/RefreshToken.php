<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\RefreshTokenRepository;
use App\Traits\Timestamp;
use Doctrine\ORM\Mapping as ORM;
use Gesdinet\JWTRefreshTokenBundle\Entity\RefreshToken as BaseRefreshToken;

#[ORM\Entity(repositoryClass: RefreshTokenRepository::class)]
class RefreshToken extends BaseRefreshToken
{
    use Timestamp;
}
