<?php 

class BankTransfer
{
    public function sendTransfer(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}