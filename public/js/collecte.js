$(document).ready(function(){
    $('#typebienbati').on('change',function(){
       if($('#typebienbati').val() == 1){
        $('#nbpieces').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='text' class='form-control' name='nbpieces' placeholder='Ajouter le nombre de pièces'></div>")
        $('.nbsalledebain').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='text' class='form-control' name='nbsalledebain' placeholder='Ajouter le nombre de salle de bain'></div>")
        $('#nbtoilettes').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbtoilettes' placeholder='Ajouter le nombre de toilettes visiteurs'></div>")
        $('#jardin').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>le bien est il composé de jardin</span><input class='form-check-input' type='checkbox' id='jardin' name='jardin' value='OUI'><label class='form-check-label' for='jardin'>OUI</label><input class='form-check-input' type='checkbox' id='jardin' name='jardin' value='NON' style=' margin-left: 50px';><label class='form-check-label' for='jardin'>NON</label></div>")
        $('#nbgarage').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><input type='number' class='form-control' name='nbgarage' placeholder='Ajouter le nombre de garages'></div>")
        $('#typecuisine').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i></span><select  class='form-control' name='typecuisine' id='typecuisine'> <option value=''>Type de cuisine</option><option value='europeenne'>Européenne</option><option value='africaine'>Africaine</option></select></div>")
       }

    
    })

    // colaboration

    $('#collaboration').on('change',function(){
        if($('#collaboration').val() == 1){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><i class='fa fa-user' aria-hidden='true'></i>Avez vous les elements suivants</span><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI'><label class='form-check-label' for='etatdroitreel'>Etat de droit réel</label><input class='form-check-input' type='checkbox' id='actedevente' name='actedevente' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='actedevente'>Acte de Vente</label><input class='form-check-input' type='checkbox' id='autorisationcons' name='autorisationcons' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='autorisationcons'>Autorisation de Construire</label><input class='form-check-input' type='checkbox' id='planbetonarme' name='planbetonarme' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planbetonarme'>Plan Beton armé</label><input class='form-check-input' type='checkbox' id='planarchi' name='planarchi' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planarchi'>Plan Archi</label><input class='form-check-input' type='checkbox' id='planindividuelap' name='planindividuelap' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='planindividuelap'>Plan individuel des appartements</label><input class='form-check-input' type='checkbox' id='autorisationbail' name='autorisationbail' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='autorisationbail'>Autorisation de bail (avec autorisation de ceder) </label><input class='form-check-input' type='checkbox' id='deliberationind' name='deliberationind' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='deliberationind'>Deliberation individuelle</label><input class='form-check-input' type='checkbox' id='attestbail' name='attestbail' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='attestbail'>Attestation de bail</label><input class='form-check-input' type='checkbox' id='procceder' name='procceder' value='OUI' style=' margin-left: 50px';><label class='form-check-label' for='procceder'>Procuration de ceder</label></div>")
        }
 
       
 
       
     })
 
})