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
                                        <td>Numero du dossier : </td> 
                                        <td> <?php echo  $i->numdossier; ?></td>
                                        </tr>
                                        
                                        <tr>
                                        <td>Date Collecte : </td>
                                        <td><?php echo  $i->datecollecte; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Adresse précise du bien : </td> 
                                        <td> <?php echo  $i->adresse; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Nature juridique du bien : : </td>
                                        <td><?php echo $i->nature; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Type du bien : </td> 
                                        <td> <?php echo  $i->libelletype; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Collaboration avec cpi : </td>
                                        <td><?php echo $i->libellec; ?></td>
                                        </tr>
                                        <tr>
                                        <td>Nom du propriétaire :</td>
                                        <td><?php echo  $i->nom; ?> <?php echo  $i->prenom; ?></td>
                                        </tr>
                                       
                                        <?php
                                     } ?>
   </table>
</div>
</body>


</html>


