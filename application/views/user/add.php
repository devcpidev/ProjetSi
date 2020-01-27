
       <!-- Single pro tab start-->
       <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Ajouter Utilisateur</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                <form method="post" action="<?php echo base_url(); ?>index.php/User/save" ">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="nom" placeholder="nom">
                                                    </div>
                                                   
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="adresse" placeholder="adresse">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="tel" placeholder="Telephone">
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="prenom" placeholder="prenom">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" name="password" placeholder="mot de passe">
                                                    </div>
                                                    
                                                   
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <select name="profil" class="form-control" required>
                                             <option value="" >Choisir Profil</option>
                                                   <?php
                                                                    foreach ($profils as $pub)
                                                                    {
                                                                        ?>
                                                                        <option value="<?php echo $pub->idProfil; ?>"> <?php echo $pub->libelle; ?> </option>
                                                                        <?php
                                                                    }


                                                                    ?>
                                                                </select>
                                            </div>
                                        </div>
                                        </br>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <input type="submit" class="btn btn-primary waves-effect waves-light m-r-10" value="Ajouter">
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">Annuler
														</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   </form>
                                                    
                                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
   