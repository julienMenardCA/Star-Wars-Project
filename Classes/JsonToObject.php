<?php

/**
 * Classe pour passer le json de l'API en objet
 */
class JsonToObject
{
    private $jsonArray;
    private $category;

    /**
     * JsonToObject constructor.
     * @param $jsonArray
     * Le json récupéré de l'API
     * @param $category
     * La catégorie
     */
    public function __construct($jsonArray, $category)
    {
        $this->jsonArray = $jsonArray;
        $this->category = $category;
    }

    public function convertToObject()
    {
        // Dépendant de la catégorie, appel la classe qu'il faut
        switch ($this->category)
        {
            case "films":
                return $this->ObjToFilm();
            case "people":
                return $this->ObjToPeople();
            case "planets":
                return $this->ObjToPlanet();
            case "species":
                return $this->ObjToSpecies();
            case "vehicles":
                return $this->ObjToVehicle();
            case "starships":
                return $this->ObjToStarship();
            default:
                echo "Catégorie Inconnue";
                break;
        }
    }

    private function ObjToFilm(): Film
    {
        return new Film($this->jsonArray);
    }

    private function ObjToPeople(): People
    {
        return new People($this->jsonArray);
    }

    private function ObjToPlanet(): Planet
    {
        return new Planet($this->jsonArray);
    }

    private function ObjToSpecies(): Species
    {
        return new Species($this->jsonArray);
    }

    private function ObjToVehicle(): Vehicle
    {
        return new Vehicle($this->jsonArray);
    }

    private function ObjToStarship(): Starship
    {
        return new Starship($this->jsonArray);
    }
}