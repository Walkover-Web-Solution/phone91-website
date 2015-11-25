<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<meta name="description" content="Download our Android, iPhone and Windows smartphones application to make international calls online. You can also download Mac OS and  Windows desktop application" /> 
<meta name="keywords" content="android international calls, international calls on android, international calls on iphone, iphone international calls" />
<title>Online International Calling Plans at Local Prices</title>
<?php include_once('inc/head.php') ?>
<link rel="stylesheet" type="text/css" href="css/pricing-style.css" />
<!-- IE6 "fix" for the close png image -->
<!--[if lt IE 7]>
<link type='text/css' href='css/basic_ie.css' rel='stylesheet' media='screen' />
<![endif]-->
<!-- JS files are loaded at the bottom of the page -->
</head>
<body>
<?php include_once('inc/header.php') ?>
<script type="text/javascript" src="js/rupee.js"></script>
<script type="text/javascript" src="js/pricing.js"></script>
<section id="common-banner" class="warmBg">
	<div class="wrapper clear">
    	<aside>
        	<figure class="ban-icon">
            	<img src="images/sketch-pricing.png" alt="" title="" />
            </figure>
        </aside>
        <aside class="last">
        	<h2>Plans that let you stay charged, always! </h2>
            <p style="width:100%">The easy on wallet pricing plans make sure that you always remain connected to your loved ones, no matter what. 
            There are plans appealing all kinds of users. </p>
			<button class="btn" onClick="window.location.href='signup.php'">Sign up</button>
        </aside>
    </div>
</section>

<section id="search-container">
	<div class="wrapper">
        <div class="clear searchOffer">
        		<div class="h3g ligt">It costs a <span class="themeClr">little</span> to call</div>
                <div id="searchWrap" class="clear">
                    <!--<input id="seachCountry" type="text" placeholder="Enter Destination..." />-->
                       <div id="selwrpa">
                        <div class="currencySelectDropdown">
                            <span class="pickDown" style=""></span>
                            <div id="pickedCurrency">AED</div>
                        </div>
                       <select name="currency" id="currency" onChange="showprice();" class="userTerrifId userCurrency"  >
                            <option value="9">AED</option>
                            <option value="7">INR</option>
                            <option value="84">USD</option>
                        </select>
                        
        					<!--<select class="userCurrency" name="" aria-label="Select a different currency">
                                <option value="USD">(USD) - American Dollars</option>
                                <option value="EUR" selected="selected">(EUR) - Euros</option>
                                <option value="JPY">(JPY) - Japanese Yen</option>
                                <option value="GBP">(GBP) - British Pounds</option>
                                <option value="PLN">(PLN) - Polish złote</option>
                                <option value="BRL">(BRL) - Brazil reais</option>
                                <option value="SEK">(SEK) - Swedish kronor</option>
                                <option value="DKK">(DKK) - Danish kroner</option>
                                <option value="HKD">(HKD) - Hong Kong dollars</option>
                                <option value="CHF">(CHF) - Swiss francs</option>
                                <option value="NOK">(NOK) - Norwegian kroner</option>
                                <option value="CAD">(CAD) - Canadian dollars</option>
                                <option value="AUD">(AUD) - Australian dollars</option>
                                <option value="KRW">(KRW) - Korean won</option>
                                <option value="TWD">(TWD) - Taiwanese Dollars</option>
                        </select>-->
                    </div>
                    <input type="text" id="search" name="" placeholder="Enter destination country name or mobile number" onFocus="(this.value == 'Enter destination country name or mobile number') && (this.value = '')"   onblur="(this.value == '') && (this.value = 'Enter destination country name or mobile number')" />
                    <p class="searchwrap" onClick="showprice();" title="Search"><span class="cmnsprt-24 search"></span></p>
                    <!--flag list start this div is visible when user search country-->
                    <ul id="flaglist">
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 INT"></span><span class="fltxt">International</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 GB"></span><span class="fltxt">United Kingdom</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 IN"></span><span class="fltxt">India</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 PK"></span><span class="fltxt">Pakistan</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 ZA"></span><span class="fltxt">South Africa</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 KE"></span><span class="fltxt">Kenya</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 NG"></span><span class="fltxt">Nigeria</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 AE"></span><span class="fltxt">United Arab <br/> Emirates</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 MY"></span><span class="fltxt">Malaysia</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 SG"></span><span class="fltxt">Singapore</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 BR"></span><span class="fltxt">Brazil</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 BD"></span><span class="fltxt">Bangladesh</span>
                        </a></li>
                        <li><a class="clear" href="javascript:void(0)">
                        <span class="flag-48 ID"></span><span class="fltxt">INDONESIA</span>
                        </a></li>                  
                   </ul>
                </div>
                <!--/end of search div-->
               
               <div class="showhideDiv">
                <div class="textOffer">
                    Or you can <a class="themeClr" href="#offers">check latest offers</a>
                </div>
                <div class="h3g ligt" style="margin-bottom:50px">
               <span class="cmnsprt-80 people"></span>
                People <span class="themeClr">love</span> to call at</div>
                </div>
        </div>
    </div><!--/end of wrapper-->
</section><!--/end of section-->

 <section id="st-container" class="showhideDiv">
	<div class="wrapper clear">
    	        <section id="static-result">
            <aside>
            	<div class="clear">
                	<span class="flag-48 IN"></span>
                    <span class="fltxt">India</span>
                </div>
                <div class="bgtxt">
                    1.26 <sup class="WebRupee">Rs.</sup><span class="">/min</span>
                </div>
            </aside>
            <aside>
            	<div class="clear">
                	<span class="flag-48 AE"></span>
                    <span class="fltxt">United Arab <br/> Emirates</span>
                </div>
                <div class="bgtxt">
                    0.46 <sup>$</sup><span class="">/min</span>
                </div>
            </aside>
            <aside>
            	<div class="clear">
                	<span class="flag-48 ID"></span>
                    <span class="fltxt">INDONESIA</span>
                </div>
                <div class="bgtxt">
                    1.26 <sup class="WebRupee">Rs.</sup><span class="">/min</span>
                </div>
            </aside>
            <aside>
            	<div class="clear">
                	<span class="flag-48 BR"></span>
                    <span class="fltxt">Brazil</span>
                </div>
                <div class="bgtxt">
                    0.46 <sup>$</sup><span class="">/min</span>
                </div>
            </aside>
            
        </section><!--/end of static result-->
    </div>
</section>

<!--/result container this div visible on result-->
<section id="result-container" class="hgPart showhideDiv" style="display:none;">
	<!--dyamic content comes here don't change this--> 
</section>


<!--Offer Pop up widnow-->
<div class="wrapper">
<div id="offers">
    	<div class="offerHead">Offers for me</div>
            
             <div class="innerContent clear">
            <!-- <div class="arrow_box"></div>-->
                    <div class="left">
                    	 <div class="popuphead">There's something for everyone!</div>
                        <p><span>Existing Phone 91 users</span>can avail the special offer where after recharging, they get 10% extra of their recharge amount in their account if they share on Facebook.  Follow the link below the Buy now option. 
                        </p>
                        <p><button class="btn btn-fb">Share on Facebook</button>to stay updated with our weekly offers! </p>
                   </div>
                  <div class="right">
                  	<img alt="" title="" src="images/offers.png" class="offerImg"/>
                  </div>
                        
             </div>
	  </div>
</div>
<!--//Offer Pop up widnow-->

<?php include_once('inc/footer.php') ?>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script> 
<script type='text/javascript' src='js/basic.js'></script>
<script>
searchPrice();


$('.userTerrifId').on('change', function () 
{
	var current = $('#currency :selected').text();
        
        console.log(current);
        
	safeClickTaleExec("$('.userCurrency').val('" + current + "').change();");
	//console.log(current);
	$('#pickedCurrency').text(current);
}); 
function safeClickTaleExec(code) {
	//console.log(code)
}
$('#seachCountry').keyup(function(){
	if($(this).val() == ''){
		$('#flaglist').hide();
	}
	else{
		$('#flaglist').show();
	}
})
</script>
</body>
</html>