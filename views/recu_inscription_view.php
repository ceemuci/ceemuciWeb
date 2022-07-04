<?php
//ini_set('display_errors', 1);
require('functions/fpdf.php');
include 'config/config.php';
$ceemucien1 = $pdo->prepare("SELECT * FROM seminariste WHERE matricule = ?");
$ceemucien1-> execute([$_GET['matricule']]);
$ceemucien = $ceemucien1->fetch();

class PDF extends FPDF
{
    // En-t�te
    function Header()
    {
        // Logo
        $this->Image('assets/assets/img/ceemuci.png',25,6,30);
        $this->Image('assets/assets/img/armoirie_civ.png',160,6,30);

        //en bas
        $this->Ln(20);
        $this->SetFont('Arial','B',8);
        $this->Cell(0,10,utf8_decode('COMMUNAUTE DES ELEVES ET ETUDIANTS'),0,'L');
        $this->Ln(5);
        $this->Cell(7);
        $this->Cell(10,10,utf8_decode('MUSULMANS DE CÔTE D\'IVOIRE'),0,'L');
        //---------
        $this->Ln(5);
        $this->Cell(5);
        $this->Cell(10,10,'---------------------------------------------------',0,'L');
        //SENASI
        $this->Ln(5);
        $this->Cell(0,10,'SECRETARIAT NATIONNAL EN CHARGE',0,'L');
        $this->Ln(5);
        $this->Cell(7);
        $this->Cell(10,10,'DES SYSTEMES INFORMATIQUE',0,'L');

        //Ministère
        //en bas
        $this->Ln(-18);
        $this->SetFont('Arial','B',8);
        $this->Cell(142);
        $this->Cell(0,10,utf8_decode('REPUBLIQUE DE CÔTE D\'IVOIRE'),0,'L');
        $this->Ln(5);
        $this->Cell(142);
        $this->Cell(10,10,'---------------------------------------------------',0,'L');
        //SENASI
        $this->Ln(5);
        $this->Cell(145);
        $this->Cell(0,10,'UNION-DISCIPLINE-TRAVAIL',0,'L');
        // Saut de ligne
        $this->Ln(20);
    }

    function Body(){
        include 'config/config.php';
        $ceemucien1 = $pdo->prepare("SELECT * FROM seminariste WHERE matricule = ?");
        $ceemucien1-> execute([$_GET['matricule']]);
        $ceemucien = $ceemucien1->fetch();

        // var_dump($ceemucien);
        // die();
        $nomf = "nom=".$ceemucien['nom']."\n";
        $prenomf = "prenom(s)=".$ceemucien['prenoms']."\n";
        $emailf = "email=".$ceemucien['email']."\n";
        $genref = "genre=".$ceemucien['genre']."\n";
        $lieu_residencef = "lieu de residence=".$ceemucien['lieu_residence']."\n";
        $contactf = "contact=".$ceemucien['contact']."\n";
        $contactparentf = "contact=".$ceemucien['contact_parent']."\n";
        $lieuf = "lieu de naissance=".$ceemucien['lieu_naissance']."\n";
        $datef = "date de naissance=".$ceemucien['date_naissance']."\n";
        $niveauscolairef = "niveau scolaire=".$ceemucien['niveau_scolaire']."\n";
        $niveauseminairef = "niveau seminaire=".$ceemucien['niveau_seminaire']."\n";
        $etablissementf = "etablissement=".$ceemucien['etablissement']."\n";
        $regionf = "region=".$ceemucien['region']."\n";
        $antecedentf = "antecedent medicale=".$ceemucien['antecedent_medical']."\n";
        $membref = "membre de la ceemuci =".$ceemucien['membre']."\n";
        $paiementf = "paiement effectué=".$ceemucien['paiement']."\n";
        $dortoirf = "dortoire=".$ceemucien['dortoir']."\n";
        $datecreationf = "date d'enregistrement=".$ceemucien['date_creation']."\n";

        $infos= $nomf."".$prenomf."".$emailf."".$genref."".$lieu_residencef."".$regionf."".$contactf."".$lieuf."".$datef."".$niveauscolairef."".$niveauseminairef."".$etablissementf."".$antecedentf."".$membref."".$paiementf."".$dortoirf."".$datecreationf;

        $this->SetFont('Arial','B',18);
        $titre= 'SABILOUL ILM 2022 (DIVO)';
        // $this->SetDrawColor(0,80,180);
        $this->SetFillColor(85, 170, 0);
        $this->SetTextColor(0,0,0);
        // Epaisseur du cadre (1 mm)
        $this->SetLineWidth(0.5);
        // Titre
        $this->Cell(190,9,$titre,1,1,'C',true);
        // Saut de ligne
        $this->Ln(8);
        $this->SetFont('Arial','',18);
        $this->Cell(60);
        $this->Cell(10,0,'Inscription en ligne',0,'L');
        $this->Ln(5);
        $this->Cell(45);
        $this->Cell(10,8,'Matricule Seminariste: '.$ceemucien['matricule'],0,'L');
        
        //Identité
        $this->Ln(10);
        // $this->SetDrawColor(0,80,180);
        $this->SetFillColor(85, 170, 0);
        $this->SetTextColor(0,0,0);
        // Epaisseur du cadre (1 mm)
        $this->SetLineWidth(0.5);
        $this->Cell(190,9,utf8_decode('Identité'),1,1,'C',true);
        // Saut de ligne
        $this->Ln(8);
        $this->SetFont('Arial','',18);
        $this->Cell(10,5,'Nom: '.utf8_decode($ceemucien['prenoms']),0,'L');
        $this->Ln(10);
        $this->Cell(10,5,utf8_decode('Prénom(s): ').utf8_decode($ceemucien['prenoms']),0,'L');	
        $this->Ln(10);
        $this->Cell(10,5,'Date et Lieu de Naissance: '.utf8_decode($ceemucien['date_naissance']). utf8_decode(' à ') .utf8_decode($ceemucien['lieu_naissance']),0,'L');	
        $this->Ln(10);
        $this->Cell(10,5,'Genre: '.utf8_decode($ceemucien['genre']),0,'L');

        //Contact
        $this->Ln(8);
        // $this->SetDrawColor(0,80,180);
        $this->SetFillColor(85, 170, 0);
        $this->SetTextColor(0,0,0);
        // Epaisseur du cadre (1 mm)
        $this->SetLineWidth(0.5);
        $this->Cell(190,9,'Education',1,1,'C',true);
        // Saut de ligne
        $this->Ln(8);
        $this->SetFont('Arial','',18);
        $this->Cell(10,5,'Contact: '.$ceemucien['contact'],0,'L');
        $this->Ln(10);
        $this->Cell(10,5,utf8_decode('Lieu de résidence: ').utf8_decode($ceemucien['lieu_residence']),0,'L');	
        $this->Ln(10);
        $this->Cell(10,5,'Adress email: '.utf8_decode($ceemucien['email']),0,'L');	
        $this->Ln(10);
        $this->Cell(10,5,'Etablissement: '.utf8_decode($ceemucien['etablissement']),0,'L');	
        $this->Ln(10);
        $this->Cell(10,5,'Niveau scolaire: '.utf8_decode($ceemucien['niveau_scolaire']),0,'L');

        //CEEMUCI
        $this->Ln(8);
        // $this->SetDrawColor(0,80,180);
        $this->SetFillColor(85, 170, 0);
        $this->SetTextColor(0,0,0);
        // Epaisseur du cadre (1 mm)
        $this->SetLineWidth(0.5);
        $this->Cell(190,9,'CEEMUCI',1,1,'C',true);
        // Saut de ligne
        $this->Ln(10);
        $this->SetFont('Arial','',18);
        $this->Cell(10,5,utf8_decode('Etes vous membre de la CEEMUCI: ').$ceemucien['membre'],0,'L');
        $this->Ln(10);
        $this->Cell(10,5,utf8_decode('Avez vous deja participer a l\'un de nos seminaire: ').$ceemucien['seminaire'],0,'L');	
        $this->Ln(10);
        $this->Cell(10,5,utf8_decode('Paiement effectué: '.$ceemucien['paiement']),0,'L');	
        $this->Ln(10);
        $this->Cell(10,5,'Dortoir: '.utf8_decode($ceemucien['dortoir']),0,'L');	

    }

    // Pied de page
    function Footer()
    {
        // Positionnement � 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial','I',8);
        // Num�ro de page
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation de la classe d�riv�e
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Body();
$pdf->Output($ceemucien['nom'].'.pdf', 'D');
?>
