<?php 
error_reporting(0); if(session_id()==""){ session_start();}  
class functions 
{
    
    /**
     * @author Nidhi  <nidhi@walkover.in>
     * @param int $param['code'] verification Code
     * @param int $param['number'] mobile number of user
     * @since 28/dec2013
     * @return encoded json This Function Sends verification code along with mobile number to the server. to check
     *                  verification Code is correct or not. ( USing this in case of forgot password.)
     */
    
    function verifyConfirmation($param)
    {
        
        #- Check if mobile number and code is empty
        if(empty($param['number']) || empty($param['code']))
        {
            $response = json_encode(array( "msg" => "Invalid Confirmation Code" , "status" => "error" , "type" => 3 , "contact" => array($param['number'])));  
            header('Location: http://phone91.com/forget-password.php?error='.base64_encode($response));
        }
        
        if(isset($param['type']) && $param['type'] == 'EMAIL')
        {
            #- server url to send confirmation code and mobile number.
           $connectUrl = 'https://voice.phone91.com/action_layer.php?action=verifyConfirmation&number='.$param['number'].'&code='.$param['code'].'&type=EMAIL'; // Do not change
        }
        else
        {
            #- server url to send confirmation code and mobile number.
            $connectUrl = 'https://voice.phone91.com/action_layer.php?action=verifyConfirmation&number='.$param['number'].'&code='.$param['code'].''; // Do not change
        }
     //  echo $connectUrl;
      
        
        #- curl code To send request
        $ch = curl_init($connectUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        #- curl Response.
        $response = curl_exec($ch);
        
        //$this->sendMail($response."  :: ".$connectUrl , "checkerrormails@gmail.com" , 'forgot Query');
        curl_close($ch);
        
        #- decodind curl response.
        $response = json_decode($response ,true);

       
        
        #- if error returned.
        if(!$response || $response['status'] == 'error')
        {
            $response = json_encode(array( "msg" => "Invalid Confirmation Code" , "status" => "error" , "type" => 3 , "contact" => array($param['number'])));
            
            header('Location: http://phone91.com/forget-password.php?error='.base64_encode($response));
        }
        else 
        {
            $_SESSION['key'] = $response['key'];
            $_SESSION['userName'] = $response['userName'];
            $_SESSION['code'] = $param['code'];
            $_SESSION['number'] = $param['number'];
            $_SESSION['userName'] = 'nidhi@walkover.in';
            
         
            
            if($param['type'] == 'EMAIL')
            {
                $_SESSION['type'] = 'EMAIL';
            }
            else
                $_SESSION['type'] = 'MOBILE';
            
            //   echo ' Type '.$param['type'].' // '. $_SESSION['type'] ;
               
            $response = json_encode(array( "status" => "success" , "type" => 6 ));
            header('Location: http://phone91.com/forget-password.php?error='.base64_encode($response));
        }
        
    }
    
    /**
     * @author rahul chordiya <rahul@hostnsoft.com>
     * @return array this function returns an array of list of countries.
     */
    function countryArray() 
    {
        
        #- server url for getting currency
        $url = "https://voice.phone91.com/isoData.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        $string1 = json_decode($data, true);
        /*for ($i = 0; $i < count($string1); $i++) 
        {
            $country[$string1[$i]['CountryCode']] = $string1[$i]['Country'];
			//$countryFlag[$string1[$i]['countryFlag']] = $string1[$i]['ISO'];
        }*/
        return $string1;
    }
    function getFlagId()
    {
       $flagDetails =  $this->countryArray(); 
       $flags = array();
       foreach($flagDetails as $val)
       {
           $flagId = explode('/', $val['ISO']);
           $flags[strtolower($val['Country'])] = $flagId[0];
       }
       return json_encode($flags);
    }
    /**
     * @author Nidhi <nidhi@walkover.in>
     * @param string $param['new_pwd']
     */
    function resetPasword($param)
    {
        #- If password is empty
        if(empty($param['new_pwd']))
        {
            $result = json_encode(array("status" => "success" , "type" => 6 , "msg" => "Plese Enter Valid Password"));
            header('Location: http://phone91.com/forget-password.php?error='.base64_encode($result));
        }
        
        if(isset( $_SESSION['type']) &&  $_SESSION['type'] == 'EMAIL')
        {
            #- Server Url To Send Password. 
            $connectUrl = 'https://voice.phone91.com/action_layer.php?action=reset_pwd&code='.$_SESSION['code'].'&mobNum='.$_SESSION['number'].'&key='.$_SESSION['key'].'&new_pwd='.$param['new_pwd'].'&type=EMAIL'; // Do not change
        }
        else
        {
            #- Server Url To Send Password. 
            $connectUrl = 'https://voice.phone91.com/action_layer.php?action=reset_pwd&code='.$_SESSION['code'].'&mobNum='.$_SESSION['number'].'&key='.$_SESSION['key'].'&new_pwd='.$param['new_pwd']; // Do not change
        }
        //echo $_SESSION['type'].$connectUrl;
        
        #- Curl code -  
        $ch = curl_init($connectUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $response = json_decode($response , true);
        
        #- Curl Code Ends Here.
       // print_r($response);
        //die("login");
        
        #- If We Got Success Response.
        if($response['msgtype'] == 'success')
        {
            $result = json_encode(array("status" => "success" , "type" => 11));
            header('Location: http://phone91.com/forget-password.php?error='.base64_encode($result));
        }
        else 
        {
            $result = json_encode(array("status" => "success" , "type" => 6 , "msg" => "Plese Enter Another Password"));
            header('Location: http://phone91.com/forget-password.php?error='.base64_encode($result));
        }
        
    }
    
    /**
     * @author Nidhi <nidhi@walkover.in>
     */
    function addFeedBackAndRequirements($parm)
    {
        if (strlen($parm['fullName']) < 1  ||strlen($parm['emailId']) < 1 || strlen($parm['contactNo']) < 1 || strlen($parm['message']) < 1 ) 
        {
           return json_encode(array("status"=>"error",
                                    "message"=>"Incomplete From!"));  
        }
        
        if (!preg_match("/^[0-9]{8,15}$/", $parm['contactNo'])) 
        {
            return json_encode(array("status" => "error", 
                              "message" => "contact no. is not valid!"));
        }
        
        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $parm['emailId'])) 
        {
            return json_encode(array("status" => "error", 
                                     "message" => "email id is not valid !"));
        }
       
        if(!preg_match('/^[a-zA-Z0-9\@\_\-\s]*[A-Za-z][a-zA-Z0-9\@\_\-\s]*$/', $parm['fullName']))
        {
           return json_encode(array("status" => "error",
                                    "message" => "Please enter valid Name!"));
        }
        
       
        
        if($parm['relatedTo'] == '0')
        {
             return json_encode(array("status" => "error",
                                    "message" => "Please enter valid Related to !"));
        }

        $messageResponse = "";
        switch($parm['type'])
        {
            case '0':
               
                break;
            
            case '3':
                $message = "Thank you for sharing with us! We will get back to you shortly";
                    $reqParam['fullName'] = $parm['fullName'] ;
                    $reqParam['emailId'] = $parm['emailId'] ;
                    $reqParam['contactNo'] = $parm['contactNo'] ;
                    $reqParam['relatedTo'] = $parm['relatedTo'] ;
                    $reqParam['message'] = $parm['message'] ;
                    
                   $messageResponse =  $this->contactTemplate();
                    $subject = 'Your query at Phone91';
                    
                break;
            
            case '2':
                    
                    if($parm['resellerVia'] == '0')
                    {
                        return json_encode(array("status" => "error",
                                       "message" => "Please Select field - you wish to be reseller via!"));
                    }
                    
                    if($parm['resellerVia'] == 'callingcards'){
                    if (!preg_match("/^((\d+(\.\d *)?)|((\d*\.)?\d+))$/", $parm['estimatedVolume'])) 
                    {
                        return json_encode(array("status" => "error", 
                                "message" => "Please Enter Valid estimated Volume!"));
                    }
                    
                    $reqParam['estimatedVolume'] = $parm['estimatedVolume'] ." ".$parm['dealCurrency'];
                    }else
                    $reqParam['estimatedVolume'] = $parm['volume'] ." ".$parm['dealCurrency'];
                    
                    //$reqParam['estimatedVolume'] = $parm['estimatedVolume'] ;
                    $reqParam['resellerVia'] = $parm['resellerVia'] ;
                    $reqParam['fullName'] = $parm['fullName'] ;
                    $reqParam['emailId'] = $parm['emailId'] ;
                    $reqParam['contactNo'] = $parm['contactNo'] ;
                    $reqParam['message'] = $parm['message'] ;
                    
                    $messageResponse =  $this->resellerTemplate();
                    
                    //whitelabelsolutions
                    if($parm['resellerVia'] == 'whitelabelsolutions')
                    {
                        if(count($parm['country']) < 1 || count($parm['overAllVolume']) < 1 || count($parm['callrate']) < 1 )
                        {
                             return json_encode(array("status" => "error", 
                                "message" => "Please Enter Valid overall Volume and rate!"));
                        }
                        
                        $reqParam['country'] = array();
                        foreach($parm['country'] as $key=>$val)
                        {
                            if(!preg_match('/^[a-zA-Z0-9\@\_\-\s]*[A-Za-z][a-zA-Z0-9\@\_\-\s]*$/', $val))
                            {
                                return json_encode(array("status" => "error",
                                        "message" => "Please Select Valid Country Name!"));
                            }
                            else 
                            {
                                $reqParam['country'][] = $val;
                            }
                            
                        }
                        
                        $reqParam['overallVolume'] = array();
                        foreach($parm['overAllVolume'] as $key=>$val)
                        {
                           if(!preg_match('/^((\d+(\.\d *)?)|((\d*\.)?\d+))$/', $val))
                           {
                               return json_encode(array("status" => "error",
                                       "message" => "Please enter valid overall volume!"));
                           }
                           else 
                           {
                               $reqParam['overallVolume'][] = $val;
                           }

                        }
                        
                        
                        $reqParam['callrate'] = array();
                        foreach($parm['callrate'] as $key=>$val)
                        {
                            
                           if(!preg_match('/^((\d+(\.\d *)?)|((\d*\.)?\d+))$/', $val))
                           {
                               return json_encode(array("status" => "error",
                                       "message" => "Please enter valid Call Rate!"));
                           }
                           else 
                           {
                               $reqParam['callrate'][] = $val;
                           }

                        }
                       
                        //print_r($reqParam);
                        
                    }
                    $subject = 'Your query to become a reseller';
                     $message = "Reseller Request Sent Successfully";
                break;
                
                 case '1':
                     $message = "Admin Request Sent Successfully";
                     
            
                    
                    if (!preg_match("/^((\d+(\.\d *)?)|((\d*\.)?\d+))$/", $parm['volume'])) 
                    {
                        return json_encode(array("status" => "error", 
                                "message" => "Please Enter Valid estimated Volume!"));
                    }
                    
                    if($parm['volume'] < 800000)
                    {
                        $table = "Your estimated volume is very low. you can try our reseller pannel";
                        $this->sendMail( $table , $parm['emailId']  ); 
                    }
                    
                    
                    $reqParam['estimatedVolume'] = $parm['volume'] ;
                  
                    $reqParam['fullName'] = $parm['fullName'] ;
                    $reqParam['emailId'] = $parm['emailId'] ;
                    $reqParam['contactNo'] = $parm['contactNo'] ;
                    $reqParam['message'] = $parm['message'] ;
                    $reqParam['currency'] = $parm['dealCurrency'] ;
                    
                    //dealCurrency
                    //whitelabelsolutions
                  //  if($parm['resellerVia'] == 'whitelabelsolutions')
                    {
                        if(count($parm['country']) < 1 || count($parm['overAllVolume']) < 1 || count($parm['callrate']) < 1 )
                        {
                             return json_encode(array("status" => "error", 
                                "message" => "Please Enter Valid overall Volume and rate!"));
                        }
                        
                        $reqParam['country'] = array();
                        
                       
                        
                        foreach($parm['country'] as $key=>$val)
                        {
                            if(!preg_match('/^[a-zA-Z0-9\@\_\-\s]*[A-Za-z][a-zA-Z0-9\@\_\-\s]*$/', $val))
                            {
                                return json_encode(array("status" => "error",
                                        "message" => "Please Select Valid Country Name!"));
                            }
                            else 
                            {
                                $reqParam['country'][] = $val;
                            }
                            
                        }
                        
                        $reqParam['overallVolume'] = array();
                        foreach($parm['overAllVolume'] as $key=>$val)
                        {
                           if(!preg_match('/^((\d+(\.\d *)?)|((\d*\.)?\d+))$/', $val))
                           {
                               return json_encode(array("status" => "error",
                                       "message" => "Please enter valid overall volume!"));
                           }
                           else 
                           {
                               $reqParam['overallVolume'][] = $val;
                           }

                        }
                        
                        
                        $reqParam['callrate'] = array();
                        foreach($parm['callrate'] as $key=>$val)
                        {
                            
                           if(!preg_match('/^((\d+(\.\d *)?)|((\d*\.)?\d+))$/', $val))
                           {
                               return json_encode(array("status" => "error",
                                       "message" => "Please enter valid Call Rate!"));
                           }
                           else 
                           {
                               $reqParam['callrate'][] = $val;
                           }

                        }
                       
                      $messageResponse =  $this->adminTemplate();
                        
                    }
                     
                     $subject = 'Your query to take admin panel on rent';
                     break;
                
        }
        
        
        include 'db_class.php';     
        $table = '<div>';$volDetail='';
        foreach($reqParam as $key=>$value)
        {
            $volDetail='';
            if(is_array($value)) 
            {
                for($i=0;$i<count($value);$i++){
                $volDetail.='<div><span><b>'.$reqParam['country'][$i].'</b></span> :&nbsp;&nbsp; <span>'.$reqParam['overallVolume'][$i].'min </span>&nbsp;&nbsp;&nbsp;&nbsp; <span>'.$reqParam['callrate'][$i]." ".$parm['dealCurrency'].'</span></div><div>&nbsp;</div>';
                }
//                $table.='<div><span><b>'.$key.'</b></span> : </br> <span>';
//               foreach($value as $key=> $val)
//               {
//                   $table.= '&nbsp;&nbsp;'.$val.'&nbsp;&nbsp;';
//               }
//                    $table.='</span></div><div>&nbsp;</div>';
            }
            else
                $table.='<div><span><b>'.$key.'</b></span> - <span>'.$value.'</span></div><div>&nbsp;</div>';
        }
        $table.=$volDetail;
        $table.='</div>';
        
        //$this->sendMail($table , "support@phone91.com");
        
       $response = $this->sendMail($messageResponse , $reqParam['emailId'] ,$subject );
       
        $this->sendMail($table , "support@phone91.com" , 'Reseller Query');
       
        $result = $db_obj->mongo_insert("feedBack",$reqParam);
        
        if(!$result)
        {
            $response = array( "status" => "error" , "message" => "An Error Occoured Please Try Again" );
        }
        else 
        {
            $response = array( "status" => "success" , "message" => $message );
        }
        
        
        
        
        return json_encode($response);
      
    }
    
    
    function sendMail($message , $to , $subject)
    {
        include_once 'Mandrill.php';;
        
        Mandrill::setApiKey("UyYmryeHJCDreWdOvy7RSQ");
        
        
        $request_json["type"] = "messages";
        $request_json["call"] = "send";
        $req["html"] = $message;
        $req["subject"] = $subject;
        $req["from_email"] = "support@phone91.com";
        $req["from_name"] = "Phone91";
        $resTo["email"] = $to;
        $req["to"][] = $resTo;
        $req["track_opens"] = "true";
        $req["track_clicks"] = "true";
        $req["auto_text"] = "true";
        $req["url_strip_qs"] = "true";
        $request_json["message"] = $req;
        
        $final = json_encode($request_json);
        $ret = Mandrill::call((array) json_decode($final));
        
        $arr = get_object_vars($ret[0]);

        if ($arr['status'] == 'sent')
          return 'true';
        else
          return 'false';
    }
    
    
    function adminTemplate()
    {
        
        $mailData = <<<EOF
            <html xmlns="http://www.w3.org/1999/xhtml" style="background:#fff">
            <body style="background:#fff; padding:0; margin:0; font:12px Verdana, Geneva, sans-serif; font-size:14px; color:#999; line-height:22px">
            <!--Main wrapper-->
            <div style="width:625px; margin:0 auto;  background:#fff;">
            <!--Header-->
            <div style="height:5px;background-color:#FFCD53;"><span style="height:5px;background-color:#296FA2; width:100px; display:block"></span></div>
            <!--Mid content-->
            <div>
                <h1 style="color:#296FA2; font-weight:normal; text-align:left">Hey,</h1>
                <div style="padding:20px 0;">
                             We are happy to know that you are interested in getting our Admin panel on rent. On the basis of the details you have shared with us, 
                 one of our representatives will get in touch with you within 24 hours.
                            </div>
            </div>

            <div>In the meantime, find out what's new on Phone91 at  <a href="https://www.facebook.com/phone91"  style="color:#296FA2;  text-decoration:none">Facebook</a>, <a href="https://twitter.com/phone91"  style="color:#296FA2;  text-decoration:none">Twitter</a> and our blog - <a href="http://blog.phone91.com/"  style="color:#296FA2;  text-decoration:none">Phone 91</a>. You never know when you find something interesting. May be a running offer.</div>

            <div style=" font-size:15px; margin-top:20px;">
            Stay closer<br/>
                    Team Phone91
            </div>
            </div>
            <!--//Main wrapper-->
            </body>
            </html>
EOF;
      
        
        return $mailData;
    }
    function resellerTemplate()
    {
        $mailData = <<<EOF

        <html xmlns="http://www.w3.org/1999/xhtml" style="background:#fff">
        <body style="background:#fff; padding:0; margin:0; font:12px Verdana, Geneva, sans-serif; font-size:14px; color:#999; line-height:22px">
        <!--Main wrapper-->
        <div style="width:625px; margin:0 auto;  background:#fff;">
        <!--Header-->
        <div style="height:5px;background-color:#FFCD53;"><span style="height:5px;background-color:#296FA2; width:100px; display:block"></span></div>
        <!--Mid content-->
        <div>
        <h1 style="color:#296FA2; font-weight:normal; text-align:left">Hey,</h1>
        <div style="padding:20px 0;">
                 We are happy to know that you are interested in our Reseller panel. On the basis of the details you have shared with us, one 
        of our representatives will get in touch with you within 24 hours.
                </div>
        </div>

        <div>
        Till then, find out what's new on Phone91 at  <a href="https://www.facebook.com/phone91"  style="color:#296FA2;  text-decoration:none">Facebook</a>, <a href="https://twitter.com/phone91"  style="color:#296FA2;  text-decoration:none">Twitter</a> and our blog - <a href="http://blog.phone91.com/"  style="color:#296FA2;  text-decoration:none">Phone 91</a>. You never know when you find something interesting. May be a running offer.
        </div>

        <div style=" font-size:15px;  margin-top:20px;">
        Stay closer<br/>
        Team Phone91
        </div>
        </div>
        <!--//Main wrapper-->
        </body>
        </html>
EOF;
        return $mailData;
    }
    function contactTemplate()
    {
        $mailData = <<<EOF
                
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" style="background:#fff">
        <body style="background:#fff; padding:0; margin:0; font:12px Verdana, Geneva, sans-serif; font-size:14px; color:#999; line-height:22px">
        <!--Main wrapper-->
        <div style="width:625px; margin:0 auto;  background:#fff;">
        <!--Header-->
        <div style="height:5px;background-color:#FFCD53;"><span style="height:5px;background-color:#296FA2; width:100px; display:block"></span></div>
        <!--Mid content-->
        <div>
        <h1 style="color:#296FA2; font-weight:normal; text-align:left">Hey,</h1>
        <div style="padding:20px 0;">We are glad to hear from you. One of our representatives will get in touch with you shortly.</div>
        </div>

        <div>
        In the meantime, find out what's new on    <a href="https://www.facebook.com/phone91"  style="color:#296FA2;  text-decoration:none">Facebook</a>, <a href="https://twitter.com/phone91"  style="color:#296FA2;  text-decoration:none">Twitter</a> and our blog - <a href="http://blog.phone91.com/"  style="color:#296FA2;  text-decoration:none">Phone 91</a>. You never know when you find something interesting. May be a running offer.
        </div>

        <div style=" font-size:15px;  margin-top:20px;">
        Stay closer<br/>
        Team Phone91
        </div>
        </div>
        <!--//Main wrapper-->
        </body>
        </html>
EOF;
        
        return $mailData;
    }
}


$funObj = new functions();

?>