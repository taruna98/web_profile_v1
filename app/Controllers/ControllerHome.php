<?php

namespace Controllers;

use Libraries\Database;

// get file .env
require_once str_replace('\app\Controllers', '', __DIR__) . '/vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(str_replace('\app\Controllers', '', __DIR__));
$dotenv->load();

class ControllerHome
{
    public function __construct()
    {
        $db             = new Database();
        $this->mysql    = $db->connect($_ENV['DB_HOST_1'], $_ENV['DB_NAME_1'], $_ENV['DB_USER_1'], $_ENV['DB_PASS_1']);

        $this->baseUrl  = $_ENV['BASE_URL'];
        $this->url      = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->page     = ltrim(substr($this->url, strlen($this->baseUrl)), "?");
    }

    public function index($id)
    {
        // get data from API
        $curl   = curl_init();
        $url    = $_ENV['API_URL'] . 'profile/' . $id; 

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
            CURLOPT_SSL_VERIFYPEER => false,
        ));

        $response   = curl_exec($curl);
        
        if ($response == null || $response == '[]') {
            header('Location: ' . $_ENV['BASE_URL']);
        }

        if (curl_errno($curl)) {
            echo 'Curl error: ' . curl_error($curl);
            die();
        }
        
        $err        = curl_error($curl);
        curl_close($curl);
        $response   = json_decode($response, true); // because of true, it's in an array

        $response['profile']['hsb'] = str_replace(', ', '|', $response['profile']['hsb']);
        $response['profile']['msk'] = str_replace(', ', '|', $response['profile']['msk']);
        $response['profile']['mtl'] = str_replace(', ', '|', $response['profile']['mtl']);

        require_once('app/Views/index.php');
    }
    
    public function nulls()
    {
        require_once('app/Views/404.php');
    }
}
