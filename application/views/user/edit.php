
       <!-- Single pro tab start-->
       <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier Utilisateur</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                <form method="post" action="<?php echo base_url(); ?>index.php/User/update" ">
                                <?php

foreach ($user_edit as $pub) {


    ?>
                                   <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                <div class="form-group">
                                                                    <input name="id" type="hidden" class="form-control"
                                                                           value="<?php echo $pub->idUser ?>" required/>
                                                                </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="nom" value="<?php echo $pub->nom ?>">
                                                    </div>
                                                   
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="adresse" value="<?php echo $pub->adresse ?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="tel" value="<?php echo $pub->tel ?>">
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="prenom" value="<?php echo $pub->prenom ?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="email"value="<?php echo $pub->email ?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" name="password" value="<?php echo $pub->password ?>">
                                                    </div>
                                                    
                                                   
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <select name="profil" class="form-control" required>
                                             <option value="<?php echo $pub->profil ?>" ><?php echo $pub->libelle ?></option>
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
                                                    <input type="submit" class="btn btn-primary waves-effect waves-light m-r-10" value="Modifier">
                                                    <button type="button" class="btn btn-warning waves-effect waves-light">Annuler
														</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                                    }
                                                    ?>
                                   </form>
                                                    
                                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
   