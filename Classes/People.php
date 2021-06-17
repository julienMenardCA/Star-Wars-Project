<?php

/**
 * Class pour les personnages
 */
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
     * @param $data
     * Le json récupéré de l'API
     */
    public function __construct($data)
    {
        $this->birthYear = $data["birth_year"];
        $this->eyeColor = $data["eye_color"];
        $this->gender = $data["gender"];
        $this->hairColor = $data["hair_color"];
        $this->height = $data["height"];
        $this->mass = $data["mass"];
        $this->skinColor = $data["skin_color"];
        $this->homeWorld = $data["homeworld"];
        $this->species = $data["species"];
        $this->starships = $data["starships"];
        $this->vehicles = $data["vehicles"];
        // Appel du constructeur de la classe parente
        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function get_birth_year()
    {
        return $this->birthYear;
    }

    /**
     * @return mixed
     */
    public function get_eye_Color()
    {
        return $this->eyeColor;
    }

    /**
     * @return mixed
     */
    public function get_gender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function get_hair_color()
    {
        return $this->hairColor;
    }

    /**
     * @return mixed
     */
    public function get_height()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function get_mass()
    {
        return $this->mass;
    }

    /**
     * @return mixed
     */
    public function get_skin_color()
    {
        return $this->skinColor;
    }

    /**
     * @return mixed
     */
    public function get_homeworld()
    {
        return $this->homeWorld;
    }

    /**
     * @return mixed
     */
    public function get_species()
    {
        return $this->species;
    }

    /**
     * @return mixed
     */
    public function get_starships()
    {
        return $this->starships;
    }

    /**
     * @return mixed
     */
    public function get_vehicles()
    {
        return $this->vehicles;
    }
}