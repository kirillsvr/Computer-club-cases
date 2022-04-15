<?php

namespace app\controllers;


use app\actions\LoginAction;
use app\models\request\LoginRequest;

class LoginController extends AppController
{
    public function indexAction(){
        $this->setMeta('Checkpoint - Вход в кабинет с акциями');
    }

    public function authAction(){
        (new LoginAction((new LoginRequest($_POST))->execute()))->execute();
        http_response_code(200);
        echo json_encode('OK');;
        die;
    }

}