<?php
function countryArray() 
{
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
<title>Phone91-Reseller</title>
<?php include_once('inc/head.php') ?>
<link rel="stylesheet" type="text/css" href="css/reseller-style.css" />
<style type="text/css">
#inner{ clear:both; height:214px; padding:1px}
#res-illus { border:0; height:auto;}
</style>
</head>
<body class="reseller">
<?php include_once('inc/header.php') ?>
<section id="res-banner" class="warmBg">
	<div class="wrapper clear">
        <section class="top-part alC">
        	<h2 class="">Your Business, our services! </h2>
            <p>Become a partner with Phone 91 and run your services via Calling cards or White label solutions. 
            The more you create, the better you get.</p>
			<!--<button class="btn">Signup</button>-->
        </section>
        
        <section id="res-illus">
            <div id="inner">
                    <aside class="cc-wrap boxsize"><a href="#calling-card">
                        <figcaption>Calling Cards</figcaption>
                        <figure><img src="images/screen-shot-calling-card.png" /></figure>
                    </a></aside>
                
                    <aside class="wl-wrap boxsize"><a href="#white-label">
                        <figcaption>White Label Solutions</figcaption>
                        <figure><img src="images/whitelabel.png" /></figure>
                    </a></aside>
            </div>
        </section>
    </div>
</section>

<div id="calling-card"></div>
<section id="res-container" class="hgPart">
	<div class="h3g">Calling <span class="themeClr">Cards</span></div>
	<div class="wrapper">
        <section class="res-feat-row clear">
            <aside class="col-2">
                <div class="pdR3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 addpins"></i>
                        <span>Add PINs</span>
                    </div>
                    <p class="para16">
                    As a Phone 91 reseller, you can buy calling cards in bulk at a discounted price and sell it further to the people you want. 
                    Once done purchasing, you can add PINs in your account by giving them a batch name and assign
                     different tariff to different batches as well.
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
            
            <aside class="col-2">
                <div class="pdL3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 mngpins"></i>
                        <span>Manage PINs</span>
                    </div>
                    <p class="para16">
                                The number of PINs that you have purchased can be managed easily by editing the PINs, managing their expiry date, 
                                seeing who used them, and checking whether the PINs you are reselling are postpaid or unpaid. 
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
        </section><!--/end of row-->
        <div class="clear btwrap">
        	<a href="#getStartedForm" class="btn btn-danger btn-large">Get Started</a>
        </div>

    </div><!--/end of wrapper-->
</section><!--/end of section-->

<div id="white-label"></div>

<section id="wl-data-res">
	<div class="h3g">White Label <span class="themeClr">Solutions</span></div>
	<div class="wrapper">
    	<section class="res-feat-row clear">
        	<aside class="col-2">
                <div class="pdR3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 mngwebsite"></i>
                        <span>Manage website</span>
                    </div>
                    <p class="para16">Being a white label reseller, you can sell Phone 91 services under your brand name. Just add the many websites that you have by entering the domain name and other details associated with it, and our services will be immediately pointed at the domain name(s) you provide. 
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
            
            <aside class="col-2">
                <div class="pdL3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 addplan"></i>
                        <span>Add plan</span>
                    </div>
                    <p class="para16">
                        This feature comes handy when you want to give different calling rates to different clients according 
                        to the various network operators. You can even import your own customized tariff plans and change 
                        the billing time and output currency.
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
        </section><!--/end of row-->
   
    	<section class="res-feat-row clear">
        	<aside class="col-2">
                <div class="pdR3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 tariffplan"></i>
                        <span>Tariff per plan</span>
                    </div>
                    <p class="para16"> When there are many clients with many needs, you can decide contrasting tariffs accordingly. 
                    All you need to do is to add various network operators under a single plan and assign calling rates for each one of them as you want.
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
            
            <aside class="col-2">
                <div class="pdL3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 mngclients"></i>
                        <span>Manage clients</span>
                    </div>
                    <p class="para16">
                        No matter how many clients you have under your account, you can easily manage them by viewing their transaction log, 
                        call log, and editing their funds. You can even disable clients you feel are inactive and send messages and mails to all 
                        your clients on a single click.
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
        </section><!--/end of row-->
        
        <!--load data start-->
        <div id="loadmoredata" style="display:none;">
        <section class="res-feat-row clear">
        	<aside class="col-2">
                <div class="pdR3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 whitelabel"></i>
                        <span>White label mobile dialer</span>
                    </div>
                    <p class="para16"> 
                        Give your clients the ease to connect with their dear ones on the go with white label dialer for Iphone, 
                        Android and other mobiles. Phone 91 will customize the dialer as per your requirements and you can make 
                        it available to your clients so that they can make calls with it.
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
            
            <aside class="col-2">
                <div class="pdL3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 callshop2"></i>
                        <span>Call shop</span>
                    </div>
                    <p class="para16">
                            How about having your own cafe where you can allot systems to the people with your Skype and Gtalk IDs so that 
                            they can call with it? That's exactly what call shop does for you. You can not only allot systems to the people to call, 
                            but also manage them by viewing the call log for each system on a single page.
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
        </section><!--/end of row-->
        <section class="res-feat-row clear">
        	<aside class="col-2">
                <div class="pdR3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 activecalllog"></i>
                        <span>Active call log</span>
                    </div>
                    <p class="para16"> 
                        View the active calls of your clients on a single page. Being their reseller, you can not only view the duration of their calls, 
                        but you can also view the profit you are getting from a certain call and even stop an active call.
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
            
            <aside class="col-2">
                <div class="pdL3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 sip"></i>
                        <span>Add SIP accounts</span>
                    </div>
                    <p class="para16">
                        Create SIP accounts for your clients so that they are never out of reach. Go to the manage clients option in your account 
                        and configure the SIP accounts of your clients by enabling SIP calling for them.
                    </p>
                </div><!--/end of pd div-->
            </aside><!--/end of aside-->
        </section><!--/end of row-->
        </div><!--/end of load data-->
       
        <div class="clear btwrap">
        	<button onClick="loadMoreData(this)" class="btn btn-danger btn-large">And more</button>
        </div>
    </div><!--/end of wrapper-->
</section><!--/end of wl-data-->



<section id="req-container" class="hgPart">
	<div id="getStartedForm"></div>
	<div class="cnthead alC">Let us know about  <span class="themeClr">your requirements</span></div>
    <p class="alC ligt fs18 mrB4">We would be able to help you better.</p>
	<div class="wrapper">
    	<div id="formwrap" class="clear pr">
        	<span class="themeBg" id="frmcircle"><i class="cmnsprt-36 resW"></i></span>
            
            
            <div id="forminner">
            <form id="reseller-query" action="javascript:void(0)">
                <h5 class="cnthead-sub" id="resellerResponseData"></h5>
            	<div class="form-row clear">
                	<label class="lbl">Your full name</label>
                        <input type="text" class="cmninpt" id="fullName" name="fullName"  /> 
                      
                </div><!--/end row-->
                
                <div class="form-row clear">
                	<label class="lbl">Your contact number</label>
                    <input type="tel" class="cmninpt" id="contactNo" name="contactNo" /> <div class="msg "></div>
                </div><!--/end row-->
                
                <div class="form-row clear">
                	<label class="lbl">Your Email ID</label>
                    <input type="email" class="cmninpt" id="emailId" name="emailId"/> <div class="msg "></div>
                </div><!--/end row-->
                
                 <div class="form-row clear">
                        <label class="lbl">You want to deal</label>
                        <select class="cmnsel" name="dealCurrency" id="dealCurrency" onChange="chaneCurrency(this)">
                            <option value ="0">In which Currency</option>
                            <option value="INR">INR</option>
                            <option value="USD">USD</option>
                            <option value="AED">AED</option>
                        </select>
                    </div><!--/end row-->
                    
                <div class="form-row clear">
                	<label class="lbl">You wish to be a Reseller via</label>
                    <select  class="cmnsel" name="resellerVia" id="resellerVia" onChange="showResDiv(this)" >
                    	<option  value="0">Select</option>
                        <option  value="callingcards">Calling Cards</option>
                        <option  value="whitelabelsolutions">White Label Solutions</option>
                    <!--	<option selected value="user">User</option>
                        <option value="reseller">Reseller</option>-->
                    </select>
                </div><!--/end row-->
                
                <!--below div visible when user select to be whitelabel-->
                <div id="whitelabelsolutions-data" style="display:none">
                    <div class="form-row clear">
                        <label class="lbl">Overall estimated volume</label>
                        <input type="text" class="cmninpt" placeholder="in Minutes" id="volume" name="volume"/>
                    </div><!--/end row-->
                    
                    <div class="form-row clear">
                        <div>
                        <label class="lbl">Select top countries</label>
                        <select class="cmnsel smallSel" name="country[]">
                            <?php 
                            foreach($country as $key =>$countryNames){                
                                echo "<option value='$countryNames'>$countryNames</option>";
                            }?>  
                        </select>
                        <div class="estimtVol">
                             <input placeholder="Est. vol. (in min)"  name="overAllVolume[]" onBlur="checkAllEstVolume(this);" type="text" class="cmninpt smallinput" />
                             <span></span>
                         </div>
                         <div class="estimtVol per">
                            <div class="perate">
                                    <input placeholder="per call rate"  name="callrate[]"  onblur="checkCallRate(this);" type="text" class="cmninpt" />
                                    <span class="selectCurr"></span>
                            </div>
                             <span></span>
                          </div>
                        <label id="addb" onClick="shownextDiv(this)"><i class="cmnsprt-16 addW"></i></label>
                        </div>
                    </div><!--/end row-->
                    <div id="appendDiv"> </div>
                </div><!--/end of whitelabel data-->
                
                
                <!--below div visible when user select to be callingcards-->
                <div id="callingcards-data"  style="display:none">
                    <div class="form-row clear">
                        <label class="lbl">Estimated volume</label>
                         <input type="text" class="cmninpt" placeholder="Amount"  id="estimatedVolume" name ="estimatedVolume"/>
                    </div><!--/end row-->
                </div>
                <!--//callingcards-->
                
                 <!--<div class="callingAmount">
                        	<div class="rateamount">
                              
                                <span class="callinratesg">USD</span>
                            </div>
                            <span>Error should be come here</span>
                       </div>-->
                
                
                
                <div class="form-row clear">
                	<label class="lbl">Share with us</label>
                    <textarea class="cmntxt" placeholder="any query or comment" id="message" name ="message"></textarea>
                     <input type="hidden" name="type" value="2"/>
                </div><!--/end row-->
                
                <div class="form-row clear">
                	<label class="lbl">&nbsp;</label>
                    <button class="btn btn-large">Submit</button>
                </div><!--/end row-->
           </form>     
           
                <div style="display:none" id="mes">
                    <h3 class="h3g ligt">Thank you for sending us your requirements. One of our representatives will get in touch with you within 24 hours.ssss</h3>
                    <figure class="cmnsprt-"></figure>
                </div>
                
            </div><!--/end of form inner di-->
            
        </div><!--/end of form wrap-->
        
        
    </div><!--/end of wrapper-->
</section><!--/end of req-data-->






<section class="info-msg">
	<div class="wrapper clear">
    	<div class="alC">Want to<button onClick="window.location.href='signup.php'" class="btn">Experience?</button></div>
    </div>
</section><!--/end of info-msg-->


<?php include_once('inc/footer.php') ?>
<script>
//below function is used to load more features for white label solution
function loadMoreData(ths){
	var target = $('#loadmoredata');
	var val = $(ths).text();
	if (val == 'And more'){
		$(ths).text('Less');
		target.slideDown('fast');
	}
	else{
		$(ths).text('And more');
		target.slideUp('fast');
	}
}



//below function is used to show more option while user select to be a reseller
function showResDiv(ths){
	var elem, _preVal, _preText;
	elem = $(ths);
	_preVal = elem.find(':selected').val();
	_preText = elem.find(':selected').text();

	if (_preVal == 'whitelabelsolutions'){
		$('#whitelabelsolutions-data').slideDown('fast');
	}
	else{
		$('#whitelabelsolutions-data').slideUp('fast');
	}
	
	if(_preVal=='callingcards'){
		$('#callingcards-data').slideDown('fast');
	}
	else{
		$('#callingcards-data').slideUp('fast');
	}
        
        $('#appendDiv').html('');
	
}



$(document).ready(function() { 
      var options = { 
                  url : "action.php?action=addFeedBackAndRequirements",
                  type: "POST",dataType: "json",
                  beforeSubmit:  showRequest, 
                  onkeyup :  showRequest, 
                    // pre-submit callback 
                  success:       showResponse  // post-submit callback 
                  }; 
          $('#reseller-query').ajaxForm(options); 
  }); 

 $(document).ready(function() {
            // validate the comment form when it is submitted	
            $("#reseller-query").validate({ 
                    onfocusout: function (element) {
                            $(element).valid();
                        },
                    rules: {
                            fullName :{
                                
                           // onkeyup: true,
				required: true,
				minlength: 5,
                                maxlength: 25
                                     },
                            emailId :{
				required: true,
                                email: true,
                                maxlength: 30
				       },   
                            contactNo :{
				required: true,
				number: true,
                                minlength: 8,
                                maxlength: 15
                                     },
                            message :{
				required: true,
				minlength: 5,
                                 maxlength: 250
                                     },
                           dealCurrency : {
                                selectcheck: true
                                    },
                           resellerVia : {
                                selectcheck: true
                                    }       
                             }
            })
          })
          

/**
 * @author sudhir pandey < sudhir@hostnsoft.com >
 * @since 31-12-2013
 * @function use to validate form data
 */
function showRequest(formData, jqForm, options) { 
   
    
        jQuery.validator.addMethod('selectcheck', function (value) {
                return (value != '0');
            }, "Please Select proper value!");  
            
        if($("#reseller-query").valid())
                return true; 
        else
                return false;
  }


function showResponse(response, statusText, xhr, $form){
    
    if(response.status == "success"){
        $('#reseller-query').fadeOut('slow').delay(400);
	$('#mes').delay(400).fadeIn(3000);  
         $(':input','#reseller-query')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked');
    }
     else{
       $('#resellerResponseData').removeClass("error_green").addClass("error_red");
       $('#resellerResponseData').html(response.message);
     }
    
   
}

function checkName(ths)
{
    var firstName = $('#'+ths).val();
    
    console.log(firstName);
    
    if(firstName=="" || firstName.length <5 || firstName.length > 20)
    {
        
            console.log('ENTER '+firstName);
            $("#"+ths).addClass("error_red");
            $("#"+ths).removeClass("error_green");
            $("#"+ths).next().addClass("error_red").html("Please enter valid first name");		
           
    }
    else
    {
            $("#"+ths).next().html("");	
            $("#"+ths).removeClass("error_red");
            $("#"+ths).addClass("error_green");
    }
    
}
function shownextDiv(ths){
    var curr = $('#dealCurrency').val();
    if(curr == 0){
        curr ='';
    }
    var str ='<div class="form-row clear">\
              <div><label class="lbl">Select top countries</label>\
              <select  class="cmnsel smallSel" name="country[]">';
               <?php foreach($country as $key =>$countryNames){ ?>                
                     str +="<option value='<?php echo $countryNames; ?>'><?php echo $countryNames; ?></option>";
               <?php }?>  
                     str +='</select>\
                     <div class="estimtVol"><input placeholder="Est. vol. (in min)" name="overAllVolume[]" onblur="checkAllEstVolume(this);" type="text" class="cmninpt smallinput" /><spab></span></div>\
				     <div class="estimtVol per"><div class="perate"><input placeholder="per call rate"  name="callrate[]"  onblur="checkCallRate(this);" type="text" class="cmninpt" /><span class="selectCurr">'+curr+'</span></div><span></span></div>&nbsp;\<label id="addb" onclick="hideDiv(this)" class="closedb"><i class="cmnsprt-16 closeW"></i></label></div>\</div>';
       $('#appendDiv').append(str);
}

function hideDiv(ths){
    $(ths).parent().parent().remove();
 
}

function chaneCurrency(ths){
    var currency = $(ths).val();
    if(currency == 0){
        currency ='';
    }
    $('.selectCurr').html(currency);
}

function checkAllEstVolume(ths){
   
    var estVolume = $(ths).val();
    var regEx=/^[0-9]+(\.[0-9]{1,2})?$/;
    if(!regEx.test(estVolume)){
        $(ths).next().addClass('error_red').html('Please enter valid number');
        $(ths).removeClass('valid').addClass('error');
        //$(ths).next().next().html('Please enter valid interger');
        console.log('error');
     }
	 else{
		 $(ths).next().addClass('error_red').html('');
		 }
}
function checkCallRate(ths){
   
    var estVolume = $(ths).val();
    var regEx=/^[0-9]+(\.[0-9]{1,2})?$/;
    if(!regEx.test(estVolume)){
        $(ths).parent().next().addClass('error_red').html('Please enter valid number');
        //$(ths).next().next().html('Please enter valid interger');
		$(ths).parent().addClass('error_red').removeClass('error_green');
        console.log('error');
     }
	 else {
		 $(ths).parent().addClass('error_green').removeClass('error_red');
		 $(ths).parent().next().addClass('error_red').html('');
		 }
 }

//form submit
//$("form").submit(function(){
//    alert("Submitted");
//	$(this).fadeOut('slow').delay(400);
//	$('#mes').delay(400).fadeIn(3000);
//	
//});

</script>
</body>
</html>