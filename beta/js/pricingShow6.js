(function( $ ) {

var proto = $.ui.autocomplete.prototype,
        initSource = proto._initSource;

function filter( array, term ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(term), "i" );
        return $.grep( array, function(value) {
                return matcher.test( $( "<div>" ).html( value.label || value.value || value ).text() );
        });
}

$.extend( proto, {
        _initSource: function() {
                if ( this.options.html && $.isArray(this.options.source) ) {
                        this.source = function( request, response ) {
                                response( filter( this.options.source, request.term ) );
                        };
                } else {
                        initSource.call( this );
                }
        },

        _renderItem: function( ul, item) {
                return $( "<li></li>" )
                        .data( "item.autocomplete", item )
                        .append( $( "<a></a>" )[ this.options.html ? "html" : "text" ]( item.label ) )
                        .appendTo( ul );
        }
});

})( jQuery );


var countryFlags = new Array(); 
var globalTimeout =null;

$(function() {   
   $.ajax({
            type: "GET",
            url: "../action.php",
            data: "action=getFlagId", async: false,
            success: function(data)
            {
                countryFlags = $.parseJSON(data);
            }
                        
    })
});

function showprice(){	
	var term = $("#search").val();	
	var currency = $("#currency").val();
        var country = $("#search").val();	
        var regex=/^[0-9]+$/;
        
       $.ajax({
                type: "GET",
                dataType: 'jsonp',
                url: "https://voice.phone91.com/searchRate.php",
                data: "term="+term,
                success: function(data)
                {      
                   $.map( data, function( key,item ) 
                    {
                        console.log(key);
                        country = key;
                    }); 
                    
                    $.ajax({
                            type: "GET",
                            url: "https://voice.phone91.com/searchRate.php",
                            dataType: 'jsonp',
                            data: "action=loadDetails&term="+country+"&currency="+currency,
                            success: function(data){                              
                                    pricingData(data,country);
                            }
                    });
                    
                }
     })
          
	
}

function searchPrice()
{
       $("#search").keyup(function(e){
			var val = $(this).val();
			if(val == '' || val == undefined || val == null){
				$('#st-container').show();
				$('.showhideDiv').show();	
				$('#result-container').hide();
			}
		})
	    var term = $("#search").val();
		var currency = $("#currency").val();
        term = $.trim(term);        
        if(term == '' || term == null)
        {
            $('#stcnt').show();						
            $('#internationalCall').html('');	
        }
    
        $("#search").autocomplete({
        
        source: function(request,response)
        {
            autocompleteValue(request,response);
        },
        html: true,
        width: 490,
        matchContains: true,
        max: 25, 
        delay:600, 
        scroll: true,
        scrollHeight: "auto", 
        minChars: 2, 
        multiple: false, 
        mustMatch: false, 
        autoFill: false, 
        selectFirst: true,
		search: function( event, ui ) {
			currency = $("#currency").val();
		},
		response:function(event,ui){
			var regex=/^[0-9]+$/;
			if(!term.match(regex))			
				term = ui.content[0].value
							
			$.ajax({
				type: "GET",
				url: "https://voice.phone91.com/searchRate.php",
				dataType: 'jsonp',
				data: "action=loadDetails&term="+term+"&currency="+currency,
				success: function(data){
					pricingData(data,term);
				}
			});			
		},
        select: function( event, ui ) 
        {   
            var term = ui.item.value;            
            $.ajax({
				type: "GET",
				dataType: 'jsonp',
				url: "https://voice.phone91.com/searchRate.php",
				data: "action=loadDetails&term="+$.trim(term)+"&currency="+currency,
				success: function(data){
					pricingData(data,term);
				}                 
			});
        }
    })
    ._renderItem = function( ul, item ) 
        {
            return $(  )
            .appendTo( ul );
        };		


    }



function pricingData(data,term){
  
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
        case "NZD":
            rate = "cent/min";
            break;
        }        
        
        term = term.toLowerCase();
       
        var flg = countryFlags[term];
        
var html ='<div class="wrapper">\
            <div class="clear">\
            <span class="pricingflag"><img src="../images/flags/'+$.trim(flg.toLowerCase())+'.png" /></span>\
            <p class="restxt">Prices for '+term+' in ('+data.currency+') <strong id="firstValue"></strong></p>\
            </div>\
            <div id="table-wrapper">\
												<table width="100%" border="0" cellpadding="0" cellspacing="0" class="priceTable">\
												<thead>\
													<tr>\
															<th>City</th>\
															<th class="themeBg">Prices</th>\
															<th>Start Now</th>\
													 </tr>\
           										 </thead>\
												</table>\
												 <div id="table-scroll">\
                                                        <table id="prctbl" width="100%" border="0" cellpadding="0" cellspacing="0">\
            <tbody>';

        $.each(data, function(key, item ) {
            if(key != "currency"){
                
                 if(item >= 100){
                    item = item/100;
                    var newrate = data.currency;
                }else
                    var newrate = rate;
                
                html +='<tr>\
                <td class="first">'+key+'</td>\
                <td>'+item.toFixed(2)+' '+newrate+'</td>\
                <td><a class="tbbtn" href="https://phone91.com/signup.php">Start</a></td>\
                </tr>';
                if(count == 0){
                    firstvalue = item.toFixed(2) + ' ' + newrate;
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
    }
	else
    {
        $('#st-container').show();
        $('#result-container').html("No Result Found..");
        $('#result-container').show();
    }

}


function searchByCountry(val){
    $.ajax({
	    type: "GET",
	    url: "/searchRate.php",
	    data: "action=loadDetails&term="+$.trim(val),
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


function autocompleteValue(request,response){
    
    $.ajax({
                type: "GET",
                dataType: 'jsonp',
                url: "https://voice.phone91.com/searchRate.php",
                data: "term="+request.term,
                success: function(data)
                {                 
                    response( $.map( data, function( key,item ) 
                    {
                        return {
                                    label:  '<span class="flag-24 '+countryFlags[key.toLowerCase()]+'"></span>'+key,
                                    value: key
                               }
                        }));
                }
                        
    })
    
    
 
}