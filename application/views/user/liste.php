
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
                                                <td><?php echo $pub->nomu ;?></td>
                                                <td><?php echo $pub->prenom ;?></td>
                                                <td><?php echo $pub->telu; ?></td>
                                                <td><?php echo $pub->adresseu;?></td>
                                                <td><?php echo $pub->emailu ;?></td>
                                                <td><?php echo $pub->password ;?></td>
                                                <td><?php echo $pub->libelle ;?></td>
                                                <td>
                                                <?php

                                                    if($pub->etatu==1 )
                                                    {
                                                        echo '<h3><i class="fa fa-circle" style="color: #24caa1;"></i></h3>';

                                                    }else
                                                    {
                                                        echo '<h3><i class="fa fa-circle" style="color: red;"></i></h3>';
                                                    }

                                                    ?>
                                               </td>
                                               <td>
                                               <?php
                                               if($pub->etat==1 )
                                                    {
                                                        echo '
                                                        <button class="ds-setting">Désactiver</button>';

                                                    }else
                                                    {
                                                        echo '<button class="pd-setting">Activiter</button>';
                                                    }

                                                    ?>
                                               </td>
                                                <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
        
   
     