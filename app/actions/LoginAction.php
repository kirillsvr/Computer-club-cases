<?php

namespace app\actions;

use app\models\auth\Login;
use app\models\logging\AbstractFacadeLogging;
use app\models\logging\LoggingEnter;

class LoginAction
{
    private AbstractFacadeLogging $loging;
    private Login $login;

    public function __construct(array $request, AbstractFacadeLogging $loging = null, Login $login = null)
    {
        $this->loging = $loging ?? new LoggingEnter($request['login']);
        $this->login = $login ?? new Login($request['login'], $request['password']);
    }

    public function execute()
    {
        $this->login();
        $this->setLogData();
    }

    private function setLogData(): void
    {
        $this->loging->execute();
    }

    private function login(): void
    {
        $this->login->login();
    }
}