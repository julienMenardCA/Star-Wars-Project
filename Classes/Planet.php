<?php

class Planet extends Common
{
    protected $diameter;
    protected $rotationPeriod;
    protected $orbitalPeriod;
    protected $gravity;
    protected $population;
    protected $climate;
    protected $terrain;
    protected $surfaceWater;
    protected $residents;

    /**
     * Planet constructor.
     * @param $diameter
     * @param $rotationPeriod
     * @param $orbitalPeriod
     * @param $gravity
     * @param $population
     * @param $climate
     * @param $terrain
     * @param $surfaceWater
     * @param $residents
     */
    public function __construct($diameter, $rotationPeriod, $orbitalPeriod, $gravity, $population, $climate, $terrain, $surfaceWater, $residents, $name, $films, $url, $created, $edited)
    {
        $this->diameter = $diameter;
        $this->rotationPeriod = $rotationPeriod;
        $this->orbitalPeriod = $orbitalPeriod;
        $this->gravity = $gravity;
        $this->population = $population;
        $this->climate = $climate;
        $this->terrain = $terrain;
        $this->surfaceWater = $surfaceWater;
        $this->residents = $residents;
        parent::__construct($name, $films, $url, $created, $edited);
    }

    /**
     * @return mixed
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * @return mixed
     */
    public function getRotationPeriod()
    {
        return $this->rotationPeriod;
    }

    /**
     * @return mixed
     */
    public function getOrbitalPeriod()
    {
        return $this->orbitalPeriod;
    }

    /**
     * @return mixed
     */
    public function getGravity()
    {
        return $this->gravity;
    }

    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @return mixed
     */
    public function getClimate()
    {
        return $this->climate;
    }

    /**
     * @return mixed
     */
    public function getTerrain()
    {
        return $this->terrain;
    }

    /**
     * @return mixed
     */
    public function getSurfaceWater()
    {
        return $this->surfaceWater;
    }

    /**
     * @return mixed
     */
    public function getResidents()
    {
        return $this->residents;
    }
}