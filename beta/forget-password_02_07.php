<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<meta name="description" content="Reset your password with any of the available options like your Username, Mobile Number or Email ID and enjoy online calling." />
<title>Reset Your Password At Phone91 with Forget Password Option</title>
<?php 
include 'functions.php';
   
$funObj = new functions();

$country = $funObj->countryArray();
//print_r($country);

$confirmMobileNumber = "98XXX";

include_once('inc/head.php');

if(isset($_REQUEST['error']) && !empty($_REQUEST['error']))
{
    $_REQUEST['error'] =  stripcslashes(base64_decode($_REQUEST['error']));
    
    $requestParam = json_decode($_REQUEST['error']);
    
    if(is_object($requestParam))
        $requestParam = get_object_vars($requestParam);
    
 
    
    if(isset($requestParam['type']))
    {
        if( $requestParam['type'] == 1 || $requestParam['type'] == 2 || $requestParam['type'] == 3 )
        { 
            $action = '0';
            
            if($requestParam['type'] == 2)
                $action = '2'; 
            
            if(is_array($requestParam['contact']))
            {
                 $option = "";
                 
                if($requestParam['type'] == '1')
                {
                 
                    foreach($requestParam['contact'] as $val)
                    {
                        if($requestParam['type'] == 2)
                        {
                            $mobileNumber = explode('-' , $val);

                            $option.= "<option code='".$mobileNumber[0]."' value='".$mobileNumber[1]."'>".$val."</option>";
                        }
                        else
                            $confirmMobileNumber = $val;
                    }
                }
                else
                {
                    foreach($requestParam['userDetail'] as $val)
                    {
                        $val = get_object_vars($val);
                        
                       
                       // foreach($val as $value )
                        {
                            if($requestParam['type'] == 2)
                            {
                                $number = $val['number'];
                                $option.= "<option code='".$val['userName']."' number = '".$val['number']."'  value='".$val['userName']."'>".$val['userName']."</option>";
                            }
                            else
                                $confirmMobileNumber = $val;
                        }
                    }
                }
            }
            else 
            {
                $confirmMobileNumber = $requestParam['contact'];
            }
        }
        else if($requestParam['type'] == 6)
        {
            $action = 6;
        }
        else if( $requestParam['type'] == 4 )
        {
           
        }
        else if($requestParam['type'] == 0)
        {
            $action = 'default';
        }
         else if($requestParam['type'] == 11)
        {
            $action = '11';
        }
        else 
        { $action = 'default';   }
    }
    else 
    { 
        $action = 'default';
    }
}
else 
{
    $action = 'default';    
}
?>
<link rel="stylesheet" type="text/css" href="css/signup-step-style.css" />
<style>
#searchWrap  ul#flaglist li span.flag-24 { margin:0;}
</style>
</head>
<body>
<?php include_once('inc/header.php') ?>
    
<section id="step-top" class="warmBg">
	<div class="wrapper space alC">Forgot Password</div>
    <div class="innerBanner"></div>
</section>

<div class="wrapper clear pr">

<?php if($action == 'default' ) 
{ ?>      
<div style="padding:40px 0 20px" class="wrapper clear">
        <h2> <span class='themeClr'>Hey</span>, we are sorry you are having trouble with your <span class='themeClr'>password!</span></h2>
</div>

<form name="forgotPassword" class="forgotPassword" id="forgotPassword" method="post" action="<?php echo REDIRECT_FB_GOOGLE; ?>/controller/forgotPasswordApi.php" onSubmit="return validate('userId' , 'forgotPassword');" > 
<div class="clear step-wrap">
<aside class="boxsize">
        <div class="pdR3">
        
        <h3 style="margin-bottom:20px" class="fs18">What do you still remember?</h3>
        
        <input type="hidden" name="smsCall" id="smsCall" value="SMS">
        <input type="radio" name="verifyOption" value="0" onChange="displayForm('Username' , 'Number' , 'Email')"  id="radioUserName" class="css-checkbox" /> 
       	<label for="radioUserName" class="css-label"> Username</label>
        <input type="radio" name="verifyOption" value="1" onChange="displayForm('Number' , 'Username' , 'Email')" id="radioNumber" class="css-checkbox"  />
        <label for="radioNumber" class="css-label">  Mobile number</label>
        <input type="radio" name="verifyOption" value="2" onChange="displayForm('Email' , 'Number' ,'Username')"  id="radioEmail" class="css-checkbox"  /> 
        <label for="radioEmail" class="css-label">Email ID</label> 
        
        
        
       
         <?php echo "<br/>"; ?>
         
         <div id="inpwrp" class="forgotNo">
        
        <input style="display: none;" class="pr Username UsernameCheck  fieldsName" id="Username" name="dummy" type="text" otype="userName"/>
        <input style="display: none;" class="pr Email EmailCheck fieldsName" name="dummy" type="text"  id="Email" otype="email"/>

        <div id="searchWrap" class ="Number" style="display: none;" >
            <div id="selwrpa">
                
                 <div class="currencySelectDropdown">
                     <span id="setCountry"  class="pickDown"></span>
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
                     <input name='countryCode' type="text" id="code" value="91" class="min"  readonly/>
                     <input class="pr NumberCheck" name='dummy' id='Number' type="text" placeholder="Enter Mobile Number..." otype="mobile" />
            </div>
        </div>
        
        <div id="buttonSmsCall"  style="display: none;" class="forgotBttns">
            <button type="submit" style="display: none;" href="#" class="btn btn-danger btn-mid  btnapp  googleplus"> 
            	    SMS me
            </button> 
                
                
            <div id="userIderr"></div>
            <div class='error_red requestId' > </div>
            <div class='register' style="display: none;">You Can Register By <a href='http://phone91.com/signup.php'>SignUp</a></div>
             
            <div id="CALL"  style="display: none;" class="textInstead">
                  Enter your number and we'll call you to enter a verification code.Or we can <a href="javascript:void(0);" id="text-me" onClick="changeOption('Call' , 'SMS' )" title="SMS you instead">
                  Text you instead</a>.
            </div>

            <div id="SMS" class="textInstead">
                Enter your number and we'll SMS you a verification code. Or we can <a href="javascript:void(0);" id="call-now" onClick="changeOption('SMS' , 'Call')" title="Call you instead">Call you instead</a>.
            </div>
        </div>
        
        <div class="forgotBttns">
            <div id="sendByEmail" style="display: none;" > 
                <button  href="#" class="btn btn-danger btn-mid  btnapp  googleplus">
                    Send Code
                </button>
                <div id="userIderrEmail"></div>
                <div class='error_red requestId' > </div>
                <div class='register' style="display: none;">You Can Register By <a href='http://phone91.com/signup.php'>SignUp</a></div>
            </div>
        </div>
        
        
        </div>
        <!--/end of search div-->
        <div class="clear"></div>
        <p class="para16"><?php echo $content; ?></p>
        <p class="para16">
        <?php echo $goBackLink; ?>
        </p>
        </div><!--/end of pdr3 div-->
    </aside><!--/end of aside-->
    
    <aside class="last frg">
            <figure>
             <img src="images/sketch-forget.png" alt="" title="" />
        </figure>
    </aside>
    
</div><!--/end of first step div-->
</form>
<?php } 
else if($action == 2)
{ ?> 
    
<div style="padding:40px 0 20px" class="wrapper clear">
	<h2>The following usernames are associated with the number <span class="themeClr"><?php echo $requestParam['mobileNumber']; ?></span></h2>
</div>    

    <form name="selectNumber" class="selectNumber" id="selectNumber" method="post" action="<?php echo REDIRECT_FB_GOOGLE; ?>/controller/forgotPasswordApi.php" onSubmit="return validate('userId' , 'selectNumber');" >  
    <div class="clear step-wrap">
    	<aside class="boxsize">
        	<div class="pdR3">
            	<h3 style="margin-bottom:15px" class="fs18">Select username</h3>
                <div id="userIderr"> </div>
                <div id="selwrp">
                    <select name="userId" id="userId" onChange="setCountryCode(this);">
                    	<option value="">Select </option>
                       <?php echo $option ?>;
                    </select>
                    
                    <input type="hidden" name="countryCode" id="countryCode"  />
                    <input type="hidden" name="smsCall" id="smsCall" value="SMS"/>
                     
                      <input type="hidden" name="mobileNumber" id="mobileNumber" />
                     <button  href="#" class="btn btn-danger btn-mid  btnapp  googleplus"> 
                            SMS ME
                    </button> 
                    
                    <div id="buttonSmsCall"   class="forgotBttns">
                        
                       

                        <div id="CALL"  style="display: none;" class="textInstead">
                            Enter your number and we'll call you to enter a verification code.Or we can <a href="javascript:void(0);" id="text-me" onClick="changeOption('CALL' , 'SMS' )" title="SMMMM you instead">
                            Text you instead</a>.
                        </div>

                        <div id="SMS" class="textInstead">
                            Enter your number and we'll SMS you a verification code. Or we can <a href="javascript:void(0);" id="call-now" onClick="changeOption('SMS' , 'CALL')" title="Call you instead">Call you instead</a>.
                        </div>
                        
                    </div><!--/end of search div-->
                
                <div class="clear"></div>
                
                            
                <p class="para16 mdf">Select the number whose password you wish to reset. <br></p>
                
        <p class="para16">
           In case you entered a wrong information, you can always go <a href="http://phone91.com/forget-password.php">back</a> and change it.
        </p>
                
                </div>
            </div><!--/end of pdr3 div-->
        </aside><!--/end of aside-->
        <aside class="last frg">
        	<figure>
            	 <img src="images/sketch-forget.png" alt="" title="" />
            </figure>
        </aside>
    </div>
    </form>
    
    
<?php }

else if($action == '0')
{  
    $number = '';
    $countryCode = '';
    $type = "SMS";

    if(strpos($confirmMobileNumber,'-') && !filter_var($confirmMobileNumber, FILTER_VALIDATE_EMAIL))
    {
        $arrNumber = explode('-', $confirmMobileNumber);   
        $number = $arrNumber[1]; 
        $countryCode  = $arrNumber[0]; 

        $confirmMobileNumber = $countryCode.$number;
    }
    else if(filter_var($confirmMobileNumber, FILTER_VALIDATE_EMAIL))
    {
        $type = "EMAIL";

    }
    
 
?>
    <div style="padding:40px 0 20px" class="wrapper clear">
        <h2>We have sent you a confirmation code on <span class="themeClr"><?php echo $confirmMobileNumber; ?></span></h2>
    </div>
<?php if(isset($requestParam['msg']) &&  !empty($requestParam['msg'])) { ?> <div class="error_red"> <?php echo $requestParam['msg']; ?></div><?php } ?>

    
<div class="clear step-wrap" style="">

<aside class="boxsize">
    <div class="pdR3">
    <form name="verifyNumber" class="verifyNumber" id="verifyNumber" method="post" action="https://phone91.com/action.php?action=verifyConfirmation" onSubmit="javascript:void(0)" > 
    <!--<form name="verifyNumber" class="verifyNumber" id="verifyNumber" onsubmit="sendDetail(this)" action="javascript:void(0)" > -->
    
        <div class="verifyform">
        
            
            <div id="userIderr"> </div>
              
            <input type="hidden" name="number" value="<?php echo $confirmMobileNumber; ?>">
            <input class="vrfinpt" type="text" placeholder="Enter Verification Code" name="code" />
            <input type="hidden" name="domain" value="<?php echo $_SERVER['HTTP_HOST']?>">
            <input type="hidden" name="type" value="<?php echo $type; ?>" />
            <button id="verifybtn" class="btdn">Done</button>
        	<input type="hidden" name="userId" value="<?php echo $confirmMobileNumber; ?>" >
            
        </div>
         
         <?php if($type == 'EMAIL'){ ?>
                <input type="hidden" name="smsCall" value="MAIL" >
                <p class="para16 mdf">
                    If you didn't receive the code yet, <br>
                    request another one via <a href="<?php echo REDIRECT_FB_GOOGLE; ?>/controller/forgotPasswordApi.php?smsCall=MAIL&userId=<?php echo $confirmMobileNumber; ?>">Email</a>
                </p>

         <?php }
         else {?> 
 
        <p class="para16 mdf">
            If you didn't receive the code yet, <br>
            request another one via <a href="<?php echo REDIRECT_FB_GOOGLE; ?>/controller/forgotPasswordApi.php?smsCall=SMS&userId=<?php echo $number; ?>&countryCode=<?php echo $countryCode; ?>">SMS</a> or <a href="<?php echo REDIRECT_FB_GOOGLE; ?>/controller/forgotPasswordApi.php?smsCall=CALL&userId=<?php echo $number; ?>&countryCode=<?php echo $countryCode; ?>">call</a>
        </p>
             
        <?php }?>
        
        <p class="para16">
           In case you entered a wrong number, you can always Go <a href="http://phone91.com/forget-password.php">back</a> and change it.
        </p>
        </form> 
    </div>
     
</aside>

<aside class="last frg">
    <figure>
         <img src="images/sketch-forget.png" alt="" title="" />
        <!--<img src="images/signup-step-text.jpg" alt="" title="" />-->
    </figure>
</aside>
</div>
      

<?php }
else if($action == 6) { ?>
    
<div style="padding:40px 0 20px" class="wrapper clear">
	<h2>Tada! You can now reset your <span class="themeClr">password.</span></h2>
</div>
   
<div class="error_red"><?php if(isset($requestParam['msg']) && !empty($requestParam['msg'])) {  echo $requestParam['msg']; } ?></div>
 <div id="userIderr"></div>   

<div class="clear step-wrap" style="">
    <aside class="boxsize">
        <div class="pdR3">
            <div class="lgBg">
                <form name="resetPassword" id="resetPassword" method="post" action="https://phone91.com/action.php?action=resetPasword" onSubmit="javascript:void(0)">
                    <input class="frginpt" type="password" placeholder="Enter New Password" name="new_pwd" otype="reset" /><br>
                    <input class="frginpt" type="password" placeholder="Once again" id="confirm_pwd" name="confirm_pwd" /><br>
                    <button style="margin-left:0" class="btdn">Confirm</button>
                </form>
            </div>
           
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
 
<?php } else if($action == '11' )  
{ ?>    
<div>
    <img src="images/signup-step-text.png" alt="" title="" class="mrB6" onload="redirectPage()"/>
</div>
    
<?php } ?>

</div><!--/end of wrapper-->

<?php include_once('inc/footer.php') ?>

<script>

function sendDetail(ths){
	$('#verifybtn').attr('disabled','disabled');
	var form = $(ths).serialize();
	console.log(form);
	$(ths).submit();
	/*$.ajax({
		type: "POST",
		url: "https://phone91.com/action.php?action=verifyConfirmation",
		data: form,
		dataType: "json",
		beforeSend:function(){console.log('submitting')},
		success: function(data) {
			console.log(data);
			console.log('submitted');
		}
	})*/
}








function setCountryCode(ths)
{
    var countruCode = $('option:selected', ths).attr('code');
    var number = $('option:selected', ths).attr('number');
    var userId = $('option:selected', ths).val();
     
    var mobileNumber = number.split('-');
     
    
     
    $('#mobileNumber').val(mobileNumber['0']+mobileNumber['1']);
    $('#userId').val(userId);
    $('#countryCode').val(countruCode);
    
}

<?php if($action == 'default' )  { ?>
var radioclick = '<?php echo (isset($requestParam['verifyOption']) and $requestParam['verifyOption'] != '')? $requestParam['verifyOption'] : "0"; ?>';

switch(radioclick)
{
    case '0':
        $( "#radioUserName").trigger( "click" );
        break;
    case '1':
        $( "#radioNumber").trigger( "click" );
        break;
    case '2':
        $( "#radioEmail" ).trigger( "click" );
        break;
}

$('.requestId').html('<?php  echo (isset($requestParam['msg']) and $requestParam['msg'] != '')? $requestParam['msg'] : ""; ?>');

var type = '<?php  echo (isset($requestParam['type']) and $requestParam['type'] != '')? $requestParam['type']:1; ?>';
console.log(type);
if(type == '0')
{
    $('.register').show();
}

<?php  } ?>

function validate(inputId , formId)
{
    var userId = $("[name='"+inputId+"']").val();
    var errorMessage = "";
    userId = jQuery.trim(userId);
    var attrType = $("[name='"+inputId+"']").attr('otype');
    
    if(attrType == 'email')
    {
        emailReg = /^[_A-Za-z0-9-]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,4})$/;
        
        if(!emailReg.test(userId))
        {
            $("#userIderrEmail").addClass("error_red");
            $("#userIderrEmail").html("Please enter Valid Email ID");	   
            return false;
        }
    }
    else if(attrType == 'mobile')
    {
        mobileReg = /^[0-9]+$/;
        
        if(!mobileReg.test(userId))
        {
            $("#userIderr").addClass("error_red");
            $("#userIderr").html("Please enter Valid Mobile Number");	   
            return false;
        }
    }
    else if(attrType == 'userName')
    {
        userNameregex = /^[a-zA-Z][a-zA-Z0-9\@\_\.]+$/;
        
        if(!userNameregex.test(userId))
        {
            $("#userIderr").addClass("error_red");
            $("#userIderr").html("Please enter Valid user Name");	   
            return false;
        }
    }
    else if(attrType == 'reset')
    {
        var confirmPassword = $('#confirm_pwd').val();
        
        passwordRegex = /^[a-zA-Z][a-zA-Z0-9\$\#\!\%\@\_\.]+$/;
         
        if(confirmPassword != userId && userId!="")
        {
            $("#userIderr").addClass("error_red");
            $("#userIderr").html("Password Not Match");	   
            return false;
        }
        else if(!passwordRegex.test(confirmPassword))
        {
            $("#userIderr").addClass("error_red");
            $("#userIderr").html("Special charecters are not allowed");	   
            return false;
        }
        else
            errorMessage = "Please enter Password";

    }    

  
    if(formId == 'selectNumber')
    {
        var errorMessage = "Please Select Mobile Number";
    }
    
    
    if( userId == "" || userId.length < 4 )
    {
        $("#userIderr").addClass("error_red");
        
        if(errorMessage == '')
            errorMessage = "Please enter username or Mobile Number";
        
        $("#userIderr").html(errorMessage);	   
        return false;
    }
    else
    {
        return true;
    }
}




function displayForm(ths , opta , optb)
{   
    $('#'+ths).attr( 'name' , 'userId' );
    
    $('.requestId').html('');
    $('.register').hide();;
    $('#userIderr').html('');
    
    if(ths == 'Number')
    {
        $('#code').val('91');
    }
    
    $('.'+ths).show(); //userId
    
    $('.'+ths).attr('placeholder' , 'Enter Your '+ths);
    
    if(ths == 'Email')
    {
        $('#buttonSmsCall').hide();
        $('#smsCall').val('MAIL');
        $('#sendByEmail').show();
    }
    else
    {
        $('#buttonSmsCall').show();
        $('#sendByEmail').hide(); 
        $('.btnapp').show(); 
        $('#smsCall').val('SMS');
    }
    
    $('.'+opta+'Check').attr( 'name' , 'dummy' );
    $('.'+optb+'Check').attr( 'name' , 'dummy' );
    
    $('.'+opta).hide();
    $('.'+optb).hide();
}

function changeOption(ths, optId)
{
    $('#'+ths).hide();
    $('#'+optId).show();
    console.log(optId);
    $('#smsCall').val(optId);
    
    $('.btnapp').html(optId+' me');
}

function redirectPage()
{
   // $.wait( function(){  window.location = 'http://phone91.com/sign-in.php'; }, 5);
   
   setInterval(function(){ window.location = 'http://phone91.com/sign-in.php'; },3000);
   
}


function SetValue(ths)
{
    var countryName = $(ths).attr('countryName');
    var countryCode = $(ths).attr('countryCode');
    var countryFlags = $(ths).attr('countryFlags');

    $('#setCountry').html('');
    
    $('#setFlag').removeClass($('#setFlag').attr('flagId')); //flagId

    $('#setFlag').addClass(countryFlags);
    $('#setFlag').attr('flagId' , countryFlags);
    $("#code").val(countryCode.replace(/ /g, ''));
    $('#flaglist').hide();
}




$(".currencySelectDropdown").on('click', function(e) {
	
    $("#flaglist").show();
 }) 
 

 
</script>
</body>
</html>