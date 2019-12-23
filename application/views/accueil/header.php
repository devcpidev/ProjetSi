<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Systeme D'information| CPI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url();?>public/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
$user = $this->session->userdata('user');
$id = $this->session->userdata('id');
?>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?php echo base_url();?>public/images/cpi.png" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
								   <i class="fa big-icon fa-home icon-wrap"></i>
								   <span class="mini-click-non">CPI</span>
								</a>
                           
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-bar-chart-o icon-wrap"></i> <span class="mini-click-non">Proprietaire</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ajouter Proprietaire" href="<?php echo base_url();?>index.php/Proprietaire/add"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajouter Proprietaire</span></a></li>
                                <li><a title="Bar Charts" href="<?php echo base_url();?>index.php/Proprietaire/liste"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Liste Proprietaire</span></a></li>

                            </ul>
                        </li>
                     <?php
                     if($this->session->user->libelle=="admin") 
                          {
                        echo '   
                        
                        
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-envelope icon-wrap"></i> <span class="mini-click-non">Utilisateur</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="http://localhost/ProjetSi/index.php/User/add"><i class="fa fa-inbox sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajouter Utilisateur</span></a></li>
                                <li><a title="View Mail" href="http://localhost/ProjetSi/index.php/User/liste"><i class="fa fa-television sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Liste Utilisateur</span></a></li>
                                <li><a title="Compose Mail" href=""><i class="fa fa-paper-plane sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Envoyer Email</span></a></li>
                            </ul>
                        </li>
                       
                        ';
                     }
                    ?>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-flask icon-wrap"></i> <span class="mini-click-non">Produit</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Data Maps" href="<?php echo base_url();?>index.php/Produit/add"><i class="fa fa-map-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajouter produit</span></a></li>

                                <li><a title="Google Map" href="<?php echo base_url();?>index.php/Produit/liste"><i class="fa fa-map-marker sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Liste Produit</span></a></li>

                             
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-pie-chart icon-wrap"></i> <span class="mini-click-non">Service</span></a>
                           <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Blog" href="<?php echo base_url();?>index.php/Service/add"><i class="fa fa-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajouter Service</span></a></li>
                                <li><a title="Blog Details" href="<?php echo base_url();?>index.php/Service/liste"><i class="fa fa-tags sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Liste Service</span></a></li>
                            </ul> 
                        </li>
                        
                       
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Localisation</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="<?php echo base_url();?>index.php/Departement/liste"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">liste Departement</span></a></li>
                                <li><a title="Advance Form Elements" href="<?php echo base_url();?>index.php/Region/liste"><i class="fa fa-lightbulb-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">liste Region</span></a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-desktop icon-wrap"></i> <span class="mini-click-non">Zone</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Advance Form Elements" href="<?php echo base_url();?>index.php/Zone/add"><i class="fa fa-lightbulb-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajouter Zone</span></a></li>
                                <li><a title="Password Meter" href="<?php echo base_url();?>index.php/Zone/liste"><i class="fa fa-hourglass sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Liste Zone</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-desktop icon-wrap"></i> <span class="mini-click-non">Tache</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Advance Form Elements" href="<?php echo base_url();?>index.php/Tache/add"><i class="fa fa-lightbulb-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajouter Tache</span></a></li>
                                <li><a title="Password Meter" href="<?php echo base_url();?>index.php/Tache/liste"><i class="fa fa-hourglass sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Liste Tache</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Collecte</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="" href="<?php echo base_url();?>index.php/Collecte/add"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ajouter</span></a></li>
                                <li><a title="" href="<?php echo base_url();?>index.php/Collecte/liste"><i class="fa fa-lightbulb-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Liste</span></a></li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Acceuil</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
															<span class="admin-name">
                                                            <?php

                                                            echo $this->session->userdata('email');

                                                            ?></span>
															<i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                       
                                                        <li><a href="#"><span class="fa fa-user author-log-ic"></span>Mon Profil</a>
                                                        </li>
                                                        
                                                        <li><a href="<?php echo base_url();?>index.php/Login/logout"><span class="fa fa-lock author-log-ic"></span>Deconnexion</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>

                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Proprietaire <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Ajouter Proprietaire</a>
                                                </li>
                                                <li><a href="mailbox-view.html">Liste Proprietaire</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <?php
                     if($this->session->user->libelle=="admin") 
                          {
                        echo ' 
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Utilisateur <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="">Ajouter Utilisateur</a></li>
                                                <li><a href="contacts.html">Liste Utilisateur</a></li>
                                                <li><a href="projects.html">Envoyer Email</a></li>
                                               
                                            </ul>
                                        </li>
                                        ';
                                    }
                                   ?>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Produit <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="google-map.html">Ajouter Produit</a>
                                                </li>
                                                <li><a href="google-map.html">Liste Produit</a>
                                                </li>
                                                <li><a href="data-maps.html">Type Produit</a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Service<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Ajouter Service</a>
                                                </li>
                                                <li><a href="line-charts.html">Liste Service</a>
                                                </li>
                                              
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Localisation <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Departement</a>
                                                </li>
                                                <li><a href="data-table.html">Region</a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Zones <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                               <li><a href="">Ajouter Zone</a>
                                                </li>
                                                <li><a href="">Liste Zone</a>
                                               
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Taches <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                               <li><a href="">Ajouter Tache</a>
                                                </li>
                                                <li><a href="">Liste Tache</a>
                                               
                                            </ul>
                                        </li>
                                       
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">CPI</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>