<?php

/**
 * Bootstrap page
 * Require file autoload dari vendor
 */
require_once __DIR__ . '/vendor/autoload.php';

use Controllers\ControllerHome;
use Controllers\ControllerPortfolio;

/**
 * Buat objek dari kelas Controller
 */
$controllerHome = new ControllerHome();
$controllerPortfolio = new ControllerPortfolio();

$baseUrl	= 'http://localhost/web_profile_v1/';
$url 		= 'http' . (($_SERVER['SERVER_PORT'] == 443) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pageTemp 	= ltrim(substr($url, strlen($baseUrl)), '?');

if (strpos($pageTemp, 'proid') !== false) {
	$page = explode('/', $pageTemp)[0];
	$id = explode('/', $pageTemp)[1];
} else if (strpos($pageTemp, 'porid') !== false) {
	$page = explode('/', $pageTemp)[0];
	$id = explode('/', $pageTemp)[1];
}

// tentukan bagaimana halaman akan di-load
if (empty($page)) {
	// pemanggilan method yang akan di-run
	$controllerHome->index();
} else {
	switch ($page) {
		case 'proid':
			$controllerHome->index($id);
			break;
		case 'porid':
			$controllerPortfolio->index($id);
			break;
		default:
			$controllerHome->index();
			break;
	}
}
