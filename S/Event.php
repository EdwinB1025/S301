<?php
require_once 'Result.php';

class Event
{

    private DateTime $date;
    private array $results;
    public function __construct(
        private string $event,
        string $dateString
    ) {
        try {
            $this->date = new DateTime($dateString);
        } catch (DateMalformedStringException) {
            throw new DateMalformedStringException("formato de fecha invalida");
        }
        $this->results = [];
    }
    public function addResult(Result $result)
    {
        $this->results[] = $result;
    }

    public function __toString()
    {
        $string = "Event: $this->event on {$this->date->format('Y-m-d')}\n";
        foreach ($this->results as $result) {
            $string .= $result;
        }
        return $string . "\n";
    }
}
