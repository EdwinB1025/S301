<?php

class BankTransfer implements PaymentMethods
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}
