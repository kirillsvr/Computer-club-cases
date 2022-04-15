<?php

namespace app\models\customers;

use app\models\curl\AbstractCurlResponse;
use app\models\curl\SenetConnectGet;

class CustomerId extends AbstarctCustomers
{
    public function __construct(string $token, string $phone, AbstractCurlResponse $response = null)
    {
        parent::__construct($token, $phone);
        $this->response = $response ?? new SenetConnectGet("/api/v2/short_account/?search=$this->phone", $token);
    }

    public function execute(): string|false
    {
        $this->data = $this->response->execute();
        $this->checkCustomerId();
        return $this->getId();
    }

    private function checkCustomerId(): void
    {
        if ($this->data['count'] === 0){
            throw new \Exception("Пользователя с логином $this->phone не существует или он был удален", 500);
        }
    }

    private function getId(): string|false
    {
        foreach ($this->data['results'] as $value){
            if ($value['login'] == $this->phone){
                return $value['account_id'];
            }
        }
        return false;
    }
}