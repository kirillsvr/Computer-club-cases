<?php

namespace app\actions;

use app\models\CheckBalance;
use app\models\checks\CheckPrizesForDay;
use app\models\computation\Computation;
use app\models\database\PDOMethods;
use app\models\payments\PaymentFactory;
use app\models\PrizeGoods;
use app\models\rendering\RenderRoulette;
use app\models\rendering\RenderWinBlock;

class CaseRunAction
{
    private string $token;
    private string $case;
    private array $prizes;
    private Computation $computation;
    private array $actualPrizes;
    private bool $prizeLimitForDay;
    private array $readyPrize;
    private CheckBalance $balance;

    public function __construct(string $case, string $token)
    {
        $this->token = $token;
        $this->case = $case;
        $this->computation = new Computation();
        $this->balance = new CheckBalance($case);
    }

    public function execute(): array
    {
        $this->getAllPrizes();
        $this->getActualPrizes();
        $this->checkPrizesForDay();
        $this->receivePrize();
        $this->insertPayment();
        $this->checkBalance();
        return $this->generateHTMLRoulette();
    }

    private function getAllPrizes(): void
    {
        $this->prizes = PDOMethods::getPrizes($this->case . '_case_prize');
    }

    private function getActualPrizes(): void
    {
        $this->actualPrizes = (new PrizeGoods($this->prizes, $this->token))->run();
    }

    private function checkPrizesForDay(): void
    {
        $this->prizeLimitForDay = (new CheckPrizesForDay())->run();
    }

    private function receivePrize(): void
    {
        $this->computation->setPrize($this->actualPrizes);
        $this->computation->setCanWeGiveOutBigPrize($this->prizeLimitForDay);
        $this->readyPrize = $this->computation->execute();
    }

    private function insertPayment(): void
    {
        (new PaymentFactory($this->readyPrize, $this->token, $this->case))->execute();
    }

    private function generateHTMLRoulette(): array
    {
        $readyData = (new RenderRoulette($this->readyPrize, $this->actualPrizes))->run();
        $readyData['win'] = (new RenderWinBlock($this->readyPrize))->run();
        $readyData['count'] = count($this->actualPrizes);

        return $readyData;
    }

    private function checkBalance(): void
    {
        $this->balance->execute();
    }
}