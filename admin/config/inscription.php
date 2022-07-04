<?php
$x = date("Y/m/d");

$erreur = null;

if (!empty($_POST)) {
    $nom = htmlspecialchars($_POST['nom']);
	$prenoms = htmlspecialchars($_POST['prenoms']);
	$contact = htmlspecialchars($_POST['contact']);
	$email = htmlspecialchars($_POST['email']);
	$poste = htmlspecialchars($_POST['poste']);
    $password = md5($_POST['password']);

    // var_dump($_POST);
    // var_dump($password);
    // die();
    //Insertion dans la base de donné
	if (empty($errors)) {
		$requete = $pdo->prepare("INSERT INTO admin SET 
			nom = ?,
			prenoms = ?,
			contact = ?,
			genre = ?,
			email = ?,
			poste = ?,
            create_at = ?,
			password = ?;");

		// envoie des données du formulaire a la base de donnée (dans l'ordre)
		$requete->execute([
			$nom, 
			$prenoms, 
			$contact,
			$_POST['genre'],
			$email, 
			$poste,
			$x,
			$password
		]);


            header("Location: login.php");
		};
}