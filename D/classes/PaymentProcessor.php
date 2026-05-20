<?php
require_once 'PaymentMethods.php';
require_once 'PayPalPaymentGateway.php';
require_once 'StripePaymentGateway.php';

class PaymentProcessor
{

    public static function procesarPago(PaymentMethods $gateway, float $cantidad): string
    {
        return $gateway->sendPayment($cantidad);
    }
}
