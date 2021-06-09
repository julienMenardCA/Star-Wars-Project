<?php

class Factory
{

    /**
     * Factory constructor.
     */
    public function __construct($data)
    {
        $Config = include("Config/config.php");

        dump($data["results"][0]);
        dump($Config);

        $type = [];

        for ($i = 0; $i < sizeof($Config); $i++)
        {
            $tempArrayKeys = array_keys($Config);
            for ($j = 0; $j < sizeof($Config[$tempArrayKeys[$i]]); $j++)
            {
                if (array_key_exists($Config[$tempArrayKeys[$i]][$j], $data["results"][0]))
                {
                    $type[] = $tempArrayKeys[$i];
                    // TODO verif avec nombre d'elems vrai
                }
            }
        }

        dump($type);
    }
}