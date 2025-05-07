<?php

interface IMachineActions
{
    public function turnOn(): void;
    public function turnOff(): void;
    public function heat(): void;
    public function cool(): void;
    public function wash(): void;
}
