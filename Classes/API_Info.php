<?php

/**
 * Classe parente de toutes les autres classes
 * Sert pour les donner que l'on trouve partout
 */
class API_Info
{
    protected $url;
    protected $created;
    protected $edited;

    /**
     * API_Info constructor.
     * @param $data
     * Le json récupéré de l'API
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