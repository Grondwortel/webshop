<html>
		<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
 
        <head>
                <title>Webshop</title>
        </head>
        <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Webshop</a>
    </div>


      <ul class="nav navbar-nav">
        <li class=""><a href="/webshop">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (isset($_SESSION["isUserLoggedIn"])) { // $this->session->has_userdata($_SESSION["userId"]) geeft foutmelding als session niet bestaat
          ?>
          <li><a href="<?php echo base_url(); ?>users/account">Mijn account</a></li>
          <li><a href="<?php echo base_url(); ?>users/logout">Uitloggen</a></li>
          <?php
        }else{
          ?>
          <li><a href="<?php echo base_url(); ?>users/registration">Registratie</a></li>
          <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
                
<div class="container">