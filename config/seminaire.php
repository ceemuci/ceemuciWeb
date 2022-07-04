<?php
$x = date("Y/m/d");
$niveau_seminaire= '';
$paiement= 'non';
$message = '';

$requete1 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 1'");
$requete1->execute();
$nbrf1 = $requete1->rowCount();

$requete2 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 2'");
$requete2->execute();
$nbrf2 = $requete2->rowCount();

$requete3 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 3'");
$requete3->execute();
$nbrf3 = $requete3->rowCount();

$requete4 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 4'");
$requete4->execute();
$nbrf4 = $requete4->rowCount();

$requete5 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 5'");
$requete5->execute();
$nbrf5 = $requete5->rowCount();

$requete6 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 6'");
$requete6->execute();
$nbrf6 = $requete6->rowCount();

$requete7 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 7'");
$requete7->execute();
$nbrf7 = $requete7->rowCount();

$requete8 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 8'");
$requete8->execute();
$nbrf8 = $requete8->rowCount();

$requete9 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 9'");
$requete9->execute();
$nbrf9 = $requete9->rowCount();

$requete10 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir frères 10'");
$requete10->execute();
$nbrf10 = $requete10->rowCount();

$requetes1 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 1'");
$requetes1->execute();
$nbrs1 = $requetes1->rowCount();

$requetes2 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 2'");
$requetes2->execute();
$nbrs2 = $requetes2->rowCount();

$requetes3 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 3'");
$requetes3->execute();
$nbrs3 = $requetes3->rowCount();

$requetes4 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 4'");
$requetes4->execute();
$nbrs4 = $requetes4->rowCount();

$requetes5 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 5'");
$requetes5->execute();
$nbrs5 = $requetes5->rowCount();

$requetes6 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 6'");
$requetes6->execute();
$nbrs6 = $requetes6->rowCount();

$requetes7 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 7'");
$requetes7->execute();
$nbrs7 = $requetes7->rowCount();

$requetes8 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 8'");
$requetes8->execute();
$nbrs8 = $requetes8->rowCount();

$requetes9 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 9'");
$requetes9->execute();
$nbrs9 = $requetes9->rowCount();

$requetes10 = $pdo->prepare("SELECT * FROM seminariste WHERE dortoir = 'dortoir soeurs 10'");
$requetes10->execute();
$nbrs10 = $requetes10->rowCount();

if (!empty($_POST)) {

// var_dump($_POST);
// die();

$dortoiref1 = 'dortoir frères 1';
$dortoiref2 = 'dortoir frères 2';
$dortoiref3 = 'dortoir frères 3';
$dortoiref4 = 'dortoir frères 4';
$dortoiref5 = 'dortoir frères 5';
$dortoiref6 = 'dortoir frères 6';
$dortoiref7 = 'dortoir frères 7';
$dortoiref8 = 'dortoir frères 8';
$dortoiref9 = 'dortoir frères 9';
$dortoiref10 = 'dortoir frères 10';

$dortoires1 = 'dortoir soeurs 1';
$dortoires2 = 'dortoir soeurs 2';
$dortoires3 = 'dortoir soeurs 3';
$dortoires4 = 'dortoir soeurs 4';
$dortoires5 = 'dortoir soeurs 5';
$dortoires6 = 'dortoir soeurs 6';
$dortoires7 = 'dortoir soeurs 7';
$dortoires8 = 'dortoir soeurs 8';
$dortoires9 = 'dortoir soeurs 9';
$dortoires10 = 'dortoir soeurs 10';

if ($_POST['genre'] == "Frère") {
    $dortoir = $dortoiref1;
    if ($nbrf1==35) {
        $dortoir = $dortoiref2;
        if ($nbrf2==35) {
            $dortoir = $dortoiref3;
            if ($nbrf3==35) {
                $dortoir = $dortoiref4;
                if ($nbrf4==35) {
                    $dortoir = $dortoiref5;
                    if ($nbrf5==35) {
                        $dortoir = $dortoiref6;
                        if ($nbrf6==35) {
                            $dortoir = $dortoiref7;
                            if ($nbrf6==35) {
                                $dortoir = $dortoiref8;
                                if ($nbrf8==35) {
                                    $dortoir = $dortoiref8;
                                    if ($nbrf9==35) {
                                        $dortoir = $dortoiref9;
                                        if ($nbrf10==35) {
                                            $dortoir = $dortoiref10;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}else{
    $dortoir = $dortoires1;
    if ($nbrs1==35) {
        $dortoir = $dortoires2;
        if ($nbrs2==35) {
            $dortoir = $dortoires3;
            if ($nbrs3==35) {
                $dortoir = $dortoires4;
                if ($nbrs4==35) {
                    $dortoir = $dortoires5;
                    if ($nbrs5==35) {
                        $dortoir = $dortoires6;
                        if ($nbrs6==35) {
                            $dortoir = $dortoires7;
                            if ($nbrs6==35) {
                                $dortoir = $dortoires8;
                                if ($nbrs8==35) {
                                    $dortoir = $dortoires8;
                                    if ($nbrs9==35) {
                                        $dortoir = $dortoires9;
                                        if ($nbrs10==35) {
                                            $dortoir = $dortoires10;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

$erreur = null;
    
    $nom = htmlspecialchars($_POST['nom']);
	$prenoms = htmlspecialchars($_POST['prenoms']);
	$email = htmlspecialchars($_POST['email']);
	$lieu_naissance = htmlspecialchars($_POST['lieu_naissance']);
	$lieu_residence = htmlspecialchars($_POST['lieu_residence']);
	$etablissement = htmlspecialchars($_POST['etablissement']);
	$niveau = htmlspecialchars($_POST['niveau']);
	// $region = htmlspecialchars($_POST['region']);
	$contact = htmlspecialchars($_POST['contact']);
	$contact_parent = htmlspecialchars($_POST['contact_parent']);
	$antecedent_medical = htmlspecialchars($_POST['antecedent_medical']);

    $matricule_nom= str_split($nom,2);
    $matricule_nom= strtolower($matricule_nom[0]);

    $matricule_naissance= str_split($lieu_residence,3);
    $matricule_naissance= strtolower($matricule_naissance[0]);

    $matricule_chiffre= rand(10,100);
    $matricule =$matricule_nom.$matricule_naissance.$matricule_chiffre ;

    // var_dump($matricule);
    // die();

    if (empty($errors)) {
		$requete = $pdo->prepare("INSERT INTO seminariste SET 
			nom = ?,
			prenoms = ?,
			genre = ?,
			date_naissance = ?,
			email = ?,
			lieu_naissance = ?,
			lieu_residence = ?,
			contact = ?,
			contact_parent = ?,
			region = ?,
			niveau_seminaire = ?,
			etablissement = ?,
			membre = ?,
			seminaire = ?,
			date_creation = ?,
			dortoir = ?,
			paiement = ?,
			niveau_scolaire = ?,
			matricule = ?,
			antecedent_medical = ?"
        );

		// envoie des données du formulair a la base de donnée (dans l'ordre)
		$requete->execute([
			$nom, 
			$prenoms,
            $_POST['genre'],
			$_POST['date_naissance'], 
			$email, 
			$lieu_naissance, 
			$lieu_residence, 
			$contact, 
			$contact_parent,
            $_POST['region'], 
			$niveau,
			$etablissement,
			$_POST['membre'],
			$_POST['seminaire'],
			$x,
            $dortoir,
            $paiement,
            $niveau_seminaire,
            $matricule,
			$antecedent_medical
        ]);
        header('Location: recu?nom='.$matricule);
    }

}