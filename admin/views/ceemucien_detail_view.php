<?php

require 'includes/header.php';

$requeteEtudiants = $pdo->prepare("SELECT * FROM carte WHERE id = ?");
$requeteEtudiants-> execute([$_GET['id']]);

$ceemucien = $requeteEtudiants->fetch();

if(!is_numeric($_GET['id'])){
	die('Merci de mettre un id valable');
}


/*$requete = $pdo->prepare("SELECT * FROM etudiants_licence1, inscription_pedagogique_l1 WHERE etudiants_licence1.carte = inscription_pedagogique_l1.carte");
$requete->execute();

$ips = $requete->fetch();

var_dump($ceemucien['carte']);
die();
*/
?>

<body class="hold-transition sidebar-mini">
    <?php
        require 'includes/navbar.php';
    ?>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-6 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <a href="<?="../".$ceemucien['photo_identite']?>" download>
                            <img class="rounded-circle mt-5" width="150px" src="<?="../".$ceemucien['photo_identite']?>">
                        </a>
                        <span class="font-weight-bold"><?=$ceemucien['nom'] ?> <?=$ceemucien['prenoms'] ?></span>
                        <span class="text-black-50"><?=$ceemucien['email'] ?></span>
                        <span> </span>
                    </div>
                </div>
                <div class="col-md-6 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-center">Detail sur les Informations de <strong><?=$ceemucien['nom'] ?> <?=$ceemucien['prenoms'] ?> </strong>:</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="">Nom:</label><div><?=$ceemucien['nom']?></div></div>
                            <div class="col-md-6"><label class="">Prenoms:</label><div><?=$ceemucien['prenoms']?></div></div>
                            <div class="col-md-6"><label class="labels">Lieu de Naissance:</label><div><?=$ceemucien['lieu_naissance']?></div></div>
                            <div class="col-md-6"><label class="labels">Date de Naissance:</label><div><?=$ceemucien['date_naissance']?></div></div>
                            <div class="col-md-6"><label class="labels">Commune:</label><div><?=$ceemucien['commune']?></div></div>
                            <div class="col-md-6"><label class="labels">Contact:</label><div><?=$ceemucien['contact']?></div></div>
                            <div class="col-md-6"><label class="labels">Email:</label><div><?=$ceemucien['email']?></div></div>
                            <div class="col-md-6"><label class="labels">Niveau Scolaire:</label><div><?=$ceemucien['niveau_etude']?></div></div>
                            <div class="col-md-6"><label class="labels">Etablissement:</label><div><?=$ceemucien['etablissement']?></div></div>
                            <div class="col-md-6"><label class="labels">Coordination:</label><div><?=$ceemucien['coordination']?></div></div>
                            <div class="col-md-6"><label class="labels">Section:</label><div><?=$ceemucien['section']?></div></div>
                            <div class="col-md-6"><label class="labels">Poste:</label><div><?=$ceemucien['poste']?></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
   <?php
     require 'includes/footer.php';
    ?>

