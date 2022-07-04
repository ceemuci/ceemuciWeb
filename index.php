<?php

//definition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
	$page = trim(strtolower($_GET['page']));
}else{
	$page = 'home';
}

//tableau contenant toutes nos pages
$allpages = scandir('controllers/');
if (in_array($page.'_controller.php', $allpages)) {

	//inclusion de la page
	include_once 'models/'.$page.'_model.php';
	include_once 'controllers/'.$page.'_controller.php';
	include_once 'views/'.$page.'_view.php';
}else{
	//retour d'une erreur
	require 'sana';
}

?>