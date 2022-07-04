<?php 
function connexionNemail(){
	$email = $_SESSION['email'];

	if (isset($email)){
		$requser = $pdo->prepare("SELECT * FROM admin WHERE email = ? && email = ?");
		$requser->execute(array($email));
		$userinfo = $requser->fetch();

	/*var_dump($id);
	die();*/
    }
} ?>