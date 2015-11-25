<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<meta name="google-site-verification" content="EXNE2Yl28ykKGBxuVVPOi5xak8uKFWQuf4-_8NlOrDQ" />
<meta name="description" content="Online international calling from your computer, laptop, Android or Iphone device with Phone91. Get free credit for international phone calls after signup." /> 
<meta name="keywords" content="international calling, international calls, international call, international phone calls, online calling" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Content-Language" content="EN" />
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="all" />
<meta name="distribution" content="Global" />
<meta name="publisher" content="PHONE91" />
<meta name="author" content="PHONE91" />
<meta name="organization" content="PHONE91" />
<meta name="copyright" content="PHONE91 All Rights Reserved" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="canonical"  href="http://phone91.com" />
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7245107-13']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<title>Missing Someone? Connect on a Phone Call Today!</title>
<?php include_once('inc/head.php') ?>
<link rel="stylesheet" type="text/css" href="css/index-style.css" />
</head>
<body>
<?php include_once('inc/header.php') ?>
<section id="home-banner">
	<div class="wrapper clear">
    	<h2 class="ligt themeClr">One word: distance<br> 
        is no more when <span>you</span> and <span class="last">I</span> share over a phone call</h2>
        <div class="slider">
                <div id="fade" style="float-left;"> 
                    <img src="<?php echo $imgUrl?>home-ban-img1.gif">
                    <img src="<?php echo $imgUrl?>home-ban-img2.gif"> 
                    <img src="<?php echo $imgUrl?>home-ban-img3.gif"> 
               </div>
		</div>
    </div>
</section>
<?php 
$error = "";

if(isset($_REQUEST['error']))
{
    $error = $_REQUEST['error'];
}

?>
<section id="formwrap">
	<div class="wrapper clear">
    	<div id="shd"></div>
    	<aside>
            <form method="POST" action="signup.php" id="signupForm" onSubmit="return register();">
        	<div class="inner">
            	<h3>Sign up - it's free!</h3>
                <div class="frow">
                	<input type="text" id="username" name="username" value="" onBlur="check_user_exist()"  placeholder="Choose username" />
                    <label class="msg"></label>
                </div>
                <div class="frow">
                         <input type="password" id="password"  name="password" value="" placeholder="Choose password" onBlur="check_password_strength();"/>
                         <label class="msg"></label>
                </div>
                <div class="frow">
                	<input type="text" id="email" value="" name="email" placeholder="Email" onKeyUp="check_email_exist()"/>
                        <label class="msg"></label>
                </div>
                <div class="clear">
                	<button id="sgbtn" type="submit" name="submit">Sign up</button>
                    <div id="fltrspan">
                    	<span>or sign up with</span>
<!--                        <span class="sg-btn g">
                        	<a title="Google" class="gp" href="https://voice.phone91.com/login/login-google.php?userDomain=<?php echo $_SERVER['HTTP_HOST']?>">
                            google</a>
                        </span> -->
                        <span class="sg-btn">
                        	<a title="Facebook" class="fb" href="https://voice.phone91.com/login/login-fb.php?userDomain=<?php echo $_SERVER['HTTP_HOST']?>">
                            facebook</a>
                        </span>
                    </div>
                </div>
            </div>
           </form>     
        </aside>
    </div>
</section>

<section id="home-container" class="warmBg">
	<h3 class="alC cnthead">There’s something for you!</h3>
    <div class="wrapper clear">
    	<aside class="home-box">
        	<div class="box-inner">
            	<h4 class="box-title">Bring bonds to life</h4>
                <div class="box-icon">
                	<figure></figure>
                </div>
                <p class="box-excerpt">Listen to the voice of your loved ones with quick options like two-way calling straight from your desktop/mobile 
              and easy to go apps like Vtok and <a href="http://phone91.com/downloads.php">Phone 91’s own mobile dialer</a>. <br><a class="box-link" href="signup.php">Get to know</a></p>
            </div>
        </aside>
        <aside class="home-box">
        	<div class="box-inner">
            	<h4 class="box-title">Interesting stuff for you</h4>
                <div class="box-icon">
                	<figure id="int"></figure>
                </div>
                <p class="box-excerpt">Discover much more by toying with a variety of features like managing your call and transaction log, 
                view recent call history and recall and sync contacts option. <br><a class="box-link" href="features.php">Get to know</a></p>
            </div>
        </aside>
        <aside class="home-box last">
        	<div class="box-inner">
            	<h4 class="box-title">Be a start-up</h4>
                <div class="box-icon">
                	<figure id="bea"></figure>
                </div>
                <p class="box-excerpt">Call yourself a proud start-up by becoming a <a href="http://phone91.com/reseller.php">Reseller</a> or by getting our Admin panel on rent. Add plans for your own clients, manage routes, add PIN’s and there’s something interesting called Call Shop! <br><a class="box-link" href="reseller.php">Get to know</a></p>
            </div>
        </aside>
    </div>
</section>
<?php include_once('inc/footer.php') ?>
<script type="text/javascript" src="<?php echo $jsUrl?>cycle-plugin.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#fade').cycle({ 
			fx:    'fade', 
			speed: 2500,
			timeout:7000
	 });
	  $("#fade").bind("contextmenu",function(e){
        e.preventDefault();
    });
	});
</script>
<script type="text/javascript" src="<?php echo $jsUrl?>sign_up.js"></script>
<!--<script type="text/javascript" src="js/pricing.js"></script>-->
<script type="text/javascript" src="<?php echo $jsUrl?>pricing.js"></script>
</body>
</html>
