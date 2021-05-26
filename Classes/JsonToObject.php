<?php


class JsonToObject
{
    private $jsonArray;
    private $category;

    /**
     * JsonToObject constructor.
     * @param $jsonArray
     * @param $category
     */
    public function __construct($jsonArray, $category)
    {
        $this->jsonArray = $jsonArray;
        $this->category = $category;
    }

    public function convertToObject()
    {
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
        return new Film($this->jsonArray["title"],
                        $this->jsonArray["episode_id"],
                        $this->jsonArray["opening_crawl"],
                        $this->jsonArray["director"],
                        $this->jsonArray["producer"],
                        $this->jsonArray["release_date"],
                        $this->jsonArray["species"],
                        $this->jsonArray["starships"],
                        $this->jsonArray["vehicles"],
                        $this->jsonArray["characters"],
                        $this->jsonArray["planets"],
                        $this->jsonArray["url"],
                        $this->jsonArray["created"],
                        $this->jsonArray["edited"]
                        );
    }

    private function ObjToPeople(): People
    {
        return new People($this->jsonArray["birth_year"],
                            $this->jsonArray["eye_color"],
                            $this->jsonArray["gender"],
                            $this->jsonArray["hair_color"],
                            $this->jsonArray["height"],
                            $this->jsonArray["mass"],
                            $this->jsonArray["skin_color"],
                            $this->jsonArray["homeworld"],
                            $this->jsonArray["species"],
                            $this->jsonArray["starships"],
                            $this->jsonArray["vehicles"],
                            $this->jsonArray["name"],
                            $this->jsonArray["films"],
                            $this->jsonArray["url"],
                            $this->jsonArray["created"],
                            $this->jsonArray["edited"]
        );
    }

    private function ObjToPlanet(): Planet
    {
        return new Planet($this->jsonArray["diameter"],
                            $this->jsonArray["rotation_period"],
                            $this->jsonArray["orbital_period"],
                            $this->jsonArray["gravity"],
                            $this->jsonArray["population"],
                            $this->jsonArray["climate"],
                            $this->jsonArray["terrain"],
                            $this->jsonArray["surface_water"],
                            $this->jsonArray["residents"],
                            $this->jsonArray["name"],
                            $this->jsonArray["films"],
                            $this->jsonArray["created"],
                            $this->jsonArray["edited"],
                            $this->jsonArray["url"]
        );
    }

    private function ObjToSpecies(): Species
    {
        return new Species($this->jsonArray["classification"],
                            $this->jsonArray["designation"],
                            $this->jsonArray["average_height"],
                            $this->jsonArray["average_lifespan"],
                            $this->jsonArray["eye_colors"],
                            $this->jsonArray["hair_colors"],
                            $this->jsonArray["skin_colors"],
                            $this->jsonArray["language"],
                            $this->jsonArray["homeworld"],
                            $this->jsonArray["people"],
                            $this->jsonArray["name"],
                            $this->jsonArray["films"],
                            $this->jsonArray["created"],
                            $this->jsonArray["edited"],
                            $this->jsonArray["url"]
        );
    }

    private function ObjToVehicle(): Vehicle
    {
        return new Vehicle($this->jsonArray["model"],
                               $this->jsonArray["vehicle_class"],
                               $this->jsonArray["manufacturer"],
                               $this->jsonArray["cost_in_credits"],
                               $this->jsonArray["crew"],
                               $this->jsonArray["passengers"],
                               $this->jsonArray["max_atmosphering_speed"],
                               $this->jsonArray["cargo_capacity"],
                               $this->jsonArray["consumables"],
                               $this->jsonArray["pilots"],
                               $this->jsonArray["name"],
                               $this->jsonArray["films"],
                               $this->jsonArray["url"],
                               $this->jsonArray["created"],
                               $this->jsonArray["edited"]
        );
    }

    private function ObjToStarship(): Starship
    {
        return new Starship($this->jsonArray["length"],
                                $this->jsonArray["MGLT"],
                                $this->jsonArray["model"],
                                $this->jsonArray["starship_class"],
                                $this->jsonArray["manufacturer"],
                                $this->jsonArray["cost_in_credits"],
                                $this->jsonArray["crew"],
                                $this->jsonArray["passengers"],
                                $this->jsonArray["max_atmosphering_speed"],
                                $this->jsonArray["cargo_capacity"],
                                $this->jsonArray["consumables"],
                                $this->jsonArray["pilots"],
                                $this->jsonArray["name"],
                                $this->jsonArray["films"],
                                $this->jsonArray["url"],
                                $this->jsonArray["created"],
                                $this->jsonArray["edited"]
        );
    }
}