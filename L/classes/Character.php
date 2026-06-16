<?php

interface Actions
{
    public function attack(): void;
}

class Character
{
    public function move(): void
    {
        echo "The character moves forward.\n";
    }
}
