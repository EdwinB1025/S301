<?php

class BankTransfer implements PaymentGateaway
{

    #[Override]
    public function processPayment(float $amount): string
    {
        return $this->sendTransfer($amount);
    }

    private function sendTransfer(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}
