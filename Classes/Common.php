<?php

/**
 * Classe parente à toutes les classes sauf Film
 * Sert pour les données communes à ces classes
 * Hérite de API_Info
 */
class Common extends API_Info
{
    protected $name;
    protected $films;

    /**
     * Common constructor.
     * @param $data
     * Le json récupéré de l'API
     */
    public function __construct($data)
    {
        $this->name = $data["name"];
        $this->films = $data["films"];
        // Appel du constructeur de la classe parente
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