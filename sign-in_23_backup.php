<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
<title>Phone91- </title>
<?php include_once('inc/head.php') ?>
<style>
#step-top{
	padding:30px 0;
	font-size: 36px;
	font-weight:lighter;
}
#signinHeader{	
	font-size: 24px;
    line-height: 40px;
	font-weight:lighter;
	margin-bottom:15px;
}
#signin{
	width: 70%;
	margin: 60px auto;
	border: 1px solid #eaedef;
	padding: 15px 40px;
	background: #fff;
}
.row{
	margin-bottom:15px
}
.cmninpt{
	background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #DADADA;
    height: 34px;
    padding-left: 10px;
    width: 100%;
}
.row a{text-decoration:underline}

.frst{
	float:left;
	width:55%;
	padding-right:9%;
	border-right:1px solid #DADADA;
	position:relative;
}
.lst{
	float:left;
	width:35%;
	padding-left:10%
}
/*signup buttons*/
.signin {
    text-align: center;
    width: 100%;
}
.button {
    font-size: 18px;
    padding: 15px 0;
	border-radius:3px;
	width:100%;
	margin-bottom:20px
}
.button.googleplus{
    background: none repeat scroll 0 0 #DD4B39;
    border: 1px solid #CA3523;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.14), 0 1px 0 rgba(255, 255, 255, 0.2) inset;
    color: #FFFFFF;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
}
.button.googleplus:hover{
    background: none repeat scroll 0 0 #CA3523;
}
.button.googleplus:active{
    background: none repeat scroll 0 0 #DD4B39;
}
.button.facebook{
    background: none repeat scroll 0 0 #3B4998;
    border: 1px solid #303B7B;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.14), 0 1px 0 rgba(255, 255, 255, 0.2) inset;
    color: #FFFFFF;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
}
.button.facebook:hover{
    background: none repeat scroll 0 0 #303B7B;
}
.button.facebook:active{
    background: none repeat scroll 0 0 #3B4998;
}
#or{
	text-transform:uppercase;
	width:24px;
	height:24px;
	line-height:24px;
	padding:10px;
	background:#ddd;
	border-radius:50%;
	position:absolute;
	top:40%;
	right:-22px;
}
.frst{
	*width:45%;
	*padding-right:9%;
}
.cmninpt:focus{
    border-color: rgba(82, 168, 236, 0.8);
    outline:0;
	outline:thin dotted \9;
	-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(82,168,236,0.6);
	-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(82,168,236,0.6);
	box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(82,168,236,0.6)
}
.cmninpt.error{
	border-color:#b94a48 !important;
	outline:0;outline:thin dotted \9;
	-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px #d59392 !important;
	-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px #d59392 !important;
	box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px #d59392 !important
}
</style>
</head>
<body>
<?php include_once('inc/header.php') ?>






<div class="wrapper clear pr">
	
    <div id="signin">
		<div class="signin-header">
	        <h4 id="signinHeader">Sign in </h4>
	    </div>
    <form action="http://phone.phone91.com/action_layer.php?action=loginRedirect" method="POST" name="login">    
        <section class="clear">
        	<aside class="boxsize frst">
            	<div class="row">
                	<input class="cmninpt" type="text" placeholder="Username" name="uname"/>
                        
                </div>
                <div class="row">
                	<input class="cmninpt" type="password" placeholder="******" name="pwd" />
                        <input type="hidden" name="domain" id="domain" value="<?php echo "http://".$_SERVER['HTTP_HOST'];?>"/>         
                </div>
                <div class="row">
                	<input type="checkbox" />
                    <label>Remember Me</label>
                </div>
                <div class="row">
                    <input type="submit" title="Sign In" name="submit" id="" class="btn btn-primary" value="Login"/> 
<!--                	<button class="btn btn-primary">Login</button>-->
                </div>
                <div class="row">
                	<a href="javascrip:void(0)">Forgot your password</a>
                </div>
                <div class="row">
                	<a href="javascrip:void(0)">Need an account? Sign up </a>
                </div>
                
                <div id="or">OR</div>
            </aside><!--/end of aside-->
            
            <aside class="lst">
            	<div class="signin">
<!--                	<button href="login/login-google.php" class="button large googleplus "> Sign in with Google</button>-->

                <a title="Google" href="login/login-google.php" class="gp" >google</a>
                <button href="#" class="button large facebook "><i class="ss-icon ss-social"></i> Sign in with Facebook</button>
                </div>
            </aside>
            
        </section><!--/end of section-->
   </form>
    </div><!--/end of signin-->
    
</div><!--/end of wrapper-->

<?php //include_once('inc/footer.php') ?>
<script>
 
</script>
</body>
</html>