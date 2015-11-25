<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<title>Phone91- </title>
<?php include_once('inc/head.php') ?>
<link rel="stylesheet" type="text/css" href="css/api-style.css" />
<link rel="stylesheet" type="text/css" href="css/features-style.css" />
</head>
<body class="reseller">
<?php include_once('inc/header.php') ?>
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
                      <span class="label"> Get</span>
                      <code>http://phone91.com/api/login?<span class="atv">user</span>=sneha&<span class="atv">passeword</span>=sneha</code></div>
                
              <div class="note2">	<strong>ERROR RESPONSES:</strong>
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
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>user <span class="star"> *</span></td>
                                <td>AlphaNumeric</td>
                                <td>Name of the User</td>
                            </tr>
                            <tr>
                                <td>password <span class="star"> *</span></td>
                                <td>Varchar</td>
                                <td>User's Password</td>
                            </tr>
                        </tbody>
                    </table>
                <!--<div class="subhead">Need Help in Generating API..?</div>-->
               <!-- <p>Fill the details below to generate the desistar API.</p>
                <table cellspacing="5" cellpadding="0" class="grnerateApi">
                    <tbody>
                    <tr>
                          <td>Username <span class="star"> *</span>:</td>
                          <td><input type="text" readonly="readonly" value="" name="authkey" class="cmnApinput"/></td>
                    </tr>
                    <tr>
                          <td class="">Password <span class="star"> *</span>:</td>
                          <td><input type="text" name="type" class="cmnApinput"/></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" title="Generate API" id="gnrtAPI" value="Generate API" class="f16 ligt thmClr whClr mrT btn"></td>
                    </tr>
                    </tbody>
                </table>-->
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
                      <span class="label"> Get</span>
                      <code>http://phone91.com/api/balance?<span class="atv">user</span>=sneha&<span class="atv">passeword</span>=sneha</code></div>
                
              <div class="note2"><strong>ERROR RESPONSES:</strong>
              	 If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			</div>
            
             <div class="note1">	<strong>SUCCESS RESPONSES:</strong>
              {"response":"1","message":"Success","content":[{"clientusername":"bansalsneha","balance":"500.000000","type":"user",
              "currency":"INR","status":"Active"}]}
			</div>

             	 <form>
                    <table width="90%" cellspacing="0" cellpadding="0" class="cmntbl  mrT2">
                        <thead>
                            <tr>
                                <th width="20%">Parameter Name</th>
                                <th width="20%">Value</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>user <span class="star"> *</span></td>
                                <td>AlphaNumeric</td>
                                <td>Name of the User</td>
                            </tr>
                            <tr>
                                <td>password <span class="star"> *</span></td>
                                <td>Varchar</td>
                                <td>User's Password</td>
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
                      <span class="label"> Get</span>
                      <code>http://phone91.com/api/changepassword?<span class="atv">user</span>=sneha&<span class="atv">password</span>=sneha&<span class="atv">newpassword</span>=1234</code></div>
                
              <div class="note2"><strong>ERROR RESPONSES:</strong>
              	 If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			</div>
            
             <div class="note1">	<strong>SUCCESS RESPONSES:</strong>
             {"response":"1","message":"Update Successfully"}
			</div>

             	 <form>
                    <table width="90%" cellspacing="0" cellpadding="0" class="cmntbl  mrT2">
                        <thead>
                            <tr>
                                <th width="20%">Parameter Name</th>
                                <th width="20%">Value</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>user <span class="star"> *</span></td>
                                <td>AlphaNumeric</td>
                                <td>Name of the User</td>
                            </tr>
                            <tr>
                                <td>password <span class="star"> *</span></td>
                                <td>Varchar</td>
                                <td>User's Password</td>
                            </tr>
                            <tr>
                            <td>Newpassword<span class="star"> *</span></td>
                            <td>Varchar</td>
                            <td>New Password</td>
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
<?php include_once('inc/footer.php') ?>

<script type="text/javascript">
$(function(){
     $( "#basic-modal-content" ).dialog();
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