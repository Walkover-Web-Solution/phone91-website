<div id="basic-modal-content">
     <div class="popuphead">Sign in</div>
     <div class="innerContent">
        
         <section class="clear">
             <div class="error_red"><?php if(isset($_REQUEST['error'])) { echo $_REQUEST['error'] ; } ?> </div>
             <form action="https://voice.phone91.com/action_layer.php?action=login_user" method="POST" name="login">
        		<aside class="boxsize frst">
          			<div class="row">
            				<input type="text"  placeholder="Username" class="cmninpt" name="uname">
         			</div>
                  <div class="row">
                        <input type="password" name="pwd" placeholder="******" class="cmninpt">
                        <input type="hidden" value="<?php echo $_SERVER['HTTP_HOST']; ?>" id="domain" name="domain">
                  </div>
                  <!--<div class="row check clear">
                        <input type="checkbox"/>
                        <label class="fl">Remember Me</label>
                  </div>-->
                  <div class="row clear">
                        <input type="submit" value="Login" class="btn btn-primary"  name="submit">
                     	 <div id="fltrspan">
                            <span class="fl">or sign in with</span>
                            <span class="sg-btn g">
                                <a href="https://voice.phone91.com/login/login-google.php?userDomain=<?php echo $_SERVER['HTTP_HOST']; ?>&action=login&page=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>" class="gp" title="Google">google</a>
                            </span>
                            <span class="sg-btn">
                                <a href="https://voice.phone91.com/login/login-fb.php?userDomain=<?php echo $_SERVER['HTTP_HOST']; ?>&action=login&page=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>" class="fb" title="Facebook">facebook</a>
                            </span>
                        </div>
                </div>
        	</aside>
            	<aside class="lst">
                <div class="signin"> 
                	Dont have an account yet?
                    <button name="submit" type="submit" class="apisignup" onClick="location.href='signup.php'">Sign up</button>
                </div>
         	</aside>
                 </form>
      		</section>
     </div>
</div>    
    
   <script type='text/javascript' src='js/jquery.simplemodal.js'></script>  
    
<?php include_once('inc/footer.php'); ?>

<?php
if(!isset($_SESSION['id'])) 
{  
  echo'<script type="text/javascript">
      
    $("body").css("overflow", "hidden");
    $("#basic-modal-content").modal({
    close : false
});

	
  </script>'; 
}
?>
