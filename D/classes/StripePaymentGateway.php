<?php

class StripePaymentGateway implements PaymentGateaway
{
    public function processPayment(float $amount): string
    {
        return $this->sendPayment($amount);
    }
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}
