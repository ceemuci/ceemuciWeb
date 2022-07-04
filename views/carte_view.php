<?php
$title="Carte de membre";

include 'includes/head.php';
include 'config/recuperation.php';

include 'includes/nav.php';
?>


  <div class="container box">
    <h2 class="text-center">Enregistrement Carte de Membre CEEMUCI</h2><br />
        <?php
            echo $message;
        ?>

    <form method="post" id="register_form" enctype="multipart/form-data">
       <ul class="nav nav-tabs">
           <li class="nav-item"><a class="nav-link active_tab1" style="border: 1px solid #ccc" id="list_identite">Identite</a></li>
           
           <li class="nav-item"><a class="nav-link inactive_tab1" style="border: 1px solid #ccc" id="list_etude">Etude</a></li>
               
           <li class="nav-item"><a class="nav-link inactive_tab1" style="border: 1px solid #ccc" id="list_ceemuci">Ceemuci</a></li>

           <li class="nav-item"><a class="nav-link inactive_tab1" style="border: 1px solid #ccc" id="list_photo">Photo</a></li>
           </li>
       </ul>

       <div class="tab-content" style="margin-top:10px">
            <div class="tab-pane active" id="identite"> 
                <div class="panel panel-default">
                    <div class="card-header text-center"><h3> Identité </h3></div>
                    <div class="panel-body">
                        <div class="form-group">
                            <br><label>Nom:</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                            <span id="error_nom" class="text-danger">Veuillez entrez votre Nom de famille</span>
                        </div>

                        <div class="form-group">
                            <br><label>Prénoms:</label>
                            <input type="text" name="prenoms" id="prenoms" class="form-control">
                            <span id="error_prenoms" class="text-danger">Veuillez entrez votre ou vos Prenom(s)</span>
                        </div>

                        <div class="form-group">
                            <br><label>Date de naissance:</label>
                            <input type="date" name="date_naissance" id="date_naissance" class="form-control" require>
                            <span id="error_date_naissance" class="text-danger">Entrez votre date de naissance</span>
                        </div>

                        <div class="form-group">
                            <br><label>Lieu de naissance:</label>
                            <input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control">
                            <span id="error_lieu_naissance" class="text-danger">Veuillez entrez votre lieu de naissance</span>
                        </div>

                        <br><div class="form-group">
                            <label for="genre">Genre:</label>
                            <label class="radio-inline">
                                <input type="radio" class="custom-control-input" name="genre" value="Frere" checked /> Frère
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="custom-control-input"  name="genre" value="Soeur" /> Soeur
                            </label>
                        </div>

                        <div class="text-center">
                            <button type="button" name="btn_identite_details" id="btn_identite_details" class="btn btn-info btn-lg">Suivant</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="etude">
                <div class="panel panel-default">
                <div class="card-header text-center"><h3> Etude </h3></div>
                    <div class="panel-body">

                        <div class="form-group">
                            <br><label for="contact">Contact:</label>
                            <input class="form-control" type="tel" name="contact" id="contact">
                            <span id="error_contact" class="text-danger">Veuillez entrez votre Contact</span>
                        </div>
                        
                        <div class="form-group">
                            <br><label for="contact">email:</label>
                            <input class="form-control" type="email" name="email" id="email">
                            <span id="error_email" class="text-danger">Veuillez entrez votre adress email</span>
                        </div>

                        <div class="form-group">
                            <br><label for="commune">Commune de residence:</label>
                            <input class="form-control" type="text" name="commune" id="commune" require="required">
                            <span id="error_commune" class="text-danger">Veuillez entrez votre lieu de residence</span>
                        </div>

                        <div class="form-group">
                            <br><label for="etablissement">Etablissement:</label>
                            <input class="form-control" type="text" name="etablissement" id="etablissement" require="required">
                            <span id="error_etablissement" class="text-danger">Veuillez entrez votre Etablissement</span>
                        </div>
                        
                        <div class="form-group">
                            <br><label for="niveau">Niveau:</label>
                            <input class="form-control" type="text" name="niveau" id="niveau" require="required">
                            <span id="error_niveau" class="text-danger">Veuillez entrez votre niveau d'Etude</span>
                        </div>

                        
                        <div class="text-center">
                            <button type="button" name="previous_btn_etude" id="previous_btn_etude" class="btn btn-default btn-lg">Retour</button>
                            <button type="button" name="btn_etude_details" id="btn_etude_details" class="btn btn-info btn-lg">Suivant</button>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="tab-pane" id="ceemuci">
                <div class="panel panel-default">
                <div class="card-header text-center"><h3> CEEMUCI </h3></div>
                    <div class="panel-body">

                        <div class="form-group">
                            <br><label for="coordination">Coordination:</label>
                            <select class="form-control" name="coordination" id="">
                                <option value="">Je ne suis pas dans une Coordination</option>
                                <optgroup label="BEN">
                                    <option value="BEN">BEN</option>
                                </optgroup>
                                <optgroup label="COORDINATION REGIONNAL">
                                    <option value="GBEKE">GBEKE</option>
                                    <option value="TCHOLOGO">TCHOLOGO</option>
                                    <option value="TONKPI">TONKPI</option>
                                    <option value="LOH DJIBOUA">LOH DJIBOUA</option>
                                    <option value="GOH">GOH</option>
                                    <option value="PORO">PORO</option>
                                    <option value="HAUT SASSANDRA">HAUT SASSANDRA</option>
                                    <option value="GONTOUGO">GONTOUGO</option>
                                    <option value="WORODOUGOU">WORODOUGOU</option>
                                    <option value="BELIER">BELIER</option>
                                </optgroup>
            
                                <optgroup label="COORDINATION DES SECTION UNIVERSITAIRE">
                                    <option value="UFHB">UFHB</option>
                                    <option value="UAO">UAO</option>
                                    <option value="UPGC">UPGC</option>
                                    <option value="UJLOG">UJLOG</option>
                                    <option value="UMAN">UMAN</option>
                                </optgroup>

                            </select>
                            <li><span id="error_coordination" class="text-danger">Si vous êtes du BEN et dans le bureau d'une COORDINATION, <strong class="text-danger"> vous devez selectionner le BEN </strong></span></li>
                            <li><span id="error_coordination" class="text-danger">Si vous êtes dans une COORDINATION et dans une section, <strong class="text-danger"> vous devez selectionner la COORDINATION </strong></span></li>
                            <li><span id="error_coordination" class="text-danger">Si vous êtes dans une deux (2) COORDINATIONS, <strong class="text-danger"> vous devez selectionner la COORDINATION superieur </strong></span></li>

                        </div>
                    
                        <div class="form-group">
                            <br><label for="section">Section:</label>
                            <input class="form-control" type="text" name="section" id="section">
                            <li><span id="error_section" class="text-danger">Ne remplir que si vous êtes seulement dans une section</span></li>
                            <li><span id="error_section" class="text-danger">Si vous êtes du BEN ou d'une COORDINATION vous ne devez pas remplir ce champ</span></li>
                        </div>
            
                        <div class="form-group">
                            <br><label for="poste">Poste:</label>
                            <input type="text" class="form-control" name="poste" id="poste">
                            <span id="error_poste" class="text-danger">Ecrivez l'acronyme de votre poste selon les textes du CONGRES</span>
                        </div><br>            
                        
                        <div class="text-center">
                            <button type="button" name="previous_btn_ceemuci" id="previous_btn_ceemuci" class="btn btn-default btn-lg">Retour</button>
                            <button type="button" name="btn_ceemuci_details" id="btn_ceemuci_details" class="btn btn-info btn-lg">Suivant</button>
                        </div>
                    </div>
                </div>     
            </div>

            <div class="tab-pane" id="photo">
                <div class="panel panel-default">
                <div class="card-header text-center"><h3> Photo </h3></div>
                    <div class="panel-body">
                        <div class="form-group">
                            <br><label for="photo">Photo d'identité:</label>
                            <input class="form-control" type="file" name="photoc" id="photoc" require>
                            <span id="error_photoc" class="text-danger"><strong class="text-danger"> Votre photo doit être lisible </strong></span>
                            <span id="error_photoc" class="text-danger"> <strong class="text-danger"> Votre photo petut être dans les format suivants: .jpeg, .JPEG, .jpg, .JPG </strong></span>
                            <span id="error_photoc" class="text-danger"><strong class="text-danger"> La taille de votre photo ne doit pas depasser 2Mo </strong></span>
                        </div>
                    </div>
                    
                    <br />
                    <div class="text-center">
                        <button type="button" name="previous_btn_photo" id="previous_btn_photo" class="btn btn-default btn-lg">Retour</button>
                        <input type="submit" name="btn_photo_details" id="btn_photo_details" class="btn btn-success btn-lg" value="Enregistrer">
                    </div>
                </div>
            </div>
       </div> 
    </form>
  </div>


<?php
    include 'includes/footer.php';
?>