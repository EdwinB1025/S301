<?php

include('classes/Ghost.php');

function doCombat(Character $character)
{
    $character->move();
    $character->attack(); 
}

$enemy = new Ghost();
doCombat($enemy); 
