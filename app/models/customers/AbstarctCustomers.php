<?php

namespace app\models\customers;

use app\models\curl\AbstractCurlResponse;
use app\models\curl\SenetConnectGet;

abstract class AbstarctCustomers
{
    protected $token;
    protected string $phone;
    protected AbstractCurlResponse $response;
    protected array $data;

    public function __construct(string $token, string $phone)
    {
        $this->token = $token;
        $this->phone = preg_replace("#(^\+)|(^\s)#", "", $phone);
    }

    abstract public function execute();
}