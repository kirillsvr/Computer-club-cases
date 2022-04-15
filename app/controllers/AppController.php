<?php


namespace app\controllers;

use app\models\auth\AuthSenet;
use senet\base\Controller;

class AppController extends Controller{

    protected $token;

    public function __construct($route){
        parent::__construct($route);

        if (isset($_SESSION['login_session'])){
            if (isset($_SESSION['token'])){
                $this->token = $_SESSION['token'];
            }else{
                $this->token = (new AuthSenet())->execute();
            }
        }
    }

}