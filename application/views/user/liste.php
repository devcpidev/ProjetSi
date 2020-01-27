
        <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Liste des Utilisateurs</h4>
                            <div class="add-product">
                                <a href="<?php echo base_url();?>index.php/User/add">Ajouter Utilisateur</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>nom</th>
                                    <th>Prenom</th>
                                    <th>Telephone</th>
                                    <th>Adresse</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Profil</th>
                                    <th>Etat </th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                if (isset($liste_users))
                                {

                                    if ($liste_users != null)
                                    {


                                        foreach ($liste_users as $pub)
                                        {
                                            ?>
                                <tr>
                                                <td><?php echo $pub->idUser; ?></td>
                                                <td><?php echo $pub->nom ;?></td>
                                                <td><?php echo $pub->prenom ;?></td>
                                                <td><?php echo $pub->tel; ?></td>
                                                <td><?php echo $pub->adresse;?></td>
                                                <td><?php echo $pub->email ;?></td>
                                                <td><?php echo $pub->password ;?></td>
                                                <td><?php echo $pub->libelle ;?></td>
                                                <td>
                                                <?php

                                                    if($pub->etat==1 )
                                                    {
                                                        echo '<h3><i class="fa fa-circle" style="color: #24caa1;"></i></h3>';

                                                    }else
                                                    {
                                                        echo '<h3><i class="fa fa-circle" style="color: red;"></i></h3>';
                                                    }

                                                    ?>
                                               </td>
                                               <td>
                                             
                                                        <a  href="<?php echo base_url();?>index.php/User/desactiver/<?php echo $pub->idUser; ?>">
                                                        <button data-toggle="tooltip" title="Desactiver compte" class="btn btn-custon-two btn-danger">
                                                           Desactiver
                                                        </button>
                                                       </a>
                                                       <a  href="<?php echo base_url();?>index.php/User/activer/<?php echo $pub->idUser; ?>">
                                                        <button data-toggle="tooltip" title="Activer compte" class="btn btn-custon-two btn-success">
                                                            Activer
                                                        </button>
                                                    </a>
                                               </td>
                                                <td>
                                         <a  href="<?php echo base_url();?>index.php/User/edit/<?php echo $pub->idUser; ?>">

                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        </a>
                                        <a  href="<?php echo base_url();?>index.php/User/delete/<?php echo $pub->idUser; ?>">
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                   </a>
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
                                        <?php

                                    echo '<ul class="pagination"> <li class="page-link">'.$link.' </li></ul>';
                                    ?>

                                    </ul>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
   
     