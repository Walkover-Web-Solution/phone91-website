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
<title>Help</title>
<?php include_once('../inc/head.php') ?>
<link rel="stylesheet" type="text/css" href="/css/help-style.css" />
</head>
<body class="reseller">
<?php include_once('../inc/header.php') ?>
<section id="help-banner" class="warmBg">
	<div class="wrapper clear">
        <section class="top-part">
        	<div class="wrapper clear">
    	<aside>
        	<figure class="ban-icon">
            	<img src="/images/help.png" alt="" title="" height="150" width="150">
            </figure>
        </aside>
        <aside class="last">
        	<h2>Sometimes all you need is a little help!</h2>
            <div id="searchWrp">
				<span class="cmnsprt-24 search"></span>
				<input id="searchFaqs" type="text" >
			</div>
        </aside>		
    </div>
        </section>
    </div>
</section><!--end of banner-->
<section id="faq-container">
	<div class="wrapper">
		<div id="faq-left">
       		<div class="h3g">Topics</div> 
			
			<!--<div class="topicWid">
				<div class="topicHead">Calling cards</div>
				<div class="topicInfo">View all 8</div>
				<ul class="topicList">
					<li><a href="javascript:void(0);">To recharge</a></li>
					<li><a href="javascript:void(0);">To make a call</a></li>
					<li><a href="javascript:void(0);">To check balance</a></li>
					<li><a href="javascript:void(0);">Need a new access number?</a></li>
					<li><a href="javascript:void(0);">to celebrate</a></li>
				</ul>			
			</div>
			
			<div class="topicWid">
				<div class="topicHead">Calling cards</div>
				<div class="topicInfo">View all 8</div>
				<ul class="topicList">
					<li><a href="javascript:void(0);">To recharge</a></li>
					<li><a href="javascript:void(0);">To make a call</a></li>
					<li><a href="javascript:void(0);">To check balance</a></li>
					<li><a href="javascript:void(0);">Need a new access number?</a></li>
					<li><a href="javascript:void(0);">to celebrate</a></li>
				</ul>			
			</div>-->			
		</div>
		<div id="faq-right">
			<div class="topicRightHead">Access numbers</div>
			<div class="topicSubHead">Need a new access number?</div>
			<a id="viewAccessNumbers" class="btn" href="accessNumbers.php">View numbers</a>
			
			<div class="topicRightHead">Queries</div>
			<a href="/contact.php"><dl class="topicSubHead clear"><dt class="cmnsprt-16 email"></dt><dd>Contact Us</dd></dl></a>
		</div>	
	   <div class="cl"></div>	   
    </div><!--/end of wrapper-->
</section>

<?php include_once('../inc/footer.php') ?>
<script type="text/javascript">
var globaltimeout = null;

$('#searchFaqs').keyup(function(){	
	if(globaltimeout!=null)	clearTimeout(globaltimeout);	
	globaltimeout=setTimeout(function(){
		var q = $('#searchFaqs').val();		
		$.ajax({
			url: "https://voice.phone91.com/controller/faqsController.php?action=searchFAQS&voiceJsonp=makeTopicList&q="+q,		
			crossDomain :true,
			dataType:'jsonp'
		})
	},800);	
});

	function showAllQuestion(id,ts){
		if($('.showQuestion').length > 0)
		{
			$(ts).html('View all')
			$('#wid'+id+' .showQuestion').addClass('hideQuestion').removeClass('showQuestion');
		}
		else
		{
			$(ts).html('Back')
			$('#wid'+id+' .hideQuestion').addClass('showQuestion').removeClass('hideQuestion');	
		}
		
	};
	var faqs;	
	/*faqs jsonp callback function*/
	function makeTopicList(data){
		if(data.status == 1){
			faqs = data.FAQS;
			var topicWidCount=0;
			$('#faq-left').html('<div class="h3g">Topics</div>');
			
			$.each(faqs, function( index, value ) {
				var id = value.subject.replace(' ','');
				var wid,wli;
				
				if($('#wid'+id).length == 0){
					topicWidCount++;			
					wid = '<div id="wid'+id+'" class="topicWid">\
						<div class="topicHead">'+value.subject+'</div>\
						<div class="topicInfo"></div>\
						<ul class="topicList"></ul>\
					</div>';
					
					if(topicWidCount == 2){
						wid +='<div class="cl"></div>'
						topicWidCount = 0;
					}
					
					$('#faq-left').append(wid);
				}
				
				wli = '<li>\
					<a class="faqsQue" href="javascript:void(0);">'+value.question+'</a>\
					<div class="faqsAns">'+value.answer+'</div>\
					</li>';
				$('#wid'+id+' .topicList').append(wli);
				
				var listLength = $('#wid'+id+' .topicList li').length;
				var qTxt = 'question';
				if(listLength > 1) qTxt = 'questions';
				$('#wid'+id+' .topicInfo').html(listLength+' '+qTxt);
				if(listLength > 5){
					$('#wid'+id+' .topicInfo').html(listLength+' '+qTxt+'<a class="viewAllLink" href="javascript:void(0);" onclick="showAllQuestion(\''+id+'\',this)">View all</a>').show();
					$('#wid'+id+' .topicList li').eq(listLength-1).addClass('hideQuestion');
				}
			});
			
			$('.faqsQue').click(function(){
				$('.faqsAns').not($(this).next()).removeClass('open').slideUp('fast');
				if($(this).next().hasClass('open'))
					$(this).next().removeClass('open').slideUp('fast');
				else
					$(this).next().addClass('open').slideDown('fast');
			})
		}
		else
		{
			$('#faq-left').html('No result found!')
		}
	}
	 
	/*faqs jsonp request*/
	$.ajax({
		url: "https://voice.phone91.com/controller/faqsController.php?action=searchFAQS&voiceJsonp=makeTopicList",		
		crossDomain :true,
		dataType:'jsonp'
	})
</script>
</body>
</html>