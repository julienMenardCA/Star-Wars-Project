<?php


class Common extends API_Info
{
    protected $name;
    protected $films;

    /**
     * Common constructor.
     * @param $name
     * @param $films
     */
    public function __construct($name, $films, $url, $created, $edited)
    {
        $this->name = $name;
        $this->films = $films;
        parent::__construct($url, $created, $edited);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getFilms()
    {
        return $this->films;
    }


}