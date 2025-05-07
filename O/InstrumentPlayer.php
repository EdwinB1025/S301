<?php

class InstrumentPlayer
{
    public function play(string $instrument): void
    {
        if ($instrument === 'guitar') {
            echo "🎸 Strumming the guitar\n";
        } elseif ($instrument === 'drums') {
            echo "🥁 Beating the drums\n";
        } elseif ($instrument === 'piano') {
            echo "🎹 Playing the piano\n";
        } else {
            echo "🔇 Unknown instrument\n";
        }
    }
}

$player = new InstrumentPlayer();
$player->play('guitar');
$player->play('drums');
$player->play('piano');
