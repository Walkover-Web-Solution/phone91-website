<?php
include 'functions.php';
$funObj = new functions();
$country = $funObj->countryArray();

//echo $_SERVER['SCRIPT_FILENAME'];
//die();

if (isset($_REQUEST['msg']) && $_REQUEST['msg'] == '101') {
    if (isset($_REQUEST['error'])) {
        $error = base64_decode(base64_decode($_REQUEST['error']));
        $userDeails = json_decode($error, true);
        //print_r($userDeails);

        $_SESSION['signupFrom'] = (isset($userDeails[1])) ? base64_decode($userDeails[1]) : "0";
        ;
        $userEmailId = $userDeails[0];
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
        <title>Phone91-Signup step</title>
<?php include_once('inc/head.php') ?>
        <link rel="stylesheet" type="text/css" href="css/signup-step-style.css" />
        <style type="text/css">
            .innerBanner {
                background: url("../images/clouds-signup.png") no-repeat  center 5px rgba(0, 0, 0, 0);
            }
            #inpwrps input {
                background: none repeat scroll 0 0 #ffffff;
                border: 1px solid #e3e3e3;
                height: 39px;
                text-indent: 10px;
                width: 180px;
            }
            #searchWraps input {
                border: medium none;
                font-size: 14px;
                font-weight: bolder;
                /*height: 48px;*/
                line-height: 48px;
                width: calc(100% - 110px);
            }
            #searchWraps #countryCode{
                width: 50px;
                float:left;
            }
        </style>
    </head>
    <body>
        <script>window.location.hash = '';</script>    
<?php include_once('inc/header.php') ?>
        <section id="step-top" class="warmBg">
            <div class="wrapper space alC">Today is a good day to share!</div>
            <div class="innerBanner"></div>
        </section>

        <div class="wrapper clear pr">
            <!-- first div id = addcontactDiv -->  

            
         <?php if(isset($_REQUEST['fbgl']) && $_REQUEST['fbgl'] == 1) { ?>  
            
            
              <div class="fbglStep">
                    <div class="stepOne cmn">

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

                                    <!--<div id="userIderr"></div>-->
                                    <!--<input type="hidden" id="smsCall" name="smsCall">-->

                                  
                                    <div class="forgotNo" id="inpwrps">
                                        <div id="searchWraps">
                                            <div id="selwrpas">
                                                <div class="currencySelectDropdown" style="float:left;">
                                                    <span id="setCountry"  class="pickDown"></span>
                                                    <span id="setFlag" flagId="IN" class='flag-24 IN'></span>

                                                </div>

                                                <ul id="flaglist" style="display: none;">
                                                    <?php
                                                    foreach ($country as $key => $countryNames) {
                                                        $ccode = explode('/', $countryNames['ISO']);
                                                        echo "<li  countryCode='" . $countryNames['CountryCode'] . "' countryName='" . $countryNames['Country'] . "' countryFlags='" . $ccode[0] . "' onClick='SetValue(this)'>
                                           <a class='clear' href='javascript:void(0)'>
                                           <span class='flag-24 " . $ccode[0] . "'></span><span code='" . $countryNames['CountryCode'] . "' class='fltxt'>" . $countryNames['Country'] . "</span>
                                           </a>
                                           </li>";
                                                        $count++;
                                                    }
                                                    ?> 


                                                </ul>
                                            <div class="codeInput">
                                                <input name='code' type="text" id="countryCode" onKeyUp="selectOption($(this).val())" class="min" value="91" readonly/>
                                                    <input class="pr" name='mobileNumber' id='mobNumber' type="text" value="" placeholder="Enter number" />
                                            </div>    

                                            </div>


                                       
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

                                        <div class="forgotBttns" style="" id="vbuttons"> 

                                            <button class="btn btn-danger btn-mid  btnapp  googleplus" onClick="checkVerifiedNumberExistFG()" style="margin: 0 10px;" >
                                                Verify
                                            </button> 
                                            <?php // if (isset($_REQUEST['error'])) { ?>

                                        <span class="error_red errorSpan stepOneError"></span>
                                            <?php // } ?>
<!--                                                <span id ="response" class="error_red clear db"></span>
                                         <div class="textInstead textChange" style="display: none;" id="Call">
                                               Enter your number and we'll call you to give you a verification code. Or we can also  <a title="SMS you instead" onClick="changeOption('Call' , 'SMS' )" id="text-me" href="#">SMS you</a> .                    
                                                </div>
                            
                                        <div class="textInstead textChange" id="SMS">
                                            Enter your number and we'll SMS you a verification code. Or we can also  <a title="Call you instead" onClick="changeOption('SMS' , 'Call')" id="call-now" href="#">Call you</a>.
                                        </div>-->
                                        </div>
                                        
                                         </div><!--/end of search div-->

                            <div id="formDiv" style="display:none">
                                    <form name="authenticationForm" action="http://voice.phone91.com/action_layer.php?action=loginRedirect" method="post"/>
                                        <input type="hidden" name="action" value="loginRedirect" />
                                        <input type="hidden" id="uname" name="uname" value="" />
                                        <!--<input type="hidden" id="domain" name="domain" value="<?php // echo $_SERVER['HTTP_HOST']; ?>" />-->
                                        <input type="hidden" id="domain" name="domain" value="phone91.com" />
                                        <input type="hidden" id="fileName" name="fileName" value="<?php echo basename($_SERVER['PHP_SELF']); ?>" />
                                        <input type="hidden" id="eId" name="eid" value="<?php echo $_REQUEST['eid']; ?>" />
                                        <input type="hidden" id="oauthFlag" name="oauthFlag" value="1" />
                                       
                                            <div class="codeInput">
                                                <!--<input name='code' type="text" id="code" onKeyUp="selectOption($(this).val())" class="min" value="91" readonly/>-->
                                                <input class="pr" name='pwd' id='passwd' type="password" placeholder="Enter password" />
                                            </div>
                                       
                                        <div class="forgotBttns" >
                                            <input class="btn btn-danger btn-mid  btnapp  " type="submit" name="submit" value="Get me In" style="background-color: #eb513f;margin-left: 10px;width:120px"/>
                                        </div>
                                    </form>
                           <?php //  if (isset($_REQUEST['error'])) { ?>
                                    <span class="error_red errorSpan"><?php echo (isset($_REQUEST['error']))?$_REQUEST['error']:""; ?></span>
                            <?php //  } ?>
                                 <!--<a href="#" id="forgot" onclick="forgotPassword()">Forgot Password</a>-->
                            </div>
                                        <!--                       <div style="display: none;" id="sendByEmail"> 
                                                                <button class="button  large googleplus" onClick="saveMobileNumber('CALL')" style="margin-right:10px; display: none;">
                                                                    Send Code
                                                                </button>
                                                            </div>-->
                                                            <!--<p class="para16 mdf">We will send you a confirmation code accordingly</p>-->

                                    </div><!--/end of search div-->
                                    <div class="clear"></div>
                                    <p class="para16"></p>
                                    <p class="para16"></p>
                                </div>
                                <a id="forgot" style="float:left;margin-left:10px;display:none;" href="#" onclick="forgotPassword()">Forgot Password</a>
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
                  
                  
                  
                  <!--second step start from here -->
                <div class="stepTwo cmn" style="display:none;">
                    <div>
                        <div style="padding:40px 0 20px" class="wrapper clear">
                            <h2>Enter Verification <span class="themeClr">Code</span></h2>
                        </div>
                        <div class="clear step-wrap" style="">
                            <aside class="boxsize">
                                <div class="pdR3">
                                    <form name="verify" class="" id="verificationform"  method="post" action="" onsubmit="return false;">

                                        <div class="verifyform">
                                            <!--<input type="hidden" name="signupFrom" id="signupFrom" value="<?php // echo $_SESSION['signupFrom']; ?>"/>--> 

                                            <input type="text" class="vrfinpt" id="key"   name="key" value="" placeholder="Enter Verification Code" />
                                            <!--<input type="hidden" name="domain" id="domain" value="<?php // echo "http://" . $_SERVER['HTTP_HOST']; ?>"/>--> 
                                            <button class="btdn" type="submit" name="verificationConfirm" onclick="verifyCode(key.value)" >Done</button>
                                        </div>
                                    </form> 
                                      <span class="error_red errorSpan"></span>
                                      
                                    <p class="para16 mdf fontInstead">"We have sent you a verification code on <span id="showNumber"></span>.  If you didn't receive the code yet,  request another one via 
                                        <a id="ReSms" onClick="forgotPassword();">SMS</a> or <a  id="ReCall" onClick="forgotPassword(2);">call</a></p>
                                    <p id="resendResponse"></p>
    <?php // if (isset($_REQUEST['error'])) { ?>

                                      
    <?php // } ?>
                                    <p class="para16">
                                        Go <a onClick="back('.stepTwo','.stepOne')">back</a> if you wish to try entering the password again.
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
                  
                  <div class="stepThree cmn" style="display:none;">
                      <div class="clear step-wrap" style="">
                        <aside class="boxsize">
                            <div class="pdR3">
                                <div class="lgBg">
                                    <form name="resetPassword" id="rstPwd" method="post"  onSubmit="return false;">
                                        <input class="frginpt" type="password" placeholder="Enter New Password" id="newPassword" name="new_pwd" otype="reset" /><br>
                                        <input class="frginpt" type="password" placeholder="Once again" id="confirmPwd" name="confirm_pwd" /><br>
                                        <button style="margin-left:0" class="btdn" onclick="changePassword()">Confirm</button>
                                    </form>
                                </div>
                                 <span class="error_red errorSpan"></span>
                            </div>
                        </aside>

                        <aside class="last frg">
                            <figure>
                                 <img src="images/sketch-thumbs-up.png" alt="" title="" />
                                <!--<img src="images/signup-step-text.jpg" alt="" title="" />-->
                            </figure>
                        </aside>
                    </div>
                  </div>
                  <!--<span class="error_red errorSpan"></span>-->
                  
            </div>
<?php
         }else{
if (!isset($_REQUEST['success'])) {
    if (!isset($_REQUEST['error'])) {
        ?>      
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
                                                    <span id="setCountry"  class="pickDown"></span>
                                                    <span id="setFlag" flagId="IN" class='flag-24 IN'></span>

                                                </div>

                                                <ul id="flaglist" style="display: none;">
                                                    <?php
                                                    foreach ($country as $key => $countryNames) {
                                                        $ccode = explode('/', $countryNames['ISO']);
                                                        echo "<li  countryCode='" . $countryNames['CountryCode'] . "' countryName='" . $countryNames['Country'] . "' countryFlags='" . $ccode[0] . "' onClick='SetValue(this)'>
                                           <a class='clear' href='javascript:void(0)'>
                                           <span class='flag-24 " . $ccode[0] . "'></span><span code='" . $countryNames['CountryCode'] . "' class='fltxt'>" . $countryNames['Country'] . "</span>
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

                                            <button class="btn btn-danger btn-mid  btnapp  googleplus" onClick="saveMobileNumber('SMS')" style="margin: 0 10px;" >
                                                SMS me
                                            </button> 
                                            <span id ="response" class="error_red clear db"></span>
                                            <div class="textInstead textChange" style="display: none;" id="Call">
                                                Enter your number and we'll call you to give you a verification code. Or we can also  <a title="SMS you instead" onClick="changeOption('Call', 'SMS')" id="text-me" href="#">SMS you</a> .                    
                                            </div>

                                            <div class="textInstead textChange" id="SMS">
                                                Enter your number and we'll SMS you a verification code. Or we can also  <a title="Call you instead" onClick="changeOption('SMS', 'Call')" id="call-now" href="#">Call you</a>.
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
                <div class="secStep allstep " style="display:none;<?php echo (isset($_REQUEST['error'])) ? '' : 'display:none'; ?>">
                    <div>
                        <div style="padding:40px 0 20px" class="wrapper clear">
                            <h2>Enter Verification <span class="themeClr">Code</span></h2>
                        </div>
                        <div class="clear step-wrap" style="">
                            <aside class="boxsize">
                                <div class="pdR3">
                                    <form name="verify" class="" id="verificationform" onSubmit="return confirmMobileNumber();" method="post" action="<?php echo REDIRECT_VOIP; ?>/controller/signUpController.php?call=verifyNumber">

                                        <div class="verifyform">
                                            <input type="hidden" name="signupFrom" id="signupFrom" value="<?php echo $_SESSION['signupFrom']; ?>"/> 

                                            <input type="text" class="vrfinpt" id="key"   name="key"  placeholder="Enter Verification Code" />
                                            <input type="hidden" name="domain" id="domain" value="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>"/> 
                                            <button class="btdn" type="submit" name="verificationConfirm" >Done</button>
                                        </div>
                                    </form>     
                                    <p class="para16 mdf fontInstead">"We have sent you a verification code on <span id="showNumber"></span>.  If you didn't receive the code yet,  request another one via 
                                        <a id="ReSms" onClick="resendCode('sms')">SMS</a> or <a  id="ReCall" onClick="resendCode('call')">call</a></p>
                                    <p id="resendResponse"></p>
    <?php if (isset($_REQUEST['error'])) { ?>

                                        <span class="error_red"><?php echo $_REQUEST['msg']; ?></span>
    <?php } ?>
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

                        <form name="fbCurrencyForm" id="fbCurrencyForm" method="POST" action="<?php echo REDIRECT_VOIP; ?>/controller/signUpController.php?call=facebookGoogleSignup" > 
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
                                                    <option value="224">NZD</option>
                                                </select>
                                            </div>

                                            <input type="hidden" name="currencyId"  value="<?php echo $userEmailId; // echo base64_encode(32300);  ?>" />

                                            <input type="hidden" name="userDomain" id="domain" value="<?php echo $_SERVER['HTTP_HOST']; ?>" />
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
                
                
              
         <?php }} ?>
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
<?php if (isset($_REQUEST['success'])) { ?> 
                <div class="fourthStep allstep">
                    <img src="images/signup-step-text.png" alt="" title="" class="mrB6" onload="redirectUserPage()"/>
                </div>
<?php } ?>
        </div><!--/end of wrapper-->
            <?php include_once('inc/footer.php') ?>


        <script>
<?php
if (isset($_REQUEST['msg']) && $_REQUEST['msg'] == '101') {
    ?>
                $('.allstep').hide();
                $('.thirdStep').show();
<?php } ?>
            $('.currencySelectDropdown').click(function() {
                if ($('#flaglist').is(':visible')) {
                    $('#flaglist').hide();
                }
                else {
                    $('#flaglist').show();
                }
            });

            function submitCurrency()
            {

                //    var currency = $('#fbCurrency').val();
                //    var domain = '<?php echo $_SERVER['HTTP_HOST']; ?>';
                //    
                //    $.ajax({type: "GET",url: "https://voice.phone91.com/controller/signUpController.php",data:{"call":"facebookGoogleSignup", "currency":currency, "domain":domain },
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
                $('#' + ths).hide();
                $('#' + optId).show();

                $(".btnapp").attr("onClick", "saveMobileNumber('CALL')");
                $('.btnapp').html(optId + ' Me');
            }

            function selectOption(valu)
            {
                $('#location option[value="' + valu + '"]').prop('selected', true);
            }
            function saveMobileNumber(carierType)
            {
                var mobileNumber = $('#mobileNumber').val();
                var code = $('#code').val();
                if (/[^0-9]/.test(mobileNumber) || !(/[0-9]{8,18}/.test(mobileNumber)))
                {
                    $('#response').html("Invalid mobile number please enter a valid mobile number");
                    return false;
                }
                if (/[^0-9]/.test(code))
                {
                    $('#response').html("Invalid country code please select a country");
                    return false;
                }

                $.ajax({type: "GET", url: "<?php echo REDIRECT_VOIP; ?>/controller/signUpController.php", data: {"call": "verifyContactNumber", "mobileNumber": mobileNumber, "countryCode": code, "carrierType": carierType}, dataType: 'jsonp',
                    success: function(response)
                    {
                        if (response.status == "success")
                        {
                            //$('#response').html(response.msg);
                            $('.allstep').hide();
                            $('.secStep').show();
                            $('#showNumber').html(code + "-" + mobileNumber);
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
                if (/[^0-9]/.test(key) || key.length < 1 || key.length > 5)
                {
                    $('#resendResponse').html("Invalid confrim code only numeric values are allowed of 1-5 length");
                    return false;
                }
                return true;

            }

            function resendCode(smscall) {
                if (smscall == 'sms') {
                    $('#ReSms').attr('onClick', 'javascript:void(0)');
                } else
                    $('#ReCall').attr('onClick', 'javascript:void(0)');

                $.ajax({type: "GET", url: "<?php echo REDIRECT_VOIP; ?>/controller/signUpController.php", data: {"call": "resendVerifyCode", "smscall": smscall}, dataType: 'jsonp',
                    success: function(response)
                    {
                        $('#resendResponse').html(response.msg);
                        if (response.status == "success") {
                            if (smscall == 'sms') {
                                setTimeout(function() {
                                    $('#ReSms').attr('onClick', 'resendCode("sms")')
                                }, 10000);
                            } else
                                setTimeout(function() {
                                    $('#ReCall').attr('onClick', 'resendCode("call")')
                                }, 10000);
                        } else
                        {
                            $('#ReSms').attr('onClick', 'resendCode("sms")');
                            $('#ReCall').attr('onClick', 'resendCode("call")');
                        }


                    }});

            }

            function backAddNumber() {
                $.ajax({type: "GET", url: "<?php echo REDIRECT_VOIP; ?>/controller/signUpController.php", data: {"call": "backAddNumber"}, dataType: 'jsonp',
                    success: function(response)
                    {
                        $('.allstep').hide();
                        $('.firstStep').show();
                        window.location = 'http://phone91.com/signup-step.php';
                    }
                });


            }

            function SetValue(ths)
            {
                var countryName = $(ths).attr('countryName');
                var countryCode = $(ths).attr('countryCode');
                var countryFlags = $(ths).attr('countryFlags');

                $('#setCountry').html('');

                $('#setFlag').removeClass($('#setFlag').attr('flagId')); //flagId

                $('#setFlag').addClass(countryFlags);
                $('#setFlag').attr('flagId', countryFlags);
                $("#code").val(countryCode.replace(/ /g, ''));
                $('#flaglist').hide();
            }


            function redirectUserPage() {
                setInterval(function() {
                    window.location = '<?php echo REDIRECT_VOIP; ?>/userhome.php#!contact.php';
                }, 3000);
            }

            /**
             * @author sameer rathod
             * @returns {Boolean}   
             * @abstract function is used to call the check the number is verified 
             *           or not and called form stepone in fbgl type 
             **/
            function checkVerifiedNumberExistFG()
            {
                var mobNo = $('#mobNumber').val();
                var countryCode = $('#countryCode').val();
                var email = "<?php echo base64_decode($_REQUEST['eid']); ?>";
                console.log(email);
                mobNo = mobNo.trim();
                if (/[^0-9]/.test(mobNo) || mobNo.length < 7 || mobNo.length > 18 || /[^0-9]/.test(countryCode))
                {
                    console.log(countryCode);countryCode
                    $('.stepOne .errorSpan').html("Error Invalid mobile Number Please provide a valid number should be numeric and not more then 18 character in length");
                    //show error message here
                    return false;
                }
                mobNo = countryCode+mobNo;
                $.ajax({
                        type: "POST",
                        url: "action.php", 
                        data: {"action": "checkNumber", 'number': mobNo,'id':email}, 
                        dataType: 'json',
                    success: function(response)
                    {
                        console.log(response);
                        if (response.response == '1')
                        {
                            $('#uname').val(mobNo);
                            $('#searchWraps').hide();
                            $('#formDiv,#forgot').show();
                        }
                        else {
                            if(response.message.code == '4033')
                                window.location = 'https://voice.phone91.com/controller/signUpController.php?call=fbGlSignUp&eid='+email+'&domain='+window.location.host;
                            else{
                               $('.stepOne .stepOneError').html(response.message.message);
                            }
                        }

                    }
                });
            }
            function forgotPassword(type)
            {
                var mobNo = $('#mobNumber').val();
                var countryCode = $('#countryCode').val();
                var email = "<?php echo base64_decode($_REQUEST['eid']); ?>";
                mobNo = mobNo.trim();
                if(type == 2)
                    var smsCall = 2;
                else
                    var smsCall = 1;
                if (/[^0-9]/.test(mobNo) || mobNo.length < 7 || mobNo.length > 18 || /[^0-9]/.test(countryCode))
                {
                    console.log(countryCode);countryCode
                    //show error message here
                    return false;
                }
//                mobNo = countryCode+mobNo;
                $.ajax({
                        type: "POST", 
                        url: "action.php", 
                        data: {"action": "forgotPassword", 'particular': mobNo,'smsCall':smsCall,'type':'2','countryCode':countryCode,'email':email}, 
                        dataType: 'json',
                    success: function(response)
                    {
                        console.log(response);
                        if (response.response == '1')
                        {
                            
                            $('.cmn').hide();
                            $('.stepTwo').show();
//                            $('#uname').val(mobNo);
//                            $('#uname').val(mobNo);
//                            $('#formDiv').show();
                        }
                        else {
                           $('.stepOne .errorSpan').html(response.message.message);
                        }

                    }
                });
            }
            
            function verifyCode(code)
            {
                var mobNo = $('#mobNumber').val();
                var countryCode = $('#countryCode').val();
                var email = "<?php echo base64_decode($_REQUEST['eid']); ?>";
                mobNo = mobNo.trim();
                if (/[^0-9]/.test(mobNo) || mobNo.length < 7 || mobNo.length > 18 || /[^0-9]/.test(countryCode))
                {
                    console.log(countryCode);
                    $('.stepTwo .errorSpan').html("Error Invalid confirmation code pelase try again");
                    //show error message here
                    return false;
                }
                if (/[^0-9]/.test(code) || code.length < 3 || code.length > 4 )
                {
                    return false;
                }
                
                mobNo = countryCode+mobNo;
                $.ajax({
                        type: "POST", 
                        url: "action.php", 
                        data: {"action": "verifyConfirmationApi", 'number': mobNo,'code':code,'email':email}, 
                        dataType: 'json',
                    success: function(response)
                    {
                        console.log(response);
                        if (response.status == 'success')
                        {
                            
                            $('.cmn').hide();
                            $('.stepThree').show();
//                            $('#uname').val(mobNo);
//                            $('#uname').val(mobNo);
//                            $('#formDiv').show();
                        }
                        else {
                            $('.stepTwo .errorSpan').html(response.msg);

                        }

                    }
                });
            }
            
            
            function changePassword()
            {
                var newPassword = $('#newPassword').val();
                var confirmPwd = $('#confirmPwd').val();
                var eid = "MTIzNA==";
                
//                mobNo = mobNo.trim();
                if (/[^a-zA-Z0-9\@\$\}\{\.\_\-\!\(\)\]\[\:]+/.test(confirmPwd)  || confirmPwd.length > 18 || confirmPwd.length < 6 || newPassword != confirmPwd)
                {
                    console.log(countryCode);
                    $('.stepThree .errorSpan').html("Error Invalid password please try a valid password")
                    //show error message here
                    return false;
                }
                
                $.ajax({
                        type: "POST", 
                        url: "action.php", 
                        data: {"action": "resetPasswordApi", 'new_pwd': confirmPwd ,'eid':eid}, 
                        dataType: 'json',
                        success: function(response)
                        {
                            console.log(response);
                            if (response.status == 'success')
                            {

                                $('.cmn').hide();
                                $('.stepThree').show();
                               setTimeout(function(){
                                   window.location = 'http://voice.phone91.com/action_layer.php?action=loginRedirect&uname='+uname.value+'&pwd='+confirmPwd+'&domain='+window.location.host;
                               },3000);
    //                           //success screen show
                            }
                            else {
                                $('.stepThree .errorSpan').html("Error changing password please try again");
                            }

                        }
                });
            }
            function back(from,to)
            {
                $(from).hide();
                $(to).show();
            }
            
            <?php if(isset($_REQUEST['num'])){ ?>
                   $('#uname').val(<?php echo $_REQUEST['num']; ?>);
                   $('#searchWraps').hide();
                   $('#formDiv,#forgot').show();
            <?php } ?>
        </script>
    </body>
</html>