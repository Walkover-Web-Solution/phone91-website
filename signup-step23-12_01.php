<?php
function countryArray() {
        $url = "http://voip92.com/isoData.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);

        $string1 = json_decode($data, true);
        for ($i = 0; $i < count($string1); $i++) {
            $country[$string1[$i]['CountryCode']] = $string1[$i]['Country'];
        }
        return $country;
}
    
$country = countryArray();

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
<?php include_once('inc/header.php') ?>
<section id="step-top" class="warmBg">
	<div class="wrapper">Nice to Meet you</div>
</section>



<div style="padding:40px 0 20px" class="wrapper clear">
	<h2><span class="themeClr">You</span> and <span class="themeClr">I</span> need your number to connect</h2>
</div>



<div class="wrapper clear pr">
	
    <div class="clear step-wrap">
    	<aside class="boxsize">
        	<div class="pdR3">
            	<h3 style="margin-bottom:15px" class="fs18">How would you like to confirm your mobile No.</h3>
                
                <div id="searchWrap">
                    
                    <div id="selwrpa">
                        <div class="currencySelectDropdown">
<!--                            <span class="pickDown" style=""></span>
                            <div id="pickedCurrency"><span class="flag-48 IN"></span></div>-->
                            <select tabindex="1"  name="location" id="location" >
                            <?php 
                            foreach($country as $key =>$countryNames){                
                                echo "<option value='$key'>$countryNames</option>";
                            }?>  
                         </select>
                        </div>
                         
                        
                        <!--flag list start this div is visible when user search country-->
<!--                        <ul id="flaglist">
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
                            <span class="flag-48 AE"></span><span class="fltxt">United Arab Emirates</span>
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
                            <span class="flag-48 ID"></span><span class="fltxt">Indonesia</span>
                            </a></li>                  
                       </ul>-->
                    </div>
                    <input name='code' type="text" id="code" onkeyup="selectOption($(this).val())" class="min"  />
                    <input class="pr" name='mobileNumber' id='mobileNumber' type="text" placeholder="Enter Mobile Number..." />
                    
                </div><!--/end of search div-->
                <span id ="response"></span>
                <div class="verifyForm">
                    <button class="button large googleplus " onclick="saveMobileNumber('CALL')">
                    	Connect via Call
                    </button>
                    <button class="button large facebook " onclick="saveMobileNumber('SMS')">
                    	Connect via SMS
                    </button>
                </div>
                <div class="clear"></div>
                <p class="para16 mdf">We will send you a confirmation code accordingly</p>
                
            </div><!--/end of pdr3 div-->
        </aside><!--/end of aside-->
        <aside class="last">
        	<figure>
            	 <img src="images/sketch-signup.png" alt="" title="" />
            </figure>
        </aside>
    </div><!--/end of first step div-->
    
<!--below text visible on second step--><!--second step start from here -->
<div style="padding:40px 0 20px" class="wrapper clear">
	<h2>Enter Verification <span class="themeClr">Code</span></h2>
</div>
	
<div class="clear step-wrap" style="">
    <aside class="boxsize">
        <div class="pdR3">
            <div class="verifyform">
                <input type="text" class="vrfinpt" id="confirmationCode"   name="confirmationCode"  placeholder="Enter Verification Code" />
                
                <button class="btdn" onclick="confirmMobileNumber($('#confirmationCode').val())" name="verificationConfirm" >Done</button>
            </div>
            <p class="para16 mdf">"We have sent you the verification code. <br>
If you didn't receive the code yet, <br>
request another one via <a href="javascript:void(0)">SMS</a> or <a href="javascript:void(0)">call</a></p>

            <p class="para16">
                Go <a href="javascript:void(0)">back</a> if you wish to change your number.
            </p>
        </div>
    </aside>
    
    <aside class="last">
        <figure>
             <img src="images/sketch-signup.png" alt="" title="" />
            <!--<img src="images/signup-step-text.jpg" alt="" title="" />-->
        </figure>
    </aside>
</div>
<!--/end of second step--> 



<!--below text visible on second step--><!--second step start from here -->
<div style="padding:40px 0 20px" class="wrapper clear">
	<h2>facebook verification process</h2>
</div>


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
<div class="clear step-wrap" style="">
    <aside class="boxsize">
        <div class="pdR3">
            <div class="verifyform">
                <div class="row">
                    <label class="lbl">Choose your billing currency</label>
                    <select>
                        <option>Please Select</option>
                        <option>USD (American dollars)</option>
                        <option>INR (Indian rupees)</option>
                    </select>
                </div>
                <p class="para16 themeClr">You won't be able to change this later</p>
                <button href="#" class="button large googleplus ">Done</button>
            </div>
        </div>
    </aside>
    
    <aside class="last">
        <figure>
             <img src="images/sketch-signup.png" alt="" title="" />
        </figure>
    </aside>
</div>



   
    
    
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
        
$.ajax({type: "GET",url: "http://10.42.43.174/controller/signUpController.php",data:{"call":"verifyContactNumber","mobileNumber":mobileNumber,"countryCode":code,"carrierType":carierType},dataType: 'jsonp',
	    success: function(response)
	    { 
		    if(response.status=="success")
                    {
//                        $('#mobNum').html(response.data);
//                        $('#firstScreen').hide();
//                        $('#secondScreen').show();
                         $('#response').html(response.msg);
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

        var countryCode = $('#location').val();
        console.log(countryCode);
        $('#code').val(countryCode);
        
        
        
});

function confirmMobileNumber(key)
{
    if(/[^0-9]/.test(key) || key.length < 1 || key.length > 5)
    {
        show_message("Invalid confrim code only numeric values are allowed of 1-5 length","error")
        return false;
    }
    $.ajax({
        url:"http://10.42.43.174/controller/signUpController.php",
        type:"post",
        dataType:"json",
        data:{"call":"verifyNumber","key":key},
        success:function(response)
        {
            
        }
    })
}
</script>
</body>
</html>