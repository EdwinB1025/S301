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

enum medal: string
{
    case GOLD = 'Gold';
    case SILVER = 'Silver';
    case BRONZE = 'Bronze';
}

class Result
{
    private medal $medal;

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

$olympics = new OlympicGames();

$athletesData = [
    'Usain' => new Athlete('Usain Bolt', 'Jamaica'),
    'Michael' => new Athlete('Michael Phelps', 'USA')
];

$eventsData = [
    '100m Sprint' => new Event('100m Sprint', '2024-08-01'),
    'Swimming' => new Event('Swimming', '2024-08-02')
];

$resultsData = [
    '100m Sprint - Usain' => new Result($athletesData['Usain'], 'Gold'),
    'Swimming - Michael' => new Result($athletesData['Michael'], 'Gold')
];

$eventsData['100m Sprint']->addResult($resultsData['100m Sprint - Usain']);
$eventsData['Swimming']->addResult($resultsData['Swimming - Michael']);

$olympics->addEvent($eventsData['100m Sprint']);
$olympics->addEvent($eventsData['Swimming']);

echo $olympics;
