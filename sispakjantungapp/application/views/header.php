<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Sistem Pakar Pendeteksi Jantung Koroner (Dempstes-Shafer)</title>
    <meta name="port" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?php echo base_url();?>external/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>external/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url();?>external/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url();?>external/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>external/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>external/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>external/img/logo1.png">
    <style>

        #search {
          width: 25%;
          font-size: 14px;
          padding: 10px 15px 10px 20px;
          border: 1px solid #ddd;
          margin-bottom: 12px;
        }
    </style>
</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="beranda.php"><img src="<?php echo base_url();?>external/img/logo211.png" class="hidden-xs" width="700px" height="60px" /></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="index.php">Keluar</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menu Utama</li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/beranda');?>"><i class="glyphicon glyphicon-home"></i><span> Beranda</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/admin');?>"><i class="glyphicon glyphicon-user"></i><span> Daftar Admin / Pakar</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/paramedis');?>"><i class="glyphicon glyphicon-user"></i><span> Daftar Paramedis</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/bantuan');?>"><i class="glyphicon glyphicon-question-sign"></i><span> Bantuan</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/jresikogejala');?>"><i class="glyphicon glyphicon-list"></i><span> Jenis Faktor Resiko</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/fresikogejala');?>"><i class="glyphicon glyphicon-list-alt"></i><span> Faktor Resiko Gejala</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/rule');?>"><i class="glyphicon glyphicon-list-alt"></i><span> Rule / Keputusan</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/diagnosa');?>"><i class="glyphicon glyphicon-tasks"></i><span> Diagnosa</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/tindakan');?>"><i class="glyphicon glyphicon-ok"></i><span> Tindakan</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/prognosis');?>"><i class="glyphicon glyphicon-book"></i><span> Prognosis</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo site_url('admin/pasien');?>"><i class="glyphicon glyphicon-heart"></i><span> Data Pasien</span></a>
                        </li>
                    </ul>
                    <!--
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="hidden" value="checked"></label>
                    -->
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>