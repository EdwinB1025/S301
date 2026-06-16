<?php

class PayPalPaymentGateway implements PaymentGateaway
{
    public function processPayment(float $amount): string
    {
        return $this->sendPayment($amount);
    }

    private function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}
