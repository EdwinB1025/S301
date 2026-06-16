<?php

require_once 'Event.php';
class OlympicGames
{
    private $events = [];

    public function addEvent(Event $event)
    {
        $this->events[] = $event;
    }

    public function __toString()
    {
        $string = "Olympic Games Results:\n";
        foreach ($this->events as $event) {
            $string .= $event;
        }
        return $string;
    }
}
