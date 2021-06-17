<?php

class Starship extends Vehicle
{
    protected $MGLT;
    protected $hyperdriveRating;
    protected $starshipClass;

    /**
     * Starship constructor.
     * @param $data
     * Le json récupéré de l'API
     */
    public function __construct($data)
    {
        $this->MGLT = $data["MGLT"];
        $this->hyperdriveRating = $data["hyperdrive_rating"];
        $this->starshipClass = $data["starship_class"];
        // Appel du constructeur de la classe parente
        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function get_MGLT()
    {
        return $this->MGLT;
    }

    /**
     * @return mixed
     */
    public function get_hyperdrive_rating()
    {
        return $this->hyperdriveRating;
    }

    /**
     * @return mixed
     */
    public function get_starship_class()
    {
        return $this->starshipClass;
    }
}