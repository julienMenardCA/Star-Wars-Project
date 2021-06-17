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
     * @param $data
     */
    public function __construct($data)
    {
        $this->diameter = $data["diameter"];
        $this->rotationPeriod = $data["rotation_period"];
        $this->orbitalPeriod = $data["orbital_period"];
        $this->gravity = $data["gravity"];
        $this->population = $data["population"];
        $this->climate = $data["climate"];
        $this->terrain = $data["terrain"];
        $this->surfaceWater = $data["surface_water"];
        $this->residents = $data["residents"];
        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function get_diameter()
    {
        return $this->diameter;
    }

    /**
     * @return mixed
     */
    public function get_rotation_period()
    {
        return $this->rotationPeriod;
    }

    /**
     * @return mixed
     */
    public function get_orbital_period()
    {
        return $this->orbitalPeriod;
    }

    /**
     * @return mixed
     */
    public function get_gravity()
    {
        return $this->gravity;
    }

    /**
     * @return mixed
     */
    public function get_population()
    {
        return $this->population;
    }

    /**
     * @return mixed
     */
    public function get_climate()
    {
        return $this->climate;
    }

    /**
     * @return mixed
     */
    public function get_terrain()
    {
        return $this->terrain;
    }

    /**
     * @return mixed
     */
    public function get_surface_water()
    {
        return $this->surfaceWater;
    }

    /**
     * @return mixed
     */
    public function get_residents()
    {
        return $this->residents;
    }
}