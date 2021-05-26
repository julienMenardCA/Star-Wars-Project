<?php


class Factory
{

    /**
     * Factory constructor.
     */
    public function __construct($data)
    {
        $film = array_merge($API_Info, $Film);
        $common = array_merge($API_Info, $Common);
        $people = array_merge($common, $People);
        $vehicle = array_merge($common, $Vehicle);
        $planet = array_merge($common, $Planet);
        $species = array_merge($common, $Species);
        $starship = array_merge($vehicle, $Starship);
        dump($film);
    }
}