$(document).ready(function() {
    $('#typeservices').on('change',function(){
        console.log('fe')
        if($('#typeservices').val()==1){
            console.log('jamil')
             $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='etatdroitreel'><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI'>Etat de droit réel</label></div><div class='checkbox'><label class='form-check-label' for='actedevente'><input class='form-check-input' type='checkbox' id='actedevente' name='actedevente' value='OUI'>Acte de Vente</label></div><div class='checkbox'><label class='form-check-label' for='autorisationcons'><input class='form-check-input' type='checkbox' id='autorisationcons' name='autorisationcons' value='OUI'>Autorisation de Construire</label></div><div class='checkbox'><label class='form-check-label' for='planbetonarme'><input class='form-check-input' type='checkbox' id='planbetonarme' name='planbetonarme' value='OUI'>Plan Beton armé</label></div><div class='checkbox'><label class='form-check-label' for='planarchi'><input class='form-check-input' type='checkbox' id='planarchi' name='planarchi' value='OUI'>Plan Archi</label></div><div class='checkbox'><label class='form-check-label' for='planindividuelap'><input class='form-check-input' type='checkbox' id='planindividuelap' name='planindividuelap' value='OUI' >Plan individuel des appartements</label></div><div class='checkbox'><label class='form-check-label' for='autorisationbail'><input class='form-check-input' type='checkbox' id='autorisationbail' name='autorisationbail' value='OUI' >Autorisation de bail (avec autorisation de ceder) </label></div><div class='checkbox'><label class='form-check-label' for='deliberationind'><input class='form-check-input' type='checkbox' id='deliberationind' name='deliberationind' value='OUI'>Deliberation individuelle</label></div><div class='checkbox'><label class='form-check-label' for='attestbail'><input class='form-check-input' type='checkbox' id='attestbail' name='attestbail' value='OUI'>Attestation de bail</label></div><div  class='checkbox'><label class='form-check-label' for='procceder'><input class='form-check-input' type='checkbox' id='procceder' name='procceder' value='OUI'>Procuration de ceder</label></div></div>")
        }
        if($('#typeservices').val() == 2){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>Titre de propriété<br>( S'il na pas le titre, fournir un document pouvant être légaliser et fourni à la SDE ou la SENELEC)</label><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI' >CNI </label></div><div class='checkbox'><label class='form-check-label' for='autresdoc'><input class='form-check-input' type='checkbox' id='autresdoc' name='autresdoc' value='OUI'>Autres documents</label></div></div>")
        }
        if($('#typeservices').val() == 3){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='cnibailleur'></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='plansite'><input class='form-check-input' type='checkbox' id='plansite' name='plansite' value='OUI'>Plan du site</label></div><div class='checkbox'><label class='form-check-label' for='etatdroitreel'><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI'>Etats de droits reels</label></div><div class='checkbox'><label class='form-check-label' for='Autres elements de procedures'><input class='form-check-input' type='checkbox' id='autreselemproc' name='autreselemproc' value='OUI'>Autres elements de procedure</label></div></div>")
        }
        if($('#typeservices').val() == 4){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>Titre de propriété<br>( S'il na pas le titre, fournir un document <br>pouvant être légaliser <br>et fourni à la SDE ou la SENELEC)</label><div class='checkbox'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='autresdoc'><input class='form-check-input' type='checkbox' id='autresdoc' name='autresdoc' value='OUI'>Autres documents</label></div></div>")
        }
        if($('#typeservices').val() == 5){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='cnibailleur'></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='plansite'><input class='form-check-input' type='checkbox' id='plansite' name='plansite' value='OUI'>Plan du site</label></div><div class='checkbox'><label class='form-check-label' for='etatdroitreel'><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI'>Etats de droits reels</label></div><div class='checkbox'><label class='form-check-label' for='Autres elements de procedures'><input class='form-check-input' type='checkbox' id='autreselemproc' name='autreselemproc' value='OUI'>Autres elements de procedure</label></div></div>")
        }
        if($('#typeservices').val() == 6){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='titreprop'></div><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>titre de propriété</label></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='delibcommune'><input class='form-check-input' type='checkbox' id='delibcommune' name='delibcommune' value='OUI'>Delibération au niveau des communes</label></div><div class='checkbox'><label class='form-check-label' for='plangeometre'><input class='form-check-input' type='checkbox' id='plangeometre' name='plangeometre' value='OUI'>Plan Géomètre agréé par l'Etat</label></div><div class='checkbox'><label class='form-check-label' for='plancadastral'><input class='form-check-input' type='checkbox' id='plancadastral' name='plancadastral' value='OUI'>Plan caastral</label></div><div class='checkbox'><label class='form-check-label' for='demandebailrec'><input class='form-check-input' type='checkbox' id='demandebailrec' name='demandebailrec' value='OUI'>Demande de bail adressé au receveur de <br>domaine competent</label></div><div class='checkbox'><label class='form-check-label' for='exemplaires'><input class='form-check-input' type='checkbox' id='exemplaires' name='exemplaires' value='OUI'>Tous les dossiers en 5 exemplaires</label></div></div>")
        }
        if($('#typeservices').val() == 7 || $('#typeservices').val() == 8 ||  $('#typeservices').val() == 9 || $('#typeservices').val() == 10 ||  $('#typeservices').val() == 11 || $('#typeservices').val() == 12 || $('#typeservices').val() == 13 || $('#typeservices').val() == 14 || $('#typeservices').val() == 15 || $('#typeservices').val() == 16 || $('#typeservices').val() == 17 || $('#typeservices').val() == 20 || $('#typeservices').val() == 21 || $('#typeservices').val() == 22 || $('#typeservices').val() == 24 || $('#typeservices').val() == 25 || $('#typeservices').val() == 26 || $('#typeservices').val() == 27){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='cnibailleur'></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='plansite'><input class='form-check-input' type='checkbox' id='plansite' name='plansite' value='OUI'>Plan du site</label></div><div class='checkbox'><label class='form-check-label' for='etatdroitreel'><input class='form-check-input' type='checkbox' id='etatdroitreel' name='etatdroitreel' value='OUI'>Etats de droits reels</label></div><div class='checkbox'><label class='form-check-label' for='Autres elements de procedures'><input class='form-check-input' type='checkbox' id='autreselemproc' name='autreselemproc' value='OUI'>Autres elements de procedure</label></div></div>")
        }
        if($('#typeservices').val() == 18){
            $('#collabor').html("<div class='input-group mg-b-15'><span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='row'><div class='col-lg-6'><div class='checkbox'><label class='form-check-label' for='demandeautmaire'><input class='form-check-input' type='checkbox' id='demandeautmaire' name='demandeautmaire' value='OUI'>Demande autorisation adressée au maire</label></div><div class='checkbox'><label class='form-check-label' for='plansituation'><input class='form-check-input' type='checkbox' id='plansituation' name='plansituation' value='OUI'>PLAN DE SITUATION ET DE DELIMITATION <br>DU TERRAIN CERTIFIE PAR LE CADASTRE</label></div> <div class='checkbox'><label class='form-check-label' for='jeuxcons'><input class='form-check-input' type='checkbox' id='jeuxcons' name='jeuxcons' value='OUI'>CINQ JEUX DE PLAN DE CONSTRUCTION</label></div><div class='checkbox'><label class='form-check-label' for='ficherenseign'><input class='form-check-input' type='checkbox' id='ficherenseign' name='ficherenseign' value='OUI'>Fiche de renseignement</label></div><div class='checkbox'><label class='form-check-label' for='devisestim'><input class='form-check-input' type='checkbox' id='devisestim' name='devisestim' value='OUI' >Devis Estimatif</label></div><div class='checkbox'><label class='form-check-label' for='timbrefisc'><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI'>Timbre fiscal</label></div><div class='checkbox'><label class='form-check-label' for='enveloppe'><input class='form-check-input' type='checkbox' id='enveloppe' name='enveloppe' value='OUI' >Enveloppe</label></div><div class='checkbox'><label class='form-check-label' for='demandeminurb'><input class='form-check-input' type='checkbox' id='demandeminurb' name='demandeminurb' value='OUI'>Demande manuscrite adressé <br>au ministère de l'urbanisme</label></div> </div><div class='col-lg-6'><div class='checkbox'><label class='form-check-label' for='taxesmunicip'><input class='form-check-input' type='checkbox' id='taxesmunicip' name='taxesmunicip' value='OUI'>Taxes municipales</label></div><div class='checkbox'><label class='form-check-label' for='taxesurbanism'><input class='form-check-input' type='checkbox' id='taxesurbanism' name='taxesurbanism' value='OUI'>Taxes urbanisme</label></div><div class='checkbox'><label class='form-check-label' for='rapportpres'><input class='form-check-input' type='checkbox' id='rapportpres' name='rapportpres' value='OUI'>Rapport de présentation</label></div><div class='checkbox'><label class='form-check-label' for='planmorcel'><input class='form-check-input' type='checkbox' id='planmorcel' name='planmorcel' value='OUI' >Plan de morcellement</label></div><div class='checkbox'><label class='form-check-label' for='cdnum'><input class='form-check-input' type='checkbox' id='cdnum' name='cdnum' value='OUI'>5 CD Numerique</label></div><div class='checkbox'><label class='form-check-label' for='cditem'><input class='form-check-input' type='checkbox' id='cditem' name='cditem' value='OUI' >1 CD ITM</label></div><div class='checkbox'><label class='form-check-label' for='timbrefisc'><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI' >Timbre Fiscal</label></div><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI' >Titre de Propriété</label></div><div class='checkbox'><label class='form-check-label' for='timbrevar'><input class='form-check-input' type='checkbox' id='timbrevar' name='timbrevar' value='OUI'>Timbre variant en foction des zones</label></div><div class='checkbox'><label class='form-check-label' for='cahiercharge'><input class='form-check-input' type='checkbox' id='cahiercharge' name='cahiercharge' value='OUI' >Cahier Charge</label></div></div></div></div>")
        }
        if($('#collaboration').val() == 19){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>Titre de propriété</label></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI </label></div><div class='checkbox'><label class='form-check-label' for='moyenspreuv'><input class='form-check-input' type='checkbox' id='moyenspreuv' name='moyenspreuv' value='OUI'>Moyens Preuve</label></div><div class='checkbox'><label class='form-check-label' for='autdemolir'><input class='form-check-input' type='checkbox' id='autdemolir' name='autdemolir' value='OUI' >Autorisation de démolir</label></div></div>")
        }
        if($('#typeservices').val() == 23){
            $('#collabor').html("<div class='input-group mg-b-15'><span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='row'><div class='col-lg-6'><div class='checkbox'><label class='form-check-label' for='demandeautmaire'><input class='form-check-input' type='checkbox' id='demandeautmaire' name='demandeautmaire' value='OUI'>Demande autorisation adressée au maire</label></div><div class='checkbox'><label class='form-check-label' for='plansituation'><input class='form-check-input' type='checkbox' id='plansituation' name='plansituation' value='OUI'>PLAN DE SITUATION ET DE DELIMITATION <br>DU TERRAIN CERTIFIE PAR LE CADASTRE</label></div> <div class='checkbox'><label class='form-check-label' for='jeuxcons'><input class='form-check-input' type='checkbox' id='jeuxcons' name='jeuxcons' value='OUI'>CINQ JEUX DE PLAN DE CONSTRUCTION</label></div><div class='checkbox'><label class='form-check-label' for='ficherenseign'><input class='form-check-input' type='checkbox' id='ficherenseign' name='ficherenseign' value='OUI'>Fiche de renseignement</label></div><div class='checkbox'><label class='form-check-label' for='devisestim'><input class='form-check-input' type='checkbox' id='devisestim' name='devisestim' value='OUI' >Devis Estimatif</label></div><div class='checkbox'><label class='form-check-label' for='timbrefisc'><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI'>Timbre fiscal</label></div><div class='checkbox'><label class='form-check-label' for='enveloppe'><input class='form-check-input' type='checkbox' id='enveloppe' name='enveloppe' value='OUI' >Enveloppe</label></div><div class='checkbox'><label class='form-check-label' for='demandeminurb'><input class='form-check-input' type='checkbox' id='demandeminurb' name='demandeminurb' value='OUI'>Demande manuscrite adressé <br>au ministère de l'urbanisme</label></div> </div><div class='col-lg-6'><div class='checkbox'><label class='form-check-label' for='taxesmunicip'><input class='form-check-input' type='checkbox' id='taxesmunicip' name='taxesmunicip' value='OUI'>Taxes municipales</label></div><div class='checkbox'><label class='form-check-label' for='taxesurbanism'><input class='form-check-input' type='checkbox' id='taxesurbanism' name='taxesurbanism' value='OUI'>Taxes urbanisme</label></div><div class='checkbox'><label class='form-check-label' for='rapportpres'><input class='form-check-input' type='checkbox' id='rapportpres' name='rapportpres' value='OUI'>Rapport de présentation</label></div><div class='checkbox'><label class='form-check-label' for='planmorcel'><input class='form-check-input' type='checkbox' id='planmorcel' name='planmorcel' value='OUI' >Plan de morcellement</label></div><div class='checkbox'><label class='form-check-label' for='cdnum'><input class='form-check-input' type='checkbox' id='cdnum' name='cdnum' value='OUI'>5 CD Numerique</label></div><div class='checkbox'><label class='form-check-label' for='cditem'><input class='form-check-input' type='checkbox' id='cditem' name='cditem' value='OUI' >1 CD ITM</label></div><div class='checkbox'><label class='form-check-label' for='timbrefisc'><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI' >Timbre Fiscal</label></div><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI' >Titre de Propriété</label></div><div class='checkbox'><label class='form-check-label' for='timbrevar'><input class='form-check-input' type='checkbox' id='timbrevar' name='timbrevar' value='OUI'>Timbre variant en foction des zones</label></div><div class='checkbox'><label class='form-check-label' for='cahiercharge'><input class='form-check-input' type='checkbox' id='cahiercharge' name='cahiercharge' value='OUI' >Cahier Charge</label></div></div></div></div>")
        }
        if($('#typeservices').val() == 28 || $('#typeservices').val() == 33){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='cnibailleur'></div><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>Titre de proriété</label></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='heritiers'><input class='form-check-input' type='checkbox' id='heritiers' name='heritiers' value='OUI'>Liste des Heritiers</label></div><div class='checkbox'><label class='form-check-label' for='certifnonop'><input class='form-check-input' type='checkbox' id='certifnonop' name='certifnonop' value='OUI'>Certificat de non opposition ni appel</label></div><div class='checkbox'><label class='form-check-label' for='certifdeces'><input class='form-check-input' type='checkbox' id='certifdeces' name='certifdeces' value='OUI'>Certificat de décès du proprietaire</label></div><div class='checkbox'><label class='form-check-label' for='jugement'><input class='form-check-input' type='checkbox' id='jugement' name='jugement' value='OUI'>Jugement d'hérédité/label></div><div class='checkbox'><label class='form-check-label' for='certifdeces'><input class='form-check-input' type='checkbox' id='mutation' name='mutation' value='OUI'>Mutation après décès </label></div></div>")
        }
        if($('#typeservices').val() == 29){
            $('#collabor').html("<div class='input-group mg-b-15'><span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='row'><div class='col-lg-6'><div class='checkbox'><label class='form-check-label' for='demandeautmaire'><input class='form-check-input' type='checkbox' id='demandeautmaire' name='demandeautmaire' value='OUI'>Demande autorisation adressée au maire</label></div><div class='checkbox'><label class='form-check-label' for='plansituation'><input class='form-check-input' type='checkbox' id='plansituation' name='plansituation' value='OUI'>PLAN DE SITUATION ET DE DELIMITATION <br>DU TERRAIN CERTIFIE PAR LE CADASTRE</label></div> <div class='checkbox'><label class='form-check-label' for='jeuxcons'><input class='form-check-input' type='checkbox' id='jeuxcons' name='jeuxcons' value='OUI'>CINQ JEUX DE PLAN DE CONSTRUCTION</label></div><div class='checkbox'><label class='form-check-label' for='ficherenseign'><input class='form-check-input' type='checkbox' id='ficherenseign' name='ficherenseign' value='OUI'>Fiche de renseignement</label></div><div class='checkbox'><label class='form-check-label' for='devisestim'><input class='form-check-input' type='checkbox' id='devisestim' name='devisestim' value='OUI' >Devis Estimatif</label></div><div class='checkbox'><label class='form-check-label' for='timbrefisc'><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI'>Timbre fiscal</label></div><div class='checkbox'><label class='form-check-label' for='enveloppe'><input class='form-check-input' type='checkbox' id='enveloppe' name='enveloppe' value='OUI' >Enveloppe</label></div><div class='checkbox'><label class='form-check-label' for='demandeminurb'><input class='form-check-input' type='checkbox' id='demandeminurb' name='demandeminurb' value='OUI'>Demande manuscrite adressé <br>au ministère de l'urbanisme</label></div> </div><div class='col-lg-6'><div class='checkbox'><label class='form-check-label' for='taxesmunicip'><input class='form-check-input' type='checkbox' id='taxesmunicip' name='taxesmunicip' value='OUI'>Taxes municipales</label></div><div class='checkbox'><label class='form-check-label' for='taxesurbanism'><input class='form-check-input' type='checkbox' id='taxesurbanism' name='taxesurbanism' value='OUI'>Taxes urbanisme</label></div><div class='checkbox'><label class='form-check-label' for='rapportpres'><input class='form-check-input' type='checkbox' id='rapportpres' name='rapportpres' value='OUI'>Rapport de présentation</label></div><div class='checkbox'><label class='form-check-label' for='planmorcel'><input class='form-check-input' type='checkbox' id='planmorcel' name='planmorcel' value='OUI' >Plan de morcellement</label></div><div class='checkbox'><label class='form-check-label' for='cdnum'><input class='form-check-input' type='checkbox' id='cdnum' name='cdnum' value='OUI'>5 CD Numerique</label></div><div class='checkbox'><label class='form-check-label' for='cditem'><input class='form-check-input' type='checkbox' id='cditem' name='cditem' value='OUI' >1 CD ITM</label></div><div class='checkbox'><label class='form-check-label' for='timbrefisc'><input class='form-check-input' type='checkbox' id='timbrefisc' name='timbrefisc' value='OUI' >Timbre Fiscal</label></div><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI' >Titre de Propriété</label></div><div class='checkbox'><label class='form-check-label' for='timbrevar'><input class='form-check-input' type='checkbox' id='timbrevar' name='timbrevar' value='OUI'>Timbre variant en foction des zones</label></div><div class='checkbox'><label class='form-check-label' for='cahiercharge'><input class='form-check-input' type='checkbox' id='cahiercharge' name='cahiercharge' value='OUI' >Cahier Charge</label></div></div></div></div>")
        }
        if($('#typeservices').val() == 30){
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='cnibailleur'></div><div class='checkbox'><label class='form-check-label' for='docbail'><input class='form-check-input' type='checkbox' id='docbail' name='docbail' value='OUI'>Dossier de Bail ou titre foncier</label></div> <div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>Titre de propriété ou etat de droit reel</label></div><div class='checkbox'><label class='form-check-label' for='plancadastre'><input class='form-check-input' type='checkbox' id='plancadastre' name='plancadastre' value='OUI'>Plan cadastre</label></div><div class='checkbox'><label class='form-check-label' for='plancons'><input class='form-check-input' type='checkbox' id='plancons' name='plancons' value='OUI'>Plan de construction signé par un architecte</label></div><div class='checkbox'><label class='form-check-label' for='demandeautmaire'><input class='form-check-input' type='checkbox' id='demandeautmaire' name='demandeautmaire' value='OUI'>Demande adressé au maire</label></div><div class='checkbox'><label class='form-check-label' for='fichetechnique'><input class='form-check-input' type='checkbox' id='fichetechnique' name='fichetechnique' value='OUI'>fiche technique</label></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='gmail'><input class='form-check-input' type='checkbox' id='gmail' name='gmail' value='OUI'>Adresse Gmail</label></div><div class='checkbox'><label class='form-check-label' for='recurb'><input class='form-check-input' type='checkbox' id='recurb' name='recurb' value='OUI'>Recu de paiement taxe urbanisme</label></div><div class='checkbox'><label class='form-check-label' for='recucons'><input class='form-check-input' type='checkbox' id='recucons' name='recucons' value='OUI'>Recu paiement construction au niveau de la commune</label></div></div>")
        }
        if($('#typeservices').val() == 31){
            console.log("ok")
            $('#collabor').html("<div class='input-group mg-b-15'><span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='planarchi'><input class='form-check-input' type='checkbox' id='planarchi' name='planarchi' value='OUI'>Plan Archi</label></div><div class='checkbox'><label class='form-check-label' for='planbetonarme'><input class='form-check-input' type='checkbox' id='planbetonarme' name='planbetonarme' value='OUI'>Plan Beton armé</label></div><div class='checkbox'><label class='form-check-label' for='planelec'><input class='form-check-input' type='checkbox' id='planelec' name='planelec' value='OUI'>Plan Electricité</label></div><div class='checkbox'><label class='form-check-label' for='planplomberie'><input class='form-check-input' type='checkbox' id='planplomberie' name='planplomberie' value='OUI'>Plan Plomberie</label></div><div class='checkbox'><label class='form-check-label' for='autorisationcons'><input class='form-check-input' type='checkbox' id='autorisationcons' name='autorisationcons' value='OUI'>Autorisation de construire</label></div><div class='checkbox'><label class='form-check-label' for='fichinsctechnique'><input class='form-check-input' type='checkbox' id='fichinsctechnique' name='fichinsctechnique' value='OUI'>Fiche d'inscription technique</label></div><div class='checkbox'><label class='form-check-label' for='cahierdesctechnique'><input class='form-check-input' type='checkbox' id='cahierdesctechnique' name='cahierdesctechnique' value='OUI' >Cahier de decription technique</label></div><div class='checkbox'><label class='form-check-label' for='demandeautmaire'><input class='form-check-input' type='checkbox' id='demandeautmaire' name='demandeautmaire' value='OUI'>Demande autorisation adressée au maire</label></div><div class='checkbox'><label class='form-check-label' for='etudefinancement'><input class='form-check-input' type='checkbox' id='etudefinancement' name='etudefinancement' value='OUI'>Etude de financement</label></div><div class='checkbox'><label class='form-check-label' for='autre'><input class='form-check-input' type='checkbox' id='autre' name='autre' value='autre'>Autre</label></div></div>")
        }
        if($('#typeservices').val() == 32){
            console.log("ok")
            $('#collabor').html("<div class='input-group mg-b-15'> <span class='input-group-addon'><strong>Avez vous les elements suivants</strong></span><div class='checkbox'><label class='form-check-label' for='titreprop'><input class='form-check-input' type='checkbox' id='titreprop' name='titreprop' value='OUI'>titre de propriété</label></div><div class='checkbox'><label class='form-check-label' for='cnibailleur'><input class='form-check-input' type='checkbox' id='cnibailleur' name='cnibailleur' value='OUI'>CNI</label></div><div class='checkbox'><label class='form-check-label' for='preuverealpeine'><input class='form-check-input' type='checkbox' id='preuverealpeine' name='preuverealpeine' value='OUI'>DONNER PREUVE RÉALISATION DES PEINES ET SOINS</label></div><div class='checkbox'><label class='form-check-label' for='plangeometre'><input class='form-check-input' type='checkbox' id='plangeometre' name='plangeometre' value='OUI' >Plan geometre</label></div><div class='checkbox'><label class='form-check-label' for='programimetat'><input class='form-check-input' type='checkbox' id='programimetat' name='programimetat' value='OUI' >PROGRAMME IMMOBILIER A SOUMETTRE A L'ETAT</label></div><div class='checkbox'><label class='form-check-label' for='demandebailrec'><input class='form-check-input' type='checkbox' id='demandebailrec' name='demandebailrec' value='OUI'>DEMANDE DE BAIL ADRESSE AU RECEVEUR <br>DE DOMAINE COMPETENT</label></div><div class='checkbox'><label class='form-check-label' for='delibcommune'><input class='form-check-input' type='checkbox' id='delibcommune' name='delibcommune' value='OUI' >DELIBERATION AU NIVEAU DES COMMUNES</label></div><div class='checkbox'><label class='form-check-label' for='exemplaires'><input class='form-check-input' type='checkbox' id='exemplaires' name='exemplaires' value='OUI'>TOUS LES DOSSIERS EN 4 EXEMPLAIRES</label></div></div>")
        }
        if($('#typeservices').val() == 34){
            console.log("ok")
            $('#collabor').html("<div class='input-group mg-b-15'><span class='input-group-addon'><i class='fa fa-envelope' aria-hidden='true'></i></span><input type='text' class='form-control' name='autre' placeholder='Prècisez'></div>")
        }
    })
})