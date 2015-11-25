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
        <h1><a href="/index.php"><img src="<?php echo $imgUrl?>logo.png" alt="Phone91" title="Phone91" border="0" /></a></h1>
        <nav>
        	<ul class="clear">
                <h4></h4>   
                
                <?php if(end($arr) == 'two-way-calling-api.php' || end($arr) == 'reseller-api.php' || end($arr) == 'basic.php') { ?>
                <li  class="link"><a href="https://voice.phone91.com/logout.php">Logout</a></li>
               <li  class="link"><a <?php if(end($arr)=='two-way-calling-api.php') {echo'class="active"';}?> href="/two-way-calling-api.php">Two-way calling</a></li>               <li  class="link"><a <?php if(end($arr)=='reseller-api.php') {echo'class="active"';}?> href="/reseller-api.php">Reseller</a></li>
               <li  class="link"><a <?php if(end($arr)=='basic.php') {echo'class="active"';}?> href="/basic.php">Basic</a></li>
                
                <li  class="link"><a href="index.php">Home</a></li>
                <?php }else {  if(isset($_SESSION['id'])) { ?>
                <li class="sign"><a href="https://voice.phone91.com/userhome.php">My Account</a></li>
                <?php }else {  ?>
                <li class="signup"><a <?php if(end($arr)=='signup.php') {echo'class="active"';}?> href="/signup.php">Sign up</a></li>
                <li class="sign"><a <?php if(end($arr)=='sign-in.php') {echo'class="active"';}?> href="/sign-in.php">Sign in</a></li>
                <?php } ?>
                <!--<li class="link"><a class="active" href="contact.php">Contact</a></li>-->
                <li class="link"><a <?php if(end($arr)=='contact.php') {echo'class="active"';}?> href="/contact.php">Contact</a></li>
                <!--<li  class="link"><a href="javasript:void(0);">Add-ons</a>
               		<ul class="subnav">
                        <li><a href="/callingcards.php">Calling Cards</a></li>
                    </ul>
               	</li>-->
                <li class="link"><a <?php if(end($arr)=='reseller.php') {echo'class="active"';}?> href="/reseller.php">Reseller</a></li>
                <!--<li class="link"><a <?php if(end($arr)=='reseller.php' || end($arr)=='admin.php') {echo'class="active"';}?> href="javascript:void(0)">Startup</a>
                    <ul class="subnav">
                        <li><a href="/reseller.php">Reseller</a></li>
                        <li><a href="/admin.php">Admin</a></li>
                    </ul>
                </li>                
                <li class="link"><a <?php if(end($arr)=='get-started.php' || end($arr)=='downloads.php' || end($arr)=='api-integration.php') {echo'class="active"';}?> href="/get-started.php">Get Started</a>
                	<ul class="subnav" style="width:150px;">
                            <li><a href="/downloads.php">Downloads</a></li>
                            <li><a href="/api-integration.php">API Integration</a></li>
                    </ul>
                </li>-->
                <li class="link"><a <?php if(end($arr)=='downloads.php') {echo'class="active"';}?> href="/downloads.php#iphone">Download apps</a>
                	<ul class="subnav">
                        <li><a href="/downloads.php#iphone">iPhone</a></li>
                        <li><a href="/downloads.php#android">Android</a></li>
                    </ul>
                </li>
                <li class="link"><a <?php if(end($arr)=='pricing.php') {echo'class="active"';}?> href="/pricing.php">Pricing</a></li>
                <li class="link"><a <?php if(end($arr)=='features.php') {echo'class="active"';}?> href="/features.php">Features</a></li>
                <!--<li class="link"><a <?php if(end($arr)=='about.php') {echo'class="active"';}?>  href="/about.php">About</a></li>-->
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
            <a <?php if(end($arr)=='sign-in.php') {echo'class="active"';}?> href="/sign-in.php">Sign in</a>
        </div>
    </div>
</header>

<ul class="ln clear" id="mobile-nav">
   
        <?php if(end($arr) == 'two-way-calling-api.php' || end($arr) == 'reseller-api.php' || end($arr) == 'basic.php') { ?>
        <li  class="link"><a href="logout.php">Logout</a></li>
        <li  class="link"><a <?php if(end($arr)=='basic.php') {echo'class="active"';}?> href="/basic.php">Basic</a></li>
        <li  class="link"><a <?php if(end($arr)=='basic.php') {echo'class="active"';}?> href="/reseller-api.php">Reseller</a></li>
        <li  class="link"><a <?php if(end($arr)=='basic.php') {echo'class="active"';}?> href="/two-way-calling-api.php">Two-way calling</a></li>

        <li  class="link"><a href="/index.php">Home</a></li>
        
    <?php } else { ?>
    <li><a href="/index.php">Home</a></li>    
    <li><a href="/about.php">About</a></li>
    <li><a href="/features.php">Features</a></li>
    <li><a href="/get-started.php">Get Started</a></li>
    <li><a href="/pricing.php">Pricing</a></li>
    <li><a href="/downloads.php">Download apps</a></li>    
    <li><a href="javascript:void(0)">Startup</a>
        <ul class="ln mob-subnav">
            <li><a href="/reseller.php">&raquo; Reseller</a></li>
            <li><a href="/admin.php">&raquo; Admin</a></li>
        </ul>
    </li>  
     <?php } ?>
	 <?php /*?>  <?php */?>
    </ul>
