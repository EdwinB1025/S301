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

class Knight extends Character implements Actions
{
    public function attack(): void
    {
        echo "The character attacks with a sword.\n";
    }
}
