<?php

class Film extends API_Info
{
    protected $title;
    protected $episodeId;
    protected $opening;
    protected $director;
    protected $producer;
    protected $releaseDate;
    protected $species;
    protected $starships;
    protected $vehicles;
    protected $characters;
    protected $planets;

    /**
     * Film constructor.
     * @param $title
     * @param $episodeId
     * @param $opening
     * @param $director
     * @param $producer
     * @param $releaseDate
     * @param $species
     * @param $starships
     * @param $vehicles
     * @param $characters
     * @param $planets
     */
    public function __construct($title, $episodeId, $opening, $director, $producer, $releaseDate, $species, $starships, $vehicles, $characters, $planets, $url, $created, $edited)
    {
        $this->title = $title;
        $this->episodeId = $episodeId;
        $this->opening = $opening;
        $this->director = $director;
        $this->producer = $producer;
        $this->releaseDate = $releaseDate;
        $this->species = $species;
        $this->starships = $starships;
        $this->vehicles = $vehicles;
        $this->characters = $characters;
        $this->planets = $planets;
        parent::__construct($url, $created, $edited);
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getEpisodeId()
    {
        return $this->episodeId;
    }

    /**
     * @return mixed
     */
    public function getOpening()
    {
        return $this->opening;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @return mixed
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @return mixed
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @return mixed
     */
    public function getStarships()
    {
        return $this->starships;
    }

    /**
     * @return mixed
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * @return mixed
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * @return mixed
     */
    public function getPlanets()
    {
        return $this->planets;
    }
}