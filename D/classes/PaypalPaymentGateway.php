<?php

class PayPalPaymentGateway implements PaymentMethods
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}
