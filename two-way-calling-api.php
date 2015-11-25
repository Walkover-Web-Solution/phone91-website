<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<meta name="description" content="Use Phone91's API for two way calling. Simply enter your source and estination number to start long distance calling at ease." />
<title>Two Way Calling Api for Making Online International Calls</title>
<?php include_once('inc/head.php') ?>
<link rel="stylesheet" type="text/css" href="css/api-style.css" />
<link rel="stylesheet" type="text/css" href="css/features-style.css" />
</head>
<body class="reseller">
<?php include_once('inc/header.php');include_once('config.php'); 
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
            <li> <a href="#twowaycalling-content" class="open">Two way calling</a> </li>
            <li> <a href="#twowayrecod-content">Two calling with recode</a> </li>
          </ul>
          
          <div id="content" class="">
            <div id="twowaycalling-content" class="contentblock">
                <div class="head">Two way calling</div>
				<div>
                      <div class="mainparemeter">
                        <div class="param">Parameters:</div>
                        <b>Required :</b>user, password, source, dest<br>
                        <b>Optional :</b> None 
                       </div>
                       
                      <div class="param">Sample API</div>
                      <div class="codewrap">
                      <code>
                      http://voice.phone91.com/api/twowaycalling?<span class="atv">user</span>=username& <span class="atv">password</span>=password& <span class="atv">source</span>=9144544561& <span class="atv">dest</span>=913445766468</code></div>
                
              <div class="note2"><strong>ERROR RESPONSES:</strong>
              	If not valid :  {"response":"0","message":{"code":"103","message":"Invalid password please try again with a valid password"}}
			</div>
            
             <div class="note1">	<strong>SUCCESS RESPONSES:</strong>
              {"response":"1","message":"success","content":[{"status":"error",
              "msg":"successfully request sent "}]}
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
                                    <td>username <span class="star"> *</span></td>
                                    <td>Varchar</td>
                                    <td>Username</td>
                                    <td>
                                        a-z,A-Z,_,@,0-9 <br/>
                                        min length 5 <br/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>password <span class="star"> *</span></td>
                                    <td>Varchar</td>
                                    <td>Password</td>
                                    <td>
                                        a-z,A-Z,0-9,@,$,{},[],-,_,!,: <br/>
                                        min length 5 <br/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>src_no <span class="star"> *</span></td>
                                    <td>AlphaNumeric</td>
                                    <td>Source Number</td>
                                    <td>0-9</td>
                                </tr>

                                <tr>
                                    <td>des_no <span class="star"> *</span></td>
                                    <td>AlphaNumeric</td>
                                    <td>Destination Number</td>
                                    <td> 0-9</td>
                                </tr>
                         </tbody>
                    </table>
                </form>
                </div>
            </div>
            <!-- @end #twowaycalling-content -->
             <div id="twowayrecod-content" class="contentblock hidden">
                <div class="head">Two calling with recode</div>
				<div>
                      <div class="mainparemeter">
                        <div class="param">Parameters:</div>
                        <b>Required :</b> src_no, des_no, username, password, vcode, record<br>
                        <b>Optional :</b> None 
                       </div>
             	 <form>
                    <table cellspacing="0" cellpadding="0" class="mrT2">
                        <thead>
                            <tr>
                                <th>Parameter Name</th>
                                <th>Value</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                                <tr>
                                    <td>src_no <span class="star"> *</span></td>
                                    <td>AlphaNumeric</td>
                                    <td>Source Number</td>
                                </tr>
                                <tr>
                                    <td>des_no <span class="star"> *</span></td>
                                    <td>AlphaNumeric</td>
                                    <td>Destination Number</td>
                                </tr>
                                 <tr>
                                    <td>username <span class="star"> *</span></td>
                                    <td>Varchar</td>
                                    <td>username</td>
                                </tr>
                                <tr>
                                    <td>password <span class="star"> *</span></td>
                                    <td>Varchar</td>
                                    <td>Password</td>
                                </tr>
                                <tr>
                                    <td>vcode<span class="star"> *</span></td>
                                    <td>Varchar</td>
                                    <td>Source</td>
                                </tr>
                                <tr>
                                    <td>record<span class="star"> *</span></td>
                                    <td>Varchar</td>
                                    <td>Record</td>
                                </tr>
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
            <!-- @end #twowayrecod-content-->
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

</body>
</html>