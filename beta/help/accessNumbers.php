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
<title>Access Number</title>
<?php include_once('../inc/head.php') ?>
<link rel="stylesheet" type="text/css" href="/beta/css/help-style.css" />
</head>
<body class="reseller">
<?php include_once('../inc/header.php') ?>
<section id="help-banner" class="warmBg">
	<div class="wrapper clear">
        <section class="top-part">
        	<div class="wrapper clear">    	
                <aside class="accessNumberLast">
                    <h2>A faster way to connect to your loved ones</h2>            
                    <strong>Why use an access number?</strong>
                    <ul id="whyAccessNoList">
                    	<li>Lets you make calls without internet. </li>
                        <li>Acts as a mediator for international calls, which enables you make calls at local rates.</li>
                    </ul>                    
                </aside>		
    		</div>
        </section>
    </div>
</section><!--end of banner-->
<section id="accessNumber-container">
	<div class="wrapper">
		<div id="accNum-left">        	
			<div id="tabs">
			  <ul>
				<li><a href="#tabs-1">Call access number</a></li>
				<li><a href="#tabs-2">SMS access number</a></li>
			  </ul>
			  <div id="tabs-1">
              		<div class="numberDes">
                        <strong>PIN less dialing</strong>
                        <p>Save your nearest local access number in your Phone91 contact book to make calls without entering PIN. </p>
                        
                        <strong>Dialing via PIN</strong>
                        
                        <p>If you are a registered Phone91 user and you don't have your 4 digit PIN yet, SMS 'PIN' to your local access number and we will message you back your 4 digit PIN. </p>
                        <p>1. Dial your nearest local access number.</p>
                        <p>2. Enter your 4 digit PIN.</p>
                        <p>3. Enter the destination number with Country code.</p>
                    </div>
              		<div class="accNumTblHead">
            			<div class="accLocation">Select location</div>
                        <div class="accNumber">Number</div>
            		</div>
					<div id="callAccess">
                    	No record found!
					</div>				
			  </div>
			  
              <div id="tabs-2">
             	 	<div class="numberDes">
                    	<p>Message your friend's name and his mobile number with country code to your nearest local access number, and we will message you back his call access number.</p>
<p>For example: SMS "XYZ +91 88174566666" to the local access number below.</p>
					<p>Below are the SMS access numbers for various countries.</p>
                    </div>
              		<div class="accNumTblHead">
            			<div class="accLocation">Select location</div>
                        <div class="accNumber">Number</div>
            		</div>
					<div id="smsAccess">
                        <h3 class="themeClr">United States</h3>
                        <div>
                            <ul class="accNumberUl" >
                                <li>
                                	<div class="accLocation">US</div>
									<div class="accNumber">12028038240</div>
                                </li>
                            </ul>
                        </div>
					</div>
			  </div>			  
			</div>			
		</div>
		<div id="accNum-right">
			<!--<div class="topicRightHead">Access numbers</div>
			<div class="topicSubHead">Need a new access number?</div>
			<a id="viewAccessNumbers" class="btn" href="accessNumbers.php">View nubmers</a>-->
            
            <div class="topicRightHead">Help</div>			
            <div class="topicSubHead">Need help related to access numbers?</div>
			<a id="gotoHelp" class="btn" href="/beta/help/">See here</a>
			<div class="cl"></div>
			<div class="topicRightHead">Queries</div>
			<a href="/beta/contact.php"><dl class="topicSubHead clear"><dt class="cmnsprt-16 email"></dt><dd>Contact Us</dd></dl></a>
		</div>	
	   <div class="cl"></div>	   
    </div><!--/end of wrapper-->
</section>

<?php include_once('../inc/footer.php') ?>
<script type="text/javascript">
var icons = {
  header: "ui-icon-plus",
  activeHeader: "ui-icon-minus"
};

		
function makeAccNumberList(data){
		var callAccess = data.callAccess;		
		$('#callAccess').html('');
		$.each(callAccess, function(index, value ){
			var id = value.country.replace(' ','');
			id = id+'callAccess';
			var wid,wli;
			
			if($('#wid'+id).length == 0){
				wid='<h3 class="themeClr" id="wid'+id+'">'+value.country+'</h3>\
				  <div>\
					<ul class="accNumberUl" id="accUl'+id+'"></ul>\
				  </div>';
				
				$('#callAccess').append(wid);
			}
			
			wli = '<li>\
					<div class="accLocation">'+value.state+'</div>\
					<div class="accNumber">'+value.accessNumber+'</div>\
					</li>';
					
			$('#accUl'+id).append(wli);
		});
		
		var smsAccess = data.smsAccess;
		$('#smsAccess').html('');
		$.each(smsAccess, function(index, value ){
			var id = value.country.replace(' ','');
			id = id+'smsAccess';
			var wid,wli;
			
			if($('#wid'+id).length == 0){
				wid='<h3 class="themeClr" id="wid'+id+'">'+value.country+'</h3>\
				  <div>\
					<ul class="accNumberUl" id="accUl'+id+'"></ul>\
				  </div>';
				
				$('#smsAccess').append(wid);
			}
			
			wli = '<li>\
					<div class="accLocation">'+value.state+'</div>\
					<div class="accNumber">'+value.accessNumber+'</div>\
					</li>';
					
			$('#accUl'+id).append(wli);
		});		
		
		$( "#callAccess" ).accordion({
		  icons: icons,
		  collapsible: true,
		  animate: 200,
		  heightStyle: "content"
		});
		
		$( "#smsAccess" ).accordion({
		  icons: icons,
		  collapsible: true,
		  animate: 200,
		  heightStyle: "content"
		});
	}
	
$(function() {
	
	$( "#tabs" ).tabs();
	
	/*faqs jsonp request*/
	$.ajax({
		url: "https://voice.phone91.com/controller/phonebookController.php?action=getAccessNumberDetails&voiceJsonp=makeAccNumberList",
		crossDomain :true,
		dataType:'jsonp'
	})
});
</script>
</body>
</html>