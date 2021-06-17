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
     * @param $data
     */
    public function __construct($data)
    {
        $this->title = $data["title"];
        $this->episodeId = $data["episode_id"];
        $this->opening = $data["opening_crawl"];
        $this->director = $data["director"];
        $this->producer = $data["producer"];
        $this->releaseDate = $data["release_date"];
        $this->species = $data["species"];
        $this->starships = $data["starships"];
        $this->vehicles = $data["vehicles"];
        $this->characters = $data["characters"];
        $this->planets = $data["planets"];
        parent::__construct($data);
    }


    /**
     * @return mixed
     */
    public function get_title()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function get_episode_id()
    {
        return $this->episodeId;
    }

    /**
     * @return mixed
     */
    public function get_opening_crawl()
    {
        return $this->opening;
    }

    /**
     * @return mixed
     */
    public function get_director()
    {
        return $this->director;
    }

    /**
     * @return mixed
     */
    public function get_producer()
    {
        return $this->producer;
    }

    /**
     * @return mixed
     */
    public function get_release_date()
    {
        return $this->releaseDate;
    }

    /**
     * @return mixed
     */
    public function get_characters()
    {
        return $this->characters;
    }

    /**
     * @return mixed
     */
    public function get_planets()
    {
        return $this->planets;
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

    /**
     * @return mixed
     */
    public function get_species()
    {
        return $this->species;
    }
}