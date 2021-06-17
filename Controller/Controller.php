<?php
class Controller
{
    public function home(){

        //On crée une variable de la classe Manager
        $manager = new Manager();

        //On vérifie si le formulaire de choix de catégorie a été soumis
        if(!empty($_GET['category'])){

            //On récupère la catégorie sélectionnée
            $category = $_GET['category'];

            //On détermine la page
            if(!empty($_GET['page'])){
                $_GET['page'] = intval($_GET['page']);
                $currentPage = $_GET['page'];
            } else {
                $currentPage = 1;
            }

            //On va chercher les différents éléments appartenant à la catégorie choisie
            $result = $manager->getAPI($category, $currentPage);

            // On créer une instance de la classe Factory, mais on ne s'en sert pas
            $factory = new Factory($result);

            foreach($result['results'] as $item){
                $urls[] = $item['url'];
            }

            foreach($urls as $url){
                $separatedUrl[] = explode("/",$url);
            }

            foreach($separatedUrl as $separated) {
                $id[] = $separated[5];
            }

            //On détermine le nombre d'items affichés par page et le nombre total de pages
            $sizeOfResult = $result['count'];
            $numberOfPages = ceil($sizeOfResult / 10);

            $tabOfObjects = [];
            for ($i = 0; $i < sizeof($result['results']); $i++)
            {
                $jsonToObject =  new JsonToObject($result['results'][$i], $category);
                $tabOfObjects[] = $jsonToObject->convertToObject();
            }

            $result = $tabOfObjects;
        }

        include('View/home.php');
    }

    public function item(){

        $manager = new Manager();

        $category = $_GET['category'];
        $id = $_GET['id'];

        //On récupère les infos sur un item sélectionné
        $item = $manager->getInfosOfItem($category, $id);

        //On détecte quel objet est concerné
        $jsonToObject =  new JsonToObject($item, $category);
        $convertedObject = $jsonToObject->convertToObject();

        //On récupère toutes les méthodes de l'objet
        $arrOfMethods = get_class_methods($convertedObject);

        $infos = [];
        //On stocke les clés pour les réutiliser plus tard
        $arrayKeys = array_keys($item);

        //On appelle les méthodes une à une dans le même ordre que l'API donne les infos
        for($i = 0; $i < sizeof($arrayKeys); $i++)
        {
            $methodName = 'get_' . $arrayKeys[$i];
            $infos[] = $convertedObject->$methodName();
        }

        //On retire 3 données inutiles
        for($i = 0; $i < 3; $i++) {
            array_pop($infos);
        }

        //Enfin on va remplacer les urls par les titres ou noms des données qui nous intéressent
        for($i = 0; $i < sizeof($infos); $i++){
            if(is_array($infos[$i])){
                for($j = 0; $j < sizeof($infos[$i]); $j++){
                    $infos[$i][$j] = $manager->getNameOrTitleByUrl($infos[$i][$j]);
                }
            } elseif(str_contains($infos[$i], 'swapi.dev')) {
                $infos[$i] = $manager->getNameOrTitleByUrl($infos[$i]);
            }
        }

        include('View/item.php');
    }
}