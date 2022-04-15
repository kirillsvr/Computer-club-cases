<?php

namespace app\models\request;

class AuthGuestRequest implements Request
{
    private string|null $phone;

    public function __construct(string|null $phone)
    {
        $this->phone = $phone;
    }

    public function execute(): string
    {
        $this->checkPhone();

        return $this->phone;
    }

    private function checkPhone(): void
    {
        if (!$this->phone){
            throw new \Exception('Не передан номер телефона', 403);
        }
    }
}