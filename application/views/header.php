<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php
     if ($title)
        { 
            echo $title; 
        }
     ?>       | Wild Web Technologies ERP V0.1
     </title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="<?php echo base_url() ?>assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script type = 'text/javascript' src = "<?php echo base_url() ?>assets/js/jquery-3.1.1.js"></script> 
    <script type = 'text/javascript' src = "<?php echo base_url() ?>assets/js/global.js"></script>
	<script type = 'text/javascript' src = "<?php echo base_url() ?>assets/js/employee.js"></script>
	<script type = 'text/javascript' src = "<?php echo base_url() ?>assets/js/fees.js"></script>
	<script type = 'text/javascript' src = "<?php echo base_url() ?>assets/js/settings.js"></script>
	<script type = 'text/javascript' src = "<?php echo base_url() ?>assets/js/user.js"></script>
	<script type = 'text/javascript' src = "<?php echo base_url() ?>assets/js/payroll.js"></script>
     <!--WIZARD STYLES-->
    <link href="<?php echo base_url() ?>assets/css/wizard/normalize.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/wizard/wizardMain.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/wizard/jquery.steps.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
