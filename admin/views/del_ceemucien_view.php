<?php
require 'includes/header.php';

$requeteNews = $pdo->prepare("SELECT * FROM carte WHERE id = ?");
$requeteNews-> execute([$_GET['id']]);
$resultatNews = $requeteNews->fetch(PDO::FETCH_OBJ); 


if(!is_numeric($_GET['id'])){
	die('Merci de mettre un ncarte valide');
}


else{
	$requete = $pdo->prepare("DELETE FROM carte WHERE id = ?");

	$requete->execute([$_GET['id']]);
}
	header("Location: ceemucien");


?>