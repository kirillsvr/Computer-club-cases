<?php

namespace app\models;

class CheckBalance
{
    private array $constants;
    private string $case;

    public function __construct(string $case)
    {
        $this->case = strtoupper($case) . '_CASE_PRICE';
        $this->constants = get_defined_constants();
    }

    public function execute(): void
    {
        $_SESSION['sum'] = $_SESSION['sum'] - $this->constants[$this->case];

        if ($_SESSION['sum'] < FIRST_CASE_PRICE) $this->unsetBalance();
    }

    private function unsetBalance()
    {
            unset($_SESSION['sum']);
            unset($_SESSION['user']);
            unset($_SESSION['phone']);
            unset($_SESSION['desc']);
    }
}