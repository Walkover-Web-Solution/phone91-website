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
<link rel="stylesheet" type="text/css" href="css/signup-step-style.css" />
</head>
<body>
<?php include_once('inc/header.php') ?>
<section id="step-top" class="warmBg">
	<div class="wrapper">Forgot Password</div>
</section>



<div style="padding:40px 0 20px" class="wrapper clear">
	<h2><span class="themeClr">Hey</span> we are sorry you are having trouble with your <span class="themeClr">password!</span></h2>
</div>



<div class="wrapper clear pr">
	
    <div class="clear step-wrap">
    	<aside class="boxsize">
        	<div class="pdR3">
            	<h3 style="margin-bottom:15px" class="fs18">Enter your number/username</h3>
                
                <div id="inpwrp">
                    <input class="pr" id="" type="text" placeholder="Enter number/username" />
                    <button style="margin-right:10px;" href="#" class="button large googleplus ">
                    	Reset via Call
                    </button>
                    <button href="#" class="button large facebook ">
                    	Reset via SMS
                    </button>
                </div><!--/end of search div-->
                
                <div class="clear"></div>
                
                            
                <p class="para16 mdf">If the person has entered a wrong number. <br>
sorry, 99XXX is not registered by <a href="javascript:void(0)">signing up!</a>, <br>
If the person has entered a wrong username<br>
Sorry this username does not exist<br>
if ther user enters the wrong number more than 2 times<br>
Your IP has exceeded the trial limit please try after 24 hours or <a href="javascript:void(0)">contact</a> support we would be glad to assist you<br>
</p>
                
            </div><!--/end of pdr3 div-->
        </aside><!--/end of aside-->
        <aside class="last frg">
        	<figure>
            	 <img src="images/sketch-forget.png" alt="" title="" />
            </figure>
        </aside>
    </div><!--/end of first step div-->
    
<!--below text visible only when user have two many numbers--><
<div style="padding:40px 0 20px" class="wrapper clear">
	<h2>The following numbers are associated with the username <span class="themeClr">username</span></h2>
</div>    
    
    <div class="clear step-wrap">
    	<aside class="boxsize">
        	<div class="pdR3">
            	<h3 style="margin-bottom:15px" class="fs18">Select number</h3>
                
                <div id="selwrp">
                    <select>
                    	<option>Select Number</option>
                        <option></option>
                    </select>
                    <button style="margin-right:10px;" href="#" class="button large googleplus ">
                    	Reset via Call
                    </button>
                    <button href="#" class="button large facebook ">
                    	Reset via SMS
                    </button>
                </div><!--/end of search div-->
                
                <div class="clear"></div>
                
                            
                <p class="para16 mdf">Select the number whose password you wish to reset. <br></p>
                
            </div><!--/end of pdr3 div-->
        </aside><!--/end of aside-->
        <aside class="last frg">
        	<figure>
            	 <img src="images/sketch-forget.png" alt="" title="" />
            </figure>
        </aside>
    </div><!--/end of first step div-->
    
    
    
    
    
    
    
    
<!--below text visible on second step--><!--second step start from here -->
<div style="padding:40px 0 20px" class="wrapper clear">
	<h2>We have sent you a confirmation code on <span class="themeClr">98XXX</span></h2>
</div>
	
<div class="clear step-wrap" style="">
    <aside class="boxsize">
        <div class="pdR3">
            <div class="verifyform">
                <input class="vrfinpt" type="text" placeholder="Enter Verification Code" />
                <button class="btdn">Done</button>
            </div>
            <p class="para16 mdf">
If you didn't receive the code yet, <br>
request another one via <a href="javascript:void(0)">SMS</a> or <a href="javascript:void(0)">call</a></p>

            <p class="para16">
               In case you entered a wrong number, you can always Go <a href="javascript:void(0)">back</a> and change it.
            </p>
        </div>
    </aside>
    
    <aside class="last frg">
        <figure>
             <img src="images/sketch-forget.png" alt="" title="" />
            <!--<img src="images/signup-step-text.jpg" alt="" title="" />-->
        </figure>
    </aside>
</div>
<!--/end of second step--> 



<!--below text visible on last step-->
<div style="padding:40px 0 20px" class="wrapper clear">
	<h2>Tada! You can now reset your <span class="themeClr">password.</span></h2>
</div>
	
<div class="clear step-wrap" style="">
    <aside class="boxsize">
        <div class="pdR3">
            <div class="lgBg">
                <input class="frginpt" type="text" placeholder="Enter New Password" /><br>
                <input class="frginpt" type="text" placeholder="Once again" /><br>
                <button style="margin-left:0" class="btdn">Confirm</button>
            </div>
            <p class="para16 mdf">
If you didn't receive the code yet, <br>
request another one via <a href="javascript:void(0)">SMS</a> or <a href="javascript:void(0)">call</a></p>

            <p class="para16">
               In case you entered a wrong number, you can always Go <a href="javascript:void(0)">back</a> and change it.
            </p>
        </div>
    </aside>
    
    <aside class="last frg">
        <figure>
             <img src="images/sketch-thumbs-up.png" alt="" title="" />
            <!--<img src="images/signup-step-text.jpg" alt="" title="" />-->
        </figure>
    </aside>
</div>
<!--/end of second step--> 


   
    
    
</div><!--/end of wrapper-->

<?php include_once('inc/footer.php') ?>
<script>
$('.currencySelectDropdown').click(function () {
	if($('#flaglist').is(':visible')){
		$('#flaglist').hide();
	}
	else{
		$('#flaglist').show();
	}
}); 
</script>
</body>
</html>