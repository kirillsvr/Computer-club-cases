<?php

namespace app\controllers;


use app\actions\AuthAction;
use app\actions\CaseIndexAction;
use app\actions\CaseRunAction;
use app\models\request\AuthGuestRequest;
use app\models\request\RunRequest;

class CaseController extends AppController
{
    public function indexAction()
    {
        $this->layout = 'case';
        $this->set((new CaseIndexAction())->execute());
    }

    public function authAction()
    {
        (new AuthAction((new AuthGuestRequest($_GET['phone'] ?? null))->execute(), $this->token))->execute();
        http_response_code(200);
        echo json_encode('OK');
        die;
    }

    public function runAction()
    {
        $readyData = (new CaseRunAction((new RunRequest($_GET['case'] ?? null))->execute(), $this->token))->execute();
        http_response_code(200);
        echo json_encode($readyData);
        die;
    }
}