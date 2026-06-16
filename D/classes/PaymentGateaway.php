<?php
interface PaymentGateaway
{
    public function processPayment(float $amount): string;
}
