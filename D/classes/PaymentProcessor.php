<?php

class PaymentProcessor
{
    protected $gateway;

    public function __construct(PaymentMethods $paymentObject)
    {
        $this->gateway = $paymentObject;
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendAmount($cantidad);
    }
}
