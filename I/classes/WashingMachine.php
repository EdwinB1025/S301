<?php

require_once 'IMachineActions.php';

class WashingMachine implements IMachineActions
{
    public function turnOn(): void
    {
        echo "Washing machine on\n";
    }

    public function turnOff(): void
    {
        echo "Washing machine off\n";
    }

    public function heat(): void
    {
        // Not supported
        throw new Exception("Heating not supported");
    }

    public function cool(): void
    {
        // Not supported
        throw new Exception("Cooling not supported");
    }

    public function wash(): void
    {
        echo "Washing clothes\n";
    }
}
