<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<meta name="description" content="Integrate Phone91's API for voice reseller for listing clients and changing client's passwords." />
<title>Reseller API for International Voice Calling</title>
<?php include_once('inc/head.php'); include_once('config.php'); ?>
<link rel="stylesheet" type="text/css" href="css/api-style.css" />
<link rel="stylesheet" type="text/css" href="css/features-style.css" />
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
            <li> <a href="#listclients-content" class="open">List Clients</a> </li>
            <li> <a href="#changeclientpass-content">Change Client Password</a> </li>
            <li> <a href="#updateclient-content">Update Client Balance</a> </li>
          </ul>
          
          <div id="content" class="">
            <div id="listclients-content" class="contentblock">
               		  <div class="head">List Clients</div>
              		  <div>
                      <div class="mainparemeter">
                        <div class="param">Parameters:</div>
                        <b>Required :</b>user, password<br>
                        <b>Optional :</b> None 
                       </div>
                      <div class="param">Sample API</div>
                      <div class="codewrap">
                      <code>http://voice.phone91.com/api/listClients?<span class="atv">user</span>=username& <span class="atv">password</span>=password& <span class="atv">clientusername</span>=clientusername </code>
                	</div>
                
              <div class="note2"><strong>ERROR RESPONSES:</strong>
              		If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			 </div>
            
             <div class="note1">	<strong>SUCCESS RESPONSES:</strong>
                {"response":"1","message":"Success","content":[{"clientusername":"clientusername","balance":"500.000000","type":"user",
                "currency":"INR","status":"Active"}]}
			</div>
            
             <form>
                    <table cellspacing="0" cellpadding="0" class="mrT2">
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
                                        min length 5 <br/>
                                </td>
                            </tr>
                            <tr>
                                <td>password <span class="star"> *</span></td>
                                <td>Varchar</td>
                                <td>User's Password</td>
                                <td>
                                    a-z,A-Z,0-9,@,$,{},[],-,_,!,: <br/>
                                    min length 5 <br/>
                               </td>
                            </tr>
                            </tbody>
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
            <!-- @end #Listclients-content -->

            <div id="changeclientpass-content" class="contentblock hidden">
                <div class="head">Change Client Password</div>
				<div>
                      <div class="mainparemeter">
                        <div class="param">Parameters:</div>
                        <b>Required :</b> user, password, newPassword, clientusername<br>
                        <b>Optional :</b> None 
                       </div>
                      <div class="param">Sample API</div>
                      <div class="codewrap">
                      <code>http://phone91.com/api/changeclientpassword?<span class="atv">user</span>=username& <span class="atv">password</span>=password& <span class="atv">newPassword</span>=121212& <span class="atv">clientusername</span>=clientusername </code>
                     </div>
                
              <div class="note2"><strong>ERROR RESPONSES:</strong>
              	 If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			</div>
            
             <div class="note1">	<strong>SUCCESS RESPONSES:</strong>
              {"response":"1","message":"Update Successfully"}
			</div>

             	 <form>
                    <table cellspacing="0" cellpadding="0" class="mrT2">
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
                                    <td>
                                        a-z,A-Z,_,@,0-9 <br/>
                                        min length 5 <br/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>password <span class="star"> *</span></td>
                                    <td>Varchar</td>
                                    <td>User's Password</td>
                                    <td>
                                   	a-z,A-Z,0-9,@,$,{},[],-,_,!,:<br/>
									length greater than 5<br/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>newPassword <span class="star"> *</span></td>
                                    <td>Varchar</td>
                                    <td>New Password</td>
                                    <td>
                                    	newPassword:a-z,A-Z,0-9,@,$,{},[],-,_,!,:<br/>
										min length 5 <br/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>clientusername<span class="star"> *</span></td>
                                    <td>Varchar</td>
                                    <td>New client name</td>
                                    <td>
                                    	a-z,A-Z,_,@,0-9 <br/>
                                        min length 5 <br/>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
            <!-- @end #changeclientpass-content -->
            
            
            <div id="updateclient-content" class="contentblock hidden">
               		  <div class="head">Update Client Balance</div>
              		  <div>
                      <div class="mainparemeter">
                        <div class="param">Parameters:</div>
                        <b>Required :</b>user,password,clientusername,receivingAmount,paymentMode,paymentType,description,action,partialAmt,
                        otherPaymentType,balance,amountCurrency,partialAmtCurrency<br>
                        <b>Optional :</b> None 
                       </div>
                      <div class="param">Sample API</div>
                      <div class="codewrap">
                      <code>http://phone91.com/api/updateclientbalance?<span class="atv">user</span>=username& <span class="atv">password</span>=password& <span class="atv">clientusername</span>=bansal& <span class="atv">receivingAmount</span>=1333&  <span class="atv">paymentMode</span>=0& <span class="atv">paymentType </span>=2& <span class="atv">description</span> &action=1& <span class="atv">partialAmt</span>=454& <span class="atv">otherPaymentType</span>=2& <span class="atv">balance</span>=455& <span class="atv">amountCurrency</span>=2& <span class="atv">partialAmtCurrency</span>=2</code>
                	</div>
                
              <div class="note2"><strong>ERROR RESPONSES:</strong>
              	If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			 </div>
            
             <div class="note1">	<strong>SUCCESS RESPONSES:</strong>
               If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			</div>
            
            <form>
                <table cellspacing="0" cellpadding="0" class="mrT2">
                    <thead>
                        <tr>
                            <th width="24%">Parameter Name</th>
                            <th width="20%">Value</th>
                            <th>Description</th>
                            <th>Allowed characters</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                            <td>user <span class="star"> *</span></td>
                            <td>AlphaNumeric</td>
                            <td>Name of the User</td>
                            <td>
                            	a-z,A-Z,_,@,0-9 <br/>
                                min length 5  <br/>
                            </td>
                        </tr>
                        <tr>
                            <td>password <span class="star"> *</span></td>
                            <td>Varchar</td>
                            <td>User's Password</td>
                            <td>
                                a-z,A-Z,0-9,@,$,{},[],-,_,!,: <br/> 
                                min length 5 <br/>
                            </td>
                        </tr>
                        <tr>
                        <td>clientusername<span class="star"> *</span></td>
                        <td>Varchar</td>
                        <td>
                        		a-z,A-Z,_,@,0-9 <br/>
                                min length 5   <br/>
                        </td>
                        <td>
                        	a-z,A-Z,_,@,0-9 <br/>
							min length 5 <br/>
                        </td>
                        </tr>
                       
                      <tr>
                            <td>receivingAmount<span class="star"> *</span></td>
                            <td>Integer</td>
                            <td>New received amount</td>
                            <td>integer or float value</td>
                        </tr>
                        
                        <tr>
                            <td>paymentMode<span class="star"> *</span></td>
                            <td>Integer</td>
                            <td>New payment amount</td>
                             <td>
                                0(prepaid/advanced) or 1(partial),2(postpaid/credit)	 <br/>
                                0 or 1 <br/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>description<span class="star"> *</span></td>
                            <td>Varchar</td>
                            <td>Details</td>
                            <td>string</td>
                        </tr>
                        
                        <tr>
                            <td>action<span class="star"> *</span></td>
                            <td>Integer</td>
                            <td>Details action</td>
                            <td>0 or 1</td>
                        </tr>
                        
                        <tr>
                            <td>partialAmt<span class="star"> *</span></td>
                            <td>Integer</td>
                            <td>Particle Amount</td>
                            <td>integer</td>
                        </tr>
                        
                        <tr>
                            <td>otherPaymentType<span class="star"> *</span></td>
                            <td>Integer</td>
                            <td>other Payment Amount</td>
                            <td>string</td>
                        </tr>
                        
                        
                        <tr>
                            <td>balance<span class="star"> *</span></td>
                            <td>Integer</td>
                            <td>Total Balance</td>
                            <td>integer or float value</td>
                        </tr>
                        
                         <tr>
                            <td>amountCurrency<span class="star"> *</span></td>
                            <td>Integer</td>
                            <td>Current Amount</td>
                            <td>integer value</td>
                        </tr>
                        
                         <tr>
                            <td>partialAmtCurrency<span class="star"> *</span></td>
                            <td>Integer</td>
                            <td>Currency</td>
                            <td>integer value</td>
                        </tr>
                        
                        </tbody>
                    </tbody>
                </table>
            </form>
               </div>
            </div>
            <!-- @end #updateclient-content -->            
            
          </div>
          <!-- @end #content --> 
        </div>
	</div>
    
</section><!--/end of wl-data-->
<?php include_once('inc/footer.php') ?>
<?php include("popup.php"); ?>
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

</body>
</html>