<?php

interface IMachineActions
{
    public function turnOn(): void;
    public function turnOff(): void;
}

interface HeaterMachineActions
{

    public function heat(): void;
}

interface CoolerMachineActions
{

    public function heat(): void;
}

interface WashMachineActions
{
    public function wash(): void;
}
