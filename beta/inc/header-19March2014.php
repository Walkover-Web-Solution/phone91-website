<?php
include_once '/home/phone91/public_html/config.php';
$url = $_SERVER['PHP_SELF'];
$arr=explode("/",$url);  


?>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<header id="header">
    <div class="wrapper clear">
        <h1><a href="/beta/index.php"><img src="/images/logo.png" alt="Phone91" title="Phone91" border="0" /></a></h1>
        <nav>
        	<ul class="clear">
                <h4></h4>   
                
                <?php if(end($arr) == 'two-way-calling-api.php' || end($arr) == 'reseller-api.php' || end($arr) == 'basic.php') { ?>
                <li  class="link"><a href="https://voice.phone91.com/logout.php">Logout</a></li>
               <li  class="link"><a <?php if(end($arr)=='two-way-calling-api.php') {echo'class="active"';}?> href="/beta/two-way-calling-api.php">Two-way calling</a></li> 
               <li  class="link"><a <?php if(end($arr)=='reseller-api.php') {echo'class="active"';}?> href="/beta/reseller-api.php">Reseller</a></li>
               <li  class="link"><a <?php if(end($arr)=='basic.php') {echo'class="active"';}?> href="/beta/basic.php">Basic</a></li>
                
                <li  class="link"><a href="index.php">Home</a></li>
                <?php }else {  if(isset($_SESSION['id'])) { ?>
                <li class="sign"><a href="https://voice.phone91.com/userhome.php">My Account</a></li>
                <?php }else {  ?>
                <li class="sign"><a <?php if(end($arr)=='sign-in.php') {echo'class="active"';}?> href="/beta/sign-in.php">Sign in</a></li>
                <?php } ?>
                <!--<li class="link"><a class="active" href="contact.php">Contact</a></li>-->
                <li class="link"><a <?php if(end($arr)=='contact.php') {echo'class="active"';}?> href="/beta/contact.php">Contact</a></li>
                <li class="link"><a <?php if(end($arr)=='reseller.php' || end($arr)=='admin.php') {echo'class="active"';}?> href="javascript:void(0)">Startup</a>
                    <ul class="subnav">
                        <li><a href="/beta/reseller.php">Reseller</a></li>
                        <li><a href="/beta/admin.php">Admin</a></li>
                    </ul>
                </li>
                <li class="link"><a <?php if(end($arr)=='pricing.php') {echo'class="active"';}?> href="/beta/pricing.php">Pricing</a></li>
                <li class="link"><a <?php if(end($arr)=='get-started.php' || end($arr)=='downloads.php' || end($arr)=='api-integration.php') {echo'class="active"';}?> href="/beta/get-started.php">Get Started</a>
                	<ul class="subnav" style="width:150px;">
                            <li><a href="/beta/downloads.php">Downloads</a></li>
                            <li><a href="/beta/api-integration.php">API Integration</a></li>
                    </ul>
                </li>
                <li class="link"><a <?php if(end($arr)=='features.php') {echo'class="active"';}?> href="/beta/features.php">Features</a></li>
                <li class="link"><a <?php if(end($arr)=='about.php') {echo'class="active"';}?>  href="/beta/about.php">About</a></li>
                <?php } ?>
                <!--For API page-->
               <?php /*?> 
			   <?php */?>
                <!--//For API page-->
            </ul>
        </nav><!--/end of web nav-->
        
        <!--mobile nav start-->
        <div id="mob-trigger">
        	<a onClick="showMenu(this)" href="javascript:void(0)">
            	<span class="mobiletrigger"></span>
            </a>
            <a <?php if(end($arr)=='sign-in.php') {echo'class="active"';}?> href="/beta/sign-in.php">Sign in</a>
        </div>
    </div>
</header>

<ul class="ln clear" id="mobile-nav">
   
        <?php if(end($arr) == 'two-way-calling-api.php' || end($arr) == 'reseller-api.php' || end($arr) == 'basic.php') { ?>
        <li  class="link"><a href="logout.php">Logout</a></li>
        <li  class="link"><a <?php if(end($arr)=='basic.php') {echo'class="active"';}?> href="/beta/basic.php">Basic</a></li>
        <li  class="link"><a <?php if(end($arr)=='basic.php') {echo'class="active"';}?> href="/beta/reseller-api.php">Reseller</a></li>
        <li  class="link"><a <?php if(end($arr)=='basic.php') {echo'class="active"';}?> href="/beta/two-way-calling-api.php">Two-way calling</a></li>

        <li  class="link"><a href="/beta/index.php">Home</a></li>
        
    <?php } else { ?>
    <li><a href="/beta/index.php">Home</a></li>
    <li><a href="/beta/about.php">About</a></li>
    <li><a href="/beta/features.php">Features</a></li>
    <li><a href="/beta/get-started.php">Get Started</a></li>
    <li><a href="/beta/pricing.php">Pricing</a></li>
    <li><a href="javascript:void(0)">Startup</a>
        <ul class="ln mob-subnav">
            <li><a href="/beta/reseller.php">&raquo; Reseller</a></li>
            <li><a href="/beta/admin.php">&raquo; Admin</a></li>
        </ul>
    </li>  
     <?php } ?>
	 <?php /*?>  <?php */?>
    </ul>
