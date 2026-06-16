<?php
class Athlete
{

    public function __construct(
        private string $name,
        private string $country,
    ) {}

    public function __toString()
    {
        return "$this->name from $this->country";
    }
}
