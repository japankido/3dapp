<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI =$_SERVER['REQUEST_URI'];
$pageURI =parse_url($pageURI, PHP_URL_QUERY);;
	if (!$pageURI)
		new Controller('home');
	else
		new Controller($pageURI);
?>
