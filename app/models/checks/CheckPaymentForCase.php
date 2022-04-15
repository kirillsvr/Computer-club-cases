<?php


namespace app\models\checks;


class CheckPaymentForCase
{
    private $lastPayment;
    private $sale;
    private $saleSum;
    private $desc;

    public function __construct(array $lastPayment, array|false $sale, int $saleSum)
    {
        $this->lastPayment = $lastPayment;
        $this->sale = $sale;
        $this->saleSum = $saleSum;
        $this->desc = substr($lastPayment['desc'], strrpos($lastPayment['desc'], ' ') + 1);
    }

    public function checkLastPayment()
    {
        $this->checkSum();
        $this->checkOnBase();
    }

    private function checkSum(): void
    {
        $sum = (int) $this->lastPayment['spent_sum'];
        if ((int) $this->lastPayment['spent_sum'] < $this->saleSum){
            throw new \Exception("Последнее пополнение не соответствует условиям акции", 500);
        }
    }

    private function checkOnBase(): void
    {
        if ($this->sale === false) return;

        foreach ($this->sale as $sale){
            if ($sale['check_code'] == $this->desc){
                throw new \Exception("Последнее пополнение должно быть за реальные деньги", 401);
            }
            if ($sale['chek_for_case'] == $this->desc){
                throw new \Exception("Последнее пополнение уже было использовано в лотерее", 401);
            }
        }
    }
}