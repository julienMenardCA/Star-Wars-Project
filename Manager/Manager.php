<?php

class Manager
{
    public function getAPI($category, $currentPage){

        $url = "";

        if ($currentPage == 1)
        {
            $url = API_URL  . $category . '/';
        }
        else if ($currentPage > 1)
        {
            $url = API_URL  . $category . '/?page=' . $currentPage;
        }

        return $this->setCurl($url);
    }

    public function getInfosOfItem($category,$id){

        $url = API_URL  . $category . '/' . $id . '/';

        return $this->setCurl($url);
    }

    public function getNameOrTitleByUrl($url){

        $url = substr_replace($url, 's', 4, 0);

        $response = $this->setCurl($url);

        if(isset($response['name'])){
            return $response['name'];
        } else {
            return $response['title'];
        }
    }

    private function setCurl($url){

        $curl = curl_init();

        $opts = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ];

        curl_setopt_array($curl, $opts);

        $response = json_decode(curl_exec($curl), true);
        if ($response === false) {
            throw new Exception(curl_error($curl), curl_errno($curl));
        }
        curl_close($curl);

        return $response;
    }
}