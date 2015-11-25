<?php

include 'functions.php';
$funObj = new functions();
$country = $funObj->countryArray();

    


if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == '101')
{
    if(isset($_REQUEST['error'])  )
    {
       $error = base64_decode(base64_decode($_REQUEST['error'])); 
       $userDeails = json_decode($error , true);
        
       $userEmailId = $userDeails[0];
       $userFirstName = $userDeails[1];
       $userLastName = $userDeails[2];

       
    }
    
    
}

?>
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
    <script>window.location.hash = '';</script>    
<?php include_once('inc/header.php') ?>
<section id="step-top" class="warmBg">
	<div class="wrapper space alC">Nice to Meet you</div>
      <div class="innerBanner"></div>
</section>

<div class="wrapper clear pr">
	<!-- first div id = addcontactDiv -->  
        
<?php if(!isset($_REQUEST['success']))
{ 
  if(!isset($_REQUEST['error'])) {  ?>      
      <div class="firstStep allstep">
        
        <div style="padding:40px 0 20px" class="wrapper clear">
        <h2 class="signupStep">
                <span class="stepyou">You</span> and
                <span class="stepI">I</span> need your number to connect</h2>
    </div>
        <div class="clear step-wrap">
            <aside class="boxsize">
            <!-- remember  Content-->
             <div class="pdR3">
                    <!--<h3 class="fs18" style="margin-bottom:20px">How would you like to confirm your mobile No.</h3>-->
                    
                    <div id="userIderr"></div>
                    <input type="hidden" id="smsCall" name="smsCall">
    
                    <div class="forgotNo" id="inpwrp">
                         <div id="searchWrap">
                           <div id="selwrpa">
                               
                                <div class="currencySelectDropdown">
                                <span id="setCountry"  class="pickDown" style="">INDIA</span>
                                <span id="setFlag" flagId="IN" class='flag-24 IN'></span>

                                </div>

                                <ul id="flaglist" style="display: none;">
                                   <?php 
                                       foreach($country as $key =>$countryNames)
                                       {
                                           $ccode = explode('/',$countryNames['ISO']);
                                           echo "<li  countryCode='".$countryNames['CountryCode']."' countryName='".$countryNames['Country']."' countryFlags='".$ccode[0]."' onClick='SetValue(this)'>
                                           <a class='clear' href='javascript:void(0)'>
                                           <span class='flag-24 ".$ccode[0]."'></span><span code='".$countryNames['CountryCode']."' class='fltxt'>".$countryNames['Country']."</span>
                                           </a>
                                           </li>";
                                           $count++;
                                       }
                                   ?> 


                                </ul>
                
                    </div>
                        <div class="codeInput">
                            <input name='code' type="text" id="code" onKeyUp="selectOption($(this).val())" class="min" value="91" readonly/>
                            <input class="pr" name='mobileNumber' id='mobileNumber' type="text" placeholder="Enter number" />
                        </div>
                </div><!--/end of search div-->
                       
                     <!--   <div class="verifyForm">
                            <button class="button large googleplus " onClick="saveMobileNumber('CALL')">
                                Connect via Call
                            </button>
                            <button class="button large facebook " onClick="saveMobileNumber('SMS')">
                                Connect via SMS
                            </button>
                        </div>-->
                    
                      <!--  <input type="text" id="" class="pr Username fieldsName" style="display: none;">
                        <input type="text" id="" class="pr Number fieldsName" style="" placeholder="Enter Your Number">
                        <input type="text" id="" class="pr Email fieldsName" style="display: none;">-->
                        
                       <div class="forgotBttns" style="" id="buttons"> 
                     
                            <button class="btn btn-danger btn-mid  btnapp  googleplus" onClick="saveMobileNumber('SMS')" style="margin-right: 10px;" >
                                    SMS me
                            </button> 
                                <span id ="response" class="error_red clear db"></span>
                         <div class="textInstead textChange" style="display: none;" id="Call">
                               Enter your number and we'll call you to give you a verification code. Or we can also  <a title="SMS you instead" onClick="changeOption('Call' , 'SMS' )" id="text-me" href="#">SMS you</a> .                    
                                </div>
            
                        <div class="textInstead textChange" id="SMS">
                            Enter your number and we'll SMS you a verification code. Or we can also  <a title="Call you instead" onClick="changeOption('SMS' , 'Call')" id="call-now" href="#">Call you</a>.
                        </div>
                    </div>
                        
                       <div style="display: none;" id="sendByEmail"> 
                        <button class="button  large googleplus" onClick="saveMobileNumber('CALL')" style="margin-right:10px; display: none;">
                            Send Code
                        </button>
                    </div>
                    <!--<p class="para16 mdf">We will send you a confirmation code accordingly</p>-->
                    
                    </div><!--/end of search div-->
                    <div class="clear"></div>
                    <p class="para16"></p>
                    <p class="para16"></p>
            </div>
            <!-- //remember  Content-->
            </aside><!--/end of aside-->
             <aside class="last">
                <figure>
                     <img title="" alt="" src="images/sketch-signup.png">
                   <!-- <img src="images/signup-step-text.png" alt="" title="" />-->
                </figure>
        </aside>
        </div><!--/end of first step div-->
      
     </div>
        <?php } ?>
     <!--// first div -->  

       <!--second step start from here -->
        <div class="secStep allstep " style="<?php echo (isset($_REQUEST['error']))? '' :'display:none'; ?>">
      	 <div>
            <div style="padding:40px 0 20px" class="wrapper clear">
                <h2>Enter Verification <span class="themeClr">Code</span></h2>
            </div>
            <div class="clear step-wrap" style="">
                <aside class="boxsize">
                    <div class="pdR3">
                         <form name="verify" class="" id="verificationform" onSubmit="return confirmMobileNumber();" method="post" action="http://phone.phone91.com/controller/signUpController.php?call=verifyNumber">
                                    
                        <div class="verifyform">
                            <input type="text" class="vrfinpt" id="key"   name="key"  placeholder="Enter Verification Code" />
                            <input type="hidden" name="domain" id="domain" value="<?php echo "http://".$_SERVER['HTTP_HOST'];?>"/> 
                            <button class="btdn" type="submit" name="verificationConfirm" >Done</button>
                        </div>
                        </form>     
                        <p class="para16 mdf fontInstead">"We have sent you a verification code on <span id="showNumber"></span>.  If you didn't receive the code yet,  request another one via 
                        <a onClick="resendCode('sms')">SMS</a> or <a onClick="resendCode('call')">call</a></p>
                        <p id="resendResponse"></p>
                        <p class="para16">
                            Go <a onClick="backAddNumber()">back</a> if you wish to change your number.
                        </p>
                    </div>
                </aside>
                <aside class="last">
                    <figure>
                         <img title="" alt="" src="images/sketch-signup.png">
                       <!-- <img src="images/signup-step-text.png" alt="" title="" />-->
                    </figure>
                </aside>
            </div>
        </div>
        </div>
        <!--/end of second step--> 

        <!--Third step start from here -->
         <div class="thirdStep allstep " style="display:none;">
            <div>
            <div style="padding:40px 0 20px" class="wrapper clear">
                <h2>We need to add calling balance in your account</h2>
            </div>
                
                <form name="fbCurrencyForm" id="fbCurrencyForm" method="POST" action="http://phone.phone91.com/controller/signUpController.php?call=facebookGoogleSignup" > 
            <div class="clear step-wrap" style="">
            <aside class="boxsize">
                <div class="pdR3">
                    <div class="verifyform">
                        <div class="row">
                            <label class="lbl">Choose your billing currency</label>
                            <select name="fbCurrency" id="fbCurrency" >
                                <option value="9">AED</option>
                                <option value="7">INR</option>
                                <option value="84">USD</option>
                            </select>
                        </div>

                        <input type="hidden" name="currencyId"  value="<?php echo $userEmailId;?>" />
                        <input type="hidden" name="currencyName"  value="<?php echo $userFirstName;?>" />
                        <input type="hidden" name="currencylName"  value="<?php echo $userLastName;?>" />
                        
                        <input type="hidden" name="domain" id="domain" value="<?php echo $_SERVER['HTTP_HOST'];?>" />
                            <p class="para16 themeClr">You won't be able to change this later</p>
                        <button type="submit" class="large googleplus btdn"> Done </button>
                    </div>
                </div>
            </aside>
            <aside class="last">
                <figure>
                     <img src="images/sketch-signup.png" alt="" title="" />
                </figure>
            </aside>
        </div>  
        </form>
        </div>
        </div>
        <?php } ?>
        <!--//Third step start from here -->
        
	<style>
.lbl{
	display:block;
	line-height:20px;
	margin-bottom:5px;
}
.row select{
	width:100%;
	border:1px solid #c8c8c8;
	padding:7px 10px 7px 10px;
	height:34px
}
.row select option{
	padding-left:10px;
	line-height:24px;
	height:24px;
}
</style>
<?php if(isset($_REQUEST['success'])){?> 
<div class="fourthStep allstep">
	<img src="images/signup-step-text.png" alt="" title="" class="mrB6" onload="redirectUserPage()"/>
</div>
<?php } ?>
</div><!--/end of wrapper-->
<?php include_once('inc/footer.php') ?>


<script>
<?php 
if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == '101')
{
?>
 $('.allstep').hide();
 $('.thirdStep').show();
<?php } ?> 
$('.currencySelectDropdown').click(function () {
	if($('#flaglist').is(':visible')){
		$('#flaglist').hide();
	}
	else{
		$('#flaglist').show();
	}
}); 

function submitCurrency()
{
    
//    var currency = $('#fbCurrency').val();
//    var domain = '<?php echo $_SERVER['HTTP_HOST'];?>';
//    
//    $.ajax({type: "GET",url: "http://phone.phone91.com/controller/signUpController.php",data:{"call":"facebookGoogleSignup", "currency":currency, "domain":domain },
//            dataType :'jsonp',
//    success: function(response)
//    { 
//        if(response.status=="success")
//        {
//            
//        }
//        else
//        {
//   
//        }
//    }});
}


function changeOption(ths, optId)
{
    $('#'+ths).hide();
    $('#'+optId).show();
    
    $(".btnapp").attr("onClick","saveMobileNumber('CALL')");
    $('.btnapp').html(optId+' Me');
}

function selectOption(valu)
{
    $('#location option[value="'+valu+'"]').prop('selected',true);
}
function saveMobileNumber(carierType)
{
    var mobileNumber = $('#mobileNumber').val();
    var code = $('#code').val();
    if(/[^0-9]/.test(mobileNumber) || !(/[0-9]{8,18}/.test(mobileNumber)))
    {
        $('#response').html("Invalid mobile number please enter a valid mobile number");
        return false; 
    }
    if(/[^0-9]/.test(code))
    {
        $('#response').html("Invalid country code please select a country");
        return false;
    }
        
$.ajax({type: "GET",url: "http://phone.phone91.com/controller/signUpController.php",data:{"call":"verifyContactNumber","mobileNumber":mobileNumber,"countryCode":code,"carrierType":carierType},dataType: 'jsonp',
	    success: function(response)
	    { 
		    if(response.status=="success")
                    {
                         //$('#response').html(response.msg);
                         $('.allstep').hide();
                         $('.secStep').show();
                         $('#showNumber').html(code+"-"+mobileNumber);
                    }
                    else
                    {
                        $('#response').html(response.msg);
                    }
              }});	

}
$("#location").on('change', function(event) {
    $("#code").val($(this).val().replace(/ /g, ''));
 })

$(document).ready(function() {

//        var countryCode = $('#location').val();
//        console.log(countryCode);
//        $('#code').val(countryCode);
        
        
        
});

function confirmMobileNumber()
{
    var key = $('#key').val();
    if(/[^0-9]/.test(key) || key.length < 1 || key.length > 5)
    {
        $('#resendResponse').html("Invalid confrim code only numeric values are allowed of 1-5 length");
        return false;
    }
    return true;
    
}

function resendCode(smscall){
          
$.ajax({type: "GET",url: "http://phone.phone91.com/controller/signUpController.php",data:{"call":"resendVerifyCode","smscall":smscall},dataType: 'jsonp',
	    success: function(response)
	    { 
		      $('#resendResponse').html(response.msg);
                   
              }});	
          
}

function backAddNumber(){
    $.ajax({type: "GET",url: "http://phone.phone91.com/controller/signUpController.php",data:{"call":"backAddNumber"},dataType: 'jsonp',
	    success: function(response)
	    { 
		     $('.allstep').hide();
                     $('.firstStep').show();  
                   
              }
          });	
          

}

function SetValue(ths)
{
    var countryName = $(ths).attr('countryName');
    var countryCode = $(ths).attr('countryCode');
    var countryFlags = $(ths).attr('countryFlags');

    $('#setCountry').html(countryName);
    
    $('#setFlag').removeClass($('#setFlag').attr('flagId')); //flagId

    $('#setFlag').addClass(countryFlags);
    $('#setFlag').attr('flagId' , countryFlags);
    $("#code").val(countryCode.replace(/ /g, ''));
    $('#flaglist').hide();
}


function redirectUserPage(){
setInterval(function(){ window.location = 'http://phone.phone91.com/userhome.php#!contact.php'; },3000);
}
</script>
</body>
</html>