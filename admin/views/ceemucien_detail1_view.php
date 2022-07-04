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

<body>
	<!-- Page Wrapper -->
	<div id="wrapper">

    <!-- Sidebar -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    	<div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        	<div id="content">

            <?php require 'includes/nav_admin.php' ?>

        		<div class="container-fluid">

            		<div class="subhead mt-0 mb-0" style="text-align: center">
           				<h1 class="subhead-heading">Inscription Pédagogique de <?=$ceemucien['nom'] ?> <?=$ceemucien['prenoms'] ?> :</h1>
			        </div>

			        <div class="table-responsive">
			        	
			        	<table class="table table-bordered">
			        		
			        		<thead class="thead-dark">
			        			
			        			<tr>
                      <th>Code UE</th>
			        			</tr>
			        		</thead>
			        		<!--  .thead-dark -->

			        		<tbody>
			        				 <tr>
           								<td>
           									<?=$ceemucien['nom'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['prenoms'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['genre'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['lieu_naissance'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['date_naissance'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['contact'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['commune'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['niveau_etude'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['etablissement'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['coordination'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['poste'] ?>
           								</td>
           							</tr>

           							<tr>
           								<td>
           									<?=$ceemucien['created_at'] ?>
           								</td>
           							</tr>

           							<!-- <tr>
           								<td>
           									<?=$ceemucien['created_at'] ?>
           								</td>
           							</tr> -->
			        		</tbody>
			        	</table>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</body>