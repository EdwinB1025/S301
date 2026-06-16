<?php
require_once 'classes/PaymentProcessor.php';

$paymentBank = new PaymentProcessor(new BankTransfer);
$paymentBank->procesarPago(600);

$paymentPayPal = new PaymentProcessor(new PayPalPaymentGateway);
$paymentPayPal->procesarPago(600);


$paymentStripe = new PaymentProcessor(new StripePaymentGateway);
$paymentStripe->procesarPago(600);
