<?php
require_once 'classes/PaymentProcessor.php';
require_once 'classes/BankTransfer.php';

//BankTransfer Class do not share SendPayment method as it has a different design requirements in the architecture, thus, it does not implement the PaymentMethods Interface.
$processBankTransfer = new BankTransfer();
echo $processBankTransfer->sendTransfer(5400) . "\n";


echo PaymentProcessor::procesarPago(new PayPalPaymentGateway(), 300) . "\n";
echo PaymentProcessor::procesarPago(new StripePaymentGateway(), 500) . "\n";
