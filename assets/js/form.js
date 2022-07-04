$(document).ready(function() {

    $('#btn_identite_details').click(function () {
    var error_nom = "";
    var error_prenoms = "";
    var error_lieu_naissance = "";
    var error_date_naissance = "";

     if($.trim($('#nom').val()).length == 0){
      error_nom = 'Entrez votre nom';
      $('#error_nom').text(error_nom);
      $('#nom').addClass('has-error');
     }
     else{
      error_nom = '';
      $('#error_nom').text(error_nom);
      $('#nom').removeClass('has-error');
     }

     if($.trim($('#prenoms').val()).length == 0){
      error_prenoms = 'Entrez votre ou vos prenom(s)';
      $('#error_prenoms').text(error_prenoms);
      $('#prenoms').addClass('has-error');
     }
     else{
      error_prenoms = '';
      $('#error_prenoms').text(error_prenoms);
      $('#prenoms').removeClass('has-error');
     }

     if($.trim($('#lieu_naissance').val()).length == 0){
      error_lieu_naissance = 'Entrez votre lieu de naissance';
      $('#error_lieu_naissance').text(error_lieu_naissance);
      $('#lieu_naissance').addClass('has-error');
     }
     else{
      error_lieu_naissance = '';
      $('#error_lieu_naissance').text(error_lieu_naissance);
      $('#lieu_naissance').removeClass('has-error');
     }

     if($.trim($('#date_naissance').val()).length == 0){
      error_date_naissance = 'Entrez votre date de naissance';
      $('#error_date_naissance').text(error_date_naissance);
      $('#date_naissance').addClass('has-error');
     }
     else{
      error_date_naissance = '';
      $('#error_date_naissance').text(error_date_naissance);
      $('#date_naissance').removeClass('has-error');
     }

     if(error_nom != '' || error_prenoms != '' || error_lieu_naissance != '' || error_date_naissance != ''){
      return false;
     }
     else{
      $('#list_identite').removeClass('active active_tab1');
      $('#list_identite').removeAttr('href data-toggle');
      $('#identite').removeClass('active');
      $('#list_identite').addClass('inactive_tab1');
      $('#list_etude').removeClass('inactive_tab1');
      $('#list_etude').addClass('active_tab1 active');
      $('#list_etude').attr('href', '#etude');
      $('#list_etude').attr('data-toggle', 'tab');
      $('#etude').addClass('active in');
     }
   });

    $('#previous_btn_etude').click(function(){
     $('#list_etude').removeClass('active active_tab1');
     $('#list_etude').removeAttr('href data-toggle');
     $('#etude').removeClass('active in');
     $('#list_etude').addClass('inactive_tab1');
     $('#list_identite').removeClass('inactive_tab1');
     $('#list_identite').addClass('active_tab1 active');
     $('#list_identite').attr('href', '#identite');
     $('#list_identite').attr('data-toggle', 'tab');
     $('#identite').addClass('active in');
    });
});

$('#btn_etude_details').click(function () {
    // var error_email = "";
    var error_contact = '';
    var mobile_validation = /^\d{10}$/;    
    var error_commune = "";
    var error_etablissement = "";
    var error_niveau = "";

    // var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
    // if($.trim($('#email').val()).length == 0){
    //   error_email = 'Vous devez entrez votre email';
    //   $('#error_email').text(error_email);
    //   $('#email').addClass('has-error');
    // }else{
    //   if (!filter.test($('#email').val())){
    //     error_email = 'Email incorrect';
    //     $('#error_email').text(error_email);
    //     $('#email').addClass('has-error');
    //   }else{
    //     error_email = '';
    //     $('#error_email').text(error_email);
    //     $('#email').removeClass('has-error');
    //   }
    // }

    if($.trim($('#contact').val()).length == 0){
     error_contact = 'Entrez votre Contact';
     $('#error_contact').text(error_contact);
     $('#contact').addClass('has-error');
    }else{
     error_contact = '';
     $('#error_contact').text(error_contact);
     $('#contact').removeClass('has-error');
    }

    if($.trim($('#contact').val()).length == 0){
      error_contact = 'Entrez votre Contact';
      $('#error_contact').text(error_contact);
      $('#contact').addClass('has-error');
    }else{
      if (!mobile_validation.test($('#contact').val())){
        error_contact = 'Contact invalide';
        $('#error_contact').text(error_contact);
        $('#contact').addClass('has-error');
      }else{
        error_contact = '';
        $('#error_contact').text(error_contact);
        $('#contact').removeClass('has-error');
      }
      }

    if($.trim($('#commune').val()).length == 0){
     error_commune = 'Entrez votre Commune de residence';
     $('#error_commune').text(error_commune);
     $('#commune').addClass('has-error');
    } else{
     error_commune = '';
     $('#error_commune').text(error_commune);
     $('#commune').removeClass('has-error');
    }

    if($.trim($('#etablissement').val()).length == 0){
     error_etablissement = 'Entrez votre etablissement';
     $('#error_etablissement').text(error_etablissement);
     $('#etablissement').addClass('has-error');
    }
    else{
     error_etablissement = '';
     $('#error_etablissement').text(error_etablissement);
     $('#etablissement').removeClass('has-error');
    }

    if($.trim($('#niveau').val()).length == 0){
     error_niveau = 'Entrez votre niveau d\'etude';
     $('#error_niveau').text(error_niveau);
     $('#niveau').addClass('has-error');
    }
    else{
     error_niveau = '';
     $('#error_niveau').text(error_niveau);
     $('#niveau').removeClass('has-error');
    }

    if(error_contact != '' || error_etablissement != '' || error_niveau != ''){
     return false;
    }
    else{
     $('#list_etude').removeClass('active active_tab1');
     $('#list_etude').removeAttr('href data-toggle');
     $('#etude').removeClass('active');
     $('#list_etude').addClass('inactive_tab1');
     $('#list_ceemuci').removeClass('inactive_tab1');
     $('#list_ceemuci').addClass('active_tab1 active');
     $('#list_ceemuci').attr('href', '#ceemuci');
     $('#list_ceemuci').attr('data-toggle', 'tab');
     $('#ceemuci').addClass('active in');
    }
});

$('#previous_btn_ceemuci').click(function(){
    $('#list_ceemuci').removeClass('active active_tab1');
    $('#list_ceemuci').removeAttr('href data-toggle');
    $('#ceemuci').removeClass('active in');
    $('#list_ceemuci').addClass('inactive_tab1');
    $('#list_etude').removeClass('inactive_tab1');
    $('#list_etude').addClass('active_tab1 active');
    $('#list_etude').attr('href', '#etude');
    $('#list_etude').attr('data-toggle', 'tab');
    $('#etude').addClass('active in');
 });


 
$('#btn_ceemuci_details').click(function () {
    var error_poste = "";
    if($.trim($('#poste').val()).length == 0){
        error_poste = 'Entrez votre poste';
        $('#error_poste').text(error_poste);
        $('#poste').addClass('has-error');
    }
    else{
        error_poste = '';
        $('#error_poste').text(error_poste);
        $('#poste').removeClass('has-error');
    }

    if(error_poste != ''){
        return false;
    }
    else{
        $('#list_ceemuci').removeClass('active active_tab1');
        $('#list_ceemuci').removeAttr('href data-toggle');
        $('#ceemuci').removeClass('active');
        $('#list_ceemuci').addClass('inactive_tab1');
        $('#list_photo').removeClass('inactive_tab1');
        $('#list_photo').addClass('active_tab1 active');
        $('#list_photo').attr('href', '#photo');
        $('#list_photo').attr('data-toggle', 'tab');
        $('#photo').addClass('active in');
    }
});

$('#previous_btn_photo').click(function(){
    $('#list_photo').removeClass('active active_tab1');
    $('#list_photo').removeAttr('href data-toggle');
    $('#photo').removeClass('active in');
    $('#list_photo').addClass('inactive_tab1');
    $('#list_ceemuci').removeClass('inactive_tab1');
    $('#list_ceemuci').addClass('active_tab1 active');
    $('#list_ceemuci').attr('href', '#ceemuci');
    $('#list_ceemuci').attr('data-toggle', 'tab');
    $('#ceemuci').addClass('active in');
});


$('#btn_photo_details').click(function () {
    var error_photoc = "";

     if($.trim($('#photoc').val()).length == 0){
        error_photoc = 'Entrez votre photoc';
        $('#error_photoc').text(error_photoc);
        $('#photoc').addClass('has-error');
     }
     else{
        error_photoc = '';
        $('#error_photoc').text(error_photoc);
        $('#photoc').removeClass('has-error');
     }

     if(error_photoc != ''){
      return false;
     }
     else{
        $('#btn_photo_details').attr("disabled", "disabled");
        $(document).css('cursor', 'prgress');
        $("#register_form").submit();
     }
   });
