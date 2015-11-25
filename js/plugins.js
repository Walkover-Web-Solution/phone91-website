// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

//show mobile menu onclick
function showMenu(ths){
	var target = '#mobile-nav';
	if( $(target).is(':visible')){
		$(ths).removeClass('active');
		$(target).slideUp('fast');
	}
	else
	{
		$(ths).addClass('active');
		$(target).slideDown('fast');
	}
}

$(document).ready(function(e) {
	/*
	this function is written for highlight the parent of subnav
	*/
	var performer = $('.subnav li');
    var target = performer.parents('li.link').children('a')
	performer.mouseenter(function(){
		$(this).parents('li.link').children('a').addClass('active')
	});
	
	performer.mouseleave(function(){
		$(this).parents('li.link').children('a').removeClass('active')
	});
});

//want to do something on mobile devices
$(window).resize(function(){
	$('.home-img').removeAttr('align');
	if ($(window).width() <= 480){	
		$('.home-img').attr('align','center');
	}	
});

//plugin for download page
//this pluggin show data according hash and create images according hash
function showDownloadData(){
	var hash, imgPath, template, tempParentDiv, steps;
	//getting hash without hash
	hash = window.location.hash.substring(1);
	console.log(':'+hash);
	var os = $.client.os;
	var width = $(window).width();
	var browser = $.client.browser;

	if(os == 'Windows'){
		console.log(os,width,browser);
	}
	
	if(os == 'Mac'){
		console.log(os,width,browser);
	}
	
	if(os == 'linux'){
		alert(os,width,browser);
	}
	
	//first show hide div
	$('.cmnDiv').hide();
	$('#'+hash+'-data').slideDown('fast', function(){
		//hash = window.location.hash.substring(1);
		//set target
		tempParentDiv = $("#"+hash+"-sc .inner");
		
		//appending child in loop
		steps = $('#'+hash+'-data .push-feature');
		for (var i=1;i<=steps.length;i++){
			//making a template 
			template = '<div class="screen-'+i+' allSc "><img src="images/dData/'+hash+'-screens-'+i+'.jpg" /></div>';
			//console.log(steps.length, i);
			$( template ).appendTo( tempParentDiv );
			
		}
		$('.screen-1').addClass('showYes');
		
	});

}
//change step function start
function  changeStep(ths , provider, num){
	var temp = '<div class="push-feature-triangle"><div class="push-triangle-figure"></div><div class="push-triangle-spacer"></div></div>';
	
	//remove all highlighted siblings and remove triangle
	$('.push-feature').removeClass('push-feature-active');
	$('.push-feature').children('.push-feature-triangle').remove();
	
	//adding
	$(ths).addClass('push-feature-active');
	$(temp).prependTo(ths);
	
	var target = $('.screen-'+num);	
	
	//changing screens
	$('.allSc').removeClass('showYes');
	target.addClass('showYes');
}




