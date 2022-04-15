<?php

namespace app\models\payments;

use app\models\database\PDOMethods;
use app\models\telegram\Telegram;

class PaymentTelegram implements Payment
{
    private array $prize;
    private string $case;
    private Telegram $telegram;

    public function __construct(array $prize, string $case, Telegram $telegram = null)
    {
        $this->prize = $prize;
        $this->case = $case;
        $this->telegram = $telegram ?? new Telegram('Пользователь: ' . $_SESSION['user'] . '; Выигрыш: ' . $prize['prize']);
    }

    public function execute(): void
    {
        $this->sentMessage();
        $this->writeToDB();
    }

    private function sentMessage(): void
    {
        $this->telegram->makeMessage();
    }

    private function writeToDB(): void
    {
        PDOMethods::setInfoForCaseGoods($this->prize['prize'], $this->case);
    }
}