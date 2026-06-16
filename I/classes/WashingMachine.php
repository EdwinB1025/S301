<?php

require_once 'IMachineActions.php';

class WashingMachine implements BaseActions, WashMachineActions
{
    public function turnOn(): void
    {
        echo "Washing machine on\n";
    }

    public function turnOff(): void
    {
        echo "Washing machine off\n";
    }

    public function wash(): void
    {
        echo "Washing clothes\n";
    }
}
