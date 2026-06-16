<?php

require_once 'OlympicGames.php';

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
