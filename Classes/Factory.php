<?php

class Factory
{

    /**
     * Factory constructor.
     */
    public function __construct($data)
    {
        // On récupère le tableau contenu dans le fichier Config/config.php
        $Config = include("Config/config.php");

        dump($data["results"][0]);
        dump($Config);

        // Tableau servant à contenir tous les types ayant une correspondence avec le type de l'élément récupéré via l'API
        $types = [];

        // Pour la totalité de la taille $Config
        for ($i = 0; $i < sizeof($Config); $i++)
        {
            // On créer un tableau temporaire des noms des clefs de $Config
            $tempArrayKeys = array_keys($Config);
            // On créer une variable pour contenir le nombre d'éléments donc l'existence est vérifiée
            $nbrOfTrueElements = 0;
            // Pour la totalité des clefs dans les éléments du tableau $Config
            // Ici on utilise $tempArrayKeys pour pointer sur le bon élément car on ne pas utiliser d'index sur
            // un tableau associatif comme $Config
            for ($j = 0; $j < sizeof($Config[$tempArrayKeys[$i]]); $j++)
            {
                // Si dans le tableau de donnée $data il y a correspondence avec la clef actuelle $j de l'élément $i
                // du tableau de $Config
                if (array_key_exists($Config[$tempArrayKeys[$i]][$j], $data["results"][0]))
                {
                    // On incrémente $nbrOfTrueElements par 1
                    $nbrOfTrueElements += 1;
                }
                //Sinon
                else
                {
                    // On casse la boucle actuelle et on passe à l'élément suivant
                    break;
                }
            }
            // Si $nbrOfTrueElements est égal à la taille du tableau de l'élément actuel
            if ($nbrOfTrueElements === sizeof($Config[$tempArrayKeys[$i]]))
            {
                // Si le type actuel que l'on veut ajouter n'est pas déjà présent dans le $types
                if (!in_array($tempArrayKeys[$i], $types))
                {
                    // Pour la particularité où le type que l'on veut rajouter est 'Starship', on rajoute en avance
                    // le type 'Vehicles'. Une manière un peut brute force d'ajouter le type hériter par 'Starship'
                    // Cela est du à la présence de 'vehicle_class' dans les attributs qui ne correspond à rien dans
                    // 'Starship', ce qui renvoie un faux négatif
                    if ($tempArrayKeys[$i] === 'Starship')
                    {
                        $types[] = 'Vehicles';
                    }
                    // On ajoute le type actuel dans le tableau
                    $types[] = $tempArrayKeys[$i];
                }
            }
        }

        dump($types);
    }
}