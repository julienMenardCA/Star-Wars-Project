<?php


class API_Info
{
    protected $url;
    protected $created;
    protected $edited;

    /**
     * API_Info constructor.
     * @param $url
     * @param $created
     * @param $edited
     */
    public function __construct($url, $created, $edited)
    {
        $this->url = $url;
        $this->created = $created;
        $this->edited = $edited;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getEdited()
    {
        return $this->edited;
    }

}