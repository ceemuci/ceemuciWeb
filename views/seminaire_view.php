<?php
$title="Seminaire";

include 'includes/head.php';
include 'config/seminaire.php';

include 'includes/nav.php';
?>
    <div class="page-wrapper p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h4 class="title">SEMINAIRE ISLAMIQUE (SABILOUL ILM) 2022 <br> <strong>(DIVO)</strong></h4>
                    <form method="POST">
                        <div class="input-group col-6">
                            <input class="input--style-1" type="text" placeholder="Nom*" required name="nom">
                        </div>
                        
                        <div class="input-group col-md-6">
                            <input class="input--style-1" type="text" placeholder="Prénom(s)*" required name="prenoms">
                        </div>
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="date" name="date_naissance">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="genre">
                                            <label for="">Vous êtes ?*</label>
                                            <option>Frère</option>
                                            <option>Soeur</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group col-md-6">
                            <input class="input--style-1" type="text" placeholder="Lieu de Naissance*" required name="lieu_naissance">
                        </div>

                        <div class="input-group col-md-6">
                            <input class="input--style-1" type="text" placeholder="Lieu de Residence*" required name="lieu_residence">
                        </div>

                        <div class="input-group col-md-6">
                            <input class="input--style-1" type="tel" placeholder="Quel est votre contact*" required name="contact">
                        </div>

                        <div class="input-group col-md-6">
                            <input class="input--style-1" type="email" placeholder="Adresse email" name="email">
                        </div>

                        <div class="input-group col-md-6">
                            <input class="input--style-1" type="tel" placeholder="Le contact d'un parent*" required name="contact_parent">
                        </div>

                        <div class="input-group col-md-6">
                            <input class="input--style-1" type="text" placeholder="Niveau Scolaire*" required name="niveau">
                        </div>

                        <div class="input-group col-md-6">
                            <input class="input--style-1" type="text" placeholder="Etablissement*" required name="etablissement">
                        </div>

                        <div class="input-group col-md-6">
                            <input class="input--style-1" type="text" placeholder="Antécédents Médicaux" name="antecedent_medical">
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                            <label for="">Veuillez selectionner votre le nom de votre région: ?*</label>
                                <select name="region">
                                    <option>Lagune</option>
                                    <option>Gbêkê</option>
                                    <option>Poro</option>
                                    <option>Tchologo</option>
                                    <option>Tonkpi</option>
                                    <option>Gontougo</option>
                                    <option>Cavally</option>
                                    <option>Belier</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <label for="">Etes-vous membre de la CEEMUCI ?*</label>
                                <select name="membre">
                                    <option>Non</option>
                                    <option>Oui</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <label for="">Avez-vous déjà participer a un de nos seminaire ?*</label>
                                <select name="seminaire">
                                    <option>Non</option>
                                    <option>Oui</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="p-t-20">
                            <input type="submit" class='btn btn-success' value="Enregistrer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<?php
    include 'includes/footer.php';
?>
