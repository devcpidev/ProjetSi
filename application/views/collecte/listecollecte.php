                                
                                

        <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Collecte</h4>
                            <div class="add-product">
                                <a href="<?php echo base_url();?>index.php/Collecte/add">Collecter</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Numero du dossier</th>
                                    <th>Date Collecte</th>
                                    <th>Adresse précise du bien</th>
                                    <th>Nature juridique du bien</th>
                                    <th>Type du bien</th>
                                    <th>Collaboration avec cpi</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach($infos as $i){ ?>
                                    <tr>
                                        <td><?php echo  $i->numdossier; ?></td>
                                        <td><?php echo  $i->datecollecte; ?></td>
                                        <td><?php echo  $i->adresse; ?></td>
                                        <td><?php echo $i->nature; ?></td>
                                        <td><?php echo  $i->libelletype; ?></td>
                                        <td><?php echo  $i->libellec; ?></td>
                                       
                                        <td class="actions" style="width: 1%; text-align: center; white-space: nowrap">
                                        <button class="btn btn-primary detail" data-toggle="modal" data-target="#myModal" id="<?php echo  $i->numdossier; ?>" >Voir plus</button>
                                        <a href="<?php echo base_url();?>index.php/Collecte/download?numdossier=<?php echo $i->numdossier?>">download</a>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#modal_update" id="<?php echo  $i->utilisateur; ?>" > <i class="fa fa-edit fa-lg"></i></button>
                                        <button class="btn btn-danger" type="submit" value=""action="deleteUser" id="<?php echo  $i->utilisateur; ?>"> <i class="fa fa-edit fa-trash"></i></button>
                                        </td>
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
                    <p > <strong>Nombre de pieces</strong></p>
                    <p id="nbpieces"></p>
                    <p > <strong>Nombre de salle de bains</strong></p>
                    <p id="nbsalledebain"></p>
                    <p > <strong>Positionnement du bien</strong></p>
                    <p id="loinculte"></p>
                    <p id="presculte"></p>
                    <p id="loinmarche"></p>
                    <p id="presmarche"></p>
                    <p id="loinecole"></p>
                    <p id="preecole"></p>
                    <p id="broutep"></p>
                    <p id="broute"></p>
                    <p id="angle"></p></div>
                </div>
             </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                                        
  <script src="<?php echo base_url();?>public/js/detail.js"></script>