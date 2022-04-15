<?php


namespace app\controllers;


use app\models\computation\Computation;
use app\models\database\DBConnect;

class TestController
{
    public function indexAction()
    {
        $table = 'first_case_prize';
        $prizeArray = DBConnect::getAll("SELECT $table.*, color.color FROM $table LEFT JOIN color ON $table.color = color.id");

        $prizeObject = new Computation();
        $prizeObject->setPrize($prizeArray);
        $prize = [];
        for ($i = 0; $i < 50000; $i++){
            $prize[] = ($prizeObject->run(true, 200))['prize'];
        }
        debug(array_count_values($prize));
        die();
    }
}