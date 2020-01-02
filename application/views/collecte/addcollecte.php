
       <!-- Single pro tab start-->
       <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Bien Bati</a></li> 
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <form method="POST" action="<?php echo base_url();?>index.php/Collecte/save" enctype="multipart/form-data">   
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                                            <input required type="text" class="form-control" name="nom" placeholder="Nom du Proprétaire">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="prenom" placeholder="prenom du proprietaire">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="tel" placeholder="prenom du proprietaire">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-mail" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="email" placeholder="email du proprietaire">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-address" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="adressesen" placeholder="adresse au senegal">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="nomrep" placeholder="nom du représenatnt">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="telrep" placeholder="téléphone du représenatnt">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="emailrep" placeholder="email du représenatnt">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="adresserep" placeholder="adresse du représenatnt">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <select class="form-control"name="zone" id="zone">
                                                            <option value="">selectionez la zone</option>
                                                                <?php
                                                                foreach ($zone as $z)
                                                                {
                                                                    echo"<option value='$z->idZone'> $z->libelle</option>";
                                                                }
                                                                ?>
                                                           
                                                            </select>
                                                        </div>       
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <select  class="form-control" name="nature" id="nature">
                                                            <option value="">SELECTIONNEZ LA NATURE JURIDIQUE</option>
                                                            <option value="TF Prive">titre foncier prive</option>
                                                            <option value="TF Etat">Titre foncier etat</option>
                                                            <option value="Bail">Bail</option>
                                                            <option value="Attestation de Bail">Attestation de Bail</option>
                                                            <option value="Delibere">Delibere</option>
                                                            <option value="Titre Etat">Titre Etat</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="adresse" placeholder="Localisation du produit">
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" name="broutep" value="Bordure Route Principale">
                                                                <label class="form-check-label" for="broutep" >Bordure Route Principale</label>
                                                                <input type="checkbox" class="form-check-input" name="broute" value="Bordure Route">
                                                                <label class="form-check-label" for="broute">Bordure Route </label>
                                                                <input type="checkbox" class="form-check-input" name="angle" value="Angle">
                                                                <label class="form-check-label" for="angle">Angle</label>
                                                                <input type="checkbox" class="form-check-input" name="loinmarche" value="Loin du Marche">
                                                                <label class="form-check-label" for="loinmarche">loin du Marche</label>
                                                                <input type="checkbox" class="form-check-input" name="presmarche" value="Pres du Marche">
                                                                <label class="form-check-label" for="presmarche">Près du marché</label>
                                                                <input type="checkbox" class="form-check-input" name="loinculte" value="Loin d'un culte">
                                                                <label class="form-check-label" for="loinculte">Loin d'un lieu culte</label>
                                                                <input type="checkbox" class="form-check-input" name="presculte" value="Pres d'un lieu culte">
                                                                <label class="form-check-label" for="presculte">Près d'un lieu culte</label>
                                                                <input type="checkbox" class="form-check-input" name="loinecole" value="Loin d'une ecole">
                                                                <label class="form-check-label" for="loinecole">Loin d'un ecole</label>
                                                                <input type="checkbox" class="form-check-input" name="presecole" value="Pres d'une ecole">
                                                                <label class="form-check-label" for="presecole">Près d'une ecole</label>
                                                            </div>
                                                            <span class="input-group-addon"><i class="fa fa-adresse" aria-hidden="true"></i></span>
                                                            <select  class="form-control" name="positionnement" id="positionnement">
                                                            <option value="">position de votre bien</option>
                                                            <option value="Bordure Route Principale">Bordure Route Principale</option>
                                                            <option value="Bordure Route">Bordure Route</option>
                                                            <option value="Angle">Angle</option>
                                                            <option value="Loin du Marche">Loin du Marche</option>
                                                            <option value="Loin d'un lieu culte">Loin d'un lieu culte</option>
                                                            <option value="Pres d'un lieu culte">Pres d'un lieu culte</option>
                                                            <option value="Loin d'un ecole">Loin d'un ecole</option>
                                                            <option value="Pres d'un ecole">Pres d'un ecole</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-adresse" aria-hidden="true"></i></span>
                                                            <select class="form-control" name="usagebienbati" id="usagebienbati">
                                                            <option value="">Usage du bien</option>
                                                            <option value="usage d'habitation">usage d'habitation</option>
                                                            <option value="usage professionnelle">usage professionnelle</option>
                                                            <option value="Autre">Autre</option>
                                                           
                                                            </select>
                                                        </div>
                                                       
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <select class="form-control"name="typebienbati" id="typebienbati">
                                                            <option value="">selectionez le type de bien bati</option>
                                                                <?php
                                                                foreach ($type as $t)
                                                                {
                                                                    echo"<option value='$t->idtypebien'> $t->libelletype</option>";
                                                                }
                                                                ?>
                                                           
                                                            </select>
                                                        </div>
                                                        <div id="nbpieces">
                                                            
                                                        </div>
                                                        <div class="nbsalledebain">
                                                            
                                                        </div>
                                                        <div id="nbtoilettes">
                                                            
                                                        </div>
                                                        <div id="jardin">
                                                            
                                                        </div>
                                                        <div id="nbgarage">
                                                            
                                                        </div>
                                                        <div id="typecuisine">
                                                            
                                                        </div>
                                                        <div id="cours">
                                                            
                                                        </div>
                                                        <div id="piscine">
                                                            
                                                        </div>
                                                        <div id="typeimmeuble">
                                                            
                                                        </div>
                                                        <div id="sitstudio">
                                                            
                                                        </div>
                                                        <div id="autreinfos">
                                                            
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <select  class='form-control' name="collaboration" id="collaboration">
                                                            <option value="">Type de collaboration avec CPI</option>
                                                                <?php
                                                                foreach ($collaboration as $c)
                                                                {
                                                                    echo"<option value='$c->idc'> $c->libellec</option>";
                                                                }
                                                                ?>
                                                           
                                                            </select>
                                                        </div>
                                                        <div id="collabor">
                                                            
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-document" aria-hidden="true"></i></span>
                                                            <input required type="file" class="form-control" name="document[]" multiple="" >
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <input type="hidden" class="form-control" name="utilisateur" >
                                                        </div>
                                             
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Ajouter 
                                                                        </button>
                                                                    <button type="Reset" class="btn btn-warning waves-effect waves-light">Annuler
                                                                        </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                    </div>
                                    <script src="<?php echo base_url();?>public/js/collecte.js"></script>
                                    
                                   
                                                    
                                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
   
        
       