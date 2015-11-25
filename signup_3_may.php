<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<? if(isset($_REQUEST['value'])){
    $errorValue = base64_decode($_REQUEST['value']);
    $data = json_decode($errorValue);
    
    $_REQUEST['status'] = $data->status;
    $_REQUEST['msg'] = $data->msg;
    $formData = $data->request;
    $_REQUEST['username'] = $formData->username;
    $_REQUEST['password'] = $formData->password;
    $_REQUEST['email'] = $formData->email;
    $_REQUEST['firstName'] = $formData->firstName;
    $_REQUEST['lastName'] = $formData->lastName;
    $_REQUEST['currency'] = $formData->currency;
}?>
     
<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<title>Phone91-Signup</title>
<?php include_once('inc/head.php');  include_once('config.php');  ?>
<link rel="stylesheet" type="text/css" href="<?php echo $cssUrl?>signup-style.css" />
</head>
<body style="background:#fafafa;">
<?php include_once('inc/header.php') ?>
<script type="text/javascript" src="<?php echo $jsUrl?>jquery.form.js"></script> 
<script type="text/javascript" src="<?php echo $jsUrl?>sign_up.js"></script>    

<div class="wrapper clear pr">
    <div> 
    <?php if(isset($_REQUEST['error']) && !empty($_REQUEST['error'])) {  

        $message = json_decode($_REQUEST['error'] , true); 
        if(isset($message['msg']) && !empty($message['msg']))
        {
            echo $message['msg'].'. Please contact Support for more info.'; 
        }
        
} ?>
    </div>
    
    <div id="form-wrap" class="clear">
        <aside class="first boxsize">
            <div class="pdR3">
                <div id="opt1" class="clear">
                      <?php if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == '101' &&isset($_REQUEST['error'] ))  { ?>
             			   <div class="error_red mrB4"> <?php echo $_REQUEST['error'] ;  ?> </div>
           			 <?php } ?>
                	<div class="signin">
                            <a class="button large googleplus db fl" href="<?php echo REDIRECT_FB_GOOGLE; ?>login/login-google.php?userDomain=<?php echo $_SERVER['HTTP_HOST']?>"><i class="ss-icon ss-social"></i> Sign up with Google</a>
                            <a class="button large facebook db fl" href="<?php echo REDIRECT_FB_GOOGLE; ?>login/login-fb.php?userDomain=<?php echo $_SERVER['HTTP_HOST']?>"><i class="ss-icon ss-social"></i> Sign up with Facebook</a>
					</div>
                </div>
                
                <div id="orwrap">
                    <div id="or"></div>
                    <div id="orcircle">OR</div>
                </div>
                
                <?php if(isset($_REQUEST['status'])){?>
                <div class="status">
                    <label class="<?php echo ($_REQUEST['status'] == 'error')? 'error_red':'error_green'; ?>"><?php echo $_REQUEST['msg'];?></label>
                    <div></div>
                </div>
                
                <?php } ?>
                
                <div id="opt2">
                	 <form name="signup" class="signup" id="signup" onSubmit="return validate();" method="post" action="https://voice.phone91.com/action_layer.php?action=signupP91">
                           <div id="splrow" class="clear">
                        	<div class="col-2">
                                <div class="row pdR3">
                                    <label class="lbl">First Name</label>
                                    <input class="cmninpt" type="text" name="firstName" id="firstName" onBlur="checkName('firstName')" value="<?php echo $_REQUEST['firstName'];?>" />
                                     <div class="msg "></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="row pdL3">
                                    <label class="lbl">Last Name</label>
                                    <input class="cmninpt" type="text" name="lastName" id="lastName" onBlur="checkName('lastName')" value="<?php echo $_REQUEST['lastName'];?>" />
                                     <div class="msg "></div>
                                </div>
                            </div>
                        </div>
					<!--<div class="row">
                        	<label class="lbl">Signup as a</label>
                            <div id="spro">
                                <input checked id="user" type="radio" name="uType"><label for="user">User</label>
                                <input id="reseller" type="radio" name="uType"><label for="reseller">Reseller</label>
                            </div>
                        </div>-->
                        <div class="row">
                        	<label class="lbl">Choose Username</label>
                                <input class="cmninpt <?php echo isset($_REQUEST['username'])? 'error_green' : ''; ?>" name="username" id="username" type="text"  onblur="check_user_exist(); return false;" onKeyUp="check_user_exist()" value="<?php echo $_REQUEST['username'];?>"/>
                                <div class="msg "></div>
                                     
                        </div>
                        <div class="row">
                        	<label class="lbl">Email ID</label>
                                <input class="cmninpt <?php echo isset($_REQUEST['email'])? 'error_green' : ''; ?>" type="text" name='email' id='email' onBlur="check_email_exist()" value="<?php echo $_REQUEST['email'];?>"/>
                                <div class="msg "></div>
                            
                        </div>
                        
                        <div class="row">
                        	<label class="lbl">Password</label>
                            <input class="cmninpt <?php echo isset($_REQUEST['password'])? 'error_green' : ''; ?>" type="password" name='password' id='password' onBlur="check_password_strength();" value="<?php echo $_REQUEST['password'];?>" />
                            <span class="clr"></span>    
                            
                        </div>
                        
                        <div class="row">
                        	<label class="lbl">Choose your billing currency</label>
                                <select name="currency" id="currency" onChange="changeCurrencyRes();" >
                            	<option value="select">Please Select</option>
                                <option value="84" <?php if($_REQUEST['currency'] == '84') echo 'selected="selected"'?> >USD (American dollars)</option>
                                <option value="7" <?php if($_REQUEST['currency'] == '7') echo 'selected="selected"'?> >INR (Indian rupees)</option>
                                <option value="9" <?php if($_REQUEST['currency'] == '9') echo 'selected="selected"'?> >AED (Dirham)</option>
                            </select>
                            <span class="clr"></span> 
                            <input type="hidden" name="domain" id="domain" value="<?php echo $_SERVER['HTTP_HOST'];?>"/> 
                        </div>
                        <div class="row">
                        	<input type="checkbox" id="updateReceive" name ="updateReceive">
                            I want to receive monthly updates associated with phone91
                        </div>
                        
                        <div class="row">
                        	<button class="btn" type="submit" id="signupSubmit" onFocus="this.blur();">Create my account</button>
<!--                                <input type="submit" id="signupSubmit" title="Submit" value="Submit" onfocus="this.blur();"/>-->
   
                            <p style="margin-top:5px">By signing up, you agree to our 
                            <a href="terms.php">Terms of Use</a>, 
                            <a href="privacy-policy.php">Privacy Policy</a></p>
                        </div>
                    </form>
                </div>
                
                
            </div><!--/end of pd div-->
        </aside><!--/end of aside one-->
        
        <aside class="last">
            <div class="pdL3">
                <figure><img src="images/thanks.png" alt="" /></figure>
                
                <dl class="clear">
                	<dt><i class="cmnsprt-36 twoway"></i></dt>
                    <dd>It is easy to connect via <span class="semi">Two-way</span> calling with or without internet.</dd>
                </dl>
                
                <dl class="clear">
                	<dt><i class="cmnsprt-36 route"></i></dt>
                    <dd><span class="semi">Quality routes</span> make sure that you get to talk seamlessly. 
</dd>
                </dl>
                
                <dl class="clear last">
                	<dt><i class="cmnsprt-36 callshop"></i></dt>
                    <dd>Get a lot more with <span class="semi">Voice conferencing, Callshop</span> and other bundle of features.</dd>
                </dl>
                
                
            </div>
        </aside><!--/end of aside two-->
    </div><!--/end of form wrap-->
    
    
</div><!--/end of wrapper-->

<?php include_once('inc/footer.php') ?>
</body>
</html>