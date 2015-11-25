<?php

include 'config/functions.php';
//include_once('../config.php');
require 'google-open/openid.php';
$openid = new LightOpenID;

//print_r($openid);

if($_SERVER["HTTP_HOST"]=='phone91.com')//https
    define('CALLBACK_URL', 'http://'.$_SERVER["HTTP_HOST"].'/login/getGoogleData.php');
else
    define('CALLBACK_URL', 'http://'.$_SERVER["HTTP_HOST"].'/login/getGoogleData.php');

$openid->returnUrl = CALLBACK_URL;

if($openid->validate())
{
    $returnVariables = $openid->getAttributes();
    $email=$returnVariables["contact/email"];
    $firstName=$returnVariables["namePerson/first"];
    $lastName=$returnVariables["namePerson/last"];
    
    $connect_url = 'http://10.42.43.174/api/checkGoogleLogin.php?emailId='.$email; // Do not change
    
    ## curl code for calling api.
    $ch = curl_init($connect_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);
    
    if(!$funobj->checkEmail($email))
    {   
        $_SESSION["signup_email"]=$email;
        $_SESSION["signup_first_name"]=$firstName;
        $_SESSION["signup_last_name"]=$lastName;    
        header('Location: ../signup-step.php');
    }
    exit(0);
}
else
{
    header('Location: ../index.php');
}
?>

