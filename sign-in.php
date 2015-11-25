<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" />
<meta name="description" content="Simply enter your username and password for signing-in on Phone91. It is easy to sign in with Google/Facebook too." />
<title>Sign-In With Phone91 to Enjoy Online International Calling</title>
<?php include_once('inc/head.php') ?>
<style>
#step-top { padding:30px 0; font-size: 36px; font-weight:lighter; }
#signinHeader { font-size: 24px; line-height: 40px; font-weight:lighter; margin-bottom:15px; }
#signin { width: 70%; margin: 60px auto 20px; border: 1px solid #eaedef; padding: 15px 40px; background: #fff; }
.row { margin-bottom:15px }
.cmninpt { background: none repeat scroll 0 0 #FFFFFF; border: 1px solid #DADADA; height: 34px; padding-left: 10px; width: 100%; }
.frst { float:left; width:55%; padding-right:9%; border-right:1px solid #DADADA; position:relative; }
.lst { float:left; width:35%; padding-left:10% }
/*signup buttons*/
.signin { text-align: center; width: 100%; }
.button { font-size: 18px; padding: 15px 5px; border-radius:3px; width:100%; margin-bottom:20px }
.button.googleplus { background: none repeat scroll 0 0 #DD4B39; border: 1px solid #CA3523; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.14), 0 1px 0 rgba(255, 255, 255, 0.2) inset; color: #FFFFFF; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.4); }
.button.googleplus:hover { background: none repeat scroll 0 0 #CA3523; }
.button.googleplus:active { background: none repeat scroll 0 0 #DD4B39; }
.button.facebook { background: none repeat scroll 0 0 #3B4998; border: 1px solid #303B7B; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.14), 0 1px 0 rgba(255, 255, 255, 0.2) inset; color: #FFFFFF; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.4); display:block }
.button.facebook:hover { background: none repeat scroll 0 0 #303B7B; }
.button.facebook:active { background: none repeat scroll 0 0 #3B4998; }
#or { text-transform:uppercase; width:24px; height:24px; line-height:24px; padding:10px; background:#ddd; border-radius:50%; position:absolute; top:40%; right:-22px; }
.frst {  *width:45%; *padding-right:9%;}
.cmninpt:focus { border-style: dashed;}
.cmninpt.error { border-color:#b94a48 !important; outline:0; outline:thin dotted \9; -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px #d59392 !important; -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px #d59392 !important; box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px #d59392 !important }

.orSmallscreen { display:none;}
@media only screen and (max-width: 600px) {
.frst {    width: 100%; padding-right:0; float:none; border-right:0;}
#or { display:none;}
.lst { width:100%; float:none; padding-left:0;}
.orSmallscreen { display:block;border-top: 1px solid #DADADA;    clear: both;   margin: 60px 0;    position: relative;    width: 100%;}
.orSmallscreen .or {     background: #DDDDDD;    border-radius: 50%;    height: 24px;    left: 47%;    line-height: 24px;   padding: 10px;    position: absolute;   text-transform: uppercase;    top: -22px;    width: 24px;}
}
</style>
</head>
<body>
<?php include_once('inc/header.php') ?>
<div class="wrapper clear pr">
  <div id="signin">
    <?php if(isset($_REQUEST['error'])){?>
    <div>
      <label class="error_red"><?php echo urldecode($_REQUEST['error']);?></label>
      <div></div>
    </div>
    <?php }?>
    <div class="signin-header">
      <h4 id="signinHeader">Sign in </h4>
    </div>
      <form action="<?php echo REDIRECT_VOIP; ?>/action_layer.php?action=loginRedirect" method="POST" name="login">
      <section class="clear">
        <aside class="boxsize frst">
          <div class="row">
            <input class="cmninpt" type="text" placeholder="Username" name="uname"/>
          </div>
          <div class="row">
            <input class="cmninpt" type="password" placeholder="******" name="pwd" />
            <input type="hidden" name="domain" id="domain" value="<?php echo $_SERVER['HTTP_HOST'];?>"/>
          </div>
          <!--<div class="row">
            <input type="checkbox" />
            <label>Remember Me</label>
          </div>-->
          <div class="row">
            <input type="submit" title="Sign In" name="submit" id="" class="btn btn-primary" value="Login"/>
            <!--<button class="btn btn-primary">Login</button>--> 
          </div>
          <div class="row"> <a href="forget-password.php">Forgot your password?</a> </div>
          <div class="row"> <a href="signup.php">Need an account? Sign up! </a> </div>
          <div id="or">OR</div>
        </aside>
        <!--/end of aside-->
        <div class="orSmallscreen">
        		<span class="or">OR</span>
        </div>
        <aside class="lst">
          <div class="signin"> 
              <a href="<?php echo REDIRECT_FB_GOOGLE; ?>/login/login-google.php?userDomain=<?php echo $_SERVER['HTTP_HOST']?>&action=login" class="button large googleplus db">
          	<i class="ss-icon ss-social"></i> Sign in with Google</a> 
          <a href="<?php echo REDIRECT_FB_GOOGLE; ?>/login/login-fb.php?userDomain=<?php echo $_SERVER['HTTP_HOST']?>&action=login" class="button large facebook ">
          	<i class="ss-icon ss-social"></i> Sign in with Facebook</a> 
           </div>
        </aside>
      </section>
      <!--/end of section-->
    </form>
  </div>
  <!--/end of signin--> 
</div>
<!--/end of wrapper-->
</body>
</html>