<?php

class People extends Common
{
    protected $birthYear;
    protected $eyeColor;
    protected $gender;
    protected $hairColor;
    protected $height;
    protected $mass;
    protected $skinColor;
    protected $homeWorld;
    protected $species;
    protected $starships;
    protected $vehicles;

    /**
     * People constructor.
     * @param $birthYear
     * @param $eyeColor
     * @param $gender
     * @param $hairColor
     * @param $height
     * @param $mass
     * @param $skinColor
     * @param $homeWorld
     * @param $species
     * @param $starships
     * @param $vehicles
     */
    public function __construct($birthYear, $eyeColor, $gender, $hairColor, $height, $mass, $skinColor, $homeWorld, $species, $starships, $vehicles, $name, $films, $url, $created, $edited)
    {
        $this->birthYear = $birthYear;
        $this->eyeColor = $eyeColor;
        $this->gender = $gender;
        $this->hairColor = $hairColor;
        $this->height = $height;
        $this->mass = $mass;
        $this->skinColor = $skinColor;
        $this->homeWorld = $homeWorld;
        $this->species = $species;
        $this->starships = $starships;
        $this->vehicles = $vehicles;
        parent::__construct($name, $films, $url, $created, $edited);
    }

    /**
     * @return mixed
     */
    public function getBirthYear()
    {
        return $this->birthYear;
    }

    /**
     * @return mixed
     */
    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * @return mixed
     */
    public function getSkinColor()
    {
        return $this->skinColor;
    }

    /**
     * @return mixed
     */
    public function getHomeWorld()
    {
        return $this->homeWorld;
    }

    /**
     * @return mixed
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @return mixed
     */
    public function getStarships()
    {
        return $this->starships;
    }

    /**
     * @return mixed
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }
}