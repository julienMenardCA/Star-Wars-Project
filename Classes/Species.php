<?php

class Species extends Common
{
    protected $classification;
    protected $designation;
    protected $averageHeight;
    protected $averageLifespan;
    protected $eyeColors;
    protected $hairColors;
    protected $skinColors;
    protected $language;
    protected $homeWorld;
    protected $people;

    /**
     * Species constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->classification = $data["classification"];
        $this->designation = $data["designation"];
        $this->averageHeight = $data["average_height"];
        $this->averageLifespan = $data["average_lifespan"];
        $this->eyeColors = $data["eye_colors"];
        $this->hairColors = $data["hair_colors"];
        $this->skinColors = $data["skin_colors"];
        $this->language = $data["language"];
        $this->homeWorld = $data["homeworld"];
        $this->people = $data["people"];
        parent::__construct($data);
    }

    /**
     * @return mixed
     */

    public function get_classification()
    {
        return $this->classification;
    }

    /**
     * @return mixed
     */
    public function get_designation()
    {
        return $this->designation;
    }

    /**
     * @return mixed
     */
    public function get_average_height()
    {
        return $this->averageHeight;
    }

    /**
     * @return mixed
     */
    public function get_average_lifespan()
    {
        return $this->averageLifespan;
    }

    /**
     * @return mixed
     */
    public function get_eye_colors()
    {
        return $this->eyeColors;
    }

    /**
     * @return mixed
     */
    public function get_hair_colors()
    {
        return $this->hairColors;
    }

    /**
     * @return mixed
     */
    public function get_skin_colors()
    {
        return $this->skinColors;
    }

    /**
     * @return mixed
     */
    public function get_language()
    {
        return $this->language;
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
    public function get_people()
    {
        return $this->people;
    }
}