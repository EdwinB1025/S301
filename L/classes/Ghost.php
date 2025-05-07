<?php

include('Character.php');

class Ghost extends Character
{
    public function move(): void
    {
        echo "The ghost floats silently.\n";
    }

    public function attack(): void
    {
        // Ghosts can't attack in this game
        throw new Exception("Ghosts cannot attack!");
    }
}
