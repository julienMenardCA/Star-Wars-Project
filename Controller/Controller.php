<?php

class Controller
{
    public function home(){

        $manager = new Manager();

        if(!empty($_GET['category'])){

            $category = $_GET['category'];

            if(!empty($_GET['page'])){
                $_GET['page'] = intval($_GET['page']);
                $currentPage = $_GET['page'];
            } else {
                $currentPage = 1;
            }

            $result = $manager->getAPI($category, $currentPage);

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

        $item = $manager->getInfosOfItem($category, $id);

        $jsonToObject =  new JsonToObject($item, $category);
        $convertedObject = $jsonToObject->convertToObject();

        $arrOfMethods = get_class_methods($convertedObject);

        $infos = [];
        $arrayKeys = array_keys($item);
        for($i = 0; $i < sizeof($arrayKeys); $i++)
        {
            $methodName = 'get_' . $arrayKeys[$i];
            $infos[] = $convertedObject->$methodName();
        }

        for($i = 0; $i < 3; $i++) {
            array_pop($infos);
        }

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