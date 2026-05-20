<?php

include('classes/Ghost.php');

function doCombat(Character $character)
{
    $character->move();
    if ($character instanceof Actions) {
        $character->attack();
    }
}

$enemy = new Ghost();
doCombat($enemy);

$mainCharacter =  new Knight();
doCombat($mainCharacter);
