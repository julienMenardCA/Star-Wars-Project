<?php

class Manager
{
    public function getAPI($category, $currentPage){

        $curl = curl_init();

        $url = "";

        if ($currentPage == 1)
        {
            $url = API_URL  . $category . '/';
        }
        else if ($currentPage > 1)
        {
            $url = API_URL  . $category . '/?page=' . $currentPage;
        }

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

    public function getInfosOfItem($category,$id){


        $curl = curl_init();

        $url = API_URL  . $category . '/' . $id . '/';

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

    public function getNameOrTitleByUrl($url){

        $curl = curl_init();

        $url = substr_replace($url, 's', 4, 0);

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

        if(isset($response['name'])){
            return $response['name'];
        } else {
            return $response['title'];
        }
    }
}