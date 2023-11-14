<?php

namespace Controllers;

use Libraries\Database;

class ControllerArticle
{
    public function __construct()
    {
        // $db             = new Database();
        // $this->mysql    = $db->connect('localhost', 'api_web_v1', 'root', '');

        $this->baseUrl  = 'http://localhost/web_profile_v1/';
        $this->url      = 'http' . (($_SERVER['SERVER_PORT'] == 443) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->page     = ltrim(substr($this->url, strlen($this->baseUrl)), '?');
    }

    public function index($id)
    {
        $this->page;
        $this->baseUrl;
        $this->proId = $id;

        // get data from API
        $curl   = curl_init();
        $url    = 'http://localhost:8000/article/' . $id;

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'cache-control: no-cache'
            ),
        ));
        $response   = curl_exec($curl);
        $err        = curl_error($curl);
        curl_close($curl);
        $response   = json_decode($response, true);

        require_once('app/Views/article.php');
    }

    public function detail($id)
    {
        $this->page;
        $this->baseUrl;

        // get data from API
        $curl   = curl_init();
        $url    = 'http://localhost:8000/article/detail/' . $id;

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'cache-control: no-cache'
            ),
        ));
        $response   = curl_exec($curl);
        $err        = curl_error($curl);
        curl_close($curl);
        $response   = json_decode($response, true)[0];

        require_once('app/Views/article-detail.php');
    }
}
