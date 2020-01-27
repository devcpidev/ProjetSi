                                
                                

        <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Collecte</h4>
                           
                            <table>
                                <tr>
                                    <th>Numero du dossier</th>
                                    <th>Date Collecte</th>
                                    <th>Adresse précise du bien</th>
                                    <th>Nature juridique du bien</th>
                                    <th>Type du bien</th>
                                    <th>Collaboration avec cpi</th>
                                    <th>Nom du propriétaire</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach($collectes as $i){ ?>
                                    <tr>
                                        <td><?php echo  $i->numdossier; ?></td>
                                        <td><?php echo  $i->datecollecte; ?></td>
                                        <td><?php echo  $i->adresse; ?></td>
                                        <td><?php echo $i->nature; ?></td>
                                        <td><?php echo  $i->libelletype; ?></td>
                                        <td><?php echo  $i->libellec; ?></td>
                                        <td><?php echo  $i->prenom." ".$i->nom; ?></td>
                                       
                                       
                                        <td> <button class="btn btn-primary detail" data-toggle="modal" data-target="#myModal" id="<?php echo  $i->numdossier; ?>" >Voir plus</button></td>
                                        
                                            <?php  if($i->actif==0 && $i->etat==0 ){ ?>
                                                                                     
                                                    <td><a href="<?php echo base_url();?>index.php/Reception/desactiver?idproduit=<?php echo $i->idproduit?>" class="btn btn-info" >  <i class="fa fa-trash"></i></a></td>
                                               
                                            <?php } ?>
                                            <?php  if($i->actif==0 && $i->etat>0 ){ ?>
                                                                                     
                                                 <td><a disabled href="<?php echo base_url();?>index.php/Reception/desactiver?idproduit=<?php echo $i->idproduit?>" class="btn btn-info" >  <i class="fa fa-trash"></i></a></td>
                                                                                
                                            <?php } ?>
                                            <?php  if($i->etat==0 ){ ?>
                                                                                     
                                                 <td><a href="<?php echo base_url();?>index.php/Reception/valider?idproduit=<?php echo $i->idproduit?>" class="btn btn-warning" >  Valider</a></td>
                                                                                
                                            <?php } ?>
                                            <?php  if($i->etat>0 ){ ?>
                                                                                     
                                                <td><button disabled class="btn btn-success">Valider</button></td>
                                                
                                                                                                                    
                                            <?php } ?>
                                           
                                        <td><button class="btn btn-info" data-toggle="modal" data-target="#modal_update" id="<?php echo  $i->utilisateur; ?>" > <i class="fa fa-edit fa-lg"></i></button></td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bien Bati</h4>
        </div>
        <div class="modal-body">
            <div class="row"> 
                <div class="col-lg-4">
                    <p id="nature"></p>
                    <p id="usage"></p>
                    <p id="libelletype"></p>
                    <p id="typeimmeuble"></p>
                    <p > <strong>Nombre de pieces</strong></p>
                    <p id="nbpieces"></p>
                    <p > <strong>Nombre de salle de bains</strong></p>
                    <p id="nbsalledebain"></p>
                    <p > <strong>Jardin</strong></p>
                    <p id="jardin"></p>
                    <p id="garage"></p>
                    <p id="cuisine"></p>
                    <p id="piscine"></p>
                    <p id="buanderie"></p>
                    <p id="balcon"></p>
                    <p id="garage"></p>
                    <p id="ascenseur"></p>
                    <p id="situationiveau"></p>
                    <p > <strong>Positionnement du bien</strong></p>
                    <p id="loinculte"></p>
                    <p id="presculte"></p>
                    <p id="loinmarche"></p>
                    <p id="presmarche"></p>
                    <p id="loinecole"></p>
                    <p id="preecole"></p>
                    <p id="broutep"></p>
                    <p id="broute"></p>
                    <p id="angle"></p>
                </div>
                <div class="col-lg-4">
                     <p id="document1"></p>   
                     <p id="document2"></p>             
                </div>
             </div>
        </div>     
        <div class="modal-footer">
          <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                                        
  <script src="<?php echo base_url();?>public/js/detail.js"></script>