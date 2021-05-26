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
     * @param $classification
     * @param $designation
     * @param $averageHeight
     * @param $averageLifespan
     * @param $eyeColors
     * @param $hairColors
     * @param $skinColors
     * @param $language
     * @param $homeWorld
     * @param $people
     */
    public function __construct($classification, $designation, $averageHeight, $averageLifespan, $eyeColors, $hairColors, $skinColors, $language, $homeWorld, $people, $name, $films, $url, $created, $edited)
    {
        $this->classification = $classification;
        $this->designation = $designation;
        $this->averageHeight = $averageHeight;
        $this->averageLifespan = $averageLifespan;
        $this->eyeColors = $eyeColors;
        $this->hairColors = $hairColors;
        $this->skinColors = $skinColors;
        $this->language = $language;
        $this->homeWorld = $homeWorld;
        $this->people = $people;
        parent::__construct($name, $films, $url, $created, $edited);
    }

    /**
     * @return mixed
     */

    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @return mixed
     */
    public function getAverageHeight()
    {
        return $this->averageHeight;
    }

    /**
     * @return mixed
     */
    public function getAverageLifespan()
    {
        return $this->averageLifespan;
    }

    /**
     * @return mixed
     */
    public function getEyeColors()
    {
        return $this->eyeColors;
    }

    /**
     * @return mixed
     */
    public function getHairColors()
    {
        return $this->hairColors;
    }

    /**
     * @return mixed
     */
    public function getSkinColors()
    {
        return $this->skinColors;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
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
    public function getPeople()
    {
        return $this->people;
    }
}