<?php
interface PaymentMethods
{
    public function sendAmount(float $cantidad): string;
}
