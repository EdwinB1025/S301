<?php

require_once 'IMachineActions.php';

class ElectricHeater implements IMachineActions
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }

    public function cool(): void
    {
        // Not supported
        throw new Exception("Cooling not supported");
    }

    public function wash(): void
    {
        // Not supported
        throw new Exception("Washing not supported");
    }
}
