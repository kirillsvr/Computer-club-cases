<?php

namespace app\actions;

use app\models\checks\CheckDB;
use app\models\checks\CheckPaymentForCase;
use app\models\customers\AbstarctCustomers;
use app\models\customers\CustomerId;
use app\models\customers\CustomerPayments;

class AuthAction
{
    private string $phone;
    private AbstarctCustomers $customerId;
    private AbstarctCustomers $customerPayments;
    private string $id;
    private array $lastPayment;

    public function __construct(string $phone, string $token)
    {
        $this->phone = $phone;
        $this->customerId = new CustomerId($token, $phone);
        $this->customerPayments = new CustomerPayments($token, $phone);
    }

    public function execute(): void
    {
        $this->getCustomerId();
        $this->getLastPayments();
        $this->checkPayment();
        $this->addSession();
    }

    private function getCustomerId(): void
    {
        $this->id = $this->customerId->execute();
    }

    private function getLastPayments(): void
    {
        $lastPayments = $this->customerPayments->execute();
        if (!$lastPayments) throw new \Exception("У данного пользователя нет еще ни одного пополнения", 404);

        $this->lastPayment = $lastPayments[0];
    }

    private function getPaymentSale(): array|false
    {
        return CheckDB::getAllPayments($this->id, "'Удвоение при первом пополнении', 'Такси', '6 пополнение', 'День рождения'");
    }

    private function checkPayment(): void
    {
        (new CheckPaymentForCase($this->lastPayment, $this->getPaymentSale(), FIRST_CASE_PRICE))->checkLastPayment();
    }

    private function addSession(): void
    {
        $_SESSION['user'] = $this->id;
        $_SESSION['sum'] = (int) $this->lastPayment['spent_sum'];
        $_SESSION['phone'] = $this->phone;
        $_SESSION['desc'] = substr($this->lastPayment['desc'], strrpos($this->lastPayment['desc'], ' ') + 1);
    }
}