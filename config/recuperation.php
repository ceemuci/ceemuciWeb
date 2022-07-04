<?php
$x = date("Y/m/d");
$message = '';

$erreur = null;

if (!empty($_POST)) {

    $nom = htmlspecialchars($_POST['nom']);
	$prenoms = htmlspecialchars($_POST['prenoms']);
	$email = htmlspecialchars($_POST['email']);
	$lieu_naissance = htmlspecialchars($_POST['lieu_naissance']);
	$commune = htmlspecialchars($_POST['commune']);
	$etablissement = htmlspecialchars($_POST['etablissement']);
	$niveau = htmlspecialchars($_POST['niveau']);
	$coordination = htmlspecialchars($_POST['coordination']);
	$poste = htmlspecialchars($_POST['poste']);
	$section = htmlspecialchars($_POST['section']);

    if(isset($_FILES)){
        $photo_identiteNom = $_FILES['photoc']['name'];
        $photo_extension = strrchr($photo_identiteNom,".");
        $imagIdentite_tmp_name = $_FILES['photoc']['tmp_name'];
        $imagIdentite_dest = './upload/'.$photo_identiteNom;
        
        $extension_autorisees = array('.jpg', ('.JPG'), ('.jpeg'), ('.JPEG'));
        
        $photo_erreur = $_FILES['photoc']['error'];
        if ($photo_erreur == 0) {
            if (in_array($photo_extension, $extension_autorisees)) {
                if (($_FILES["photoc"]["size"] < 2000000)) {	
                    // Validate image file size
                    if (move_uploaded_file($imagIdentite_tmp_name, $imagIdentite_dest)) {
                        $photoinsert = $pdo->prepare("INSERT INTO carte SET 
                            nom = ?, 
                            prenoms = ?, 
                            email = ?, 
                            date_naissance = ?, 
                            lieu_naissance = ?, commune = ?, genre = ?, 
                            contact = ?,  
                            etablissement = ?, 
                            niveau_etude =?, 
                            poste = ?, 
                            coordination = ?, 
                            section = ?, 
                            photo_identite = ?, 
                            created_at = ?");
                        
                        $photoinsert->execute(array(
                            $nom, 
                            $prenoms, 
                            $email, 
                            $_POST['date_naissance'], 
                            $lieu_naissance, 
                            $commune, 
                            $_POST['genre'], 
                            $_POST['contact'], 
                            $etablissement, 
                            $niveau, 
                            $poste, 
                            $coordination, 
                            $section, 
                            $imagIdentite_dest , 
                            $x
                        ));
                        header('Location: carte_membre?nom='.$nom);
                        $message = '<div class="alert alert-success text-center">Enregistrement effectué avec succès!"</div>';
                        
                    }
                        // var_dump($imagIdentite_dest);
                        // die();
                }else{
					$erreur = "la taille de votre photo depasse 2Mo";
				}
            }else{
				$erreur = "seul les photos sont autorisée et non les images et autres";
			}
          
        }
    }
}