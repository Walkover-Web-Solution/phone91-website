<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<meta name="description" content="Integrate Phone91's API for user verification, balance and changing password option when making internet calls." />
<title>Phone91's Api for Internet Calling </title>
<?php include_once('inc/head.php'); include_once('config.php');   ?>
<link rel="stylesheet" type="text/css" href="<?php echo $cssUrl?>api-style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $cssUrl?>features-style.css" />
</head>
<body class="reseller">
<?php include_once('inc/header.php');
if(isset($_REQUEST['msg']))
{
    $response = json_decode(base64_decode(base64_decode($_REQUEST['msg'])), true );
    $_SESSION = $response;
}
?>
<section class="innerApi">
	<div class="wrapper clear pr">
        <div id="w" class="clearfix">
          <ul id="sidemenu" class="">
            <li> <a href="#verification-content" class="open">Verification Api</a> </li>
            <li> <a href="#balance-content">Balance</a> </li>
            <li> <a href="#change-content">Change Password</a> </li>
          </ul>
          
          <div id="content" class="">
            <div id="verification-content" class="contentblock">
               		  <div class="head">Verifications</div>
              		  <div>
                      <div class="mainparemeter">
                        <div class="param">Parameters:</div>
                        <b>Required :</b> Username, Password<br>
                        <b>Optional :</b> None 
                       </div>
                      <div class="param">Sample API</div>
                      <div class="codewrap">
                      <code>http://voice.phone91.com/api/login?<span class="atv">user</span>=username&<span class="atv">password</span>=password</code></div>
                
              <div class="note2"><strong>ERROR RESPONSES:</strong>
              	 If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			</div>
            
             <div class="note1">	<strong>SUCCESS RESPONSES:</strong>
             {"response":"1","message":"Success","content":[{"balance":"109.200000","currencyCode":"63",
             "currency":"INR"}]}
			</div>
            <form>
                    <table width="90%" cellspacing="0" cellpadding="0" class="cmntbl  mrT2">
                        <thead>
                            <tr>
                                <th width="20%">Parameter Name</th>
                                <th width="20%">Value</th>
                                <th>Description</th>
                                <th>Allowed characters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>user <span class="star">*</span></td>
                                <td>AlphaNumeric</td>
                                <td>Name of the User</td>
                                <td>
                                    user:a-z,A-Z,_,@,0-9 <br/>
                                    min length 5 <br/>
								</td>
                            </tr>
                            <tr>
                                <td>password <span class="star">*</span></td>
                                <td>Varchar</td>
                                <td>User's Password</td>
                                <td>passord:a-z,A-Z,0-9,@,$,{},[],-,_,!,: <br/>
                                        min length 5 <br/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
            <!-- @end #verification-content -->

            <div id="balance-content" class="contentblock hidden">
                <div class="head">Balance</div>
				<div>
                      <div class="mainparemeter">
                        <div class="param">Parameters:</div>
                        <b>Required :</b> Username, Password<br>
                        <b>Optional :</b> None 
                       </div>
                      <div class="param">Sample API</div>
                      <div class="codewrap">
                      <code>http://phone91.com/api/balance?<span class="atv">user</span>=username&<span class="atv">password</span>=password</code></div>
                
            <div class="note2"><strong>ERROR RESPONSES:</strong>
              	 If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			</div>
            
             <div class="note1">	<strong>SUCCESS RESPONSES:</strong>
              {"response":"1","message":"Success","content":[{"clientusername":"clientusername","balance":"500.000000","type":"user",
              "currency":"INR","status":"Active"}]}
			</div>

             <form>
                    <table  cellspacing="0" cellpadding="0" class="mrT2">
                        <thead>
                            <tr>
                                <th>Parameter Name</th>
                                <th>Value</th>
                                <th>Description</th>
                                <th>Allowed characters</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>user <span class="star"> *</span></td>
                                <td>AlphaNumeric</td>
                                <td>Name of the User</td>
                                <td>a-z,A-Z,_,@,0-9, <br/>
                                        min length 5<br/>
                               </td>
                            </tr>
                            <tr>
                                <td>password <span class="star"> *</span></td>
                                <td>Varchar</td>
                                <td>User's Password</td>
                                <td>
                                        a-z,A-Z,0-9,@,$,{},[],-,_,!,:<br/>
                                        min length 5<br/>
                               </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
            <!-- @end #balance-content -->
            
            
            <div id="change-content" class="contentblock hidden">
             	<div class="head">Change Password</div>
                <div>
                      <div class="mainparemeter">
                        <div class="param">Parameters:</div>
                        <b>Required :</b>user, password, newpassword<br>
                        <b>Optional :</b> None 
                       </div>
                      <div class="param">Sample API</div>
                      <div class="codewrap">
                      <code>http://phone91.com/api/changepassword?<span class="atv">user</span>=username&<span class="atv">password</span>=password&<span class="atv">newpassword</span>=1234</code></div>
                
              <div class="note2"><strong>ERROR RESPONSES:</strong>
              	 If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			</div>
            
             <div class="note1">	<strong>SUCCESS RESPONSES:</strong>
             {"response":"1","message":"Update Successfully"}
			</div>

             	 <form>
                    <table  cellspacing="0" cellpadding="0" class="mrT2">
                        <thead>
                            <tr>
                                <th>Parameter Name</th>
                                <th>Value</th>
                                <th>Description</th>
                                <th>Allowed characters</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>user <span class="star"> *</span></td>
                                <td>AlphaNumeric</td>
                                <td>Name of the User</td>
                                <td>a-z,A-Z,_,@,0-9 <br/>
                                        min length  5 <br/>
							</td>
                            </tr>
                            <tr>
                                <td>password <span class="star"> *</span></td>
                                <td>Varchar</td>
                                <td>User's Password</td>
                                <td>a-z,A-Z,0-9,@,$,{},[],-,_,!,: <br/>
                                        min length 5 <br/>
                               </td>
                            </tr>
                            <tr>
                            <td>Newpassword<span class="star"> *</span></td>
                            <td>Varchar</td>
                            <td>New Password</td>
                            <td>
                                    a-z,A-Z,0-9,@,$,{},[],-,_,!,:<br/> 
                                    min length 5 <br/>
                            </td>
                            </tbody>
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
            <!-- @end #change-content -->
        
          </div>
          <!-- @end #content --> 
        </div>
	</div>
</section><!--/end of wl-data-->
<?php include("popup.php"); ?>
<?php include_once('inc/footer.php') ?>
<script type="text/javascript">
$(function(){
  $('#sidemenu a').on('click', function(e){
    e.preventDefault();

    if($(this).hasClass('open')) {
      // do nothing because the link is already open
    } else {
      var oldcontent = $('#sidemenu a.open').attr('href');
      var newcontent = $(this).attr('href');
      
      $(oldcontent).fadeOut('fast', function(){
        $(newcontent).fadeIn().removeClass('hidden');
        $(oldcontent).addClass('hidden');
      });
    
      $('#sidemenu a').removeClass('open');
      $(this).addClass('open');
    }
  });
});
</script>

<script type="text/javascript">
    

     
//     $(document).keyup(function(e)
//     {
//        $("body").css("overflow", "hidden");
//        $("#basic-modal-content").modal();
//        
//    });
//    
// $(document).keydown(function(e)
//     {
////        $("body").css("overflow", "hidden");
////        $("#basic-modal-content").modal();
//        
//        
//        //if (e.keyCode == 27) return false;
//        
//    });
 
 //$( "#basic-modal-content" ).modal( "option", "closeOnEscape", false );
 //$( "#basic-modal-content" ).modal({ closeOnEscape: false });
 
// $("body").on("keyup", function(e)
// {
//    if (e.which === 27)
//    {
//        $('.jqmWindow').();
//    } 
//});
 
 document.onkeydown = function (e) {
     
     console.log(e.which);
        if(e.which == 27){
                return false;
        }
    }
 </script>


</body>
</html>