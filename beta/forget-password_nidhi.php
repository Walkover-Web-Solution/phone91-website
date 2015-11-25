<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<title>Phone91- </title>

<?php 

include_once('inc/head.php');

if(isset($_REQUEST['error']) && !empty($_REQUEST['error']))
{
    $_REQUEST['error'] =  stripcslashes($_REQUEST['error']);
    
    $requestParam = json_decode($_REQUEST['error']);
    
    if(is_object($requestParam))
        $requestParam = get_object_vars($requestParam);
    
    if(isset($requestParam['type']))
    {    
        if( $requestParam['type'] == 2 )
        {
            $action = '1';
        }
        else if( $requestParam['type'] == 1 )
        {
              $action = '0';
        }
        
    }
    if(json_last_error() > JSON_ERROR_NONE)
    {
        
    }
    
}

switch($action)
{
    case '0':
        $message = 'We have sent you a confirmation code on <span class="themeClr">98XXX</span>'; 
        $content = 'In case you entered a wrong number, you can always Go <a href="javascript:void(0)">back</a> and change it.';
        $goBackLink = '';
        
        // $select = 0;
         
        break;
    
    case '1':
        $message = 'The following numbers are associated with the username <span class="themeClr">username</span>';
        $content = "Select the number whose password you wish to reset. ";
        $goBackLink = '';
        
        $option = '';
        if(is_array($requestParam['contact']))
        {
            foreach($requestParam['contact'] as $val)
                $option.='<option value="'.$val.'">'.$val.'</option>';
        }
        
        $select = '<select id="userId" name="userId">
                    	<option value="">Select Number</option>'.$option.'
                    </select>';
       $inputId="selwrp";
        break;
     
    case '2' : 
        
        $message = 'Tada! You can now reset your <span class="themeClr">password.</span>';
        
        break;
    
    
    default:
        $message = "<span class='themeClr'>Hey</span>we are sorry you are having trouble with your <span class='themeClr'>password!</span>";
        $content = '';
        $select = '<input class="pr" id="userId" name="userId" type="text" placeholder="Enter number/username" />';  
        $goBackLink = '';
        $inputId="inpwrp";
}

?>

<link rel="stylesheet" type="text/css" href="css/signup-step-style.css" />
</head>
<body>
<?php include_once('inc/header.php') ?>
    
<section id="step-top" class="warmBg">
	<div class="wrapper">Forgot Password</div>
</section>

<div class="wrapper clear pr">

<?php if($_REQUEST['action'] != 2 ) 
{ ?>    

<div style="padding:40px 0 20px" class="wrapper clear">
	<h2><?php echo $message; ?></h2>
</div>
<!--<form name="forgotPassword" class="forgotPassword" id="forgotPassword" onSubmit="return validate();"   method="post" action="http://10.42.43.174/api/forgotPasswordApi.php"> -->
<form name="forgotPassword" class="forgotPassword" id="forgotPassword" method="post" action="http://10.42.43.174/api/forgotPasswordApi.php"> 
<div class="clear step-wrap">
    <aside class="boxsize">
        <div class="pdR3">
        
        <h3 style="margin-bottom:15px" class="fs18">Enter your number/username</h3>
        
        <div id="userIderr"></div>
        <input type="hidden" name="smsCall" id="smsCall">
        <input type="radio" name="verifyOption" value="0" onChange="displayForm('UserName' , 'Number' , 'Email')" /> User Name  &nbsp;
        <input type="radio" name="verifyOption" value="1" onChange="displayForm('Number' , 'UserName' , 'Email')" /> Modile Number &nbsp;
        <input type="radio" name="verifyOption" value="2" onChange="displayForm('Email' , 'Number' ,'UserName')" /> Email

        <div id="inpwrp">
            <input style="display: none;" class="pr UserName" id="" type="text"/>
            <input style="display: none;" class="pr Number" id="" type="text"/>
            <input style="display: none;" class="pr Email" id="" type="text" />

            <div id="buttons"  style="display: none;" >
                <button style="margin-right:10px; display: none;" href="#" class="button btnapp large googleplus">
                Text Me
                </button>
                <span id="Call"  style="display: none;">
                   Enter your phone number and we'll call you to enter a verification code.<br>Or we can 
                   <a href="#" id="text-me" onClick="changeOption('Call' , 'Text' )">text you instead</a>.
                </span>

                <span id="Text" style="display: inline;">
                    Enter your phone number and we'll text you a verification code.<br>Or we can 
                    <a href="#" id="call-now" onClick="changeOption('Text' , 'Call')">call you instead</a>.
                </span>
            </div>

            <div id="sendByEmail" style="display: none;" > 
                <button style="margin-right:10px; display: none;" href="#" class="button  large googleplus">
                    Send Code
                </button>
            </div>

        </div><!--/end of search div-->
        <div class="clear"></div>
        <p class="para16 mdf"><?php echo $content; ?></p>
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
else { ?>
<div style="padding:40px 0 20px" class="wrapper clear">
	<h2><?php echo $message; ?></h2>;
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
                request another one via <a href="javascript:void(0)">SMS</a> or <a href="javascript:void(0)">call</a>
            </p>
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
 
<?php } ?>

</div><!--/end of wrapper-->

<?php include_once('inc/footer.php') ?>
<script>


//$('#call-now-explanation').(function()
//{
//    console.log('noddy');
//});
    
    
function validate(opt)
{

    var userId = $("#userId").val();
	userId = jQuery.trim(userId);
        
	if( userId == "" || userId.length < 5 )
	{
		$("#userIderr").addClass("error_red");
		$("#userIderr").html("Please enter username or Mobile Number");	   
		return false;
	}
        
      $('#smsCall').val(opt);
      
  //smsorcall
   
    $( "#forgotPassword" ).submit();
   
}

function displayForm(ths , opta , optb)
{
    $('.'+ths).show();
    $('.'+ths).attr('placeholder' , 'Enter Your '+ths);
    
    if(ths == 'Email')
    {
        $('#buttons').hide();
        $('#sendByEmail').show();
    }
    else
    {
        $('#buttons').show();
        $('#sendByEmail').hide(); 
    }
        
    $('.'+opta).hide();
    $('.'+optb).hide();
    $('.btnapp').show();  
    $('#buttons').show();
    
}


function changeOption(ths, optId)
{
    $('#'+ths).hide();
    $('#'+optId).show();
    
    $('.btnapp').html(optId+' Me');
}


$('.currencySelectDropdown').click(function () 
{
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