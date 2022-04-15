<?php

namespace app\models\payments;

class PaymentFactory
{
    private array $prize;
    private Payment $payment;
    private string $token;
    private string $case;

    public function __construct(array $prize, string $token, string $case)
    {
        $this->prize = $prize;
        $this->token = $token;
        $this->case = $case;
    }

    public function execute()
    {
        $this->chooseMethodPayment();

        $this->payment->execute();
    }

    private function chooseMethodPayment(): void
    {
        switch($this->prize['type']){
            case 'money':
                $this->payment = new PaymentSenet($this->prize, $this->token, $this->case);
                break;
            case 'product':
                $this->payment = new PaymentTelegram($this->prize, $this->case);
        }
    }
}