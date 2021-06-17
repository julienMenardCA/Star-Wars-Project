<?php


class API_Info
{
    protected $url;
    protected $created;
    protected $edited;

    /**
     * API_Info constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->url = $data["url"];
        $this->created = $data["created"];
        $this->edited = $data["edited"];
    }

    /**
     * @return mixed
     */
    public function get_url()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function get_created()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function get_edited()
    {
        return $this->edited;
    }

}