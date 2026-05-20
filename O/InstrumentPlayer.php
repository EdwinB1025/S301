<?php

abstract class Instrument
{
    abstract public function play(): string;
}

class Guitar extends Instrument
{
    public function play(): string
    {
        return "🎸 Strumming the guitar\n";
    }
}

class Drums extends Instrument
{
    public function play(): string
    {
        return "🥁 Beating the drums\n";
    }
}

class Piano extends Instrument
{
    public function play(): string
    {
        return "🎹 Playing the piano\n";
    }
}

class InstrumentPlayer
{
    public static function play(mixed $instrument): string
    {
        if ($instrument instanceof Instrument) {
            return $instrument->play();
        } else {
            return "🔇 Unknown instrument\n";
        }
    }
}

echo InstrumentPlayer::play(new Guitar());
echo InstrumentPlayer::play(new Drums());
echo InstrumentPlayer::play(new Piano());
echo InstrumentPlayer::play('Clarinete');
