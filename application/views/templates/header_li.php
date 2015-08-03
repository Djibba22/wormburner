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
<header> <!-- logged in header class -->
    <div class="row">
        <div class="large-12 columns wrapper" >

            <div id="logo" class="large-4 columns">
                <img class="left" src="<?php echo $resources;?>img/kolf.png" height="50" width="50">
            </div>
            <div id="nav_li" class="large-4 columns"> 
                <ul>  
                    <li> 
                        <a href="/index.php/auth/logout" class="ourbutton right">Logout</a>
                    </li>
                </ul>
            </div>
            <div id="radar" class="large-4 columns">
                <img class="radar right" src="<?php echo $resources;?>img/sportradar3.png">
            </div>
        </div>
    </div>
</header>
