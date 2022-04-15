<?php

namespace app\actions;

use app\models\database\PDOMethods;

class CaseIndexAction
{
    public function execute()
    {
        $this->checkBalanceUser();

        $lastPrizes = PDOMethods::getLastPrizes();
        $first = array_reverse(PDOMethods::getPrizes('first_case_prize'));
        $second = array_reverse(PDOMethods::getPrizes('second_case_prize'));
        $third = array_reverse(PDOMethods::getPrizes('third_case_prize'));
        $user = $_SESSION['user'] ?? null;
        $sum = $_SESSION['sum'] ?? null;

        return compact('sum', 'user', 'first', 'second', 'third', 'lastPrizes');
    }

    private function checkBalanceUser()
    {
        if (isset($_SESSION['sum']) && $_SESSION['sum'] < FIRST_CASE_PRICE)
            unset($_SESSION['sum'], $_SESSION['user'], $_SESSION['phone']);
    }
}