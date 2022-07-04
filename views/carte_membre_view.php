<?php
$title="Reçu d'inscriscription";

include 'includes/head.php';
include 'config/config.php';
$ceemucien1 = $pdo->prepare("SELECT * FROM carte WHERE nom = ?");
$ceemucien1-> execute([$_GET['nom']]);

$ceemucien = $ceemucien1->fetch();

$matrsemi= $ceemucien['nom'];
// var_dump($matricule);
// die();

include 'includes/nav.php';
?>

<div class="page-wrapper p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w680">
        <div class="card">
            <div class="card-header text-center">
                <h4>Felicitation <?=$matrsemi?>, Enregistrement effectué avec succès !</h4></div>
            <div class="card-body">                
                <a class="btn btn-primary" href="carte">Inscrire une autre personne</a>
                <a class="btn btn-primary" href="home">Accueil</a>
            </div>
        </div>
    </div>
</div>
