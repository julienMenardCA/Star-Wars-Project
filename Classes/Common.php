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
    public function __construct($data)
    {
        $this->name = $data["name"];
        $this->films = $data["films"];
        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function get_films()
    {
        return $this->films;
    }


}