<?php
    $base_url = $this->config->item('base_url'); 
    $resources = $this->config->item('resources');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>WormBurner</title>
 <!-- Foundation --> 
 	<link rel="stylesheet" href="<?php echo $resources;?>css/app.css">
    <link rel="stylesheet" href="<?php echo $resources;?>plugins/foundation/stylesheets/foundation.min.css">
    <link rel="stylesheet" href="<?php echo $resources;?>plugins/foundation/stylesheets/app.css">
    
    <!-- Modernizr -->
    <script src="<?php echo $resources;?>plugins/foundation/javascripts/modernizr.foundation.js"></script>

</head>
<body>
<header>

<div class="row">
  <div class="small-2 large-12 columns">
  	<img class="text-center" src="<?php echo $resources;?>img/Green-icon.png" height="50" width="100"> 
	<a href="/index.php/auth/index" class="button right">Login</a>
	<a href="/index.php/auth/create_user" class="button right">Sign Up</a>
  </div>

</header>
