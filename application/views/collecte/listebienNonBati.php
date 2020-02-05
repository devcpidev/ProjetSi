


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
							<th>Type du bien non Bati</th>
							<th>Collaboration avec cpi</th>
							<th>Nom du propriétaire</th>


							<th>Action</th>
							<th>Action</th>
							<th>Action</th>

						</tr>
						<?php foreach($infos as $i){ ?>
							<tr>
								<td><?php echo  $i->numdossier; ?></td>
								<td><?php echo  $i->datecollecte; ?></td>
								<td><?php echo  $i->adresse; ?></td>
								<td><?php echo $i->nature; ?></td>
								<td><?php echo  $i->libellebiennonbati; ?></td>


								<td> <?php

									if($i->libelleTypeServ=="Vente")
									{
										echo ' <button class="ps-setting">A Vendre</button>
                                                        ';

									}
									if($i->libelleTypeServ=="Location")
									{
										echo '<button class="ps-setting">A louer</button>
                                                        ';

									}

									?>


								</td>



								<td><button class="btn btn-primary  Alert Alert-color prop" href="#" data-toggle="modal" id="<?php echo  $i->numdossier; ?>" data-target="#propModal">Propriétaire</button></td>


								<td>
									<!-- <button class="btn btn-primary detail" data-toggle="modal" data-target="#myModal" id="<?php echo  $i->numdossier; ?>" >Voir plus</button>-->
									<div class="modal-area-button">

										<button class="btn btn-primary  Alert Alert-color detail" href="#" data-toggle="modal" id="<?php echo  $i->numdossier; ?>" data-target="#AlertModalhdbgcl">Voir plus</button>
									</div>

								</td>

								<td> <button class="btn btn-info" data-toggle="modal" data-target="#modal_update" id="<?php echo  $i->utilisateur; ?>" > <i class="fa fa-edit fa-lg"></i></button>
								</td>

							</tr>
						<?php } ?>
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
<div class="login-form-area adminpro-pd mg-tb-15">
	<div class="container-fluid">


		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



				<div id="AlertModalhdbgcl" class="modal modal-adminpro-general FullColor-popup-AlertModal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header header-color-modal bg-color-3">
								<h4 class="modal-title" >Voir PLus D'information</h4>
								<div class="modal-close-area modal-close-df">
									<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
								</div>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-12">

										<table>
											<tr>
												<td> <i><b>nature juridique : </b></i></td><td > <p id="nature"></p></td>

											</tr>

											<tr>
												<td> <i><b>Libelle: </b></i></td><td >   <p id="libellebiennonbati"></p></td>
											</tr>
											<tr>
												<td> <i><b>superficie :</b></i> </td><td >   <p id="surface"></p></td>
											</tr>

											<tr>
												<!-- <td> Nombre de Cuisine: </td><td >      <p id="cuisine"></p></td>
												</tr>
												<tr>
												<td> Nombre de piscine: </td><td >    <p id="piscine"></p></td>
												</tr>
												<td> Buanderie : </td><td >     <p id="buanderie"></p></td>
												</tr>
												<tr>
												<td> Nombre de Balcon : </td><td >      <p id="balcon"></p></td>
												</tr>
												<tr>
												<td> Nombre de Garage : </td><td >      <p id="garage"></p></td>
												</tr>
												<tr>
												<td> Ascenceur: </td><td >     <p id="ascenseur"></p></td>
												</tr>
												<tr>
											   <td>  : </td>   <td >   <p id="situationiveau"></p>   </td>
												<td>  : </td>   <td >  <p id="loinculte"></p>   </td>
												<td>  : </td>   <td >    <p id="presculte"></p>  </td>
												<td>  : </td>   <td >    <p id="loinmarche"></p> </td>
												<td>  : </td>   <td >     <p id="presmarche"></p> </td>
												<td>  : </td>   <td >     <p id="loinecole"></p> </td>
												<td>  : </td>   <td >      <p id="preecole"></p> </td>
												<td>  : </td>   <td >   <p id="broutep"></p>  </td>
												<td>  : </td>   <td >         <p id="angle"></p> </td>-->

											</tr>

										</table>



									</div>
									<div class="col-lg-12">
										<p id="document1"></p>
										<p id="document2"></p>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a data-dismiss="modal" href="#" id="close">Cancel</a>
								<!-- <a href="#">Process</a> -->
							</div>
						</div>
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

<!-- Modal -->
<div class="modal fade" id="propModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Informations du Propriétaire</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p id="nom"></p>
				<p id="prenom"></p>
				<p id="adressesen"></p>
				<p id="tel"></p>
				<p id="email"></p>
				<p id="nomrep"></p>
				<p id="telrep"></p>
				<p id="adresserep"></p>
				<p id="emailrep"></p>
				<p id="tel"></p>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url();?>public/js/detail.js"></script>
<script src="<?php echo base_url();?>public/js/proprieteNonbati.js"></script>
