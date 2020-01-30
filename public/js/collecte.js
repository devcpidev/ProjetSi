$(document).ready(function(){
    $('#info').on('change',function() {
        console.log($('.info').val())
        if($('#info').val() == '1'){
            $('#nomrep').html("<div class='input-group mg-b-15'><span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='text' class='form-control' name='nomrep' placeholder='nom du représentant'></div>")
            $('#telrep').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-phone' aria-hidden='true'></i></span><input type='text' class='form-control' name='telrep' placeholder='téléphone du représenatnt'></div>")    
            $('#emailrep').html("<div class='input-group mg-b-15'><span class='input-group-addon'><i class='fa fa-phone' aria-hidden='true'></i></span><input type='text' class='form-control' name='emailrep' placeholder='email du représenatnt'></div>")
            $('#adresserep').html("<div class='input-group mg-b-15'><span class='input-group-addon'><i class='fa fa-phone' aria-hidden='true'></i></span><input type='text' class='form-control' name='adresserep' placeholder='adresse du représenatnt'></div>")
        }
       
    })
    $('#typebienbati').on('change',function(){
       if($('#typebienbati').val() == 1){
            //hide
       
        $('#typeimmeuble').html("") 
        // end hide
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
        $('#jardin').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>le bien est il composé de jardin</span><div class='checkbox'><label class='form-check-label' for='jardin'><input class='form-check-input' type='checkbox' id='jardin' name='jardin' value='OUI'>OUI</label></div><div class='checkbox'><label class='form-check-label' for='jardin'><input class='form-check-input' type='checkbox' id='jardin' name='jardin' value='NON'>NON</label></div></div>")
        $('#nbgarage').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbgarage' placeholder='Ajouter le nombre de garages'></div>")
        $('#typecuisine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><select  class='form-control' name='typecuisine' id='typecuisine'> <option value=''>Type de cuisine</option><option value='europeenne'>Européenne</option><option value='africaine'>Africaine</option></select></div>")
        
    }

    if($('#typebienbati').val() == 2){
        //hide
        $('#jardin').html("")
        $('#typeimmeuble').html("") 
        $('#piscine').html("")
        $('#autreinfos').html("")
        $('#sitstudio').html("")
        // end hide
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
        $('#nbgarage').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbgarage' placeholder='Ajouter le nombre de garages'></div>")
        $('#typecuisine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><select  class='form-control' name='typecuisine' > <option value=''>Type de cuisine</option><option value='europeenne'>Européenne</option><option value='africaine'>Africaine</option></select></div>")
        $('#cours').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbcours' placeholder='Ajouter le nombre de cours'></div>")
        $('#piscine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Piscine</span><div class='checkbox'><label class='form-check-label' for='piscine'><input class='form-check-input' type='checkbox'  name='piscine' value='OUI'>OUI</label></div><div class='checkbox'><label class='form-check-label' for='piscine'><input class='form-check-input' type='checkbox'  name='piscine' value='NON'>NON</label></div></div>")
        
    }
    if($('#typebienbati').val() == 3){
         //hide
        $('#jardin').html("")
        $('#nbpieces').html("")
        $('.nbsalledebain').html("")
        $('#nbtoilettes').html("")
        $('#nbgarage').html("")
        $('#typecuisine').html("")
        $('#cours').html("")
        $('#piscine').html("")
        $('#autreinfos').html("")
        $('#sitstudio').html("")
         // end hide
        $('#typeimmeuble').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-building' aria-hidden='true'></i></span><select class='form-control' name='typeimmeuble'> <option value=''>Type d'immeuble</option> <option value='R+1'>R+1</option> <option value='R+2'>R+2</option><option value='R+3'>R+3</option><option value='R+4'>R+4</option> <option value='R+5'>R+5</option><option value='Autre'>Autre</option></select></div>") 
    }
    if($('#typebienbati').val() == 4){
         //hide
         $('#typeimmeuble').html("")
         $('#jardin').html("")
         $('#piscine').html("")
          // end hide
        $('#sitstudio').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-building' aria-hidden='true'></i></span><select class='form-control' name='studiositue' > <option value=''>Studio Situé</option> <option value='RDC'>RDC</option> <option value='1er etage'>1er Etage</option><option value='2ieme etage'>2ieme etage</option><option value='3ieme etage'>3ieme etage</option> <option value='4ieme etage'>4ieme etage</option><option value='5ieme etage'>5ieme etage</option><option value='6ieme etage'>6ieme etage</option></select></div>")
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
        $('#typecuisine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><select  class='form-control' name='typecuisine' id='typecuisine'> <option value=''>Type de cuisine</option><option value='europeenne'>Européenne</option><option value='africaine'>Africaine</option></select></div>")
        $('#autreinfos').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Autres infos studios</span><div class='checkbox'><label class='form-check-label' for='garage'><input class='form-check-input' type='checkbox' id='garage' name='garage' value='OUI'>Garage</label></div><div class='checkbox'><label class='form-check-label' for='ascenseur'><input class='form-check-input' type='checkbox' id='ascenseur' name='ascenseur' value='OUI' >Ascenseur</label></div><div class='checkbox'><label class='form-check-label' for='buanderie'><input class='form-check-input' type='checkbox' id='buanderie' name='buanderie' value='OUI'>Buanderie</label><div class='checkbox'><label class='form-check-label' for='balcon'><input class='form-check-input' type='checkbox' id='balcon' name='balcon' value='OUI' >Balcon</label></div></div>")
    }

    if($('#typebienbati').val() == 5){
        //hide
        $('#typeimmeuble').html("")
        $('#jardin').html("")
        $('#piscine').html("")
         // end hide
         $('#sitstudio').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-building' aria-hidden='true'></i></span><select class='form-control' name='studiositue' > <option value=''>Appartement Situé</option> <option value='RDC'>RDC</option> <option value='1er etage'>1er Etage</option><option value='2ieme etage'>2ieme etage</option><option value='3ieme etage'>3ieme etage</option> <option value='4ieme etage'>4ieme etage</option><option value='5ieme etage'>5ieme etage</option><option value='6ieme etage'>6ieme etage</option></select></div>")
         $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
         $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
         $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
         $('#typecuisine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><select  class='form-control' name='typecuisine' id='typecuisine'> <option value=''>Type de cuisine</option><option value='europeenne'>Européenne</option><option value='africaine'>Africaine</option></select></div>")
         $('#autreinfos').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Autres infos apartements</span><div class='checkbox'><label class='form-check-label' for='garage'><input class='form-check-input' type='checkbox' id='garage' name='garage' value='OUI'>Garage</label></div><div class='checkbox'><label class='form-check-label' for='ascenseur'><input class='form-check-input' type='checkbox' id='ascenseur' name='ascenseur' value='OUI' >Ascenseur</label></div><div class='checkbox'><label class='form-check-label' for='buanderie'><input class='form-check-input' type='checkbox' id='buanderie' name='buanderie' value='OUI'>Buanderie</label><div class='checkbox'><label class='form-check-label' for='balcon'><input class='form-check-input' type='checkbox' id='balcon' name='balcon' value='OUI' >Balcon</label></div></div>")
    }

    if($('#typebienbati').val() == 6){
        //hide
        $('#jardin').html("")
        $('#sitstudio').html("")
        $('#nbgarage').html("")
        $('#typecuisine').html("")
        $('#cours').html("")
        $('#piscine').html("")
        $('#autreinfos').html("")
         // end hide
        $('#sitstudio').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-building' aria-hidden='true'></i></span><select class='form-control' name='studiositue'> <option value=''>Niveau</option> <option value='RDC'>RDC</option> <option value='etage'>Etage</option></select></div>")
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
    }
    if($('#typebienbati').val() == 7){
        //hide
        $('#jardin').html("")
        $('#sitstudio').html("")
        $('#nbgarage').html("")
        $('#typecuisine').html("")
        $('#cours').html("")
        $('#piscine').html("")
        $('#autreinfos').html("")
        $('#typeimmeuble').html("")
         // end hide
       
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
    }
    
    
    

    
    })

    // colaboration

    $('#collaboration').on('change',function(){
        if($('#collaboration').val() == 1){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='etatdroitreel'><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI'>Etat de droit réel</label></div><div class='checkbox'><label class='form-check-label' for='actedevente'><input class='form-check-input' type='checkbox' id='actedevente' name='actedevente' value='OUI'>Acte de Vente</label></div><div class='checkbox'><label class='form-check-label' for='autorisationcons'><input class='form-check-input' type='checkbox' id='autorisationcons' name='autorisationcons' value='OUI'>Autorisation de Construire</label></div><div class='checkbox'><label class='form-check-label' for='planbetonarme'><input class='form-check-input' type='checkbox' id='planbetonarme' name='planbetonarme' value='OUI'>Plan Beton armé</label></div><div class='checkbox'><label class='form-check-label' for='planarchi'><input class='form-check-input' type='checkbox' id='planarchi' name='planarchi' value='OUI'>Plan Archi</label></div><div class='checkbox'><label class='form-check-label' for='planindividuelap'><input class='form-check-input' type='checkbox' id='planindividuelap' name='planindividuelap' value='OUI' >Plan individuel des appartements</label></div><div class='checkbox'><label class='form-check-label' for='autorisationbail'><input class='form-check-input' type='checkbox' id='autorisationbail' name='autorisationbail' value='OUI' >Autorisation de bail (avec autorisation de ceder) </label></div><div class='checkbox'><label class='form-check-label' for='deliberationind'><input class='form-check-input' type='checkbox' id='deliberationind' name='deliberationind' value='OUI'>Deliberation individuelle</label></div><div class='checkbox'><label class='form-check-label' for='attestbail'><input class='form-check-input' type='checkbox' id='attestbail' name='attestbail' value='OUI'>Attestation de bail</label></div><div  class='checkbox'><label class='form-check-label' for='procceder'><input class='form-check-input' type='checkbox' id='procceder' name='procceder' value='OUI'>Procuration de ceder</label></div></div>")
        }
        if($('#collaboration').val() == 2){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>Titre de propriété<br>( S'il na pas le titre, fournir un document pouvant être légaliser et fourni à la SDE ou la SENELEC)</label><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI' >CNI </label></div><div class='checkbox'><label class='form-check-label' for='autresdoc'><input class='form-check-input' type='checkbox' id='autresdoc' name='autresdoc' value='OUI'>Autres documents</label></div></div>")
        }
        if($('#collaboration').val() == 3){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>Titre de propriété<br>( S'il na pas le titre, fournir un document <br>pouvant être légaliser <br>et fourni à la SDE ou la SENELEC)</label><div class='checkbox'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='autresdoc'><input class='form-check-input' type='checkbox' id='autresdoc' name='autresdoc' value='OUI'>Autres documents</label></div></div>")
        }
        if($('#collaboration').val() == 4){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='cnibailleur'></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='plansite'><input class='form-check-input' type='checkbox' id='plansite' name='plansite' value='OUI'>Plan du site</label></div><div class='checkbox'><label class='form-check-label' for='etatdroitreel'><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI'>Etats de droits reels</label></div><div class='checkbox'><label class='form-check-label' for='Autres elements de procedures'><input class='form-check-input' type='checkbox' id='autreselemproc' name='autreselemproc' value='OUI'>Autres elements de procedure</label></div></div>")
        }
        if($('#collaboration').val() == 5){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='planarchi'><input class='form-check-input' type='checkbox' id='planarchi' name='planarchi' value='OUI'>Plan Archi</label></div><div class='checkbox'><label class='form-check-label' for='planbetonarme'><input class='form-check-input' type='checkbox' id='planbetonarme' name='planbetonarme' value='OUI'>Plan Beton armé</label></div><div class='checkbox'><label class='form-check-label' for='planelec'><input class='form-check-input' type='checkbox' id='planelec' name='planelec' value='OUI'>Plan Electricité</label></div><div class='checkbox'><label class='form-check-label' for='planplomberie'><input class='form-check-input' type='checkbox' id='planplomberie' name='planplomberie' value='OUI'>Plan Plomberie</label></div><div class='checkbox'><label class='form-check-label' for='autorisationcons'><input class='form-check-input' type='checkbox' id='autorisationcons' name='autorisationcons' value='OUI'>Autorisation de construire</label></div><div class='checkbox'><label class='form-check-label' for='fichinsctechnique'><input class='form-check-input' type='checkbox' id='fichinsctechnique' name='fichinsctechnique' value='OUI'>Fiche d'inscription technique</label></div><div class='checkbox'><label class='form-check-label' for='cahierdesctechnique'><input class='form-check-input' type='checkbox' id='cahierdesctechnique' name='cahierdesctechnique' value='OUI' >Cahier de decription technique</label></div><div class='checkbox'><label class='form-check-label' for='demandeautmaire'><input class='form-check-input' type='checkbox' id='demandeautmaire' name='demandeautmaire' value='OUI'>Demande autorisation adressée au maire</label></div><div class='checkbox'><label class='form-check-label' for='etudefinancement'><input class='form-check-input' type='checkbox' id='etudefinancement' name='etudefinancement' value='OUI'>Etude de financement</label></div><div class='checkbox'><label class='form-check-label' for='autre'><input class='form-check-input' type='checkbox' id='autre' name='autre' value='autre'>Autre</label></div></div>")
        }
        if($('#collaboration').val() == 6){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='plansite'><input class='form-check-input' type='checkbox' id='plansite' name='plansite' value='OUI' >Plan du site</label></div><div class='checkbox'><label class='form-check-label' for='etatdroitreel'><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI' >Etats de droits reels</label></div><div class='checkbox'><label class='form-check-label' for='autreselemproc'><input class='form-check-input' type='checkbox' id='autreselemproc' name='autreselemproc' value='OUI'>Autres elements de procedure</label></div></label></div>")
        }
        if($('#collaboration').val() == 7){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>Titre de propriété</label></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI </label></div><div class='checkbox'><label class='form-check-label' for='moyenspreuv'><input class='form-check-input' type='checkbox' id='moyenspreuv' name='moyenspreuv' value='OUI'>Moyens Preuve</label></div><div class='checkbox'><label class='form-check-label' for='autdemolir'><input class='form-check-input' type='checkbox' id='autdemolir' name='autdemolir' value='OUI' >Autorisation de démolir</label></div></div>")
        }
        if($('#collaboration').val() == 8){
            $('#collabor').html("<div class='input-group mg-b-15'><span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='row'><div class='col-lg-6'><div class='checkbox'><label class='form-check-label' for='demandeautmaire'><input class='form-check-input' type='checkbox' id='demandeautmaire' name='demandeautmaire' value='OUI'>Demande autorisation adressée au maire</label></div><div class='checkbox'><label class='form-check-label' for='plansituation'><input class='form-check-input' type='checkbox' id='plansituation' name='plansituation' value='OUI'>PLAN DE SITUATION ET DE DELIMITATION <br>DU TERRAIN CERTIFIE PAR LE CADASTRE</label></div> <div class='checkbox'><label class='form-check-label' for='jeuxcons'><input class='form-check-input' type='checkbox' id='jeuxcons' name='jeuxcons' value='OUI'>CINQ JEUX DE PLAN DE CONSTRUCTION</label></div><div class='checkbox'><label class='form-check-label' for='ficherenseign'><input class='form-check-input' type='checkbox' id='ficherenseign' name='ficherenseign' value='OUI'>Fiche de renseignement</label></div><div class='checkbox'><label class='form-check-label' for='devisestim'><input class='form-check-input' type='checkbox' id='devisestim' name='devisestim' value='OUI' >Devis Estimatif</label></div><div class='checkbox'><label class='form-check-label' for='timbrefisc'><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI'>Timbre fiscal</label></div><div class='checkbox'><label class='form-check-label' for='enveloppe'><input class='form-check-input' type='checkbox' id='enveloppe' name='enveloppe' value='OUI' >Enveloppe</label></div><div class='checkbox'><label class='form-check-label' for='demandeminurb'><input class='form-check-input' type='checkbox' id='demandeminurb' name='demandeminurb' value='OUI'>Demande manuscrite adressé <br>au ministère de l'urbanisme</label></div> </div><div class='col-lg-6'><div class='checkbox'><label class='form-check-label' for='taxesmunicip'><input class='form-check-input' type='checkbox' id='taxesmunicip' name='taxesmunicip' value='OUI'>Taxes municipales</label></div><div class='checkbox'><label class='form-check-label' for='taxesurbanism'><input class='form-check-input' type='checkbox' id='taxesurbanism' name='taxesurbanism' value='OUI'>Taxes urbanisme</label></div><div class='checkbox'><label class='form-check-label' for='rapportpres'><input class='form-check-input' type='checkbox' id='rapportpres' name='rapportpres' value='OUI'>Rapport de présentation</label></div><div class='checkbox'><label class='form-check-label' for='planmorcel'><input class='form-check-input' type='checkbox' id='planmorcel' name='planmorcel' value='OUI' >Plan de morcellement</label></div><div class='checkbox'><label class='form-check-label' for='cdnum'><input class='form-check-input' type='checkbox' id='cdnum' name='cdnum' value='OUI'>5 CD Numerique</label></div><div class='checkbox'><label class='form-check-label' for='cditem'><input class='form-check-input' type='checkbox' id='cditem' name='cditem' value='OUI' >1 CD ITM</label></div><div class='checkbox'><label class='form-check-label' for='timbrefisc'><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI' >Timbre Fiscal</label></div><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI' >Titre de Propriété</label></div><div class='checkbox'><label class='form-check-label' for='timbrevar'><input class='form-check-input' type='checkbox' id='timbrevar' name='timbrevar' value='OUI'>Timbre variant en foction des zones</label></div><div class='checkbox'><label class='form-check-label' for='cahiercharge'><input class='form-check-input' type='checkbox' id='cahiercharge' name='cahiercharge' value='OUI' >Cahier Charge</label></div></div></div></div>")
         
        }
        if($('#collaboration').val() == 9){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>titre de propriété</label></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='preuverealpeine'><input class='form-check-input' type='checkbox' id='preuverealpeine' name='preuverealpeine' value='OUI'>DONNER PREUVE RÉALISATION DES PEINES ET SOINS</label></div><div class='checkbox'><label class='form-check-label' for='plangeometre'><input class='form-check-input' type='checkbox' id='plangeometre' name='plangeometre' value='OUI' >Plan geometre</label></div><div class='checkbox'><label class='form-check-label' for='programimetat'><input class='form-check-input' type='checkbox' id='programimetat' name='programimetat' value='OUI' >PROGRAMME IMMOBILIER A SOUMETTRE A L'ETAT</label></div><div class='checkbox'><label class='form-check-label' for='demandebailrec'><input class='form-check-input' type='checkbox' id='demandebailrec' name='demandebailrec' value='OUI'>DEMANDE DE BAIL ADRESSE AU RECEVEUR <br>DE DOMAINE COMPETENT</label></div><div class='checkbox'><label class='form-check-label' for='delibcommune'><input class='form-check-input' type='checkbox' id='delibcommune' name='delibcommune' value='OUI' >DELIBERATION AU NIVEAU DES COMMUNES</label></div><div class='checkbox'><label class='form-check-label' for='exemplaires'><input class='form-check-input' type='checkbox' id='exemplaires' name='exemplaires' value='OUI'>TOUS LES DOSSIERS EN 4 EXEMPLAIRES</label></div></div>")
        }
       
     })

 
})