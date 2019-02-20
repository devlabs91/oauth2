<?php

namespace Devlabs91\Oauth2\Domain\Repository;

use Devlabs91\Oauth2\Domain\Model\AccessToken;

interface AccessTokenRepositoryInterface
{
    public function find(string $accessTokenId): ?AccessToken;

    public function save(AccessToken $accessToken): void;
}