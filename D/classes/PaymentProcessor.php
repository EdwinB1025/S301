<?php
require_once 'PaymentGateaway.php';
require_once 'PayPalPaymentGateway.php';
require_once 'StripePaymentGateway.php';
require_once 'BankTransfer.php';


class PaymentProcessor
{
    public function __construct(private PaymentGateaway $gateway) {}
    public function procesarPago(float $amount)
    {
        echo $this->gateway->processPayment($amount) . "\n";
    }
}
