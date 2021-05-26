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

        $infos = $manager->getInfosOfItem($category, $id);

        //TODO conversion
        $jsonToObject =  new JsonToObject($infos, $category);
        $convertedObject = $jsonToObject->convertToObject();
        dump($convertedObject);

        if (isset($infos['homeworld'])){
            $infos['homeworld']  = $manager->getNameOrTitleByUrl($infos['homeworld']);
        }

        if (isset($infos['films'])){
            for($i = 0; $i < sizeof($infos['films']); $i++) {
                $infos['films'][$i] = $manager->getNameOrTitleByUrl($infos['films'][$i]);
            }
        }
        if (isset($infos['species'])){
            for($i = 0; $i < sizeof($infos['species']); $i++) {
                $infos['species'][$i] = $manager->getNameOrTitleByUrl($infos['species'][$i]);
            }
        }
        if (isset($infos['vehicles'])){
            for($i = 0; $i < sizeof($infos['vehicles']); $i++) {
                $infos['vehicles'][$i] = $manager->getNameOrTitleByUrl($infos['vehicles'][$i]);
            }
        }
        if (isset($infos['starships'])){
            for($i = 0; $i < sizeof($infos['starships']); $i++) {
                $infos['starships'][$i] = $manager->getNameOrTitleByUrl($infos['starships'][$i]);
            }
        }
        if (isset($infos['characters'])){
            for($i = 0; $i < sizeof($infos['characters']); $i++) {
                $infos['characters'][$i] = $manager->getNameOrTitleByUrl($infos['characters'][$i]);
            }
        }
        if (isset($infos['planets'])){
            for($i = 0; $i < sizeof($infos['planets']); $i++) {
                $infos['planets'][$i] = $manager->getNameOrTitleByUrl($infos['planets'][$i]);
            }
        }
        if (isset($infos['residents'])){
            for($i = 0; $i < sizeof($infos['residents']); $i++) {
                $infos['residents'][$i] = $manager->getNameOrTitleByUrl($infos['residents'][$i]);
            }
        }
        if (isset($infos['people'])){
            for($i = 0; $i < sizeof($infos['people']); $i++) {
                $infos['people'][$i] = $manager->getNameOrTitleByUrl($infos['people'][$i]);
            }
        }
        if (isset($infos['pilots'])){
            for($i = 0; $i < sizeof($infos['pilots']); $i++) {
                $infos['pilots'][$i] = $manager->getNameOrTitleByUrl($infos['pilots'][$i]);
            }
        }


        for($i = 0; $i < 3; $i++) {
            array_pop($infos);
        }

        dump($infos);

        include('View/item.php');
    }
}