<?php error_reporting(0); if(session_id()==""){ session_start();}  
class functions 
{
    
    function verifyConfirmation($param)
    {
        $_SESSION['code'] = $param['code'];
        $_SESSION['number'] = $param['number'];
        
        $connectUrl = 'https://voip91.com/action_layer.php?action=verifyConfirmation&number='.$param['number'].'&code='.$param['code'].''; // Do not change

        $ch = curl_init($connectUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);
        
        curl_close($ch);
        
        $response = json_decode($response ,true);
        
         $_SESSION['key'] = $response['key'];
         $_SESSION['userName'] = $response['userName'];
       
        
        //$response['status'] = 'success';
        
        if(!$response || $response['status'] == 'error')
        {
            $response = json_encode(array( "msg" => "Invalid Confirmation Code" , "status" => "error" , "type" => 3 , "contact" => array($param['number'])));
            
            header('Location: http://phone91.com/forget-password.php?error='.$response);
        }
        else 
        {
            $_SESSION['userName'] = 'nidhi@walkover.in';
            
            $response = json_encode(array( "status" => "success" , "type" => 6 ));
            header('Location: http://phone91.com/forget-password.php?error='.$response);
        }
        
    }
    function checkAction($param)
    {
        print_r($param);
        
        die();
    }
    
    function countryArray() 
    {
        $url = "http://voip92.com/isoData.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);

        $string1 = json_decode($data, true);
        for ($i = 0; $i < count($string1); $i++) 
        {
            $country[$string1[$i]['CountryCode']] = $string1[$i]['Country'];
        }
        return $country;
    }
    
    function resetPasword($param)
    {
        
       $connectUrl = 'https://voip91.com/action_layer.php?action=reset_pwd&code='.$_SESSION['code'].'&mobNum='.$_SESSION['number'].'&key='.$_SESSION['key'].'&new_pwd='.$param['new_pwd']; // Do not change

        $ch = curl_init($connectUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $response = json_decode($response , true);
        
        if($response['msgtype'] == 'success')
        {
            $result = json_encode(array("status" => "success" , "type" => 11));
            header('Location: http://phone91.com/forget-password.php?error='.$result);
        }
        else 
        {
            $result = json_encode(array("status" => "success" , "type" => 6 , "msg" => "Plese Enter Another Password"));
            header('Location: http://phone91.com/forget-password.php?error='.$result);
        }
        
    }
    
    
    
    
    
}


$funObj = new functions();

?>