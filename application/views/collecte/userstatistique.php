                             

        <div class="product-status mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Nombre de collectes effectués par Personne</h4>
                           
                          <!--  <table>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Nombre de collectes effectués</th>
                                   
                                </tr>
                                <?php foreach($userstatistique as $i){ ?>
                                    <tr>
                                        <td><?php echo  $i->nom; ?></td>
                                        <td><?php echo  $i->prenom; ?></td>
                                        <td><?php echo  $i->total; ?></td>
                                       
                                    </tr>
                                <?php } ?>
                            </table>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashtwo-order-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                <?php foreach($userstatistique as $i){ ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="analytics-adminpro-wrap ant-res-b-30 reso-mg-b-30">
                            <div class="skill-content-3 analytics-adminpro">
                                <div class="skill">
                                    <div class="progress">
                                        <div class="lead-content">
                                            <h3><span class="counter"><?php echo  $i->total; ?> </span></h3>
                                            <p><?php echo  $i->nom; ?> <?php echo  $i->prenom; ?></p>
                                        </div>
                                        <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>  
                   
                </div>
            </div>
        </div>