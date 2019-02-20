<?php

namespace Devlabs91\Oauth2\Domain\Repository;

use Devlabs91\Oauth2\Domain\Model\RefreshToken;

interface RefreshTokenRepositoryInterface
{
    public function find(string $refreshTokenId): ?RefreshToken;

    public function save(RefreshToken $refreshToken): void;
}