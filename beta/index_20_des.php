<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<title>Phone91- </title>
<?php include_once('inc/head.php') ?>

<link rel="stylesheet" type="text/css" href="css/index-style.css" />
<script type="text/javascript" src="js/sign_up.js"></script>
<script type="text/javascript" src="js/pricing.js"></script>

</head>

<body>
<?php include_once('inc/header.php') ?>
<section id="home-banner">
	<div class="wrapper clear">
    	<h2 class="ligt themeClr">One word: distance<br> 
        is no more when <span>you</span> and <span class="last">I</span> share over a phone call</h2>
        
        
        <div class="slider">
			<ul class="slides">
				<li class="slide">
                	<div class="home-img">
                        <img src="images/home-ban-img.gif" alt="" title="" />
                    </div>
                </li>
                
				<li class="slide">
                	<div class="home-img">
                        <img src="images/home-ban-icon.jpg" alt="" title="" />
                    </div>
                </li>
                
				<li class="slide">
                	<div class="home-img">
                        <img src="images/home-ban-icon.jpg" alt="" title="" />
                    </div>
                </li>
			</ul>
		</div>
        
        
    </div>
</section>

<section id="formwrap">
	<div class="wrapper clear">
    	<div id="shd"></div>
    	<aside>
            <form method="POST" action="signup.php" id="signupForm" onsubmit="return register();">
        	<div class="inner">
            	<h3>Sign up - it's free!</h3>
                <div class="frow">
                	<input type="text" id="username" name="username" value="" onblur="check_user_exist()"  placeholder="Choose username" />
                        <div class="msg"></div>
                </div>
                <div class="frow">
                	
                         <input type="password" id="password"  name="password" value="" placeholder="Choose password" onblur="check_password_strength();"/>
                         <div class="msg"></div>
        
                </div>
                <div class="frow">
                	<input type="text" id="email" value="" name="email" placeholder="Email" onkeyup="check_email_exist()"/>
                        <div class="msg"></div>
                </div>
                <div class="clear">
                    	             
                	<button id="sgbtn" type="submit" name="submit">Sign up</button>
                    <div id="fltrspan">
                    	<span>or sign up with</span>
                        <span class="sg-btn g">
                        	<a title="Google" class="gp" href="javascript:void(0)">google</a>
                        </span>
                        <span class="sg-btn">
                        	<a title="Facebook" class="fb" href="#">facebook</a>
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
                <p class="box-excerpt">Listen to the voice of your loved ones with quick options like two-way calling straight from your desktop/mobile and easy to go apps like Vtok and Phone 91’s own mobile dialer. <br><a class="box-link" href="javascript:void(0)">Get to know</a></p>
            </div>
        </aside>
        
        <aside class="home-box">
        	<div class="box-inner">
            	<h4 class="box-title">Interesting stuff for you</h4>
                <div class="box-icon">
                	<figure id="int"></figure>
                </div>
                <p class="box-excerpt">Discover much more by toying with a variety of features like managing your call and transaction log, view recent call history and recall and sync contacts option. <br><a class="box-link" href="javascript:void(0)">Get to know</a></p>
            </div>
        </aside>
        
        <aside class="home-box last">
        	<div class="box-inner">
            	<h4 class="box-title">Be a start-up</h4>
                <div class="box-icon">
                	<figure id="bea"></figure>
                </div>
                <p class="box-excerpt">Call yourself a proud start-up by becoming a Reseller or by getting our Admin panel on rent. Add plans for your own clients, manage routes, add PIN’s and there’s something interesting called Call Shop! <br><a class="box-link" href="javascript:void(0)">Get to know</a></p>
            </div>
        </aside>
        
        
    </div>
</section>


<?php include_once('inc/footer.php') ?>
<script type="text/javascript" src="js/jquery.glide.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.slider').glide({
			autoplay: 5000,
			hoverpause : true
		})
	});
</script>
</body>
</html>