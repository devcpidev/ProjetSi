<?php require_once('header.php'); ?>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Produits</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green"><?php echo $nbcollectes?><i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo $nbcollectes?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Utilisateurs</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red"><?php echo $nbuser?> <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo $nbuser?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Colloboration</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue"><?php echo $nbcolloboration?> <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo $nbcolloboration?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Proprietaires</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-purple"><?php echo $nbproprietaire?> <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo $nbproprietaire?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-purple"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</br>
</br>
        <div class="analysis-progrebar-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="analysis-progrebar reso-mg-b-30">
                            <div class="analysis-progrebar-content">
                                <h5>Departement CPI</h5>
                                <h2><span class="counter"><?php echo $nbdepartementcpi?></span></h2>
                                <div class="progress progress-mini">
                                    <div style="width: 68%;" class="progress-bar"></div>
                                </div>
                                <div class="m-t-sm small">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="analysis-progrebar reso-mg-b-30">
                            <div class="analysis-progrebar-content">
                                <h5>Region</h5>
                                <h2><span class="counter"><?php echo $nbregion?></span></h2>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar"></div>
                                </div>
                                <div class="m-t-sm small">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="analysis-progrebar reso-mg-b-30 res-mg-t-30">
                            <div class="analysis-progrebar-content">
                                <h5>Departement</h5>
                                <h2><span class="counter"><?php echo $nbdepartement?></span></h2>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                </div>
                                <div class="m-t-sm small">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="analysis-progrebar res-mg-t-30">
                            <div class="analysis-progrebar-content">
                                <h5>Type Bien Bati</h5>
                                <h2><span class="counter"><?php echo $nbtypebienbati?></span></h2>
                                <div class="progress progress-mini">
                                    <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                </div>
                                <div class="m-t-sm small">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- income order visit user End -->
<div class="dashtwo-order-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="analytics-adminpro-wrap ant-res-b-30 reso-mg-b-30">
                            <div class="skill-content-3 analytics-adminpro">
                                <div class="skill">
                                    <div class="progress">
                                        <div class="lead-content">
                                            <h3><span class="counter"><?php echo $nbtypebienbati?></span></h3>
                                            <p>Type Bien non Bati</p>
                                        </div>
                                        <div class="progress-bar wow fadeInLeft" data-progress="8%" style="width: 5%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="analytics-adminpro-wrap reso-mg-b-30">
                            <div class="skill-content-3 analytics-adminpro analytics-adminpro4">
                                <div class="skill">
                                    <div class="progress">
                                        <div class="lead-content">
                                            <h3><?php echo $nbtypeservice ?></h3>
                                            <p>Type Service</p>
                                        </div>
                                        <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="analytics-adminpro-wrap reso-mg-b-30 res-mg-t-30">
                            <div class="skill-content-3 analytics-adminpro analytics-adminpro3">
                                <div class="skill">
                                    <div class="progress progress-bt">
                                        <div class="lead-content">
                                            <h3><?php echo $nbtypezone?></h3>
                                            <p>Type Zone</p>
                                        </div>
                                        <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>80%</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="analytics-adminpro-wrap res-mg-t-30">
                            <div class="skill-content-3 analytics-adminpro analytics-adminpro2">
                                <div class="skill">
                                    <div class="progress progress-bt">
                                        <div class="lead-content">
                                            <h3><?php echo $nbzone?></h3>
                                            <p>Zone</p>
                                        </div>
                                        <div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 93%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>93%</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once('footer.php'); ?>