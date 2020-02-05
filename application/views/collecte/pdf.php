<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="shortcut icon" type="image/x-icon" >
    
</head>
<style>
    tr
    {
        margin-bottom: 5%;
    }
    td {
  display: table-cell;
  vertical-align: inherit;
}
</style>

<body>
<div class="container">
    <table  style="width: 10% ">


      <tr>
            <td><img  src="<?php echo base_url();?>public/images/cpi.png" width="20%"  height="10%"/>
            </td>
           
        </tr>

    </table>
<pre>                                                               </pre>
    <table>
                                <?php foreach($liste_dossiers as $i)
                                { ?>
                                        <tr>
                                        <td><b>Numero du dossier : </b> </td> 
                                        <td> <?php echo  $i->numdossier; ?></td>
                                        <td> </td>
                                        <td><b>Nom du propriétaire :  </b></td>
                                        <td><?php echo  $i->nom; ?> <?php echo  $i->prenom; ?> </td>
                                        </tr>
                                       
                                       
                                       
                                       
                                        <tr>
                                        <td> <b>Date Collecte : </b></td>
                                        <td><?php echo  $i->datecollecte; ?></td>
                                        <td> </td>
                                        <td><b>Tel :   </b></td>
                                        <td> <?php echo  $i->tel; ?></td>
                                        </tr>
                                        <tr>
                                        <td> </td> 
                                        <td> </td>
                                        <td> </td>
                                        <td><b>Email :   </b></td>
                                        <td> <?php echo  $i->email; ?></td>
                                        </tr>
                                        <tr>
                                        <td> </td> 
                                        <td> </td>
                                        <td> <pre>                  </pre></td>
                                        <td><b>Adresse:   </b></td>
                                        <td> <?php echo  $i->adressesen; ?></td>
                                        </tr>
                                        
                                        <?php
                                     } ?>
   </table>

   <pre>                                 </pre>
   <table>
                                <?php foreach($liste_dossiers as $i)
                                { ?>
                                        <tr>
                                        <td> </td> 
                                        <td> </td>
                                        <td> </td>
                                        <td><b>Nom Representant:  </b></td>
                                        <td><?php echo  $i->nomrep; ?>  </td>
                                        </tr>
                                       
                                       
                                       
                                       
                                        <tr>
                                        <td> </td>
                                        <td></td>
                                        <td> </td>
                                        <td><b>Tel Representant :   </b></td>
                                        <td> <?php echo  $i->telrep; ?></td>
                                        </tr>
                                        <tr>
                                        <td> </td> 
                                        <td> </td>
                                        <td> </td>
                                        <td><b>Email Representant :   </b></td>
                                        <td> <?php echo  $i->emailrep; ?></td>
                                        </tr>
                                        <tr>
                                        <td> </td> 
                                        <td> </td>
                                        <td> <pre>                                                  </pre></td>
                                        <td><b>Adresse Representant:   </b></td>
                                        <td> <?php echo  $i->adresserep; ?></td>
                                        </tr>
                                        
                                        <?php
                                     } ?>
   </table>
   <pre>         </pre>
   <table border="1" width="100%">
                                <?php foreach($liste_dossiers as $i)
                                { ?>
                                        <tr>
                                        <td><b>Adresse Produit : </b> </td> 
                                        <td><?php echo  $i->adresse; ?>  </td>
                                       
                                        <td><b>Usage:  </b></td>
                                        <td><?php echo  $i->usagebienbati; ?>  </td>
                                        </tr>
                                       
                                       
                                       
                                       
                                        <tr>
                                        <td><b>Nature Produit : </b></td> 
                                        <td><?php echo  $i->nature; ?>  </td>
                                        
                                        <td><b>Nombre de Pieces:   </b></td>
                                        <td> <?php echo  $i->nbpieces; ?></td>
                                        </tr>

                                        <tr>
                                        <td> <b>Nombre de salle de bains: </b> </td> 
                                        <td><?php echo  $i->nbsalledebain; ?>  </td>
                                        
                                        <td><b>Nombre Toillete :   </b></td>
                                        <td> <?php echo  $i->nbtoilettes; ?></td>
                                        </tr>
                                        <tr>

                                        <td><b>Nombre Cuisine :   </b> </td> 
                                        <td><?php echo  $i->typecuisine; ?>  </td>
                                        
                                        <td><b>Jardin:   </b></td>
                                        <td> <?php echo  $i->jardin; ?></td>
                                        </tr>
                                        
                                        <?php
                                     } ?>
   </table>
</div>
</body>


</html>


