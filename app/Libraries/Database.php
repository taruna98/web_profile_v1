<?php

namespace Libraries;

use PDO;

class Database
{
  private static $instance = NULL;

  public function __construct()
  { }

  private function __clone()
  { }

  // public static function getInstance()
  // {
  //   if (!isset(self::$instance)) {
  //     // $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
  //     // self::$instance = new PDO('mysql:host=localhost;dbname=esi', 'mncg_1', 'password', $pdo_options);
  //     self::$instance = new PDO('mysql:host=localhost;dbname=esi_redeem', 'mncg_1', 'password');
  //     self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  //   }
  //   return self::$instance;
  // }

  public static function connect($host, $database, $user, $password)
  {
    $charset = 'utf8mb4';
    $opt = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $dsn = "mysql:host=$host;dbname=$database;charset=$charset";
    return new PDO($dsn, $user, $password, $opt);
  }

  // public static function connect()
  // {
  //   $host     = 'localhost';
  //   $database = 'esi';
  //   $username = 'mncg_1';
  //   $password = 'password';
  //   $conn = mysqli_connect($host, $username, $password, $database);
  //   if (!$conn) {
  //     die("connection failed: " . mysqli_connect_error());
  //   }
  // }
}
