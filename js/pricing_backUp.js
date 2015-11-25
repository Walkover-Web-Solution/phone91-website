function searchPrice(){
   
    var term = $("#search").val();
    if(term == '' || term == null){
	    $('#stcnt').show();						
	    $('#internationalCall').html('');	
    }
    var currency = $("#currency").val();
    $("#search").autocomplete({
	source: autocompleteValue(),
	width: 490,
	matchContains: true,
	max: 25, 
	delay:100, 
	scroll: true,
	scrollHeight: "auto", 
	minChars: 2, 
	multiple: false, 
	mustMatch: false, 
	autoFill: false, 
	selectFirst: true,
	select: function( event, ui ) {    
   	$.ajax({
			type: "GET",
                        dataType: 'jsonp',
			url: "https://voip91.com/searchRate.php",
			data: "action=loadDetails&term="+term+"&currency="+currency,
			success: function(data){
                            
                            var count = 0;
                            var firstvalue = '';
                            var rate = data.currency +"/min";
                            switch(data.currency)
                                {
                                case "USD":
                                    rate = "cent/min";
                                    break;
                                case "INR":
                                    rate = "paise/min";
                                    break;
                                case "AED":
                                    rate = "fils/min";
                                    break;

                                }
                        var html ='<div class="wrapper">\
                                    <div class="clear">\
                                    <span class="flag-48 BR"></span>\
                                    <p class="restxt">Approx prices for <strong>'+term+'</strong> in <span>('+data.currency+')</span></p>\
                                    </div>\
                                    <h4>For mobile/landline/others <strong id="firstValue"></strong></h4>\
                                    <p>The tables below contain all voice pricing for the country. The price to make calls a call may vary based on the destination of the call</p>\
                                    <div id="table-wrapper">\
									<div id="table-scroll">\
										<table id="prctbl" width="100%" border="0" cellpadding="0" cellspacing="0">\
                                    <thead>\
                                    <tr>\
										<th><span class="text" style="text-align:left">City</span></th>\
										<th><span class="text  themeBg">Prices</span></th>\
										<th><span class="text">Start Now</span></th>\
                                    </tr>\
                                    </thead>\
                                    <tbody>';
                            
                             $.each(data, function(key, item ) {
                                    if(key != "currency"){
                                     html +='<tr>\
                                     <td class="first">'+key+'</td>\
                                     <td>'+item+' '+rate+'</td>\
                                     <td><a class="tbbtn" href="http://phone91.com/signup.php">Start</a></td>\
                                     </tr>';
                                     if(count == 0){
                                         firstvalue = item + ' ' + rate;
                                     }
                                     count = (count + 1);  
                                    }
                                })           
                            html +='</tbody></table>\
									</div>\
							      </div>\
                            </div>';

                          if(count >= 1)
                          {
                              
                              $('.showhideDiv').hide();
                              $('#result-container').html(html);
                              $('#result-container').show();
                              $('#firstValue').html(firstvalue);
                          }else
                          {
                              $('#st-container').show();
                              $('#result-container').html("No Result Found..");
                              $('#result-container').show();
                          }

			}                 
		});
                
                
}
    })
._renderItem = function( ul, item ) {
    console.log(item);
    
    console.log(ul);
    return $( "<a>" + item.label + "<br>" + item.value + "</a>" )
    .appendTo( ul );
};		


}

function searchByCountry(val){
    $.ajax({
	    type: "GET",
	    url: "/searchRate.php",
	    data: "action=loadDetails&term="+val,
	    success: function(data){
		    var flag;

		    for(i in cobj)
		    {
			    if($.trim(cobj[i].country).toLowerCase() == val)
			    {
				    flag = cobj[i].iso2.toLowerCase();
			    }							
		    }

		    var rates = $.parseJSON('{"rates":'+data+',"flag":"'+flag+'","country":"'+val+'"}');
		    $('#stcnt').hide();
		    jd({tmpl:'#rate',obj:rates},function(html){							
			    $('#internationalCall').html(html);	
		    });
	    }                 
    });
}


function autocompleteValue(){
     var availableTags = [
"ActionScript",
"AppleScript",
"Asp",
"BASIC",
"C",
"C++",
"Clojure",
"COBOL",
"ColdFusion",
"Erlang",
"Fortran",
"Groovy",
"Haskell",
"Java",
"JavaScript",
"Lisp",
"Perl",
"PHP",
"Python",
"Ruby",
"Scala",
"Scheme"
];
return availableTags;
    
//    var term = $("#search").val();
//    $.ajax({
//			type: "GET",
//                        dataType: 'jsonp',
//			url: "https://voip91.com/searchRate.php",
//			data: "term="+term,
//			success: function(data){
//                            return data;
//                        }
//    })
 
}

