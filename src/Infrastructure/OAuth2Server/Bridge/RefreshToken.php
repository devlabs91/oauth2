<?php
namespace Devlabs91\Oauth2\Infrastructure\oAuth2Server\Bridge;

use League\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\RefreshTokenTrait;

final class RefreshToken implements RefreshTokenEntityInterface
{
    use EntityTrait, RefreshTokenTrait;
}