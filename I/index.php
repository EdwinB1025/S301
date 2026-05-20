<?php

require_once 'classes/ElectricHeater.php';
require_once 'classes/WashingMachine.php';

$heater = new ElectricHeater();
$washer = new WashingMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();
try {
    $heater->wash();
} catch (Throwable $error) {
    echo "Action not executed by " . $heater::class . " - Error: " . $error->getMessage();
}

echo "\n";
$washer->turnOn();
try {
    $washer->heat();
} catch (Throwable $error) {
    echo "Action not executed by " . $washer::class . " - Error: " . $error->getMessage();
}
echo "\n";
$washer->wash();
$washer->turnOff();
