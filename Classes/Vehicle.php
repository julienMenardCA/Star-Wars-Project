<?php

/**
 * Classe des véhicules
 */
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
    protected $length;

    /**
     * Vehicle constructor.
     * @param $data
     * Le json récupéré de l'API
     */
    public function __construct($data)
    {
        $this->model = $data["model"];
        //Pour éviter d'avoir une erreur lorsque que l'on demande les vaisseaux vu qu'elle hérite de cette classe vehicle
        if (array_key_exists("vehicle_class", $data))
        {
            $this->vehicle_class = $data["vehicle_class"];
        }
        $this->manufacturer = $data["manufacturer"];
        $this->costInCredits = $data["cost_in_credits"];
        $this->crew = $data["crew"];
        $this->passengers = $data["passengers"];
        $this->maxAtmospheringSpeed = $data["max_atmosphering_speed"];
        $this->cargoCapacity = $data["cargo_capacity"];
        $this->consumables = $data["consumables"];
        $this->pilots = $data["pilots"];
        $this->length = $data["length"];
        parent::__construct($data);
        // Appel du constructeur de la classe parente
    }

    /**
     * @return mixed
     */
    public function get_model()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function get_vehicle_class()
    {
        return $this->vehicle_class;
    }

    /**
     * @return mixed
     */
    public function get_manufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @return mixed
     */
    public function get_cost_in_credits()
    {
        return $this->costInCredits;
    }

    /**
     * @return mixed
     */
    public function get_crew()
    {
        return $this->crew;
    }

    /**
     * @return mixed
     */
    public function get_passengers()
    {
        return $this->passengers;
    }

    /**
     * @return mixed
     */
    public function get_max_atmosphering_speed()
    {
        return $this->maxAtmospheringSpeed;
    }

    /**
     * @return mixed
     */
    public function get_cargo_capacity()
    {
        return $this->cargoCapacity;
    }

    /**
     * @return mixed
     */
    public function get_consumables()
    {
        return $this->consumables;
    }

    /**
     * @return mixed
     */
    public function get_pilots()
    {
        return $this->pilots;
    }

    /**
     * @return mixed
     */
    public function get_length()
    {
        return $this->length;
    }
}