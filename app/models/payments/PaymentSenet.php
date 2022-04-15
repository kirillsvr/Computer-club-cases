<?php

namespace app\models\payments;

use app\models\curl\AbstractCurlResponse;
use app\models\curl\SenetConnectGet;
use app\models\curl\SenetConnectPost;
use app\models\database\PDOMethods;

class PaymentSenet implements Payment
{
    private array $prize;
    private string $token;
    private array $status;
    private string $case;
    private AbstractCurlResponse $response;

    public function __construct(array $prize, string $token, string $case, AbstractCurlResponse $response = null)
    {
        $this->token = $token;
        $this->case = $case;
        $this->response = $response ?? new SenetConnectPost('/api/v2/refill_account/', $this->token, [
                'account_id' => $_SESSION['user'],
                'amount' => $prize['prize'],
                'devid' => "123",
                'payment_type' => 0
            ]);
    }

    public function execute(): void
    {
        $this->pay();
        $this->writeToDB();
    }

    private function pay(): void
    {
        $this->status = $this->response->execute();
    }

    private function writeToDB(): void
    {
        PDOMethods::setInfoForCaseMoney($this->status, $this->case);
    }
}