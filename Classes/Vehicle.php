<?php


class Vehicle extends Common
{
    protected $model;
    protected $vehicle_class;
    protected $manufacturer;
    protected $costInCredits ;
    protected $crew;
    protected $passengers;
    protected $maxAtmospheringSpeed;
    protected $cargoCapacity;
    protected $consumables;
    protected $pilots;

    /**
     * Vehicle constructor.
     * @param $model
     * @param $vehicle_class
     * @param $manufacturer
     * @param $costInCredits
     * @param $crew
     * @param $passengers
     * @param $maxAtmospheringSpeed
     * @param $cargoCapacity
     * @param $consumables
     * @param $pilots
     */
    public function __construct($model, $class, $manufacturer, $costInCredits, $crew, $passengers, $maxAtmospheringSpeed, $cargoCapacity, $consumables, $pilots, $name, $films, $url, $created, $edited)
    {
        $this->model = $model;
        $this->vehicle_class = $class;
        $this->manufacturer = $manufacturer;
        $this->costInCredits = $costInCredits;
        $this->crew = $crew;
        $this->passengers = $passengers;
        $this->maxAtmospheringSpeed = $maxAtmospheringSpeed;
        $this->cargoCapacity = $cargoCapacity;
        $this->consumables = $consumables;
        $this->pilots = $pilots;
        parent::__construct($name, $films, $url, $created, $edited);
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getVehicleClass()
    {
        return $this->vehicle_class;
    }

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @return mixed
     */
    public function getCostInCredits()
    {
        return $this->costInCredits;
    }

    /**
     * @return mixed
     */
    public function getCrew()
    {
        return $this->crew;
    }

    /**
     * @return mixed
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * @return mixed
     */
    public function getMaxAtmospheringSpeed()
    {
        return $this->maxAtmospheringSpeed;
    }

    /**
     * @return mixed
     */
    public function getCargoCapacity()
    {
        return $this->cargoCapacity;
    }

    /**
     * @return mixed
     */
    public function getConsumables()
    {
        return $this->consumables;
    }

    /**
     * @return mixed
     */
    public function getPilots()
    {
        return $this->pilots;
    }
}