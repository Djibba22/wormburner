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
 <img src="" alt="" height="100" width="100"> 
	<a href="/index.php/auth/index">Login</a>
	<a href="/index.php/auth/logout">Logout</a>
</header>
