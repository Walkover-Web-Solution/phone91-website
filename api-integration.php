<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<meta name="description" content="Integrate our rich APIs into your system for basic user, voice reseller and two-way voice calling." />
<title>Api Integration for Voice Calling with Phone91</title>
<?php include_once('inc/head.php');
if(isset($_GET['PHPSESSID']))
{
	  session_id($_GET['PHPSESSID']); 
    //session_start();
}

?>
<link rel="stylesheet" type="text/css" href="css/api-style.css" />
<link rel="stylesheet" type="text/css" href="css/features-style.css" />
</head>
<body class="reseller" >
<?php include_once('inc/header.php') ?>
<section id="api-banner" class="warmBg mrB6">
	<div class="wrapper clear">
    	<!--
        <aside class="last">
        	<h2>Hey, I will make sure your application runs seamlessley by integrating my api</h2>
        </aside>
        <aside>
        	<figure>
            	<img src="images/api-ban-img.png" alt="" title="" />
            </figure>
            <figcaption>Hey, you can integrate me in ‘n’ nuber of ways into your applcation</figcaption>
        </aside>-->
        <section style="padding-bottom:90px;" id="res-container">
            <div style="padding-bottom:30px;" class="h3g">Choose what you <span class="themeClr">need</span></div>
                <ul class="circle navigation clear apiBannerIcons">
                    <li>
                        <div class="style">
                            <a class="twoway_icon" href="basic.php">
                                <i class="cmnsprt-36 twoway"></i>
                                <span class="text">Basic</span>
                            </a>
                        </div>
                        <div class="back_circle"></div>
                    </li>
                    
                    <li>
                        <div class="style">
                            <a class="conf_icon" href="reseller-api.php">
                                <i class="cmnsprt-36 conf"></i>
                                <span class="text">Reseller</span>
                            </a>
                        </div>
                        <div class="back_circle"></div>
                    </li>
                    
                    <li>
                        <div class="style">
                            <a class="twoway_icon" href="two-way-calling-api.php">
                                <i class="cmnsprt-36 twoway"></i>
                                <span class="text">Two-way calling</span>
                            </a>
                        </div>
                        <div class="back_circle"></div>
                    </li>
                
                </ul>
                <!--/end of ul-->
        </section><!--/end of section-->

    </div>
</section>


<section id="wl-data-res">
	<!--<div id="white-label" class="h3g">And will make <span class="themeClr">Sure</span></div>-->
	<div class="wrapper">
	<?php /*?>  <?php for($i = 1; $i <= 2; $i++){ 
    echo '
        <section class="res-feat-row clear">
            <aside class="col-2">
                <div class="pdR3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 user"></i>
                        <span>Feature 1</span>
                    </div>
                    <p class="para16">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printe
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
            
            <aside class="col-2">
                <div class="pdL3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 user"></i>
                        <span>Feature 2</span>
                    </div>
                    <p class="para16">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printe
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
        </section><!--/end of row-->
        ';
     } ?>   <?php */?>
     
     
     <section class="api-row even clear">
                	<aside>
                    	<h4 class="h4">Getting started</h4>
                        <p class="para16">Extend your <a href="http://phone91.com">Phone 91</a> user experience by integrating some of the powerful APIs like Two-way calling and Reseller API into your website. It is easy to get started by logging in to our website and choosing the type of API you need. You have the input parameters and the error responses with you, which makes integration even easier. </p>
                    </aside>
                    
                    <figure>
                    	<img title="" alt="" src="images/getstarted.jpg">
                    </figure>
     </section>
     
     <section class="api-row odd clear">
                	<aside>
                    	<h4 class="h4">Become a partner and generate revenue</h4>
                        <p class="para16">You can choose to become a <a href="ttp://phone91.com/reseller.php">reseller</a> with us and use our secure API to generate revenue. You will have your website and your resources, with Phone91 working at the backend. An uncomplicated way of revenue generation.</p>
                    </aside>
                    <figure>
                    	<img title="" alt="" src="images/partner.jpg">
                    </figure>
     </section>
   
 	 <section class="api-row even clear">
                	<aside>
                    	<h4 class="h4">Stay secured. Always.</h4>
                        <p class="para16">Security actually matters when you are using a third party API in your application. Phone 91 makes sure that you are able to integrate our user friendly APIs and run your application at utmost ease.</p>
                    </aside>
                    
                    <figure>
                    	<img title="" alt="" src="images/stay.jpg">
                    </figure>
     </section>  
     
    </div><!--/end of wrapper-->
</section><!--/end of wl-data-->


<section class="info-msg">
	<div class="wrapper clear">
    	<div class="alC">Want us to add more?
        <a class="btn" href="contact.php">Suggest</a></div>
    </div>
</section><!--/end of info-msg-->

<div class="wrapper clear">
	<div id="apibtmtxt">For anything  else we are always a <a class="themeClr" href="signup.php">click</a> away!</div>
</div>
<?php include_once('inc/footer.php') ?>
</body>
</html>