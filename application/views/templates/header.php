<html>
		<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
 
        <head>
                <title>Webshop</title>
                <link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />
        </head>
        <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Webshop</a>
    </div>


      <ul class="nav navbar-nav">
        <li class=""><a href="/">Homepagina <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (isset($_SESSION["userRoles"])) {
          foreach ($this->session->userdata('userRoles') as $key => $value) {
              if (!empty($value["role_id"])) {
                  if ($value["role_id"] == 1) {
                      ?>
                      <li><a href="<?php echo base_url(); ?>tickets/viewtickets">View submitted tickets</a></li>
                      <?php
                  }
              }
          }
        }
        if (isset($_SESSION["isUserLoggedIn"])) { // $this->session->has_userdata($_SESSION["userId"]) geeft foutmelding als session niet bestaat
          ?>
          <li><a href="<?php echo base_url(); ?>products/index">Producten lijst</a></li>
          <?php
          $totalitems = 0;
          foreach($this->cart->contents() as $items) { // We breken de cart onderdelen in stukken.
            $totalitems = ($totalitems + $items['qty']); // Hier creëren we onze input veld met de naam qty[] dit geeft ons toegang om te communiceren met de array wanneer het is gepost.
          }
          ?>
          <li><a href="<?php echo base_url(); ?>shop/index">Shopping cart (<?php echo $totalitems; ?>)</a></li>
          <li><a href="<?php echo base_url(); ?>users/account">Mijn account</a></li>
          <li><a href="<?php echo base_url(); ?>users/logout">Uitloggen</a></li>
          <?php
        }else{
          ?>
          <li><a href="<?php echo base_url(); ?>users/registration">Registratie</a></li>
          <li><a href="<?php echo base_url(); ?>users/login">Inloggen</a></li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
                
<div class="container">