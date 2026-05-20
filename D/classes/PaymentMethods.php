<?php
interface PaymentMethods
{
    public function sendPayment(float $cantidad): string;
}
