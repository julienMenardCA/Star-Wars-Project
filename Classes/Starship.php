<?php

class Starship extends Vehicle
{
    protected $length;
    protected $MGLT;

    /**
     * Starship constructor.
     * @param $length
     * @param $MGLT
     */
    public function __construct($length, $MGLT, $model, $class, $manufacturer, $costInCredits, $crew, $passengers, $maxAtmospheringSpeed, $cargoCapacity, $consumables, $pilots, $name, $films, $url, $created, $edited)
    {
        $this->length = $length;
        $this->MGLT = $MGLT;
        parent::__construct($model, $class, $manufacturer, $costInCredits, $crew, $passengers, $maxAtmospheringSpeed, $cargoCapacity, $consumables, $pilots, $name, $films, $url, $created, $edited);
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return mixed
     */
    public function getMGLT()
    {
        return $this->MGLT;
    }
}