<!-- Single pro tab start-->
<div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
<div class="single-pro-review-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-tab-pro-inner">
    <ul id="myTab3" class="tab-review-design">
        <li class="active"><a href="#DEPARTEMENT" >Département</a></li>

        <li><a href="#SERVICE"> Service</a></li>

        <li><a href="#ZONE">Zone</a></li>

        <li><a href="#REGION"></i>Région</a></li>

        <li><a href="#BUREAU">Bureau</a></li>

        <li><a href="#DEPARTEMENTCPI">Département CPI</a></li>

        <li><a href="#TYPEPRODUIT">Type produit</a></li>

        <li><a href="#TYPEZONE">Type Zone</a></li>

    </ul>

    <?php
            if ($this->session->flashdata('success_msg')) { ?>
              <div class="alert alert-success">
                <?php echo $this->session->flashdata('success_msg'); ?>
              </div>
          <?php
            }
          ?>

          <?php
            if ($this->session->flashdata('error_msg')) { ?>
              <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error_msg'); ?>
              </div>
          <?php
            }
          ?>

    <div id="myTabContent" class="tab-content custom-product-edit">
        <div class="product-tab-list tab-pane fade active in" id="description">
            <div class="row"></div>
        </div>
        <div class="product-tab-list tab-pane fade" id="DEPARTEMENT">
            <div class="product-status mg-tb-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-status-wrap">
                                <h4>Liste des Départements</h4>
                                <div class="add-product">
                                   
                            
                               
                                <a class="Alert Alert-color" href="#" data-toggle="modal" data-target="#AlertModalhdbgcl">Ajouter </a>
                        
                                </div>
                                <table>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Libellé</th>
                                        <th>Région</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        if (isset($depts))
                                        {

                                            if ($depts != null)
                                            {
                                                foreach ($depts as $pub)
                                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $pub->idDepartement ;?></td>
                                        <td><?php echo $pub->departement_name ;?></td>
                                        <td><?php echo $pub->libelle ;?></td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="<?php echo base_url('index.php/organisation/deleteDepartement/'.$pub->idDepartement);?>" data-toggle="tooltip" title="Suprimer" class="btn btn-danger"><i class="fa fa-trash-o" onClick="return confirm('Voulez vous variment supprimer cet enregistrement ?')"></i></a>
                                        </td>

                                    </tr>
                                    <?php
                                        }
                                            }
                                            else
                                            {
                                                echo "Liste vide";
                                            }
                                        }
                                    ?>
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
        </div>

        <div class="product-tab-list tab-pane fade" id="DEPARTEMENTCPI">
            <div class="product-status mg-tb-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-status-wrap">
                                <h4>Liste des Départements de CPI</h4>
                                <div class="add-product">
                                    <a href="#" data-toggle="modal" data-target="#addDept">Ajouter</a>
                                </div>
                                <table>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Libellé</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                if (isset($cpidepts))
                                {

                                    if ($cpidepts != null)
                                    {


                                        foreach ($cpidepts as $pub)
                                        {
                                ?>
                                <tr>
                                    <td><?php echo $pub->idDept; ?></td>
                                    <td><?php echo $pub->libelle ;?></td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="<?php echo base_url('index.php/organisation/deleteDeptCpi/'.$pub->idDept);?>" data-toggle="tooltip" title="Suprimer" class="btn btn-danger"><i class="fa fa-trash-o" onClick="return confirm('Voulez vous variment supprimer cet enregistrement ?')"></i></a>
                                    </td>
                                </tr>
                                <?php
                                    }

                                        }
                                        else
                                        {
                                            echo "Liste vide";
                                        }
                                    }

                                ?>
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
        </div>

        <div class="product-tab-list tab-pane fade" id="BUREAU">
            <div class="product-status mg-tb-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-status-wrap">
                                <h4>Liste des Bureaux</h4>
                                <div class="add-product">
                                    <a href="#" data-toggle="modal" data-target="#addBureau">Ajouter</a>
                                </div>
                                <table>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Libellé</th>
                                        <th>Service</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        if (isset($bureaux))
                                        {

                                            if ($bureaux != null)
                                            {
                                                foreach ($bureaux as $pub)
                                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $pub->idBureau ;?></td>
                                        <td><?php echo $pub->libelle ;?></td>
                                        <td><?php echo $pub->service_name ;?></td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="<?php echo base_url('index.php/organisation/deleteBureau/'.$pub->idBureau);?>" data-toggle="tooltip" title="Suprimer" class="btn btn-danger"><i class="fa fa-trash-o" onClick="return confirm('Voulez vous variment supprimer cet enregistrement ?')"></i></a>
                                        </td>

                                    </tr>
                                    <?php
                                        }
                                            }
                                            else
                                            {
                                                echo "Liste vide";
                                            }
                                        }
                                    ?>
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
        </div>

        <div class="product-tab-list tab-pane fade" id="SERVICE">
            <div class="product-status mg-tb-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-status-wrap">
                                <h4>Liste des Services</h4>
                                <div class="add-product">
                                    <a href="#" data-toggle="modal" data-target="#addService">Ajouter</a>
                                </div>
                                <table>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Libellé</th>
                                        <th>Département</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        if (isset($services))
                                        {

                                            if ($services != null)
                                            {
                                                foreach ($services as $pub)
                                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $pub->idService ;?></td>
                                        <td><?php echo $pub->service_name ;?></td>
                                        <td><?php echo $pub->libelle ;?></td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="<?php echo base_url('index.php/organisation/deleteService/'.$pub->idService);?>" data-toggle="tooltip" title="Suprimer" class="btn btn-danger"><i class="fa fa-trash-o" onClick="return confirm('Voulez vous variment supprimer cet enregistrement ?')"></i></a>
                                        </td>

                                    </tr>
                                    <?php
                                        }
                                            }
                                            else
                                            {
                                                echo "Liste vide";
                                            }
                                        }
                                    ?>
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
        </div>

        <div class="product-tab-list tab-pane fade" id="REGION">
            <div class="product-status mg-tb-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-status-wrap">
                                <h4>Liste des Régions</h4>
                                <div class="add-product">
                                    <a href="#" data-toggle="modal" data-target="#addRegion">Ajouter</a>
                                </div>
                                <table>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Libellé</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        if (isset($regions))
                                        {

                                            if ($regions != null)
                                            {
                                                foreach ($regions as $pub)
                                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $pub->idRegion ;?></td>
                                        <td><?php echo $pub->libelle ;?></td>

                                        <td>
                                            <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="<?php echo base_url('index.php/organisation/deleteRegion/'.$pub->idRegion);?>" data-toggle="tooltip" title="Suprimer" class="btn btn-danger"><i class="fa fa-trash-o" onClick="return confirm('Voulez vous variment supprimer cet enregistrement ?')"></i></a>
                                        </td>

                                    </tr>
                                    <?php
                                        }
                                            }
                                            else
                                            {
                                                echo "Liste vide";
                                            }
                                        }
                                    ?>
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
        </div>

        <div class="product-tab-list tab-pane fade" id="ZONE">
            <div class="product-status mg-tb-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-status-wrap">
                                <h4>Liste des Zones</h4>
                                <div class="add-product">
                                    <a href="#" data-toggle="modal" data-target="#addZone">Ajouter</a>
                                </div>
                                <table>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Libellé</th>
                                        <th>Type</th>
                                        <th>Département</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        if (isset($zones))
                                        {

                                            if ($zones != null)
                                            {
                                                foreach ($zones as $pub)
                                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $pub->idZone ;?></td>
                                        <td><?php echo $pub->zone_name ;?></td>
                                        <td><?php echo $pub->libelle ;?></td>
                                        <td><?php echo $pub->departement_name ;?></td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="<?php echo base_url('index.php/organisation/deleteZone/'.$pub->idZone);?>" data-toggle="tooltip" title="Suprimer" class="btn btn-danger"><i class="fa fa-trash-o" onClick="return confirm('Voulez vous variment supprimer cet enregistrement ?')"></i></a>
                                        </td>

                                    </tr>
                                    <?php
                                        }
                                            }
                                            else
                                            {
                                                echo "Liste vide";
                                            }
                                        }
                                    ?>
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
        </div>

        <div class="product-tab-list tab-pane fade" id="TYPEZONE">
            <div class="product-status mg-tb-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-status-wrap">
                                <h4>Liste des types de Zones</h4>
                                <div class="add-product">
                                    <a href="#" data-toggle="modal" data-target="#addTypeZone">Ajouter</a>
                                </div>
                                <table>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Libellé</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        if (isset($typezones))
                                        {

                                            if ($typezones != null)
                                            {
                                                foreach ($typezones as $pub)
                                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $pub->idTypezone ;?></td>
                                        <td><?php echo $pub->libelle ;?></td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="<?php echo base_url('index.php/organisation/deleteTypeZone/'.$pub->idTypezone);?>?action=supprimer&id=<?php echo $pub->idTypezone;?>" data-toggle="tooltip" title="Suprimer" class="btn btn-danger"><i class="fa fa-trash-o" onClick="return confirm('Voulez vous variment supprimer cet enregistrement ?')"></i></a>
                                        </td>

                                    </tr>
                                    <?php
                                        }
                                            }
                                            else
                                            {
                                                echo "Liste vide";
                                            }
                                        }
                                    ?>
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
        </div>

        <div class="product-tab-list tab-pane fade" id="TYPEPRODUIT">
            <div class="product-status mg-tb-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-status-wrap">
                                <h4>Liste des types de produits</h4>
                                <div class="add-product">
                                    <a href="#" data-toggle="modal" data-target="#addTypeProduit">Ajouter</a>
                                </div>
                                <table>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Libellé</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        if (isset($typeproduits))
                                        {

                                            if ($typeproduits != null)
                                            {
                                                foreach ($typeproduits as $pub)
                                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $pub->idTypeProduit ;?></td>
                                        <td><?php echo $pub->libelle ;?></td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="<?php echo base_url('index.php/organisation/deleteTypeProduit/'.$pub->idTypeProduit);?>" data-toggle="tooltip" title="Suprimer" class="btn btn-danger"><i class="fa fa-trash-o" onClick="return confirm('Voulez vous variment supprimer cet enregistrement ?')"></i></a>
                                        </td>

                                    </tr>
                                    <?php
                                        }
                                            }
                                            else
                                            {
                                                echo "Liste vide";
                                            }
                                        }
                                    ?>
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
        </div>

    </div>
</div>
</div>
</div>
</div>
</div>
</div>

    <div class="modal fade" id="addDept" role="dialog"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <p><h4>Enregistrement Département CPI</h4></p>
          </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo base_url('index.php/organisation/saveDeptcpi') ?>">
                <div class="input-group mg-b-15 mg-t-15">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="libelle" placeholder="Libelle">
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
            <div class="modal-footer">
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="addRegion" role="dialog"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <p><h4>Enregistrement Région</h4></p>
          </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo base_url('index.php/organisation/saveRegion') ?>">
                <div class="input-group mg-b-15 mg-t-15">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="libelle" placeholder="Libelle">
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
            <div class="modal-footer">
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="addTypeProduit" role="dialog"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <p><h4>Enregistrement Type produit</h4></p>
          </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo base_url('index.php/organisation/saveTypeProduit') ?>">
                <div class="input-group mg-b-15 mg-t-15">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="libelle" placeholder="Libelle">
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
            <div class="modal-footer">
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="addTypeZone" role="dialog"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <p><h4>Enregistrement Type zone</h4></p>
          </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url('index.php/organisation/saveTypeZone') ?>">
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="libelle" placeholder="Libelle">
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
            <div class="modal-footer">
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="addDepartement" role="dialog"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <p><h4>Enregistrement Département</h4></p>
          </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url('index.php/organisation/saveDepartement') ?>">
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="libelle" placeholder="Libelle">
                    </div>
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <select name="region" class="form-control pro-edt-select form-control-primary " required>
                            <option value="">... Selectionner une région ...</option>
                            <?php
                                foreach($regions as $tab)
                                {
                            ?>
                            <option value="<?php echo $tab->idRegion ;?>"><?php echo $tab->libelle ;?></option>
                            <?php }?>
                        </select>
                    </div>
                    </br>
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
            <div class="modal-footer">
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="addService" role="dialog"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <p><h4>Enregistrement Service</h4></p>
          </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url('index.php/organisation/saveService') ?>">
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="libelle" placeholder="Libelle">
                    </div>
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <select name="departement" class="form-control pro-edt-select form-control-primary " required>
                            <option value="">... Selectionner un Département ...</option>
                            <?php
                                foreach($cpidepts as $tab)
                                {
                            ?>
                            <option value="<?php echo $tab->idDept ;?>"><?php echo $tab->libelle ;?></option>
                            <?php }?>
                        </select>
                    </div>
                    </br>
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
            <div class="modal-footer">
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="addBureau" role="dialog"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <p><h4>Enregistrement Bureau</h4></p>
          </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url('index.php/organisation/saveBureau') ?>">
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="libelle" placeholder="Libelle">
                    </div>
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <select name="service" class="form-control pro-edt-select form-control-primary " required>
                            <option value="">... Selectionner un Service ...</option>
                            <?php
                                foreach($services as $tab)
                                {
                            ?>
                            <option value="<?php echo $tab->idService ;?>"><?php echo $tab->service_name ;?></option>
                            <?php }?>
                        </select>
                    </div>
                    </br>
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
            <div class="modal-footer">
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="addZone" role="dialog"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <p><h4>Enregistrement Zone</h4></p>
          </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url('index.php/organisation/saveZone') ?>">
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="libelle" placeholder="Libelle">
                    </div>
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <select name="type" class="form-control pro-edt-select form-control-primary " required>
                            <option value="">... Selectionner un Type ...</option>
                            <?php
                                foreach($typezones as $tab)
                                {
                            ?>
                            <option value="<?php echo $tab->idTypezone ;?>"><?php echo $tab->libelle ;?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="input-group mg-b-15 mg-t-15">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <select name="departement" class="form-control pro-edt-select form-control-primary " required>
                            <option value="">... Selectionner un Département ...</option>
                            <?php
                                foreach($depts as $tab)
                                {
                            ?>
                            <option value="<?php echo $tab->idDepartement ;?>"><?php echo $tab->departement_name ;?></option>
                            <?php }?>
                        </select>
                    </div>
                    </br>
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
            <div class="modal-footer">
            </div>
        </div>
      </div>
    </div>
<!-- Modals Start-->
<div class="login-form-area adminpro-pd mg-tb-15">
            <div class="container-fluid">
                
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                       
                        
                        <div id="AlertModalhdbgcl" class="modal modal-adminpro-general FullColor-popup-AlertModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-3">
                                        <h4 class="modal-title" >Ajouter departement</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        
                                 <form action="#" id="loginForm">
                            <div class="form-group">
                               
                                <input type="text" placeholder="libelle"  name="username"  class="form-control">
                               
                            </div>
                            <div class="form-group">
                                
                                <input type="text" placeholder="Region"  name="username"  class="form-control">
                               
                            </div>
                            
                            <button class="btn btn-success btn-block loginbtn">Ajouter</button>
                           
                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a href="#">Process</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>