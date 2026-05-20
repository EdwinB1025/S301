<?php

require_once 'IMachineActions.php';

class ElectricHeater implements IMachineActions, HeaterMachineActions
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
}
