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
<link rel="stylesheet" type="text/css" href="css/contact-style.css" />
</head>
<body>
<?php include_once('inc/header.php') ?>
<section id="common-banner" class="warmBg">
	<div class="wrapper clear">
    	<aside>
        	<figure class="ban-icon">
            	<img src="images/sketch-contact.png" alt="" title="" />
            </figure>
            
        </aside>
        <aside class="last">
        	<h2>Help is only a chat/call away</h2>
            <div id="cntBanPrnt" class="clear">
            	<section>
                	<div class="clear">
                    	<span><i class="cmnsprt-24 call"></i></span>
                        <h4>+321 12345 6987</h4>
                    </div>
                </section><!--/end of first part-->
                <section class="last">
                	<div class="clear">
                    	<span><i class="cmnsprt-24 email"></i></span>
                        <h4>support@phone91.com</h4>
                    </div>
                </section><!--/end of last part-->
            </div>
			<button class="btn" onClick="window.location.href='signup.php'" >Sign up</button>
        </aside>
    </div>
</section>


<section id="get-container">
	<div style="line-height:42px" class="h3g">We love <span class="themeClr">curiosity!</span><br> Have a question? Feel free to ask.</div>
	<div class="wrapper clear">
        
        <div id="tab-wrap">
        	<a href="javascript:void(0)">FAQs</a>
            <a class="active" href="javascript:void(0)">Let's talk</a>
        </div>
        
        <div id="form-wrap" class="clear">
        	<aside class="col-2">
            	<div class="pdR3">
                    
                    <div class="cont-head">Sales</div>
                    
                    <dl class="clear">         
                        <dt class="cmnsprt-16 email"></dt>
                        <dd>business@phone91.com</dd>
                    </dl>
                    
                    <dl class="clear">         
                        <dt class="cmnsprt-16 call"></dt>
                        <dd>+1234567890</dd>
                    </dl>
                    
                    
                    <div class="cont-head">Support</div>
                    
                    <dl class="clear">         
                        <dt class="cmnsprt-16 email"></dt>
                        <dd>sales@phone91.com</dd>
                    </dl>
                    
                    <dl class="clear">         
                        <dt class="cmnsprt-16 call"></dt>
                        <dd>+1234567890</dd>
                    </dl>
                    
                    
                    <div class="cont-head">Media</div>
                    
                    <dl class="clear">         
                        <dt class="cmnsprt-16 email"></dt>
                        <dd>media@phone91.com</dd>
                    </dl>
                    
                    <dl class="clear">         
                        <dt class="cmnsprt-16 call"></dt>
                        <dd>+1234567890</dd>
                    </dl>
                    
                </div><!--/end of pd div-->
            </aside><!--/end of aside one-->
            
            <aside class="col-2">
            	<div class="pdL3">
                	<h4 style="text-align:left; margin-bottom:40px;" class="cnthead-sub">Share with us</h4>
                        <h5 style="text-align:left; margin-bottom:40px;" class="cnthead-sub" id="responseData"></h5>
                        <form id="contactform" name="contactform" action="javascript:(0);">
                       	<div class="row">
                        	<label><i class="cmnsprt-16 userW"></i></label>
                            <input type="text" placeholder="Your full name" id="fullName" name="fullName" />
                        </div>
                        <div class="row">
                        	<label><i class="cmnsprt-16 emailW"></i></label>
                            <input type="text" placeholder="Your Email ID"  id="emailId" name="emailId"/>
                        </div>
                        <div class="row">
                        	<label><i class="cmnsprt-16 callW"></i></label>
                            <input type="text" placeholder="Your phone number" id="contactNo" name="contactNo"/>
                        </div>
                        <div class="row">
                        	<label><i class="cmnsprt-16 quoteW"></i></label>
                            <select id="relatedTo" name="relatedTo">
                            	<option value="0">Your Subject</option>
                                <option value ="feedback">Related to feedback</option>
                                <option value ="sales">Related to sales</option>
                                <option value ="complaint">Related to complaint</option>
                            </select>
                        </div>
                        <div class="row" id="txtrow">
                        	<label class="textMsgIcons"><i class="cmnsprt-16 editW"></i></label>
                            <textarea placeholder="Your Message" id="message" name="message" ></textarea>
                            <input type="hidden" name="type" value="3"/>
                        </div>
                        <div class="row">
                        	<button class="btn" type="submit">Submit</button>
                        </div>
                        
                        
                    </form><!--/end of form-->
                </div>
            </aside><!--/end of aside two-->
        </div><!--/end of form wrap-->
        
        
    </div><!--/end of wrapper-->
</section><!--/end of section-->



<?php include_once('inc/footer.php') ?>
</body>
</html>

<script>
$(document).ready(function() { 
      var options = { 
                  url : "action.php?action=addFeedBackAndRequirements",
                  type: "POST",dataType: "json",
                  beforeSubmit:  showRequest,  // pre-submit callback 
                  success:       showResponse  // post-submit callback 
                  }; 
          $('#contactform').ajaxForm(options); 
  }); 

/**
 * @author sudhir pandey < sudhir@hostnsoft.com >
 * @since 31-12-2013
 * @function use to validate form data
 */
function showRequest(formData, jqForm, options) { 
   
     $().ready(function() {
            // validate the comment form when it is submitted	
            $("#contactform").validate({
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
				minlength: 5
                                     },
                            relatedTo : {
                                selectcheck: true
                                    }         
                             }
            })
          })
          
        jQuery.validator.addMethod('selectcheck', function (value) {
                return (value != '0');
            }, "Please Select valid Subject !");  
            
        if($("#contactform").valid())
                return true; 
        else
                return false;
  }


function showResponse(response, statusText, xhr, $form){
    
    
    if(response.status == "success")
	{
        $('#responseData').removeClass("error_red").addClass("error_green");
		 $('#contactform').hide();
	}
     else
       $('#responseData').removeClass("error_green").addClass("error_red");
	  
	
  
    $('#responseData').html(response.message);
    
     $(':input','#contactform')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked');
            
    
        
}
</script>