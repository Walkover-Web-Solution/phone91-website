<?php
function countryArray() {
        $url = "https://voice.phone91.com/isoData.php";
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
<meta name="description" content="Become a business partner with Phone91 and get admin panel on rent to manage your own routes, billing, clients and resellers." /> 
<title>Start Online Calling Business with Phone91 Admin Panel on Rent</title>
<?php include_once('inc/head.php') ?>
<link rel="stylesheet" type="text/css" href="css/reseller-style.css" />
</head>
<body class="reseller">
<?php include_once('inc/header.php') ?>
<section id="res-banner" class="warmBg">
	<div class="wrapper clear">
        <section class="top-part alC">
        <h2 class="">Coming soon! </h2>
        <p>&nbsp;</p>
        	<!--<h2 class="">This time, business is easy! </h2>
            <p>Partner with Phone 91 by getting our admin panel on rent. You get to manage your own resellers and do your business your way.</p>-->
			<!--<button class="btn">Signup</button>-->
        </section>
        <!--fictios div's-->
<div id="manage-route"></div>
<div id="manage-dialplan"></div>
<div id="add-routes"></div>
<div id="multiple-admin"></div>


        <section id="res-illus" class="admin">
            <div id="inner">
            	<section class="clear">
                    <aside class="cc-wrap boxsize"><a href="#manage-route">
                        <figcaption>Route</figcaption>
                        <figure><img src="images/admin-ban-route.png" border="0" /></figure>
                    </a></aside>
                    <aside class="wl-wrap boxsize"><a href="#manage-dialplan">
                        <figcaption>Dialplan</figcaption>
                        <figure><img src="images/admin-ban-dialplan.png" border="0" /></figure>
                    </a></aside>
                </section>
                <section class="clear">
                    <aside class="cc-wrap boxsize"><a href="#add-routes">
                        <figcaption>Log</figcaption>
                        <figure><img src="images/admin-ban-calllog.png" border="0" /></figure>
                    </a></aside>
                    <aside class="wl-wrap boxsize"><a href="#multiple-admin">
                        <figcaption>?</figcaption>
                        <figure><img src="images/admin-ban-coming.png" border="0" /></figure>
                    </a></aside>
                </section>
            </div>
        </section>
    </div>
</section>


<section id="" class="hgPart cmnpadCnt">
	<div id="manage-route-div" class="cmnDivdnon" style="display:block">
        <div id="calling-card" class="h3g">Route</div>
        <div class="wrapper">
            <section class="res-feat-row clear">
                <aside class="col-2">
                    <div class="pdR3">
                        <div class="clear prdhead">
                            <i class="cmnsprt-36 addrefresh"></i>
                            <span>Add fresh Route</span>
                        </div>
                        <p class="para16">
                        You can add new routes by going to the add route option of your account. By adding routes, easily edit the balance of each route and then insert that route in a dialplan. Different quality routes to different set of clients can then assigned. 
                        </p>
                    </div>
                </aside>
                
                <aside class="col-2">
                    <div class="pdL3">
                        <div class="clear prdhead">
                            <i class="cmnsprt-36 managoute"></i>
                            <span>Manage Route</span>
                        </div>
                        <p class="para16">
                        Being an admin, you can edit funds in a particular route, divert route, and even use back-up routes option so that if the main route is down due to any of the reasons like low balance, etc,  then the back-up route will become active. 
                        </p>
                    </div>
                </aside>
            </section>
            <div class="clear btwrap">
                <a href="#req-container" class="btn btn-danger btn-large">Get Started</a>
            </div>
    
        </div>
    </div>
    
    <div id="manage-dialplan-div" class="cmnDivdnon">
        <div class="h3g">Dialplan</div>
        <div class="wrapper">
        
            <section class="res-feat-row clear">
                <aside class="col-2">
                    <div class="pdR3">
                        <div class="clear prdhead">
                            <i class="cmnsprt-36 perfix"></i>
                            <span>Prefix wise routing</span>
                        </div>
                        <p class="para16">
                        You certainly wouldn't want to provide the same route to all your clients. Prefix wise routing lets you set routes according to different countries. You can simply go to the Dialplan option of your account and add new dialplan for different countries and select a certain route for a certain prefix.
                        </p>
                    </div>
                </aside>
                
                <aside class="col-2">
                    <div class="pdL3">
                        <div class="clear prdhead">
                            <i class="cmnsprt-36 mngoperator"></i>
                            <span>Manage operator prefix </span>
                        </div>
                        <p class="para16">
    You might want to set different rates for operators of various countries. And you can do so by assigning your chosen rates for various set of operators.
                        </p>
                    </div>
                </aside>
            </section>
            <div class="clear btwrap">
                <a href="#req-container" class="btn btn-danger btn-large">Get Started</a>
            </div>  
            
        </div>
    </div>
       
    <div id="add-routes-div" class="cmnDivdnon">
        <div class="h3g">Log</div>
        <div class="wrapper">
            <section class="res-feat-row clear">
                <aside class="col-2">
                    <div class="pdR3">
                        <div class="clear prdhead">
                            <i class="cmnsprt-36 activecalllog"></i>
                            <span>Call Log</span>
                        </div>
                        <p class="para16">
    View the average call duration, overall failed, answered and active calls, your top 10 resellers and clients who frequently call, and even the source of their calling at a single place called call log. The assorted graphs make it easier for you to get the summary of everything.                     
                        </p>
                    </div>
                </aside>
                
                <aside class="col-2">
                    <div class="pdL3">
                        <div class="clear prdhead">
                            <i class="cmnsprt-36 routeAcManage"></i>
                            <span>Route/Account manager/Client log</span>
                        </div>
                        <p class="para16">
    There is a place for all the other logs too. The route log gives you the route(s) status and profit for each route. The account manager log provides you the exact status for every account manager that you have. And client log gives you the detailed log of all your clients at one place.
                        </p>
                    </div>
                </aside>
            </section>
            <div class="clear btwrap">
                <a href="#req-container" class="btn btn-danger btn-large">Get Started</a>
            </div>  
            
        </div>
    </div>
    
    <div id="multiple-admin-div" class="cmnDivdnon">
        <div class="h3g question">?</div>
        <div class="fs18 alC" style="line-height:30px;">
        	<img src="images/commingsoon.png" alt="" title=""/>
            <p class="quess">There is always a room for a new feature to come.</p>
            <p>You <a href="contact.php">suggest</a> we implement</p>
        </div>
    </div>
    
</section>


<section id="wl-data-res">
	<div class="h3g">And do a lot more <span class="themeClr">with</span></div>
	<div class="wrapper">
   
    	<section class="res-feat-row clear">
        	<aside class="col-2">
                <div class="pdR3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 block"></i>
                        <span>Block number, IPs and Email</span>
                    </div>
                    <p class="para16">Being an admin, you can block the numbers, IPs and even Email account that you want. This features comes useful when you want to stop the services of a certain client due to any of the valid reasons. 
                    </p>
                </div>
            </aside>
            
            <aside class="col-2">
                <div class="pdL3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 callfailerror"></i>
                        <span>Call failed error log</span>
                    </div>
                    <p class="para16">
You might certainly want to know why the calls of certain clients failed and what was the error they faced. Call failed error log lets you view the why's and how's of every failed call so that you can manage your client's issues at your end. 

                    </p>
                </div>
            </aside>
        </section>
   
    	<section class="res-feat-row clear">
        	<aside class="col-2">
                <div class="pdR3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 mngClient"></i>
                        <span>Manage Clients</span>
                    </div>
                    <p class="para16">
Edit balance, add IPs, set call limit for each client and even change/add the account manager of a certain client in your manage clients option. It not only allows you to use various options, but also lets you manage your clients at ease. 
                    </p>
                </div>
            </aside>
            
            <aside class="col-2">
                <div class="pdL3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 multipleAdmin"></i>
                        <span>Multiple admins</span>
                    </div>
                    <p class="para16">
Whether you want to handle support, sales, or anything else related to your business. You can do so easily by having multiple admins in your account who can not only manage each department separately but also view the activity of all the admins. 
                    </p>
                </div>
            </aside>
        </section>
        
        
        <div id="loadmoredata" style="display:none;">
        <section class="res-feat-row clear">
        	<aside class="col-2">
                <div class="pdR3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 sip"></i>
                        <span>Add SIP accounts</span>
                    </div>
                    <p class="para16">
Adding SIP accounts for your clients lets them and their clients call without having to go through the time consuming calling options. All you need to do is enable SIP calling for a client, and he is ready to call on the go. 
                    </p>
                </div>
            </aside>
            
            <aside class="col-2">
                <div class="pdL3">
                    <div class="clear prdhead">
                        <i class="cmnsprt-36 callingcards"></i>
                        <span>Calling Cards</span>
                    </div>
                    <p class="para16">
As an admin, you can have your own calling cards which you can further reseller to your resellers and clients at a discounted price. Calling cards are an easy option for recharging account and they come handy when you want to save your clients from going through the time consuming recharge option.
                    </p>
                </div>
            </aside>
        </section>
        </div>
        <div class="clear btwrap">
        	<button onClick="loadMoreData(this)" class="btn btn-danger btn-large">And more</button>
        </div>
    </div>
    <div id="letusknowform"></div>
</section>

<section id="req-container" class="hgPart">
	<div class="cnthead alC">Let us know about  <span class="themeClr">your requirements</span></div>
    <p class="alC ligt fs18 mrB4">We would be able to help you better.</p>
	<div class="wrapper">
    
         <form id="admin-query" action="javascript:void(0)">
            <div id="formwrap" class="clear pr">
                    <span class="themeBg" id="frmcircle"><i class="cmnsprt-36 resW"></i></span>
                    <h5 style="margin-bottom:40px;" class="cnthead-sub" id="adminResponseData"></h5>
                    <div id="forminner">
                            <div class="form-row clear">
                            <label class="lbl">Your full name</label>
                            <input type="text" class="cmninpt" id="fullName" name="fullName"/>
                            </div><!--/end row-->
                            
                            <div class="form-row clear">
                            <label class="lbl">Your contact number</label>
                            <input type="text" class="cmninpt" id="contactNo" name="contactNo"/>
                            </div><!--/end row-->
                            
                            <div class="form-row clear">
                            <label class="lbl">Your Email ID</label>
                            <input type="email" class="cmninpt" id="emailId" name="emailId"/>
                            </div><!--/end row-->
                            
                            <div class="form-row clear">
                                <label class="lbl">You want to deal</label>
                                <select class="cmnsel" name="dealCurrency" id="dealCurrency" onChange="chaneCurrency(this)">
                                    <option value ="0">In which Currency</option>
                                    <option value="INR">INR</option>
                                    <option value="USD">USD</option>
                                    <option value="AED">AED</option>
                                </select>
                            </div>
                            
                            <div class="form-row clear">
                                <label class="lbl">Overall estimated volume</label>
                               
                                <div class="callingAmount">
                        	<div class="rateamount">
                                <input type="text" class="cmninpt" placeholder="in Minutes"  id="volume" name ="volume" onBlur="checkCallRate(this);"/>

                            </div>
                            <span></span>
                       </div>
                                
                            </div>
                            
                             <div class="form-row clear">
                                <label class="lbl">Select top countries</label>
                                <select class="cmnsel smallSel" name="country[]">
                                    <?php 
                                    foreach($country as $key =>$countryNames){                
                                        echo "<option value='$countryNames'>$countryNames</option>";
                                    }?>  
                                </select>
                                <div class="estimtVol">
                                <input placeholder="Est. vol. (in min)" type="text" class="cmninpt smallinput" name="overAllVolume[]" onBlur="checkAllEstVolume(this);"/>
                                <span></span>
                                </div>
                                <div class="estimtVol per"> 
                                <div class="perate">
                                     <input placeholder="per call rate" id="callrate" type="text" onBlur="checkCallRate(this);" class="cmninpt perate" name="callrate[]" />
                                        <span class="selectCurr"></span>
                       			</div>
                                <span></span>
                                </div>
                                <label id="addb" onClick="showAdminNextDiv(this);"><i class="cmnsprt-16 addW" ></i></label>
                            </div>
                   
                    
                            <div id="appendDiv"> </div>  
                            
                            <div class="form-row clear">
                            <label class="lbl">Share with us</label>
                            <textarea class="cmntxt" placeholder="any query or comment" id="message" name ="message"></textarea>
                            <input type="hidden" name="type" value="1"/>
                            </div>
                            
                            <div class="form-row clear">
                            <label class="lbl">&nbsp;</label>
                            <button class="btn btn-large">Submit</button>
                            </div>
                            
                            
                    
                    </div>
                </div>
       </form> 
       <div id="mes" style="display:none" >
                            <h3 class="h3g ligt">Thank you for sending us your requirements. One of our representatives will get in touch with you within 24 hours.</h3>
                            <figure class="cmnsprt-"></figure>
                            </div> 
         </div>
        
        
    </div>
</section>


<section class="info-msg">
<div class="wrapper clear">
    <div class="alC">Want to<button onClick="window.location.href='signup.php'" class="btn">Experience?</button></div>
</div>	
</section>


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

//fire function on hash change
if(window.location.hash){showDiv()}
$(window).bind('hashchange', function(){showDiv()});
//for show hide div on hashchange
function showDiv(){
	//getting hash without hash
	var hash = window.location.hash.substring(1);
	//show hide div's
	if(hash!="req-container"){
		$('.cmnDivdnon').hide();	
		}
	$('#'+hash+'-div').show();
}

//on select reseller 
function showResDiv(ths){
	var elem, _preVal, _preText;
	elem = $(ths);
	_preVal = elem.find(':selected').val();
	_preText = elem.find(':selected').text();

	if (_preVal == 'reseller'){
		//console.log('you suck');
		$('#reseller-data').slideDown('fast');
	}
	else{
		//console.log('fuck you');
		$('#reseller-data').slideUp('fast');
	}
}



$(document).ready(function() { 
      var options = { 
                  url : "action.php?action=addFeedBackAndRequirements",
                  type: "POST",dataType: "json",
                  beforeSubmit:  showRequest,  // pre-submit callback 
                  success:       showResponse  // post-submit callback 
                  }; 
          $('#admin-query').ajaxForm(options); 
  }); 

$(document).ready(function() {
            // validate the comment form when it is submitted	
            $("#admin-query").validate({
                    onfocusout: function (element) {
                            $(element).valid();
                        },
                    rules: {
                            fullName :{
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
           
        checkCallRate('#volume');
     
        jQuery.validator.addMethod('selectcheck', function (value) {
                return (value != '0');
            }, "Please Select valid currency!");  
            
        if($("#admin-query").valid())
                return true; 
        else
                return false;
  }


function showResponse(response, statusText, xhr, $form){
    
   if(response.status == "success"){
        $('#adminResponseData').removeClass("error_red").addClass("error_green");
                $('#admin-query').fadeOut('slow').delay(400);
		$('#mes').delay(400).fadeIn(3000);
                
   }
     else
       $('#adminResponseData').removeClass("error_green").addClass("error_red");
    	$('#adminResponseData').html(response.message);
     $(':input','#admin-query')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked');
}


function showAdminNextDiv(ths){
var curr = $('#dealCurrency').val();
    if(curr == 0){
        curr ='';
    }
var str = '<div class="form-row clear addIngRow"><div>\
<label class="lbl">Select top countries</label>\
<select class="cmnsel smallSel" name="country[]">';
                           
<?php 
                            foreach($country as $key =>$countryNames){   ?>              
                               str+="<option value='<?php echo $countryNames ?>'><?php echo $countryNames ?></option>";
                           <?php  }?>  
                        str+='</select>&nbsp;';
                        str+='<div class="estimtVol"><input placeholder="Est. vol. (in min)" type="text" class="cmninpt smallinput" onblur="checkAllEstVolume(this);" name="overAllVolume[]"/>&nbsp;';
                        str+='<span></span></div>\
                        <div class="estimtVol per">\
                        <div class="perate">\
                        <input placeholder="per call rate" id="callrate" type="text" onBlur="checkCallRate(this);" class="cmninpt perate" name="callrate[]" />\
                        <span class="selectCurr">'+curr+'</span>\
                        </div>\
                        <span></span></div>';
                        
                        str+='<label id="addb" onClick="hideAdminDiv(this)" class="closedb"><i class="cmnsprt-16 closeW" ></i></label>';
                        str+='</div></div>';

 $('#appendDiv').append(str);

}
   
    


function hideAdminDiv(ths){
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
       
     }
	 else{
		 $(ths).next().addClass('error_red').html('');
                 $(ths).removeClass('error').addClass('valid');
		 }

    
}

function checkCallRate(ths){
   
    var estVolume = $(ths).val();
    var regEx=/^[0-9]+(\.[0-9]{1,2})?$/;
    if(!regEx.test(estVolume)){
         $(ths).removeClass('valid').addClass('error');
         $(ths).parent().removeClass('error_green').addClass('error_red');
         $(ths).parent().next().removeClass('error_green').addClass('error_red').html('Please enter valid number'); 
         return 0
     }else{
        $(ths).removeClass('error').addClass('valid');
        $(ths).parent().removeClass('error_red').addClass('error_green');
        $(ths).parent().next().removeClass('error_red').addClass('error_green').html(''); 
        return 1;
	 }
 }
 
</script>

</body>
</html>