<?php

namespace app\models\auth;

use app\models\curl\AbstractCurlResponse;
use app\models\curl\Authorization;

class AuthSenet
{
    private AbstractCurlResponse $object;

    public function __construct(string $url = '/api/v2/user/admin_auth/')
    {
        $this->object = new Authorization($url);
    }

    public function execute(): string
    {
        $token = $this->object->execute();

        $this->setToSession($token);

        return $token;
    }

    private function setToSession(string $token): void
    {
        $_SESSION['token'] = $token;
    }
}