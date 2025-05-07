<?php

class PaymentProcessor
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new StripePaymentGateway();
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendPayment($cantidad);
    }
}