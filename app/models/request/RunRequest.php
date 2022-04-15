<?php

namespace app\models\request;

class RunRequest implements Request
{
    private ?string $case;

    public function __construct(?string $case)
    {
        $this->case = $case;
    }

    public function execute(): string
    {
        $this->checkCase();
        $this->checkLogin();

        return $this->case;
    }

    private function checkCase(): void
    {
        if(!$this->case) throw new \Exception('Неверный номер кейса', 403);
    }

    private function checkLogin(): void
    {
        if (!isset($_SESSION['phone'])) throw new \Exception('Не пройдена авторизация', 403);
    }
}