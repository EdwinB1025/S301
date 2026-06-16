<?php
require_once 'Medal.php';
require_once 'Athlete.php';


class Result
{
    private ?medal $medal;

    public function __construct(
        private Athlete $athlete,
        string $medalString
    ) {
        $this->medal = medal::tryFrom($medalString);
    }

    public function __toString()
    {
        return "- $this->athlete won {$this->medal->value}\n";
    }
}
