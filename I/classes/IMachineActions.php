<?php

interface BaseActions
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

    public function cool(): void;
}

interface WashMachineActions
{
    public function wash(): void;
}
