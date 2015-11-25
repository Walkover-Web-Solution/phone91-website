<?php
error_reporting(0); if(session_id()==""){ session_start();}  


/**
 * @author NIDHI <nidhi@walkover.in>
 * code for setting constans.
 */
$fbGoogleLogin = TRUE;

$redirectDomain = $fbGoogleLogin ? 'https://voice.phone91.com/' : 'http://testserver.phone91.com/';


if(!defined('REDIRECT_FB_GOOGLE'))
    define("REDIRECT_FB_GOOGLE",$redirectDomain);

if(!defined('REDIRECT_VOIP'))
    define("REDIRECT_VOIP",'http://voice.phone91.com');




?>