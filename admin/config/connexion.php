<?php 
/*session_start();*/

if (!empty($_POST)) {
    
    $email = htmlspecialchars($_POST['email']);
	$password = md5($_POST['password']);
    
	if (!empty($email) && !empty($password)) {
        $requser = $pdo->prepare("SELECT * FROM admin WHERE email = ? && password = ?");
		$requser->execute(array($email, $password ));
		$userexist = $requser->rowCount();
        
        // var_dump($userexist);
        // die();
        
		if ($userexist == 1) {
			session_start();
			$_SESSION['connecteNemail'] = 1;

			$userinfo = $requser->fetch();
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['email'] = $userinfo['email'];
			$_SESSION['password'] = $userinfo['password'];

			$cookie = setcookie('ceemucien', $_POST['email']);

			require 'admin/function/auth.php';
			if (connectedNemail()) {
				header("Location: admin/home");
				exit();
			}
		}
		else{
			$erreur = "votre numero de email etudiant ou le mot de passe est incorrect";
		}
	}
	else{
		$erreur = "Tous les champs doivent etre remplis";
	}
}
?>