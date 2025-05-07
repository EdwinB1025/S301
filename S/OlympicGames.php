<?php
class OlympicGames {
    private $athletes = [];
    private $events = [];
    private $results = [];

    public function processOlympicData($athletesData, $eventsData, $resultsData) {

        foreach ($athletesData as $athlete) {
            $this->athletes[] = ['name' => $athlete['name'], 'country' => $athlete['country']];
        }

        foreach ($eventsData as $event) {
            $this->events[] = ['event' => $event['event'], 'date' => $event['date']];
        }

        foreach ($resultsData as $result) {
            $this->results[] = [
                'athlete' => $result['athlete'],
                'event' => $result['event'],
                'medal' => $result['medal']
            ];
        }

        echo "Olympic Games Results:\n";
        foreach ($this->events as $event) {
            echo "Event: " . $event['event'] . " on " . $event['date'] . "\n";
            foreach ($this->results as $result) {
                if ($result['event'] === $event['event']) {
                    echo "- " . $result['athlete'] . " from " . $result['country'] . " won " . $result['medal'] . "\n";
                }
            }
        }
    }
}

$olympics = new OlympicGames();

$athletesData = [
    ['name' => 'Usain Bolt', 'country' => 'Jamaica'],
    ['name' => 'Michael Phelps', 'country' => 'USA']
];

$eventsData = [
    ['event' => '100m Sprint', 'date' => '2024-08-01'],
    ['event' => 'Swimming', 'date' => '2024-08-02']
];

$resultsData = [
    ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
    ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
];

$olympics->processOlympicData($athletesData, $eventsData, $resultsData);

?>
