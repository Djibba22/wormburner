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
    <link rel="stylesheet" href="<?php echo $resources;?>plugins/foundation/stylesheets/foundation.min.css">
    <link rel="stylesheet" href="<?php echo $resources;?>plugins/foundation/stylesheets/app.css">
    <!-- My Stylesheet -->
    <link rel="stylesheet" href="<?php echo $resources;?>css/app.css">
    <!-- Modernizr -->
    <script src="<?php echo $resources;?>plugins/foundation/javascripts/modernizr.foundation.js"></script>
</head>
<body>
<header>
  <div class="row" >
    <div class="large-12 columns wrapper" >

        <div id="logo" class="large-4 columns">
        	<img class="logo" src="<?php echo $resources;?>img/Green-icon.png">
        </div>

        <div id="nav" class="large-4 columns">
          <ul>
            <li>
            	<a href="/index.php/auth/index" class="ourbutton right">Login</a>
            </li>
            <li>
            	<a href="/index.php/auth/create_user" class="ourbutton right">Sign Up</a>
            </li>
          </ul>
        </div>

        <div id="pga" class="large-4 columns">
            <img class="pga right" src="<?php echo $resources;?>img/PGATOUR_Logo.png" height="20" width="100">
        </div>
    </div>
  </div>
</header>
