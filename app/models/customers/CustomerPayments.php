<?php

namespace app\models\customers;

use app\models\curl\AbstractCurlResponse;
use app\models\curl\SenetConnectGet;

class CustomerPayments extends AbstarctCustomers
{
    public function __construct(string $token, string $phone, AbstractCurlResponse $response = null)
    {
        parent::__construct($token, $phone);
        $this->response = $response ?? new SenetConnectGet("/api/v2/user_balance_history/?limit=20&account_login=$this->phone", $token);
    }

    public function execute(): array|false
    {
        $this->data = $this->response->execute();

        return $this->getLastPayments();
    }

    private function getLastPayments(): array|false
    {
        $payments = [];
        foreach ($this->data['results'] as $value){
            if ($value['action_name'] == 'Пополнения баланса'){
                $payments[] = $value;
            }
        }

        if (empty($payments)) return false;

        return $payments;
    }
}