<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <base href="<?php echo base_url() ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="manifest" href="<?php echo base_url("manifest.json"); ?>">
   <title> <?php echo isset($title) ? $title : "Benfils | Building your dream";  ?></title>
   <link rel="icon" type="image/png" href="<?php echo base_url("assets/logos/be_white.png") ?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/materialize/css/materialize.css'); ?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/fonts.css'); ?>"> 
   <script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/main.css')."?copy=".time(); ?>">
   <meta name="theme-color" value="#0b0f20">
</head>