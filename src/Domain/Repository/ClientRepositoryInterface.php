<?php

namespace Devlabs91\Oauth2\Domain\Repository;

use Devlabs91\Oauth2\Domain\Model\Client;

interface ClientRepositoryInterface
{
    public function findActive(string $clientId): ?Client;
}