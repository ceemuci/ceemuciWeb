<?php
$title="Reçu d'inscriscription";

include 'includes/head.php';
include 'config/config.php';
$ceemucien1 = $pdo->prepare("SELECT * FROM seminariste WHERE matricule = ?");
$ceemucien1-> execute([$_GET['matricule']]);

$ceemucien = $ceemucien1->fetch();
$matricule=$ceemucien['matricule'];
// var_dump($matricule);
// die();

include 'includes/nav.php';
?>

<div class="page-wrapper p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w680">
        <div class="card">
            <div class="card-header text-center">
                <h4>Votre reçu d'inscription pour SABILOUL ILM 2022 est prêt</h4></div>
            <div class="card-body">
                <div class="panel panel-danger">
                    <div class="panel-heading text-center"><h3> Votre matricule est le <strong class="text-primary"><?=$matricule?></strong></h3> </div><br>
                </div>
                
                <a class="btn btn-success" href="recu_inscription?matricule=<?=$matricule?>">Télécharger votre reçu d'inscription</a>
                <a class="btn btn-primary" href="seminaire">Inscrire une autre personne</a>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="home">Accueil</a>
            </div>
        </div>
    </div>
</div>
