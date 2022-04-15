<?php


namespace app\models\checks;


use app\models\database\PDOMethods;

class CheckPrizesForDay
{
    private $prizes;

    public function __construct()
    {
        $this->prizes = PDOMethods::getPrizesForDate();
    }

    public function run(): bool
    {
        if (empty($this->prizes)) return true;

        return $this->checkPrizes();
    }

    private function checkPrizes(): bool
    {
        $i = 0;

        foreach ($this->prizes as $prize){
            if ((int) $prize['sum'] >= LIMIT_PRIZE_FOR_DAY) $i++;
        }

        if ($i > 1) return false;
            else return true;
    }
}