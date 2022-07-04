<?php
	//fonction pour verifier si l'admin est connecte 
function connectedNemail (): bool{
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	return !empty($_SESSION['connecteNemail']);
}

function connexion_forced ():void  {
	if (!connectedNemail()) {
		session_destroy();
		header('Location: ../login.php');

	}
}
?>