<?php

class StripePaymentGateway implements PaymentMethods
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}
