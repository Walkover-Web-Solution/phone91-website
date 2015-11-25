function testing(data)
{
    console.log(data);
}

$(document).ready(function(){
    usernameMsg = emailMsg = passwordMsg = 0;
	
    //function to request to check username already exists or not
    check_user_exist =function()						
    {
	    var u= $("#username").val();
	    u = jQuery.trim(u);
            var uNameReg = /[^a-zA-Z0-9\_]+/;
            
            
            
	    if(u.length >=5 && u.length < 25 && uNameReg.test(u) == false ) 		
	    {
                		
		$("#username").css({'background':'url(images/loading.gif) no-repeat','background-position':'right center'})
		$.ajax({type: "GET",url: "http://voice.phone91.com/action_layer.php?action=check_avail",data: { username: u},dataType: 'jsonp',
                //jsonpCallback:'testing',
                success: function(msg)
		{ 
                   
                    
			$("#username").css({'background':'#fff'})
			if(msg==0) 
			{
				$("#username").val();
//				$("#username").focus();
				$("#username").next().removeClass("error_green").addClass("error_red").html("Already In use");	
				$("#username").removeClass("error_green");
				$("#username").addClass("error_red");
			}
			if(msg==1)
			{
				$("#username").next().addClass("error_green").html("");	//Available.
				$("#username").removeClass("error_red");
				$("#username").addClass("error_green");
			}
			usernameMsg = msg;
		},
                complete:function(msg){
                  console.log(msg);
                }
                });	
            /*$.getJSON("https://voice.phone91.com/action_layer.php?action=check_avail&callback=testing&username="+u, function(result){
   //response data are now in the result variable
   alert(result);
});*/
	    }
	    else
	    {
                if(uNameReg.test(u))
                {
                    var errorMessage = 'Special charecters are not allowed for username.'; 
                }
                else
                {
                    var errorMessage = 'Username must contain min 5 and max 25 characters.'; 
                }
                
                $("#username").next().removeClass("error_green").addClass("error_red").html(errorMessage);	
                $("#username").removeClass("error_green");
                $("#username").addClass("error_red");
                           
		usernameMsg = 0;
	    }

    }

    //check if email already exist
    check_email_exist =function()
     {   
	var u= $("#email").val();
	u = jQuery.trim(u);
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        
        if(u != ''){
	if(emailReg.test(u)) 		
	{
	    
	    $("#email").css({'background':'url(images/loading.gif) no-repeat','background-position':'right center'})
	    $.ajax({type: "GET",url: "http://voice.phone91.com/action_layer.php?action=check_email_avail",data: { email: u},dataType: 'jsonp',
	    success: function(msg)
	    { 
		    $("#email").css({'background':'#fff'})
		    if(msg==0) 
		    {
			    $("#email").val();
//			    $("#email").focus();
			    $("#email").next().removeClass("error_green").addClass("error_red").html("Already In use");	
			    $("#email").removeClass("error_green");
			    $("#email").addClass("error_red");
		    }
		    if(msg==1)
		    {
			    $("#email").next().addClass("error_green").html("");	//You can register with this email. Available
			    $("#email").removeClass("error_red");
			    $("#email").addClass("error_green");
		    }
                    
		    emailMsg = msg;
	    }});	
	}
	else
	{
		$("#email").next().removeClass("error_green").addClass("error_red").html("Please enter a valid Email ID.");
                $("#email").removeClass("error_green");
                $("#email").addClass("error_red");
		//$("#email").focus();
	}
        }else
	{
		$("#email").next().removeClass("error_green").addClass("error_red").html("Please enter your Email ID.");
                $("#email").removeClass("error_green");
                $("#email").addClass("error_red");
		//$("#email").focus();
	}
    }
    
    //check password 
    check_password_strength = function()
    {
	var u= $.trim($("#password").val());
	if(u == '' || u.length<7)
	{
	    $("#password").next().removeClass("error_green").addClass("error_red").html("Password must be 7 characters long.");	
            $("#password").removeClass("error_green");
            $("#password").addClass("error_red");
//	    $("#password").focus();
	}
	else
	{
	    $("#password").next().addClass("error_green").html("");//You can use this password	
            $("#password").removeClass("error_red");
	    $("#password").addClass("error_green");

	    passwordMsg = 1;
	}
    }
    
    //check form validation
    register =function()
    {
	if(emailMsg && passwordMsg && usernameMsg){
//	    $.ajax({
//		url : 'action_layer.php?action=signup_user',
//		type : "POST",
//		data : "email="+$("#email").val()+"&username="+$("#username").val()+"&password="+$("#password").val()
//	    });
	    return true;
	}else
	    return false;
    }
				
});
function getCode()
{
	$("#code").val('+'+$("#location").val());
}

function validateEmailv2(email)
{
// a very simple email validation checking. 
// you can add more complex email checking if it helps 
    if(email.length <= 0)
	{
	  return true;
	}
    var splitted = email.match("^(.+)@(.+)$");
    if(splitted == null) return false;
    if(splitted[1] != null )
    {
      var regexp_user=/^\"?[\w-_\.]*\"?$/;
      if(splitted[1].match(regexp_user) == null) return false;
    }
    if(splitted[2] != null)
    {
      var regexp_domain=/^[\w-\.]*\.[A-Za-z]{2,4}$/;
      if(splitted[2].match(regexp_domain) == null) 
      {
	    var regexp_ip =/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;
	    if(splitted[2].match(regexp_ip) == null) return false;
      }// if
      return true;
    }
return false;
}

function checkName(ths)
{
    var firstName = $('#'+ths).val();
    
    if(firstName=="" || firstName.length <3 || firstName.length > 20)
    {
         $("#"+ths).removeClass("error_green");
            $("#"+ths).addClass("error_red");
           
            $("#"+ths).next().addClass("error_red").html("Please enter valid name must contain min 3 and max 20 characters");		
           
    }
    else
    {
            $("#"+ths).next().html("");	
            $("#"+ths).removeClass("error_red");
            $("#"+ths).addClass("error_green");
    }
    
}

function validate()
{
	var u = $("#username").val();
	u = jQuery.trim(u);
        
         var uNameReg = /[^a-zA-Z0-9\_]+/;
	if(u=="" || u.length <5 || u.length > 25 || uNameReg.test(u) == true)
	{
//		$("#username").focus();
		$("#username").addClass("error_red");
		$("#username").next().addClass("error_red").html("Please enter valid username");		
		return false;
	}
	else
	{
		$("#username").next().html("");	
		$("#username").removeClass("error_red");
		$("#username").addClass("error_green");
	}
        var firstName = $('#firstName').val(); 
        if(firstName=="" || firstName.length <3 || firstName.length > 20)
	{
//		$("#username").focus();
		$("#firstName").addClass("error_red");
		$("#firstName").next().addClass("error_red").html("first name must contain min 3 and max 20 characters");		
		return false;
	}
	else
	{
		$("#firstName").next().html("");	
		$("#firstName").removeClass("error_red");
		$("#firstName").addClass("error_green");
	}
        var lastName = $('#lastName').val();
        if(lastName=="" || lastName.length <3 || lastName.length > 20)
	{
//		$("#username").focus();
		$("#lastName").addClass("error_red");
		$("#lastName").next().addClass("error_red").html("last name must contain min 3 and max 20 characters");		
		return false;
	}
	else
	{
		$("#lastName").next().html("");	
		$("#lastName").removeClass("error_red");
		$("#lastName").addClass("error_green");
	}
	
	var email=$("#email").val();;
	if(email==""||validateEmailv2(email)==false)
	{
//		$("#email").focus();	
		$("#email").addClass("error_red");
		$("#email").next().addClass("error_red").html("Please enter valid email address");
		return false;
	}
	else
	{
		$("#email").next().html("");	
		$("#email").removeClass("error_red");
		$("#email").addClass("error_green");
	}
	var password=$("#password").val();
                if(password=="" || password.length<7 || password.length > 25)
	{
//		$("#password").focus();	
		$("#password").addClass("error_red");
		$("#password").next().addClass("error_red").html("Please enter valid password Must be 7 Character Long");
		return false;
	}
	else
	{
		$("#password").next().html("");	
		$("#password").removeClass("error_red");
		$("#password").addClass("error_green");
	}
                      
        var currency = $('#currency').val();
        var regexp_user=/^[0-9]+$/;
        if(currency.match(regexp_user) == null){
            $("#currency").addClass("error_red");
            $("#currency").next().addClass("error_red").html("Please select valid currency !");
            return false;
          
        }else
	{
		$("#currency").next().html("");	
		$("#currency").removeClass("error_red");
		$("#currency").addClass("error_green");
	} 
      
	return true;

}

function changeCurrencyRes()
{
        var currency = $('#currency').val();
        var regexp_user=/^[0-9]+$/;
        if(currency.match(regexp_user) == null || currency =="select"){
            $("#currency").removeClass("error_green");
            $("#currency").addClass("error_red");
            $("#currency").next().removeClass("error_green").addClass("error_red").html("Please select valid currency !");
                     
        }else
	{
		$("#currency").next().html("");	
		$("#currency").removeClass("error_red");
		$("#currency").addClass("error_green");
                $("#currency").next().removeClass("error_red").addClass("error_green").html("You won't be able to change this later ");
	}  
}
 
function show_message(message,type)
{
	var stack_bottomright = {"dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25};
            
            var opts = {
                title: "Alert",
                text: message,
                addclass: "stack-bottomright",
                stack: stack_bottomright
            };
            switch (type) {
            case 'error':
                opts.title = "Error";
                opts.text = message;
                opts.type = "error";
                break;
            case 'info':
                opts.title = "Info";
                opts.text = message;
                opts.type = "info";
                break;
            case 'success':
                opts.title = "Success";
                opts.text = message;
                opts.type = "success";
                break;
            }
            $.pnotify(opts);
        
        
}	
$(document).ready(function(){		
	$(document)
	.bind("ajaxStart", function(){
		$('#logo').attr({
			src:'images/loading.gif',
			height:32
		}).css('marginTop','7px');
		//$('#header').css({'background-image':'url(images/loading2.gif)','background-repeat':'no-repeat','background-position':'130px 14px'})
	})
	.bind("ajaxStop", function(){		
		//$('#header').css({'background-image':'none'})
		$('#logo').attr({
			src:'images/phone91-logo.jpg',
			height:46
		}).css('marginTop','0');
	});		
});
changeQs = function(str)
{
        var url = window.location.hash;
        for(var key in str)
        {
            if( url.indexOf("&"+key) == -1 && url.indexOf("?"+key) == -1 && url.indexOf("#"+key) == -1 )
            { 
                url = url+'&'+key+'='+str[key];	
            }
            else
            { 
                var regexS = "[?&#]"+key+"=([^&#]*)";
                var regex = new RegExp( regexS );		
                result = regex.exec(url);                       
                url = url.replace(result[0],'&'+key+'='+str[key]);                       
            }
        }		
        if( url == null ) 
                return ""; 
        else
                window.location.hash = url;
        if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
        var ieversion=new Number(RegExp.$1) // capture x.x portion and store as a number
      if(ieversion<9)
        hashChanges();
      }
}
