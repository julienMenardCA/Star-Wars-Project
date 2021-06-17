<?php

class Starship extends Vehicle
{
    protected $length;
    protected $MGLT;

    /**
     * Starship constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->length = $data["length"];
        $this->MGLT = $data["MGLT"];
        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function get_length()
    {
        return $this->length;
    }

    /**
     * @return mixed
     */
    public function get_MGLT()
    {
        return $this->MGLT;
    }
}