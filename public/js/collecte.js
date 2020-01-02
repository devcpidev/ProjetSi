$(document).ready(function(){
    $('#typebienbati').on('change',function(){
       if($('#typebienbati').val() == 1){
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
        $('#jardin').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>le bien est il composé de jardin</span><input class='form-check-input' type='checkbox' id='jardin' name='jardin' value='OUI'><label class='form-check-label' for='jardin'>OUI</label><input class='form-check-input' type='checkbox' id='jardin' name='jardin' value='NON' style=' margin-left: 50px';><label class='form-check-label' for='jardin'>NON</label></div>")
        $('#nbgarage').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbgarage' placeholder='Ajouter le nombre de garages'></div>")
        $('#typecuisine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><select  class='form-control' name='typecuisine' id='typecuisine'> <option value=''>Type de cuisine</option><option value='europeenne'>Européenne</option><option value='africaine'>Africaine</option></select></div>")
        
    }

    if($('#typebienbati').val() == 2){
        //hide
        $('#jardin').html("")
        $('#typeimmeuble').html("") 
        // end hide
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
        $('#nbgarage').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbgarage' placeholder='Ajouter le nombre de garages'></div>")
        $('#typecuisine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><select  class='form-control' name='typecuisine' > <option value=''>Type de cuisine</option><option value='europeenne'>Européenne</option><option value='africaine'>Africaine</option></select></div>")
        $('#cours').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbcours' placeholder='Ajouter le nombre de cours'></div>")
        $('#piscine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Piscine</span><input class='form-check-input' type='checkbox'  name='piscine' value='OUI'><label class='form-check-label' for='piscine'>OUI</label><input class='form-check-input' type='checkbox' id='piscine' name='piscine' value='NON' style=' margin-left: 50px';><label class='form-check-label' for='jardin'>NON</label></div>")
        
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
          // end hide
        $('#sitstudio').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-building' aria-hidden='true'></i></span><select class='form-control' name='studiositue' > <option value=''>Studio Situé</option> <option value='RDC'>RDC</option> <option value='1er etage'>1er Etage</option><option value='2ieme etage'>2ieme etage</option><option value='3ieme etage'>3ieme etage</option> <option value='4ieme etage'>4ieme etage</option><option value='5ieme etage'>5ieme etage</option><option value='6ieme etage'>6ieme etage</option></select></div>")
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
        $('#typecuisine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><select  class='form-control' name='typecuisine' id='typecuisine'> <option value=''>Type de cuisine</option><option value='europeenne'>Européenne</option><option value='africaine'>Africaine</option></select></div>")
        $('#autreinfos').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Autres infos studios</span><input class='form-check-input' type='checkbox' id='garage' name='garage' value='OUI'><label class='form-check-label' for='garage'>Garage</label><input class='form-check-input' type='checkbox' id='ascenseur' name='ascenseur' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='ascenseur'>Ascenseur</label><input class='form-check-input' type='checkbox' id='buanderie' name='buanderie' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='buanderie'>Buanderie</label><input class='form-check-input' type='checkbox' id='balcon' name='balcon' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='balcon'>Balcon</label></div>")
    }

    if($('#typebienbati').val() == 5){
        $('#sitstudio').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-building' aria-hidden='true'></i></span><select class='form-control' name='studiositue' id='studiositue'> <option value=''>Studio Situé</option> <option value='RDC'>RDC</option> <option value='1er etage'>1er Etage</option><option value='2ieme etage'>2ieme etage</option><option value='3ieme etage'>3ieme etage</option> <option value='4ieme etage'>4ieme etage</option><option value='5ieme etage'>5ieme etage</option><option value='6ieme etage'>6ieme etage</option></select></div>")
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
        $('#typecuisine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><select  class='form-control' name='typecuisine' id='typecuisine'> <option value=''>Type de cuisine</option><option value='europeenne'>Européenne</option><option value='africaine'>Africaine</option></select></div>")
        $('#autreinfos').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Autres infos de l'appartement</span><input class='form-check-input' type='checkbox' id='garage' name='garage' value='OUI'><label class='form-check-label' for='garage'>Garage</label><input class='form-check-input' type='checkbox' id='ascenseur' name='ascenseur' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='ascenseur'>Ascenseur</label><input class='form-check-input' type='checkbox' id='buanderie' name='buanderie' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='buanderie'>Buanderie</label><input class='form-check-input' type='checkbox' id='balcon' name='balcon' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='balcon'>Balcon</label></div>")
    }

    if($('#typebienbati').val() == 6){
        //hide
        $('#jardin').html("")
        $('#nbgarage').html("")
        $('#typecuisine').html("")
        $('#cours').html("")
        $('#piscine').html("")
        $('#autreinfos').html("")
         // end hide
        $('#sitstudio').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-building' aria-hidden='true'></i></span><select class='form-control' name='studiositue'> <option value=''>Studio Situé</option> <option value='RDC'>RDC</option> <option value='etage'>Etage</option></select></div>")
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
    }
    if($('#typebienbati').val() == 7){
        //hide
        $('#jardin').html("")
        $('#nbgarage').html("")
        $('#typecuisine').html("")
        $('#cours').html("")
        $('#piscine').html("")
        $('#autreinfos').html("")
        $('#typeimmeuble').html("")
         // end hide
        $('#sitstudio').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-building' aria-hidden='true'></i></span><select class='form-control' name='studiositue' > <option value=''>Studio Situé</option> <option value='RDC'>RDC</option> <option value='etage'>Etage</option></select></div>")
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
    }
    
    
    

    
    })

    // colaboration

    $('#collaboration').on('change',function(){
        if($('#collaboration').val() == 1){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI'><label class='form-check-label' for='etatdroitreel'>Etat de droit réel</label><input class='form-check-input' type='checkbox' id='actedevente' name='actedevente' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='actedevente'>Acte de Vente</label><input class='form-check-input' type='checkbox' id='autorisationcons' name='autorisationcons' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='autorisationcons'>Autorisation de Construire</label><input class='form-check-input' type='checkbox' id='planbetonarme' name='planbetonarme' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planbetonarme'>Plan Beton armé</label><input class='form-check-input' type='checkbox' id='planarchi' name='planarchi' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planarchi'>Plan Archi</label><input class='form-check-input' type='checkbox' id='planindividuelap' name='planindividuelap' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planindividuelap'>Plan individuel des appartements</label><input class='form-check-input' type='checkbox' id='autorisationbail' name='autorisationbail' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='autorisationbail'>Autorisation de bail (avec autorisation de ceder) </label><input class='form-check-input' type='checkbox' id='deliberationind' name='deliberationind' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='deliberationind'>Deliberation individuelle</label><input class='form-check-input' type='checkbox' id='attestbail' name='attestbail' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='attestbail'>Attestation de bail</label><input class='form-check-input' type='checkbox' id='procceder' name='procceder' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='procceder'>Procuration de ceder</label></div>")
        }
        if($('#collaboration').val() == 2){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'><label class='form-check-label' for='titreprop'>Titre de propriété( S'il na pas le titre, fournir un document pouvant être légaliser et fourni à la SDE ou la SENELEC)</label><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='cnibailleur'>CNI </label><input class='form-check-input' type='checkbox' id='autresdoc' name='autresdoc' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='autresdoc'>Autres documents</label></div>")
        }
        if($('#collaboration').val() == 3){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'><label class='form-check-label' for='titreprop'>Titre de propriété( S'il na pas le titre, fournir un document pouvant être légaliser et fourni à la SDE ou la SENELEC)</label><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='cnibailleur'>CNI</label><input class='form-check-input' type='checkbox' id='autresdoc' name='autresdoc' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='autresdoc'>Autres documents</label></div>")
        }
        if($('#collaboration').val() == 4){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'><label class='form-check-label' for='cnibailleur'>CNI</label><input class='form-check-input' type='checkbox' id='plansite' name='plansite' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='plansite'>Plan du site</label><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='etatdroitreel'>Etats de droits reels</label><input class='form-check-input' type='checkbox' id='autreselemproc' name='autreselemproc' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='Autres elements de procedures'>Autres elements de procedure</label></div>")
        }
        if($('#collaboration').val() == 5){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='planarchi' name='planarchi' value='OUI'><label class='form-check-label' for='planarchi'>Plan Archi</label><input class='form-check-input' type='checkbox' id='planbetonarme' name='planbetonarme' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planbetonarme'>Plan Beton armé</label><input class='form-check-input' type='checkbox' id='planelec' name='planelec' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planelec'>Plan Electricité</label><input class='form-check-input' type='checkbox' id='planplomberie' name='planplomberie' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planplomberie'>Plan Plomberie</label><input class='form-check-input' type='checkbox' id='autorisationcons' name='autorisationcons' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='autorisationcons'>Autorisation de construire</label></div><input class='form-check-input' type='checkbox' id='fichinsctechnique' name='fichinsctechnique' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='fichinsctechnique'>Fiche d'inscription technique</label><input class='form-check-input' type='checkbox' id='cahierdesctechnique' name='cahierdesctechnique' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='cahierdesctechnique'>Cahier de decription technique</label><input class='form-check-input' type='checkbox' id='demandeautmaire' name='demandeautmaire' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='demandeautmaire'>Demande autorisation adressée au maire</label><input class='form-check-input' type='checkbox' id='etudefinancement' name='etudefinancement' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='etudefinancement'>Etude de financement</label><input class='form-check-input' type='checkbox' id='autre' name='autre' value='autre' style=' margin-left: 50px';><label class='form-check-label' for='autre'>Autre</label></div>")
        }
        if($('#collaboration').val() == 6){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'><label class='form-check-label' for='cnibailleur'>CNI</label><input class='form-check-input' type='checkbox' id='plansite' name='plansite' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='plansite'>Plan du site</label><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='etatdroitreel'>Etats de droits reels</label><input class='form-check-input' type='checkbox' id='autreselemproc' name='autreselemproc' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='autreselemproc'>Autres elements de procedure</label></div>")
        }
        if($('#collaboration').val() == 7){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'><label class='form-check-label' for='titreprop'>Titre de propriété</label><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='cnibailleur'>CNI </label><input class='form-check-input' type='checkbox' id='moyenspreuv' name='moyenspreuv' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='moyenspreuv'>Moyens Preuve</label><input class='form-check-input' type='checkbox' id='autdemolir' name='autdemolir' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='autdemolir'>Autorisation de démolir</label></div>")
        }
        if($('#collaboration').val() == 8){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='demandeautmaire' name='demandeautmaire' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='demandeautmaire'>Demande autorisation adressée au maire</label><input class='form-check-input' type='checkbox' id='plansituation' name='plansituation' value='OUI'><label class='form-check-label' for='plansituation'>PLAN DE SITUATION ET DE DELIMITATION DU TERRAIN CERTIFIE PAR LE CADASTRE</label><input class='form-check-input' type='checkbox' id='jeuxcons' name='jeuxcons' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='jeuxcons'>CINQ JEUX DE PLAN DE CONSTRUCTION</label><input class='form-check-input' type='checkbox' id='ficherenseign' name='ficherenseign' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='ficherenseign'>Fiche de renseignement</label><input class='form-check-input' type='checkbox' id='devisestim' name='devisestim' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='devisestim'>Devis Estimatif</label><input class='form-check-input' type='checkbox' id='taxesmunicip' name='taxesmunicip' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='taxesmunicip'>Taxes municipales</label><input class='form-check-input' type='checkbox' id='taxesurbanism' name='taxesurbanism' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='taxesurbanism'>Taxes urbanisme</label></div><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='timbrefisc'>Timbre fiscal</label><input class='form-check-input' type='checkbox' id='enveloppe' name='enveloppe' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='enveloppe'>Enveloppe</label><input class='form-check-input' type='checkbox' id='demandeminurb' name='demandeminurb' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='demandeminurb'>Demande manuscrite adressé au ministère de l'urbanisme</label><input class='form-check-input' type='checkbox' id='rapportpres' name='rapportpres' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='rapportpres'>Rapport de présentation</label><input class='form-check-input' type='checkbox' id='planmorcel' name='planmorcel' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planmorcel'>Plan de morcellement</label><input class='form-check-input' type='checkbox' id='cdnum' name='cdnum' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='cdnum'>5 CD Numerique</label><input class='form-check-input' type='checkbox' id='cditem' name='cditem' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='cditem'>1 CD ITM</label><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='timbrefisc'>Timbre Fiscal</label><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='titreprop'>Titre de Propriété</label><input class='form-check-input' type='checkbox' id='timbrevar' name='timbrevar' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='timbrevar'>Timbre variant en foction des zones</label><input class='form-check-input' type='checkbox' id='cahiercharge' name='cahiercharge' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='cahiercharge'>Cahier Charge</label></div>")
        }
        if($('#collaboration').val() == 9){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='titreprop'>titre de propriété</label><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'><label class='form-check-label' for='cnibailleur'>CNI</label><input class='form-check-input' type='checkbox' id='preuverealpeine' name='preuverealpeine' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='preuverealpeine'>DONNER PREUVE RÉALISATION DES PEINES ET SOINS</label><input class='form-check-input' type='checkbox' id='plangeometre' name='plangeometre' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='plangeometre'>Plan geometre</label><input class='form-check-input' type='checkbox' id='programimetat' name='programimetat' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='programimetat'>PROGRAMME IMMOBILIER A SOUMETTRE A L'ETAT</label><input class='form-check-input' type='checkbox' id='demandebailrec' name='demandebailrec' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='demandebailrec'>DEMANDE DE BAIL ADRESSE AU RECEVEUR DE DOMAINE COMPETENT</label><input class='form-check-input' type='checkbox' id='delibcommune' name='delibcommune' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='delibcommune'>DELIBERATION AU NIVEAU DES COMMUNES</label></div><input class='form-check-input' type='checkbox' id='exemplaires' name='exemplaires' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='exemplaires'>TOUS LES DOSSIERS EN 4 EXEMPLAIRES</label></div>")
        }
       
     })
 
})