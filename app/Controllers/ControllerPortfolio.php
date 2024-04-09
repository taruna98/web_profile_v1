<?php

namespace Controllers;

use Libraries\Database;

// get file .env
require_once str_replace('\app\Controllers', '', __DIR__) . '/vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(str_replace('\app\Controllers', '', __DIR__));
$dotenv->load();

class ControllerPortfolio
{
    public function __construct()
    {
        // $db             = new Database();
        // $this->mysql    = $db->connect($_ENV['DB_HOST_1'], $_ENV['DB_NAME_1'], $_ENV['DB_USER_1'], $_ENV['DB_PASS_1']);

        $this->baseUrl  = $_ENV['BASE_URL'];
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
        $url    = $_ENV['API_URL'] . 'portfolio/' . $id;

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

        require_once('app/Views/portfolio.php');
    }

    public function detail($id)
    {
        $this->page;
        $this->baseUrl;

        // get data from API
        $curl   = curl_init();
        $url    = $_ENV['API_URL'] . 'portfolio/detail/' . $id;

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

        require_once('app/Views/portfolio-detail.php');
    }
}
