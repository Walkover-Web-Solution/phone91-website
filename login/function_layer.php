<?php
include_once ('../function_layer.php');
//
//
//include_once '../SuperMySQLi.php';
//class fun extends SuperMySQLi{
//    public function __construct() {
////        $this->db = new SuperMySQLi('localhost', 'voipswitchuser', '+4H8ZXcSyWn7CuX*', 'voipswitch');
//        $this->db = new SuperMySQLi('192.168.1.174', 'voip91_switch', 'yHqbaw4zRWrUWtp8', 'voip91_switch');
//    }
//    function clearBrowserCache() 
//    {
//        header("Pragma: no-cache");
//        header("Cache: no-cache");
//        header("Cache-Control: no-cache, must-revalidate"); 
//    }
//	function db_connect() {
//		//$con = mysql_connect("216.245.201.194","voipswitchuser",'+4H8ZXcSyWn7CuX*') or die(" Couldnot connect to the server ");
//		$con = mysql_connect("localhost", "voipswitchuser", '+4H8ZXcSyWn7CuX*') or die("Couldnot connect to the server". mysql_error());
//		mysql_select_db("voipswitch", $con) or die(" Database Not Found ");
//		return $con;
//	}
//        
//        function connecti()
//        {
//            $con = mysqli_connect('localhost', 'voip91_switch', 'yHqbaw4zRWrUWtp8', 'voip91_switch') or die("Couldnot connect to the server".mysqli_connect_error());
//           /* check connection */
//           
//            if(!$con)
//                 die('Connect Error (' . mysqli_connect_errno() . ') '
//                   . mysqli_connect_error());
//                
//           // echo 'Success... ' . mysqli_get_host_info($con) . "\n";
//            return $con;
//        }
//	function login_validate() {
//		if (isset($_SESSION['id']) && strlen($_SESSION['id']) > 0)
//			return 1;
//		else {
//			$_SESSION['login_error'] = "Please proceed with username and password.";
//			return 0;
//		}
//	}
//	function get_currency($id_tariff) {
//		if ($id_tariff == 8) {
//			$cid = 1;
//		} else if ($id_tariff == 7) {
//			$cid = 2;
//		} else if ($id_tariff == 9) {
//			$cid = 3;
//		}
//               
//		$con = $this->connecti();
//		$result = mysqli_query($con,"SELECT name FROM currency_names WHERE id='$cid'") or die('Query error');
//		mysqli_close($con);
//		$cur = mysqli_fetch_assoc($result);		
//		return $currency = $cur['name'];
//	}
//        
//       //functoin to convert amount to particular currency
//        function currencyConvert($from,$to,$amount)
//        {
//            $url = "http://run.taskb.in/phone91/currency/index.php?from=$from&to=$to&amount=$amount"; 	//nedd to change after 1500 request per month
//            $ch=curl_init($url);
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//            $response= curl_exec($ch);
//            curl_close($ch);
//            return $response;
//        }//end of currency convert function
//        
//	function sql_safe_injection($s) {
//		$con = $this->connecti();
//		//check if get_magic_quotes is set or not
//		if (get_magic_quotes_gpc())
//		//remove slashes
//			$s = stripslashes($s);
//		//remove ' from input		
//		return mysql_real_escape_string($s);
//		mysql_close($con);
//	}
////end sql_safe_injection() function
//	function delete_client($id, $type) {
//		$con = $this->connect();
//		if ($id == '') {
//			echo "Invalid Id";
//			$_SESSION['msg'] = "Invalid Id";
//			exit();
//		}
//		$to = 'rahul@hostnsoft.com';
//		$subject = 'Error while deleting client';
//		$message = "Error in phone880 = ";
//		if ($type != 2) {
//			$qry1 = "delete from clientsshared where id_client='" . $id . "' ";
//			$result1 = mysql_query($qry1, $con) or mail($to, $subject, $message . mysql_error());
//			$qry2 = "delete from calls where id_client='" . $row['id_client'] . "' ";
//			$result2 = mysql_query($qry2, $con) or mail($to, $subject, $message . mysql_error());
//			$qry3 = "delete from contact where userid='" . $id . "' ";
//			$result3 = mysql_query($qry3, $con) or mail($to, $subject, $message . mysql_error());
//			$qry4 = "delete from tempcontact where userid='" . $id . "' ";
//			$result4 = mysql_query($qry4, $con) or mail($to, $subject, $message . mysql_error());
//			$qry5 = "delete from payments where id_client='" . $id . "' ";
//			$result5 = mysql_query($qry5, $con) or mail($to, $subject, $message . mysql_error());
//			if ($result1 and $result2 and $result3 and $result4 and $result5) {
//				$_SESSION['msg'] = 'Client Deleted Successfully';
//				$response = 'Client Deleted Successfully';
//			}
//		} else {
//			$sql = "select * from tariffreseller where id_reseller='" . $id . "' ";
//			$res = mysql_query($sql);
//			if (mysql_num_rows($res)) {
//				while ($row = mysql_fetch_array($res)) {
//					$qry1 = "delete from tariffsnames where id_tariff='" . $row['id_tariff'] . "' ";
//					$result1 = mysql_query($qry1, $con) or mail($to, $subject, $message . mysql_error());
//					$qry8 = "delete from tariffs where id_tariff='" . $row['id_tariff'] . "' ";
//					$result8 = mysql_query($qry8, $con) or mail($to, $subject, $message . mysql_error());
//				}
//			}
//			$qry2 = "delete from tariffreseller where id_reseller='" . $id . "' ";
//			$result2 = mysql_query($qry2, $con) or mail($to, $subject, $message . mysql_error());
//			$sqlc = "select * from clientsshared where id_reseller='" . $id . "' ";
//			$resc = mysql_query($sqlc);
//			if (mysql_num_rows($resc)) {
//				while ($row = mysql_fetch_array($resc)) {
//					$qry3 = "delete from contact where userid='" . $row['id_client'] . "' or userid='" . $id . "'";
//					$result3 = mysql_query($qry3, $con) or mail($to, $subject, $message . mysql_error());
//					$qry4 = "delete from tempcontact where userid='" . $row['id_client'] . "' or userid='" . $id . "'";
//					$result4 = mysql_query($qry4, $con) or mail($to, $subject, $message . mysql_error());
//					$qry5 = "delete from payments where id_client='" . $row['id_client'] . "' or id_client='" . $id . "'";
//					$result5 = mysql_query($qry5, $con) or mail($to, $subject, $message . mysql_error());
//					$qry6 = "delete from calls where id_client='" . $row['id_client'] . "' or id_client='" . $id . "'";
//					$result6 = mysql_query($qry6, $con) or mail($to, $subject, $message . mysql_error());
//				}
//			}
//			$qry7 = "delete from clientsshared where id_reseller='" . $id . "' or id_client='" . $id . "'";
//			$result7 = mysql_query($qry7, $con) or mail($to, $subject, $message . mysql_error());
//			if ($result2 and $result7) {
//				$_SESSION['msg'] = 'Client Deleted Successfully';
//				$response = 'Client Deleted Successfully';
//			}
//		}
//		mysql_close($con);
//		return $response;
//	}
////end delete_client() function
//	function add_address_book($name, $number) {
//		$con = $this->connect();
//		$qry2 = "insert into addressbook (id_client,telephone_number,nickname,type) values('" . $_SESSION['userid'] . "','" . $number . "','" . $name . "',32)";
//		$result = mysql_query($qry2, $con) or die('Query error');
//		if ($result)
//			$response = 'Saved Successfully';
//		mysql_close($con);
//		return;
//	}
////end add_address_book() function
//	function save_address_book($id, $name, $number) {
//		$con = $this->connect();
//		$qry2 = "update addressbook set nickname='" . $name . "',telephone_number='" . $number . "' where id_client='" . $_SESSION['userid'] . "' and id_address_book='" . $id . "'";
//		$result = mysql_query($qry2, $con) or die('Query error');
//		if ($result)
//			$response = 'Saved Successfully';
//		mysql_close($con);
//		return;
//	}
////end save_address_book() function
//	function delete_address_book($id) {
//		$con = $this->connect();
//		$qry2 = "delete from addressbook where id_client='" . $_SESSION['userid'] . "' and id_address_book='" . $id . "'";
//		$result = mysql_query($qry2, $con) or die('Query error');
//		if ($result)
//			$response = 'Saved Successfully';
//		mysql_close($con);
//		return;
//	}
////end delete_address_book() function
//        function initiateSession($userid)
//        {            
//            $table='91_userLogin';
//            $this->db->select('*')->from($table)->where("userId = '".$userid."' ");
//            $result = $this->db->execute();
//            if ($result->num_rows > 0) {
//                    $row = $result->fetch_array(MYSQL_ASSOC);                         
//                     extract($row);          //userId,userName,password,isBlocked,type                     
//                     $_SESSION['username'] = $userName;
//                     $_SESSION['id'] = $userId;
//                     $_SESSION['userid'] = $userId;
//                     $_SESSION['authorize'] = $password;
//                     $_SESSION['contact_no'] = '';
////                     $_SESSION['id_tariff'] = $id_tariff;
//                     $_SESSION['client_type'] = $type;
//                     $table='91_personalInfo';
//                     $this->db->select('*')->from($table)->where("userId = '".$userid."' ");
//                     $result = $this->db->execute();
//                     // processing the query result
//                     if ($result->num_rows > 0) {
//                         $row = $result->fetch_array(MYSQL_ASSOC);                             
//                               //var_dump($row);
//                            extract($row);
//                               $_SESSION['name'] = $name;
//                               $_SESSION['sex'] = $sex=1?"Male":"Female";
//                               
//                               //1array(15) { ["slNo"]=> string(1) "2" ["userId"]=> string(5) "30890" ["name"]=> string(5) "Lovey" ["telNo"]=> string(0) "" 
//                               //["age"]=> string(2) "18" [""]=> string(1) "0" ["dob"]=> string(10) "0000-00-00" ["address"]=> string(7) "Indoree"
//                               // ["city"]=> string(6) "Indore" ["zipCode"]=> string(6) "454545" ["state"]=> string(2) "MP" ["country"]=> string(5) "India" 
//                               // ["countryCode"]=> string(2) "91" ["pinCode"]=> string(6) "454545" ["emailId"]=> string(19) "rahul@hostnsoft.com" }
//                     }
//                     
//                     #set tariff id in session 
//                     $table='91_userBalance';
//                     $this->db->select('*')->from($table)->where("userId = '".$userid."' ");
//                     $result = $this->db->execute();
//                     // processing the query result
//                     if ($result->num_rows > 0) {
//                         $row = $result->fetch_array(MYSQL_ASSOC);                             
//                           extract($row);
//                            $_SESSION['id_tariff'] = $tariffId;
//                            $_SESSION['currencyId'] = $currencyId;
//                     }
//                     
//
//     //                $_SESSION['uty'] = $client_type;                       
//            }
//        }
//        function getUserFromEmail($email)
//        {
//            $table='contact';
//            $this->db->select('userid')->from($table)->where("email = '".$email."' ");
//            $result = $this->db->execute();
//            // processing the query result
//            if ($result->num_rows > 0) {
//                    foreach ($result->fetch_array(MYSQL_ASSOC) as $row) {
//                            return $row;
//                    }
//            }
//            else 
//                return false;
//        }
//        
//        function checkEmail($email)
//        {
//	    $userid = $this->getUserFromEmail($email);
//            if($userid)
//            {
//                $this->initiateSession($userid);
//                header("location: /userhome.php");
//                exit();
//            }
//            else
//            {
//                return false;
//                //mail("rahul@hostnsoft.com","checkfbLogin"," not exists ".json_encode($email));
//                //$this->emailSignUp($email);
//                //die();
//            }
//        }
//        
//        function emailSignUp($email)
//        {
//            echo "ehllo";
//        }
//        
//        #modified by sudhir pandey(sudhir@hostnsoft.com)
//        #modified date 17/07/2013
//        #function use for get data of login user 
//        function checkLogin($userid, $pwd)
//	{
//           
//           $con = $this->connecti();
//           $query = "SELECT userId,userName,password,isBlocked,type FROM  91_userLogin WHERE userName='".$userid."' and password='".$pwd."'";
//           $result = mysqli_query($con,$query);
//           mysqli_close($con);
//           return $result;
//            
////		$con = $this->connecti();
////		$login_qry = "select c1.id_client,c1.login,c1.password,id_tariff,c1.client_type,c1.status as status  from clientsshared c1,contact c2 where (c1.login='$userid' AND c1.password='$pwd') OR(CONCAT(c2.cntry_code,c2.contact_no)='$userid' and c2.userid=c1.id_client and c1.password='$pwd' and c2.confirm=1)";
////		$result = mysql_query($login_qry) or die("Can not verify your details. " . mysql_error());		
////		mysql_close($con);
////		return $result;
//	}
//        
//        #modified by sudhir pandey 
//        #modify date 18/07/2013
//        #function use for login user 	
//	function login_user($userid, $pwd, $remember_me) {
//          	$uid='';
//                #check login failed time 
////		 $loginAttampt = $this->checkLoginFailed($userid);
////		if (($loginAttampt > 10)) {			
////			$_SESSION['error'] = "Maximum Number of request exceed.";
////			header("location:index.php");
////			exit();
////		}
//                
//		$result= $this->checkLogin($userid, $pwd);
//		$res = mysqli_num_rows($result);
//		if ($res == '0') {
//			$this->loginFailed($userid); 
//			$_SESSION['error'] = "Sorry Username and Password are not matched. Please Try with proper details.";
//			header("location:index.php");
//		} else {                    
//			$get_userinfo = mysqli_fetch_array($result);
//			//print_r($get_userinfo);
//			if($get_userinfo["isBlocked"]!=1)
//			{
//				$_SESSION['error'] = "Account Blocked.";
//				   header("location: logout.php");
//				   exit();
//			}
//                        
//                        #function call for assign value of session 
//			$this->initiateSession($get_userinfo["userId"]);
//	
//			if ($_SESSION['client_type'] == 1)
//			{
//			    header("location: p91admin/index.php");
//			    $_SESSION['isAdmin'] = 1;
//			}
//			else{
//                            
//                           // var_dump($_SESSION);
//			    header("location: userhome.php");
//                        }
//			if($rememberMe){
//			     setcookie('username', $userid, time()+60*60*24*30);
//			     setcookie('password', $pwd, time()+60*60*24*30);
//			}else{
//			     setcookie('username', $userid,  time() - 100);
//			     setcookie('password', $pwd,  time() - 100);
//			}
//		}
//		mysql_close($con);
//	}
//	function logout() {
//		session_start();
//		session_unset();
//		session_destroy();
//		session_start();
//		$_SESSION['msg'] = "Successfully logged out. Thankyou for using our service";
//		header('Location: index.php');
//	}
//        function is_admin() {   //written by sapna
//            if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1) {
//                return true;
//            }
//            $dbh = $this->connect_db();
//            $sql = "select admin_id from 91_adminUse where admin_id='" . $_SESSION['id'] . "'";
//            $result = mysql_query($sql, $dbh);
//            mysql_close($dbh);
//            if (!$result)
//                die("Unable To Fetch User Data");
//            if (mysql_num_rows($result) > 0) {
//                $_SESSION['isAdmin'] = 1;
//                return true;
//            }
//            else
//                return false;
//        }
//         function check_admin() {
//        $admin = $this->is_admin();
//        if ((!isset($_SESSION['id'])) || !$admin) {
//            return false;
//        }
//        else
//            return true;
//        }
//        function check_reseller() {
//            if (!isset($_SESSION['id']))
//                return false;
//            if ($_SESSION['client_type'] != 2 && $_SESSION['client_type'] != 1 && $_SESSION['client_type'] != 4)
//                return false;
//            else
//                return true;
//        }
//        function check_user() {
//            if (!isset($_SESSION['id']))
//                return false;
//            if ($_SESSION['client_type'] != 3)
//                return false;
//            else
//                return true;
//        }
//        function redirect($url, $permanent=false, $statusCode=303) {
//            if($_SERVER['HTTP_X_REQUESTED_WITH'] === "XMLHttpRequest"){
//                echo "<script>window.top.location.href='$url'</script>";
//            }else{
//                if(!headers_sent()) {
//                    header('location: '.$url, $permanent, $statusCode);
//                } else {
//                    echo "<script>location.href='$url'</script>";
//                }
//                exit(0);
//            }
//        }
//	/* function user_contact()
//	  {
//	  $result=mysql_query("select cntry_code,contact_no,confirm,email from contact where userid='".$_SESSION['id_cl']."'");
//	  if(mysql_num_rows($result)>0)//if details exist
//	  {
//	  while($get_userinfo=mysql_fetch_array($result))
//	  {
//	  if($get_userinfo['confirm']=='1')//and user confirm his/her mobile number
//	  {
//	  $_SESSION['contact_no'] = $get_userinfo['contact_no'];
//	  $_SESSION['email']	 = $get_userinfo['email'];
//	  //echo "Your Number: ".$get_userinfo['cntry_code'].'-'.$get_userinfo['contact_no'];
//	  //echo '<br />Want to change it <a href="update_contact.php" title="Update Your Contact">Edit</a> Now';
//	  }
//	  else if($get_userinfo['confirm']=='0')//if user not confirm their number this will redirect to update contact page.
//	  {
//	  //echo 'Your number is not Confirm.<a href="update_contact.php" title="Confirm Your Contact">Confirm Now</a>';
//	  }
//	  }
//	  }
//	  else if(mysql_num_rows($result)==0)//if usere details not found
//	  {
//	  echo 'Your number is not register.<a href="update_contact.php" title="Update Your Contact">Add Now</a>';
//	  }
//	  }
//	 */
//        //function to sign_up user ,get all details for user and save to database,function also contain code to mail user
//	function sign_up($repara) 
//        {
//            $addClient = 0;
//            if ($repara['update_detail'] == 1)
//                    $addClient = 1;
//           
//            //get user details
//            $username = $this->sql_safe_injection($repara['username']);
//            $pwd = $this->sql_safe_injection($repara['password']);
//            $codeL = $this->sql_safe_injection($repara['code']);
//            $code = substr($codeL, 1, strlen($codeL) - 1);
//            $phone = $this->sql_safe_injection($repara['mobileNumber']);
//            $email = $this->sql_safe_injection($repara['email']);
//            $cur = $this->sql_safe_injection($repara['currency']);
//            $client_type = $this->sql_safe_injection($repara['client_type']);
//            //validation for fields
//            if (strlen($username) < 1 || strlen($pwd) < 1 || strlen($code) < 1 || strlen($phone) < 1 || strlen($email) < 1) 
//            {
//                echo 'Incomplete From';
//                exit();
//            }
//            
//             //to change tariff_id acc to currency
//            if ($cur == 1) 
//            {
//                $tariff_id = 8;
//                $id_reseller = 22;
//		$user_balance = 0.5000;
//            } 
//            else if ($cur == 2) 
//                {
//                    $tariff_id = 7;
//                    $id_reseller = 20;
//			$user_balance = 25.0000;
//                } 
//                else if ($cur == 3) 
//                    {
//                        $tariff_id = 9;
//                        $id_reseller = 11;
//			$user_balance = 2.0000;
//                    }
//                 
//                 //remove zero from starting of number if exist
//		if (substr($phone, 0, 1) == 0)
//			$phone = substr($phone, 1, strlen($phone) - 1);
//		//get contact with country code
//		$contact = $code . $phone;
//                //create connection
//		$con = $this->connect();
//		$result = mysql_query("select login from clientsshared where login='$username'");
//		$res = mysql_num_rows($result);
//                //check if username already exists
//		if ($res != 0) 
//                {
//                    echo "This User ID already exists";
//                    exit();
//		} 
//                else 
//                {
//                    //to check if phoneno existes or not
//                    $result = mysql_query("select userid from contact where contact_no='$phone' and cntry_code='$code' and confirm='1'");
//                    $res = mysql_num_rows($result);
//                     
//                    //if phone number exists
//                    if ($res != 0 && $addClient != 1) 
//                    {
//                            echo "Phone number already in use by another user";
//                            exit();
//                    } 
//                    else //if new phone number
//                    {  
//                        //code to check email exists or not,for temp_contact_table
//                        $emailResultTemp = mysql_query("SELECT userid FROM temp_contact_email WHERE email='$email'") or die(mysql_error()); 
//                        $countEmail = mysql_num_rows($emailResultTemp);
//                        //for contact table
//                        $emailResultCont = mysql_query("SELECT userid FROM contact WHERE email='$email'") or die(mysql_error());
//                        $emailCountCont = mysql_num_rows($emailResultCont);
//                        //check if count not zero,means email address already exists
//                        if($countEmail != 0 or $emailCountCont != 0 and $addClient !=1)
//                        {
//                            echo "This email address already registered";
//                            exit();
//                        }
//                        else//if new email
//                        {
//                            if ($addClient == 1) 
//                            {
//                                $pwd = $repara['pwd'];
//                                $user_balance = $repara['balance'];
//                                $result = mysql_query("select id_tariff,id_currency from clientsshared where id_client='$_SESSION[id]'");
//                                $resellerDetail = mysql_fetch_array($result);
//                                $tariff_id = $resellerDetail['id_tariff'];
//                                $cur = $resellerDetail['id_currency'];
//                                $id_reseller = $_SESSION['id'];
//                                /* include_once("classes/profile_class.php");
//                                  $res_bal=$pro_obj->getUserBalance($id_reseller);//from new ms_user_balance table
//                                  if($res_bal<$user_balance)
//                                  $user_balance=0;
//                                  if(!$pro_obj->check_empty($res_bal,''))
//                                  {
//                                  echo "Unable To Get Your Balance";
//                                  exit();
//                                    }
//                                    $newUserBal=$res_bal-$user_balance;
//                                    $pro_obj->updateUserBalance($id_reseller,$newUserBal); */
//                          } 
//                            else 
//                            {
//                //                $user_balance = 0.5000;
//				$id_reseller = 30159;
//                            }
//                          
//                            $query = "insert into clientsshared(login,password,type,id_tariff,account_state,tech_prefix,id_reseller,type2,type3,id_intrastate_tariff,id_currency,codecs,primary_codec,client_type) values('$username','$pwd',45220371,'$tariff_id','$user_balance',CONCAT('SD:;ST:;DP:;TP:;CP:!',$code,$phone,';SC:'),'$id_reseller',1,0,-1,'$cur',12,4,'$client_type')";
//                            $result = mysql_query($query) or die(mysql_error());
//                            if (!$result)
//                                mail("rahul@hostnsoft.com", "Phone91 function_layer clientsshared query fail", "query " . $query . " Error " . $error);
//                            if ($result) 
//                            {
//                                $userid = mysql_insert_id();
//                                $pwd = $this->generatePassword();
//                                $tempsql = "insert into tempcontact(userid,contact_no,email,cntry_code,confirm_code,confirm) values('$userid','$phone','$email','$code','$pwd','0')";
//                                $tempentry = mysql_query($tempsql) or $error = (mysql_error());
//                                if (!$tempentry)
//                                      mail("rahul@hostnsoft.com", "Phone91 function_layer tempcontact query fail", "query " . $tempsql . " Error " . $error);
//                                $regi_sql = "insert into register_info(userid) values('$userid')";
//                                $regi_entry = mysql_query($regi_sql) or $error = (mysql_error());
//                                if (!$regi_entry)
//                                        mail("rahul@hostnsoft.com", "Phone91 function_layer register query fail", "query " . $regi_sql . " Error " . $error);
//                                $emailCodeGen = $this->generatePassword();
//                                $emailCode=  base64_encode($emailCodeGen);
//                                $temp_email_sql = "insert into temp_contact_email(userid,email,confirm_code,confirm) values('$userid','$email','$emailCodeGen','0')";
//                                $temp_email_result = mysql_query($temp_email_sql) or $temp_email_error = (mysql_error());
//                                if(!$temp_email_result)
//                                        mail("rahul@hostnsoft.com", "Phone91 function_layer tempcontact query fail", "query " . $tempsql . " Error " . $temp_email_error);
//                                if ($addClient != 1) 
//                                {
//                                    //Assign Variables for sending sms to user
//                                    $d['sender'] = "Phone91";
//                                    $d['message'] = "you are successfully registered your username is: " . $username . " and confirmation-code is: " . $pwd . " Please recharge to start using this account."; // sms text
//                                    $d['mobiles'] = $contact;
//                                    //for 91 user
//                                     $nine['sender'] = "Phonee";
//                                    $nine['mobiles'] = $phone;
//                                    $nine['message'] = "you are successfully registered your username is " . $username . " and confirmation-code is " . $pwd . " Please recharge to start using this account."; // sms text
//                                    //Call function
//                                    if ($code == "91")
//                                            $this->SendSMS91($nine);
//                                    else
//                                            $this->SendSMSUSD($d);   
//
//                                    $this->mobile_verification_api($contact, $pwd);
//                                }
//                                   $mailData=<<<EOF
//<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
//<html xmlns="http://www.w3.org/1999/xhtml" style="background:#ddd">
//<body style="background:#ddd; width:100%;">
//<div style="width:625px; margin:0 auto;  background:#fff;color:#000">
//<!---------------header-------------------->
//<div class="wrap"><div style="height:8px;background-color:#00B0F0;"></div></div>
//<div id="header" align="center">
//    <div class="wrap bgw">
//    <div id="head1" class="grayclr p20 f14"><h1 class="mar0">Thank you <span style="color:#00B0F0;">$username</span> for Signing Up at</h1></div>
//    <div id="head2" class="black "><h2 style="font-size:120px; margin:0;padding:0;">Phone<span style="color:#00B0F0;">91</span></h2></div>
//    <div id="hcont" style="padding:20px;">
//                    <span style="font-size:16px; color:#555;">We are an International voice calling solutionsprovider. You are now connected with the Company thatsends quality Voice <strong style="color:#000;">on 150+ telecom operators.</strong></span>
//     </div>
//</div>
//</div>
//<!----------------main container-------------------->
//<div id="main">
//    <div class="wrap">
//    <div style="border-top:1px solid #00B0F0; border-bottom:1px solid #00B0F0; color:#fff; text-align:left;">
//                    <div id="mlink" style="background-color:#00B0F0; padding:20px; margin:1px 0;">
//            <h2 style="margin:0;padding:0; font-size:24px;">Thanks a lot for choosing us! Please confirm your Email ID by clicking the link given below.</h2>
//            <div id="link"><a href="https://voip91.com/verify_email.php?email=$email&confirmatioCode=$emailCodeGen" style="color:#000; font-size:16px;">Confirm</a></div>
//                            <div style="margin:0;padding:0; margin-top:20px;">Or use this confirmation code   <span style="color:#000;">$emailCodeGen</span>    at the site from you have signup.</div>
//        </div>
//    </div>
//    </div>
//</div>
//<!----------------queries container-------------------->
//<div id="queries">
//            <div class="wrap">
//            <div id="quriBox" style="padding:20px;">
//                            <div id="payh1" class="marb10"><h2 class="mar0">For Support :</h2></div>
//                    <div id="qcont">
//                    <span style="margin:0;padding:0; font-size:18px; color:#777;">For any queries, please contact on below details and one of our friendly staff will reply you very soon.</span>
//                </div>
//                <div id="qsupport">
//                    <div class="emal f14"><span class="grayclr ebox">Gtalk IM</span> <span class="ecbox">: support@phone91.com</span></div>
//                    <div class="emal f14"><span class="grayclr ebox">Email</span> : <a href="#" class="black"><span class="ecbox" style="text-decoration:underline;">support@phone91.com</span></a></div>
//                </div>
//        </div>
//    </div>
//</div>
//<!----------------payment container-------------------->
//<div id="payment">
//            <div class="wrap">
//    <div id="payCon" style="padding:20px;">
//                    <div id="payh1" class="marb10"><h2 class="mar0">For Payment :</h2></div>
//            <div style="margin:0;padding:0; font-size:18px; color:#777;">Online payment</div>
//            <div class="grayclr lh f14 marb10">Login to your account, Click on "Pay Online", fill your billing details, choose the payment type and a recharge amount, and Click suitable online payment option from Paypal, debit card (ATM), Credit card orMooneybookers(Skrill). After successful payment, your account will be recharged automatically.</div>
//            <div><strong>*We suggest that you should use Google Chrome for browsing our website and making payment.</strong></div>
//    </div>
//    </div>
//</div>
//<!----------------team container-------------------->
//<div id="team">
//    <div class="wrap">
//    <div id="teambox" style="padding:20px;">
//            <div id="thead"><span class="bold f12 ">Regards,</span><br><strong><span class="bold">Phone<span class="bclr">91 </span>Team</span></strong></div>
//        <div id="icon" style="padding:15px 0px;"><span class="f14 bold">For updates of our services,follow us on:</span>
//                    <br />
//                    <a href="https://www.facebook.com/phone91" class=" bold f14" style="color:#3B5998; margin-right:20px; font-weight:bold; font-size:18px; text-decoration:none;">Facebook</a>
//                    <a href="https://twitter.com/phone91" class=" bold f14" style="color:#37B9E3; text-decoration:none; font-weight:bold; font-size:18px;">twitter</a></div>
//    </div>
//</div>
//</div>
//<!----------------Footer container-------------------->
//<div id="fbox">
//    <div class="wrap">
//  <div style="padding-top:5px; background-color:#FFF;">
//    <div id="footer" style="padding:20px; background:#f5f5f5;">
//                <div class="privacy marb10">
//                    <h2>Privacy Statement</h2>
//<span class="f14 grayclr lh">We are happy to have you on our list, and since we want to keep you all to ourselves, we never share your Email address with anyone.</span>
//                </div>
//                <div class="privacy marb10">
//                    <h4 class="mar0 marb10 f14">Manage Your Subscription</h4>
//<span class="f14 grayclr lh">You are subscribed to <a href="https://voip91.com/">phone91.com</a> with the email address: $email</span>
//                </div>
//                <div class="privacy">
//                    <h4 class="mar0 marb10 f14">Unsubscribe or change your subscription</h4>
//                </div>
//                <div id="copy"  style="margin-top:20px;">
//                    <span class="f12">Copyright © 2013 <a href="https://voip91.com/" class="f14">phone91.com </a>, All rights reserved.</span>
//                </div>
//      </div>
//    </div>
//</div>
//</div>
//<div class="wrap"><div style="height:8px;background-color:#00B0F0;"></div></div>
//</div>
//</body>
//</html>
//EOF;
//                             require(CLASS_DIR.'awsSesMailClass.php');
//                             $sesObj = new awsSesMail();
//                             $from="support@phone91.com";
//                             $subject="Welcome to Phone91";
//                             $to=$email;
//                             $message=$mailData;
//                              $response= $sesObj->mailAwsSes($to, $subject, $message, $from);
//                              
//                              
////                               $request_json["type"]="messages";
////                              $request_json["call"]="send";
////                              $req["html"]=$mailData;
////                               $req["subject"]="Welcome to Phone91";
////                               $req["from_email"]= "support@phone91.com";
////                               $req["from_name"]=  "Phone91";
////                               $resTo["email"]= $email;			   
////                               $resTo["name"]= $username;
////                               $req["to"][]=$resTo;
////                               $req["track_opens"]=  "true";
////                               $req["track_clicks"]=  "true";				  
////                               $req["auto_text"]=  "true";				  
////                               $req["url_strip_qs"]=  "true";	
////                               $request_json["message"]=$req;
////                               $final= json_encode($request_json);
////                                    $ret = Mandrill::call((array) json_decode($final));
//                                    //if(!$ret->status=="sent")
//                                    //	mail("rahul@hostnsoft.com", "Phone91 function_layer maindrill  fail", "query " . print_r($ret,1) . " Error " );
//                                    /* $from_email = "info@callplz.com";
//                                      $headers .= "X-Priority: 1\n";
//                                      $headers .= "X-MSMail-Priority: High\n";
//                                      $headers .= "Return-Path: <$from_email>\n";
//                                      $headers .= "Reply-To: <".$from_email.">\n";
//                                      $headers .= "From:  <" . $from_email . ">\n";
//                                      $headers .= "X-Sender: <$from_email>\n";
//                                      $headers .= "X-Mailer: PHP/" . phpversion();
//                                      $to="rahulchordiya@gmail.com";
//                                      mail($to,$subject,$query.$nine['mobiles'].$nine['message'].$userid.$tempentry.$result,$headers); */
//                                    echo "Successfully Register Password send to mobile.";
////					header("location:firsttimeuser.php?username='".$_REQUEST['username']."'");
//                            }
//                         }
//                    }
//		}
//		mysql_close($con);
//	}
//        
//	function generatePassword() {
//		$length = 4;
//		$password = "";
//		$possible = "0123456789";
//		$i = 0;
//		while ($i < $length) {
//			$char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
//			if (!strstr($password, $char)) {
//				$password .= $char;
//				$i++;
//			}
//		}
//		return $password;
//	}
//	function SendSMSUSD($tempparam) {
//		$connect_url = "http://world.msg91.com/sendhttp.php"; // Do not change
//		$param["user"] = "phone91"; // beep7 profile ID
//		$param["password"] = "Phone91Int"; // beep7 password
//		if (isset($tempparam['sender']) && strlen($tempparam['sender']) > 0)
//			$param["sender"] = $tempparam['sender']; //"919893385095";
//		else
//			$param["sender"] = "919893385095";
//		//$param["ISFlash"]="0";
//		$param["mobiles"] = $tempparam['mobiles'];
//		$param["message"] = $tempparam['message'];
//		/* $connect_url = "https://www.infobip.com/Addon/SMSService/SendSMS.aspx"; // Do not change
//		  $param["user"] = "HostNSoft"; // beep7 profile ID
//		  $param["password"] = "6Ut54DD"; // beep7 password
//		  $param["sender"]="919893385095";
//		  $param["ISFlash"]="0";
//		  $param["GSM"]=$tempparam[to];
//		  $param["SMSText"]=$tempparam[text]; */
//		$request = '';
//		foreach ($param as $key => $val) {
//			$request.= $key . "=" . urlencode($val);
//			$request.= "&";
//		}
//		$request = substr($request, 0, strlen($request) - 1);
//		$url2 = $connect_url . "?" . $request;
//		$ch = curl_init($url2);
//		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//		$curl_scraped_page = curl_exec($ch);
//		curl_close($ch);
//		return $curl_scraped_page;
////		$from_email = "info@msg91.com";
////		$headers .= "X-Priority: 1\n";
////		$headers .= "X-MSMail-Priority: High\n";
////		$headers .= "Return-Path: <$from_email>\n";
////		$headers .= "Reply-To: <" . $from_email . ">\n";
////		$headers .= "From:  <" . $from_email . ">\n";
////		$headers .= "X-Sender: <$from_email>\n";
////		$headers .= "X-Mailer: PHP/" . phpversion();
////		$to = "rahul@hostnsoft.com";
////		mail($to, $subject, $url2 . $_SESSION['id_cl'], $headers);
//	}
//	//SEND SMS FOR USD
//	function SendSMSUSDold($param) {
//		$connect_url = "https://203.142.18.146:8080/server/sendsms/"; // Do not change
//		$param["login"] = "callplz1"; // beep7 profile ID	
//		$param["password"] = "qazwsxedc"; // beep7 password
//		$param["clientid"] = "7PBq7PB8";
//		$param["sender"] = "Phone91";
//		$param["message_type"] = "TEXT";
//		$param["receiver"] = $param[to];
//		$param["message"] = $param[text];
//		foreach ($param as $key => $val) {
//			$request.= $key . "=" . urlencode($val);
//			$request.= "&";
//		}
//		$request = substr($request, 0, strlen($request) - 1);
//		$url2 = $connect_url . "?" . $request;
//		$ch = curl_init($url2);
//		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//		$curl_scraped_page = curl_exec($ch);
//		curl_close($ch);
//		return $curl_scraped_page;
//	}
//        //function to send sms
//	//Send SMSto 91
//	function SendSMS91($tempparam) 
//        {
//		//mail("indoreankita@gmail.com","send sms",$tempparam['mobiles']);
//		$connect_url = "http://india.msg91.com/sendhttp.php"; // Do not change
//                //set parameters to send
//		$param["user"] = "phone91"; // beep7 profile ID
//		$param["password"] = "Phone91-Passw0rd"; // beep7 password
//		if ($tempparam['sender'] != "")
//                    $param["sender"] = $tempparam['sender'];
//		else
//                    $param["sender"] = "Phonee";
//		$param["mobiles"] = $tempparam['mobiles'];
//		$param["message"] = $tempparam['message'];
//		$request = '';
//                //set request parameter
//		foreach ($param as $key => $val) 
//                {
//                    $request.= $key . "=" . urlencode($val);
//                    $request.= "&";
//		}
//                
//                //remove last '&' character
//		$requestComplete = substr($request, 0, strlen($request) - 1);
//                //prepare url for initialize
//		$preUrl = $connect_url . "?" . $requestComplete;
//               
//		$ch = curl_init($preUrl);
//		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//		$curl_scraped_page = curl_exec($ch);
//                //check ,if response false then show curl error
//                if ($curl_scraped_page === FALSE)
//                {
//                   
//                   die(curl_error($ch));
//                }
//                
//		curl_close($ch);
//		return $curl_scraped_page;
//	}
//        
//	function check_user_avail($username = NULL) 
//        {
//            if(isset($_REQUEST['username']))
//		$username = $this->sql_safe_injection($_REQUEST['username']);
//		//echo "select login from clientsshared where login='$username'";
//            $result = mysql_query("select login from clientsshared where login='$username'");
//            $res = mysql_num_rows($result);
//            if ($res != 0) 
//            {
//                return 0; //echo "Sorry username already in use";
//                exit();
//            } 
//            else 
//            {
//                return 1;
//                exit();
//            }
//	}
//	function check_email_avail($email) 
//        {
//            if(isset($email))
//                $email = $this->sql_safe_injection($email);
//		//echo "select login from clientsshared where login='$username'";
//            $sql = "SELECT email FROM contact WHERE email='".$email."' AND confirm=1";
//            $result = mysql_query($sql);
//            $res = mysql_num_rows($result);
//            if ($res != 0) 
//            {
//                return 0; //echo "Sorry username already in use";
//                exit();
//            } 
//            else 
//            {
//                return 1;
//                exit();
//            }
//	}
//	function check_rate($code) {
//		$prefix = $this->sql_safe_injection($code);
//		//echo "select login from clientsshared where login='$username'";
//		$dbh = $this->connect();
//		$search_qry = "select description,voice_rate,prefix from tariffs where prefix like '" . $prefix . "%'  and id_tariff='8'";
//		//	$search_qry="select login from clientsshared where login like '".$q."%'";
//		$exe_qry = mysql_query($search_qry) or die(mysql_error());
//		if (mysql_num_rows($exe_qry) > 0) {
//			while ($res = mysql_fetch_assoc($exe_qry)) {
//				$rate = $res['voice_rate'];
//				$country = $res['description'] . ' ' . $res['prefix'];
//				echo '<tr>                        
//            <td>' . $country . '</td>
//			<td>' . $rate . ' USD</td>            
//            </tr>
//            ';
//				//return "";			
//			}
//		} else {
//			echo "0";
//		}
//		mysql_close($dbh);
//	}
//        
//        #function to verify confirmation code
//        #function return 1 if code exist in any table and return 0 if not exist in both table contact and tempcontact
//        #author "ankit" <ankitpatidar@hostnsoft.com> on 4/3/2013
//        function verifyCode($code)
//        {
//            //query to check code exist in contact table
//            $contactQ ="SELECT userid FROM contact WHERE confirm_code='$code'";
//            $con = $this->connect();//create connection to database
//            $result = mysql_query($contactQ) or die(mysql_error());
//            $count = mysql_num_rows($result);
//            $resultArr = mysql_fetch_array($result);
//            $userid = $resultArr["userid"];
//           
//            //check if row exist or not
//            if($count != 0)
//            {
//                $flag = $userid;
//            }
//            else //check in tempcontact table code exist or not
//            {
//                $tempContQ = "SELECT userid FROM tempcontact WHERE confirm_code='$code'";
//                $resultTemp = mysql_query($tempContQ) or die(mysql_error());
//                $countTemp = mysql_num_rows($resultTemp);
//                $resultArrTemp = mysql_fetch_array($resultTemp);
//                $userid = $resultArrTemp["userid"];
//
//                //set value of flag according to countTemp value
//                if($countTemp != 0)
//                {
//                    $flag = $userid;
//                }
//                else
//                    $flag = 0;
//            }
//            mysql_close($con);//close connection
//            return $flag;
//        }//end of verifyCode function
//       
//        #function to send confirmation code via sms or call
//        function forget_password($username,$smsCall) 
//        {
//            /*
//             * @para $username: it may be username or mobile number
//             * @para $smsCall: it is clicked button text SMS or CALL
//             * @last updated by "ankit" <ankitpatidar@hostnsoft.com> on 4/3/2013
//             */
//            //create connection to database
//            $con = $this->connect();
//            $uid = $username;
//            //if uid numeric,
//            if (is_numeric($uid)) 
//            {
//                $contact_number = $username;
//                $contactQ = "SELECT userid,contact_no,cntry_code FROM contact WHERE CONCAT(cntry_code,contact_no) LIKE '%" . $contact_number . "%'";
//                $result = mysql_query($contactQ) or die("Error");
//                if (mysql_num_rows($result) > 0) 
//                {
//                        $confirm = 1;
//                        $get_userinfo = mysql_fetch_array($result);
//                } 
//                else 
//                {
//                    $confirm = 0;
//                    $result = mysql_query("SELECT userid,contact_no,cntry_code FROM tempcontact WHERE CONCAT(cntry_code,contact_no) LIKE '" . $contact_number . "'") or die("Error ");
//                        $get_userinfo = mysql_fetch_array($result);
//                }
//                //get required value
//                $uid = $get_userinfo[userid];
//
//            }//end of if for numeric uid
//            
//            if (strlen($username) > 1 || strlen($uid) > 1) 
//            {
//                    $sql = "select login,id_client,password from clientsshared where login='$username' or id_client='$uid'";
//                    $result = mysql_query($sql) or die("Error while processing");
//                    $res = mysql_num_rows($result);
//                    if ($res == 0) 
//                    {
//                            $show_msg = "Sorry user with this username or id not found.";
//                    } else 
//                    {
//                            $get_userinfo = mysql_fetch_array($result);
//                            $uid = $get_userinfo[id_client];
//
//                            $confirm_code = $this->generatePassword();
//                            //update code in tables
//                            mysql_query("UPDATE contact SET confirm_code='$confirm_code' WHERE userid='" . $uid . "'");
//                            mysql_query("UPDATE tempcontact SET confirm_code='$confirm_code' WHERE userid='" . $uid . "'");
//
//                            $result = mysql_query("select contact_no,cntry_code from contact where userid='" . $uid . "'") or die("Error " . mysql_error());
//                            if (mysql_num_rows($result) > 0) 
//                            {
//                                    $get_userinfo = mysql_fetch_array($result);
//                                    $contact_no = $get_userinfo[contact_no];
//                                    
//                                    if (strlen($contact_no) < 8) 
//                                    {
//                                            $temp_flag = 1;
//                                    }
//                                    $code = $get_userinfo[cntry_code];
//                                    $contact = $code . $contact_no;
//
//                                    //Assign Variables for sending sms to user
//                                    if($smsCall == "SMS")
//                                    {
//                                        $msg = "Enter this confirmation code " . $confirm_code . " to reset your password."; // sms text for usd					                                        
//                                        $d['sender'] = "Phone91";
//                                        $d['message'] = $msg;
//                                        $d['mobiles'] = $contact;
//                                        //Assign Variables for sending sms to 91 user
//                                        $nine['sender'] = "Phonee";
//                                        $nine['mobiles'] = $contact_no; // mobile number without 91
//                                        $nine['message'] = $msg;
//                                        //Call function
//                                        if ($code == "91")
//                                                $this->SendSMS91($nine);
//                                        else
//                                                $this->SendSMSUSD($d);
//
//                                    }
//                                    else if($smsCall == "CALL")
//                                    {
//                                        $this->mobile_verification_api($contact,$confirm_code);
//                                    }
//                                    $show_msg = "confirmation code has been sent to your mobile";
//                            }
//                            else if (mysql_num_rows($result) == 0 || $temp_flag == 1)//if username or number not found in contact table then search in tempcontact table 
//                            {
//                                    $result = mysql_query("select contact_no,cntry_code from tempcontact where userid=" . $uid) or die("Error");
//                                    //if row found
//                                    if (mysql_num_rows($result) > 0) 
//                                    {
//                                            $get_userinfo = mysql_fetch_array($result);
//                                            $contact_no = $get_userinfo[contact_no];
//                                            $code = $get_userinfo[cntry_code];
//                                            $contact = $code . $contact_no;
//                                            //if SMS button clicked
//                                            if($smsCall == "SMS")
//                                            {
//                                                //Assign Variables for sending sms to user
//                                                $d['sender'] = "Phone91";
//                                                $d['message'] = "Enter this confirmation code " . $confirm_code . " to reset your password."; // sms text for usd
//                                                $d['mobiles'] = $contact;
//                                                //Assign Variables for sending sms to 91 user
//                                                $nine['sender'] = "Phonee";
//                                                $nine['mobiles'] = $contact_no; // mobile number without 91
//                                                $nine['message'] = "Enter this confirmation code " . $confirm_code . " to reset your password."; // sms text for usd
//                                                //Call function
//                                                if ($code == "91")
//                                                        $this->SendSMS91($nine);
//                                                else
//                                                        $this->SendSMSUSD($d);
//                                            }
//                                            else if($smsCall == "CALL")//if CALL button clicked
//                                            {
//                                                 $this->mobile_verification_api($contact,$confirm_code);
//                                            }
//                                            $show_msg = "confirmation code has been sent to your mobile";
//                                    }//end of if for rows of tempcontact table
//                                    else 
//                                    {
//                                            $show_msg = "This User ID does not exists";
//                                    }
//                            }//end of else if for search username or number in tempcontact
//                    }//end of else (if username or uid found in clientsshared table)
//            }//end of if
//            mysql_close($con);//close db connection
//            return $show_msg;
//        }//end of function forget_password1 function 
//        
//        
//	function user_balance() {
//		$con = $this->connect();
//		$result = mysql_query("select id_client,account_state,id_tariff from clientsshared where login='$_SESSION[username]'");
//		$get_userinfo = mysql_fetch_array($result);
//		$balance = $get_userinfo['account_state'];
//		$id_cl = $get_userinfo['id_client'];
//		$id_tariff = $get_userinfo['id_tariff'];
//		$_SESSION['id_cl'] = $id_cl;
//		return $balance;
//		mysql_close($con);
//	}
//        
//        //function to reset password
//        function resetPass($new_pwd,$userId)
//        {
//            /*
//             * @para $new_pwd:new password
//             */
//            $pass = $this->sql_safe_injection($new_pwd);
//            $query = "UPDATE clientsshared SET password='".$pass."' WHERE id_client='".$userId."'";
//            if(isset($userId))
//            {
//                $con = $this->connect();
//                $result = mysql_query($query) or (mysql_error());
//                mysql_close($con);
//            }
//            if ($result) 
//                  return 1;//echo "password changed successfully";
//            else 
//                  return 2; //"weak password please chose another one.";
//            
//        }
//        
//        //modified by:Balachandra<balachandra@hostnsoft.com>
//        //date: 29/072013
//	function change_pwd($curr_pwd, $new_pwd)
//        {
//           #mysqli connection  
//           $con=$this->connecti();
//           
//           #getting the session userid
//           $userid = $_SESSION['userid'];
//           
//           #get the value of new password by post method 
//           $new_pwd = $_POST['new_pwd'];
//           
//           #get the value of current password by post method 
//           $curr_pwd = $_POST['curr_pwd'];
//           
//           #$table name of the table in database
//           $table = '91_userLogin';
//           
//           #access password by database of the current user
//           $qury=$this->db->select('password')->from($table)->where("userId = '" .$userid . "'");
//           $this->db->getQuery();
//           
//           #execute the query
//           $result = $this->db->execute($qury); 
//          
//           #fetching the array element and putting in a varible $pwd
//           $pwd=mysqli_fetch_array($result);
//           
//           #store the particular column data
//           $pwd1=$pwd['password'];
//           
//           #check curr_pwd is equal to database user password
//           if ($pwd1 != $curr_pwd) 
//              { 
//                #echo "Please enter correct password";
//                return json_encode(array('msgtype'=>'error','msg'=>'Please Enter Correct Password'));
//              } 
//           else 
//              {
//                #data to pass in update command that is new password
//                $data=array("password"=>"$new_pwd");
//                
//                #update the table by new password corresponding to the userid
//                $query=$this->db->update($table,$data)->where("userId = '".$userid."' "  );
//                
//                #get the query sentence
//                $this->db->getQuery($query);
//                
//                #execute the query
//                $result1 = $this->db->execute($query);
//                
//                #if query executed then
//                if ($result1) 
//                    {
//                    #echo "password changed successfully"
//                     return json_encode(array('msgtype'=>'success','msg'=>'Password Changed Successfully'));
//                    } 
//                    #if query is not successfull    
//                else{
//                     #weak password please chose another one.
//                    return json_encode(array('msgtype'=>'error','msg'=>'Password Is Too Weak'));;
//	            }
//	      }
//		mysqli_close($con);
//	}
//        
//	function getEmailid(){
//		$sql = "select email from contact where userid=" . $_SESSION['id'] . "";
//		$con = $this->connect();
//		$result = mysql_query($sql) or die("Error while loading details. " . mysql_error());
//		$get_userinfo = mysql_fetch_row($result);
//                $email = $get_userinfo[0];
//		mysql_close($con);
//		if ($email == ''){
//			return 0;
//		}
//		else{
//			return $email;
//		}
//	}
//        function getTempConfirm(){
//                $sql = "select confirm from temp_contact_email where userid=" . $_SESSION['id'] . "";
//                $con = $this->connect();
//                $result = mysql_query($sql) or die("Error while loading details. " . mysql_error());
//                $get_userinfo = mysql_fetch_row($result);
//                $confirm = $get_userinfo[0];
//                mysql_close($con);
//                return $confirm;
//        }
//	function getTempEmailid(){
//                $sql = "select email from temp_contact_email where userid=" . $_SESSION['id'] . "";
//                $con = $this->connect();
//                $result = mysql_query($sql) or die("Error while loading details. " . mysql_error());
//                $get_userinfo = mysql_fetch_row($result);
//                $email = $get_userinfo[0];
//                mysql_close($con);
//                if ($email == ''){
//                        return 0;
//                }
//                else{
//                        return $email;
//                }
//        }
//	function isValidEmail($email){
//    		return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email);
//	}
//	function send_verification_mail($new_emailid, $pwd)
//        {
//             //code to create mail content   
//             $mailData=<<<EOF
//<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
//<html xmlns="http://www.w3.org/1999/xhtml" style="background:#ddd">
//<body style="background:#ddd; width:100%;">
//<div style="width:625px; margin:0 auto;  background:#fff;color:#000">
//<!---------------header-------------------->
//<div class="wrap"><div style="height:8px;background-color:#00B0F0;"></div></div>
//<div id="header" align="center">
//	<div class="wrap bgw">
//    	
//        
//        <div id="head2" class="black "><h2 style="font-size:120px; margin:0;padding:0;">Phone<span style="color:#00B0F0;">91</span></h2></div>
//        
//        <div id="hcont" style="padding:20px;">
//        		<span style="font-size:16px; color:#555;">We are an International voice calling solutionsprovider. You are now connected with the Company thatsends quality Voice <strong style="color:#000;">on 150+ telecom operators.</strong></span>
//         </div>
//    </div>
//</div>
//<!----------------main container-------------------->
//<div id="main">
//        <div class="wrap">
//        <div style="border-top:1px solid #00B0F0; border-bottom:1px solid #00B0F0; color:#fff; text-align:left;">
//        		<div id="mlink" style="background-color:#00B0F0; padding:20px; margin:1px 0;">
//            	<h2 style="margin:0;padding:0; font-size:24px;">Please confirm your Email ID by clicking the link given below.</h2>
//                <div id="link"><a href="http://voip91.com/verify_email.php?email=$new_emailid&confirmatioCode=$pwd" style="color:#000; font-size:16px;">Confirm</a></div>
//				<div style="margin:0;padding:0; margin-top:20px;">Or use this confirmation code   <span style="color:#000;">$pwd</span>    at the site from you have signup.</div>
//            </div>
//        </div>
//        </div>
//</div>
//<!----------------queries container-------------------->
//<div id="queries">
//		<div class="wrap">
//        	<div id="quriBox" style="padding:20px;">
//				<div id="payh1" class="marb10"><h2 class="mar0">For Support :</h2></div>
//            		<div id="qcont">
//                    	<span style="margin:0;padding:0; font-size:18px; color:#777;">For any queries, please contact on below details and one of our friendly staff will reply you very soon.</span>
//                    </div>
//                    <div id="qsupport">
//                        <div class="emal f14"><span class="grayclr ebox">Gtalk IM</span> <span class="ecbox">: support@phone91.com</span></div>
//                        <div class="emal f14"><span class="grayclr ebox">Email</span> : <a href="#" class="black"><span class="ecbox" style="text-decoration:underline;">support@phone91.com</span></a></div>
//                    </div>
//            </div>
//        </div>
//</div>
//<!----------------payment container-------------------->
//<div id="payment">
//		<div class="wrap">
//        <div id="payCon" style="padding:20px;">
//        		<div id="payh1" class="marb10"><h2 class="mar0">For Payment :</h2></div>
//                <div style="margin:0;padding:0; font-size:18px; color:#777;">Online payment</div>
//                <div class="grayclr lh f14 marb10">Login to your account, Click on "Pay Online", fill your billing details, choose the payment type and a recharge amount, and Click suitable online payment option from Paypal, debit card (ATM), Credit card orMooneybookers(Skrill). After successful payment, your account will be recharged automatically.</div>
//                <div><strong>*We suggest that you should use Google Chrome for browsing our website and making payment.</strong></div>
//        </div>
//        </div>
//</div>
//<!----------------team container-------------------->
//<div id="team">
//	<div class="wrap">
//    	<div id="teambox" style="padding:20px;">
//        	<div id="thead"><span class="bold f12 ">Regards,</span><br><strong><span class="bold">Phone<span class="bclr">91 </span>Team</span></strong></div>
//            <div id="icon" style="padding:15px 0px;"><span class="f14 bold">For updates of our services,follow us on:</span>
//			<br />
//			<a href="https://www.facebook.com/phone91" class=" bold f14" style="color:#3B5998; margin-right:20px; font-weight:bold; font-size:18px; text-decoration:none;">Facebook</a>
//			<a href="https://twitter.com/phone91" class=" bold f14" style="color:#37B9E3; text-decoration:none; font-weight:bold; font-size:18px;">twitter</a></div>
//        </div>
//    </div>
//</div>
//<!----------------Footer container-------------------->
//<div id="fbox">
//	<div class="wrap">
//      <div style="padding-top:5px; background-color:#FFF;">
//    	<div id="footer" style="padding:20px; background:#f5f5f5;">
//      
//                    <div class="privacy marb10">
//                        <h2>Privacy Statement</h2>
//    <span class="f14 grayclr lh">We are happy to have you on our list, and since we want to keep you all to ourselves, we never share your Email address with anyone.</span>
//                    </div>
//                    
//                    <div class="privacy marb10">
//                        <h4 class="mar0 marb10 f14">Manage Your Subscription</h4>
//    <span class="f14 grayclr lh">You are subscribed to <a href="http://voip91.com/">phone91.com</a> with the email address: $new_emailid</span>
//                    </div>
//                    
//                    <div class="privacy">
//                        <h4 class="mar0 marb10 f14">Unsubscribe or change your subscription</h4>
//                    </div>
//                    
//                    <div id="copy"  style="margin-top:20px;">
//                        <span class="f12">Copyright © 2013 <a href="http://voip91.com/" class="f14">phone91.com </a>, All rights reserved.</span>
//                    </div>
//          </div>
//        </div>
//    </div>
//</div>
//<div class="wrap"><div style="height:8px;background-color:#00B0F0;"></div></div>
//</div>
//</body>
//</html>
//EOF;
//                //set api key and parameters
//                  require('Mandrill.php');
//                  Mandrill::setApiKey('zjlmyNcktAB5pnXO5TPdxg');
//                 $request_json["type"]="messages";
//                 $request_json["call"]="send";
//                 $req["html"]=$mailData;
//                  $req["subject"]="verify user email";
//                  $req["from_email"]= "support@phone91.com";
//                  $req["from_name"]=  "Phone91";
//                  $resTo["email"]= $new_emailid;			   
//                  $req["to"][]=$resTo;
//                  $req["track_opens"]=  "true";
//                  $req["track_clicks"]=  "true";				  
//                  $req["auto_text"]=  "true";				  
//                  $req["url_strip_qs"]=  "true";	
//                  $request_json["message"]=$req;
//                  $final= json_encode($request_json);
//                  $ret = Mandrill::call((array) json_decode($final));
//               
//                  $arr = get_object_vars($ret[0]);
//                  if($arr['status'] == 'sent')
//                      return true;
//                  else
//                      return false;
//	}
//        
//        #created by sudhir pandey (sudhir@hostnsoft.com)
//        #creation date 25/07/2013
//        #function use for add new email id of login user 
//        function addnew_emailid($new_emailid,$userid){
//            
//        #generate confirmation code
//        $confirm_code = $this->generatePassword();
//            
//        #check email id is valid or not 
//        if($this->isValidEmail($new_emailid)){
//        #table name 
//        $verifyEmail = '91_verifiedEmails'; 
//        $this->db->select('*')->from($verifyEmail)->where("email = '" . $new_emailid . "'");
//        $result = $this->db->execute();
//
//        //if email id is not assign to any other user
//        if ($result->num_rows == 0) {
//            $tempEmail = '91_tempEmails'; 
//            $this->db->select('*')->from($tempEmail)->where("email = '" . $new_emailid . "'");
//            $result = $this->db->execute();
//            
//            #check for email id is already used or not
//            if($result->num_rows == 0){
//                #value for store in database 
//                $data=array("userid"=>(int)$userid,"email"=>$new_emailid,"confirm_code"=>$confirm_code,"date"=>date('Y-m-d H:i:s')); 
//
//                
//                #insert query (insert data into 91_tempEmails table )
//                $this->db->insert($tempEmail, $data);	
//                $this->db->getQuery();
//                $savedata = $this->db->execute();
//               
//                
//                if ($savedata) 
//                    {	   
//			$sentmail = $this->send_verification_mail($new_emailid,$confirm_code );
//			if($sentmail)
//				 {
//                            return  json_encode(array('msgtype' => 'success', 'msg' => 'Confirmation Link Has Been Sent To Your Email Address.'));
//                        }else
//                            return json_encode(array('msgtype' => 'error', 'msg' => 'Not Possible To Send Mail.'));
//                    }
//            
//                }else
//                    return json_encode(array('msgtype' => 'error', 'msg' => 'Sorry This Email Id Is Already In Use !'));
//        }else 
//            return json_encode(array('msgtype' => 'error', 'msg' => 'Sorry This Email Id Is Already In Use .'));
//        }else
//            return json_encode(array('msgtype' => 'error', 'msg' => 'This Is Not Valid Email.'));
//        }     
//        
//        
//        #not in use
//	function change_emailid($new_emailid) 
//        {
//                //create connection    
//                $con = $this->connect();              
//               $sqli = "SELECT COUNT(email) FROM contact WHERE email='".$new_emailid."' AND confirm=1";
//                
//                $resulti = mysql_query($sqli);
//                $emailCountObj = mysql_fetch_assoc($resulti);
//                $count = $emailCountObj['COUNT(email)'];//get count
//                //if confirm email id not found
//                if($count == 0)
//                {    
//                    $sql = "select * from temp_contact_email where userid='" . $_SESSION['id'] . "'";
//                    $result = mysql_query($sql) or (mysql_error());
//                    $resCheck = mysql_num_rows($result);
//                    $pwd = $this->generatePassword();
//                    //if session user found in temp_contact_email
//                    if($resCheck > 0)
//                    {
//                            $query = "update temp_contact_email set email='" . $new_emailid . "',confirm='0',confirm_code='".$pwd."' where userid='" . $_SESSION['id'] . "'";
//                            $result = mysql_query($query) or (mysql_error());
//                            mysql_close($con);                         
//                    }
//                    else//if not found then insert
//                    {
//                            $query = "insert into temp_contact_email (userid,email,confirm,confirm_code) values ( '".$_SESSION['id']."','".$new_emailid."','0','".$pwd."' )";
//                            $result = mysql_query($query) or (mysql_error());
//                            mysql_close($con);
//                           
//                    }
//                    
//                    //if result found then send verification mail
//                    if ($result) 
//                    {	   $email_confirmation = isset($_COOKIE[$new_emailid])? ++$_COOKIE[$new_emailid]: 1;
//			   if($email_confirmation < 4){
//				$sentmail = $this->send_verification_mail($new_emailid, $pwd);
//				setcookie($new_emailid, $email_confirmation, time()+60*60*24);
//				 if($sentmail)
//				 {
//					 //echo "Your Confirmation link Has Been Sent To Your Email Address.";
//					 return 1;
//				 }
//				 else 
//				 {
//					 //echo "Cannot send Confirmation link to your e-mail address";
//					 return 2;
//				 } 
//			   }  else {
//				return 5;
//			   }
//                    } 
//                    else 
//                    {
//                            return 2; //"Not proper Email-id please chose another one.";
//                    }
//                }
//                else //email already exists
//                    return 4;    
//        }
//	function delete_emailid(){
//		$con = $this->connect();
//		$query = "delete from temp_contact_email where userid='" . $_SESSION['id'] . "'";
//		$result = mysql_query($query) or (mysql_error());
//		mysql_close($con);
//		if ($result) {
//			return 1;
//		}
//		else {
//			return 0;
//		}
//	}
//        function resend_ecode()
//        {
//            $con = $this->connect();
//            $sql = "select * from temp_contact_email where userid='" . $_SESSION['id'] . "'";
//            $result = mysql_query($sql) or (mysql_error());
//            mysql_close($con);
//            $get_userinfo = mysql_fetch_array($result);
//            $email = $get_userinfo['email'];
//            $ecode = $get_userinfo['confirm_code'];
//            $sentmail = $this->send_verification_mail($email, $ecode);
//            if ($sentmail) 
//            {
//                return 1;
//            }
//            else 
//            {
//                return 0; //"Not proper Email-id please chose another one.";
//            }
//        }
//	function get_country_frm_num($number) {
//		for ($z = 5; $z > 0; $z--) {
//			$flag = 0;
//			$countrycode = substr($number, 0, $z);
//			$dbh = $this->connect();
//			$search_qry = "select prefix,description,voice_rate from tariffs where  prefix like '" . $countrycode . "' and id_tariff='8' limit 1 ";
//			//	$search_qry="select login from clientsshared where login like '".$q."%'";
//			$exe_qry = mysql_query($search_qry) or die(mysql_error());
//			if (mysql_num_rows($exe_qry) > 0) {
//				$ct = 0;
//				while ($res = mysql_fetch_assoc($exe_qry)) {
//					return $res['voice_rate'];
//					$flag = 1;
//					break;
//				}
//			}
//			mysql_close($dbh);
//		}
//		if ($flag == 0)
//			return "Country Not Matched";
//	}
//	function pay() {
//		$dbh = $this->connect();
//		$result = mysql_query("select id_client,account_state,id_tariff from clientsshared where login='$_SESSION[username]'", $dbh);
//		mysql_close($dbh);
//		$get_userinfo = mysql_fetch_array($result);
//		$balance = $get_userinfo[account_state];
//		$id_cl = $get_userinfo[id_client];
//		$id_tariff = $get_userinfo[id_tariff];
//		$_SESSION['id_cl'] = $id_cl;
//		if ($id_tariff == 8) {
//			$recharge1 = 10;
//			$talktime1 = 9;
//			$recharge2 = 20;
//			$talktime2 = 20;
//			$recharge3 = 50;
//			$talktime3 = 55;
//			$cid = 1;
//		} else if ($id_tariff == 7) {
//			$recharge1 = 250;
//			$talktime1 = 220;
//			$recharge2 = 500;
//			$talktime2 = 500;
//			$recharge3 = 1000;
//			$talktime3 = 1100;
//			$cid = 2;
//		} else if ($id_tariff == 9) {
//			$recharge1 = 50;
//			$talktime1 = 48;
//			$recharge2 = 100;
//			$talktime2 = 100;
//			$recharge3 = 200;
//			$talktime3 = 220;
//			$cid = 3;
//		}
//	}
//	function user_feedback($sub, $dis) {//rahulchordiya@gmail.com,
//		$email = 'smartpushp@gmail.com,indoreankita@gmail.com,shubh124421@gmail.com';
//		$subject = $sub . " Feedback Phone91.com ";
//		$message = "A <b>user " . $_SESSION['username'] . "</b> Send Feedback to admin of chapter91.com<br /><br /> Detail feedback of user is as follows:<br /><br />" . $dis;
//		if (strlen($_SESSION['contact_no']) > 8) {//if user mobile number is confirm with chapter91
//			$message .="<br /> and user mobile number is " . $_SESSION['contact_no'];
//		}
//		$header = 'MIME-Version: 1.0' . "\n";
//		$header .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
//		if (strlen($_SESSION['email']) > 8) { //if user have his or her email then mail send by user email
//			$header .= 'From: ' . $_SESSION['email'] . "\n";
//		} else {
//			$header .= 'To: Feedback@Phone91.com <autoreply@phone91.com>' . "\n";
//		}
//		mail($email, $subject, $message, $header);
//		return "Your Feedback is submited Successfully thankyou for your precious time.";
//	}
//	function user_contact() {
//		$dbh = $this->connect();
//		$result = mysql_query("select cntry_code,contact_no,confirm,email from contact where userid='" . $_SESSION['id_cl'] . "'", $dbh);
//		mysql_close($dbh);
//		if (mysql_num_rows($result) > 0) {//if details exist
//			while ($get_userinfo = mysql_fetch_array($result)) {
//				if ($get_userinfo['confirm'] == '1') {//and user confirm his/her mobile number
//					$_SESSION['contact_no'] = $get_userinfo['contact_no'];
//					$_SESSION['email'] = $get_userinfo['email'];
//					return $get_userinfo['cntry_code'] . $get_userinfo['contact_no'];
//					//echo '<br />Want to change it <a href="update_contact.php" title="Update Your Contact">Edit</a> Now';
//				} else if ($get_userinfo['confirm'] == '0') {//if user not confirm their number this will redirect to update contact page.
//					?>
<!--<script>
$(document).ready(function() {
                $("#midright").html("<img src='images/loading.gif' />").delay(200).load("settings.php?active=contact");
});
</script>-->
<?php 
////echo 'Your number is not Confirm.<a href="update_contact.php" title="Confirm Your Contact">Confirm Now</a>';
//				}
//			}
//		} else { //else if details not present in contact table
//			$dbh = $this->connect();
//			$tempresult = mysql_query("select * from tempcontact where userid='" . $_SESSION['id_cl'] . "'", $dbh) or die(mysql_error());
//			if (mysql_num_rows($tempresult) > 0) { //if their is entry into temp table
//				while ($get_userinfo = mysql_fetch_array($tempresult)) {
//				if ($get_userinfo['confirm'] == '1') {//and user confirm his/her mobile number
//					$_SESSION['contact_no'] = $get_userinfo['contact_no'];
//					$_SESSION['email'] = $get_userinfo['email'];
//					return $get_userinfo['cntry_code'] . $get_userinfo['contact_no'];
//					//echo '<br />Want to change it <a href="update_contact.php" title="Update Your Contact">Edit</a> Now';
//				} else if ($get_userinfo['confirm'] == '0') {//if user not confirm their number this will redirect to update contact page.
//					?>
<!--<script>
//$(document).ready(function() {
//        $("#midright").html("<img src='images/loading.gif' />").load("settings.php?active=contact");
//});
</script>-->

    <?php 
    
//    }
////				$flag = '1';
////				$get_details = mysql_fetch_array($tempresult);
////				$code = $get_details['cntry_code'];
////				$phone = $get_details['contact_no'];
////				$email = $get_details['email'];
////				$confirm_code = $get_details['confirm_code'];
////				$checkexist = mysql_query("select	* from contact where cntry_code='$code' and confirm='1' and contact_no='$phone'", $dbh);
////				if (mysql_num_rows($checkexist) == 0) { //if number is not assign to any other user
////					$query = mysql_query("insert into contact values('" . $_SESSION['id_cl'] . "','$phone','$email','$code','$confirm_code','1')");
////
////					$result = mysql_query("delete from tempcontact where userid='" . $_SESSION['id_cl'] . "'", $dbh);
////					$flag = '0'; //Number is confirmed
////				}
//			}
//			}
//			mysql_close($dbh);
//			return '0';
//		}
//	}
//	
//	function mobile_verification_api($mobile_no, $vcode){
//		$connect_url = 'https://voip91.com/phone91_verification/mobile_verify_api.php'; // Do not change
//	        $param["mobile_no"] = $mobile_no; //
//	        $param["vcode"] = $vcode; //
//                $request = "";
//        	foreach($param as $key=>$val){
//        	        $request.= $key."=".urlencode($val);
//        	        $request.= "&";
//        	}
//        	$request = substr($request, 0, -1);
//        	$url2 = $connect_url."?".$request;
//        	$ch = curl_init($url2);
//        	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        	$json = curl_exec($ch);
//	        curl_close($ch);
//	}
//	function mobile_verification_response($uid){
//		$connect_url = 'https://voip91.com/phone91_verification/mobile_verify_response.php'; // Do not change
//                $param["uid"] = $uid; //
//                foreach($param as $key=>$val){
//                        $request.= $key."=".urlencode($val);
//                        $request.= "&";
//                }
//                $request = substr($request, 0, -1);
//                $url2 = $connect_url."?".$request;
//                $ch = curl_init($url2);
//                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//                $json = curl_exec($ch);
//                curl_close($ch);
//        }
//        
//        //function for pagination
//        function advancedPaging_new($totalPages,$action,$repara)
//	{ 
//            //if page number set then set start page and end page
//            if(isset($repara['page_number']))
//            {
//                    $startPage = $repara['page_number']-7;
//                    $endPage = $repara['page_number']+7;
//            }
//            else//set start page ,end page and page number
//            {
//                    $startPage = 1;
//                    $endPage = 15;
//                    $repara['page_number'] = 1;
//            }
//		
//            //set start page and end page
//            if($startPage <= 0)
//                    $startPage = 1;
//            if(($endPage-$startPage) < 14)
//                    $endPage = 15;
//            if($endPage > $totalPages)
//                    $endPage = $totalPages;
//            //code for show pagination	
//            $str='<div class="jPaginate" id='.$repara['page_number'].'><ul class="jPag-pages">'; 
//            //loop to call load function on each page
//            for($i = $startPage; $i <= $endPage; $i++) 
//            {
//                    $str.='<li><a href="javascript:;" onclick="load_page(\''.$i.'\',\''.$action.'\')">';						
//                    if($i<=1) 
//                    {
//                            if((!isset($repara['page_number'])) || ($repara['page_number'] <= 1))  
//                                    $str.='<b>1</b>';  
//                            else 
//                                    $str.='1';
//                    } 
//                    else 
//                    { 
//                            if($repara['page_number'] == $i)
//                                    $str.='<b>'.$i.'</b>'; 
//                            else
//                                    $str.= $i;
//                    }
//                    $str.='</a></li>';
//            }
//            $str.='</ul></div>';
//            return $str; 
//		
//	}
//	function getCallRate($number,$id_tariff)
//	{
//		$i=strlen($number);
//		$prefix='';
//		for($i;$i>0;$i--)
//		{
//			$number=substr($number,0, $i);
//			$prefix.= "'".$number."',";
//		}
//		$prefix=substr($prefix, 0,strlen($prefix)-1);
//		$sql="select voice_rate,prefix from tariffs where id_tariff='".$id_tariff."' AND prefix in (".$prefix.") order by length(prefix) desc limit 1";
//	//        send_gtalk_response("vikas@hostnsoft.com",urlencode($sql));
//		//mail("vikas@hostnsoft.com","query",$sql);
//		$con= $this->connect();
//		$result=mysql_query($sql,$con) ;
//		if(!$result)
//		{return ("Can not verify your details. ".mysql_error());};
//		mysql_close($con);
//		if($result)
//		{
//			$res=mysql_num_rows($result);
//			$row=mysql_fetch_array($result);
//			return $voice_rate=$row['voice_rate'];
//		}
//	}
//	function seeCallRate($source,$dest,$id_tariff)
//	{
//	    $callrate_src =  $this->getCallRate($source,$id_tariff);
//	    $callrate_des =  $this->getCallRate($dest,$id_tariff);
//	    $callrate = $callrate_src + $callrate_des;
//	    if($callrate>0)
//	    {
//		$response["rate"]=$callrate ;
//	    }
//	    else
//		$response["rate"]="No Tariff found";
//	    return json_encode($response);
//	}
//	
//	function getUserIP() {
//		if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !is_null($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//		    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
//		} else {
//		    $ip = $_SERVER['REMOTE_ADDR'];
//		}
//		return $ip;
//	    }
//	     function checkLoginFailed($userName) {		     
//		$table = 'login_failed';
//		$this->db->select('username')->from($table)->where("username='" . $userName . "' and date > DATE_SUB(now(), INTERVAL 4 MINUTE) ");
//		$result = $this->db->execute();
//		// processing the query result
//		if ($result->num_rows > 0) {
//			return $result->num_rows ;
////		    foreach ($result->fetch_array(MYSQL_ASSOC) as $row) {
////			return  $row[0];
////		    }
//		}
//		else
//		    return 0;        
//	}
//
//	function loginFailed($userName) {
//	    $data=array("username"=>$userName , "ip"=>$this->getUserIP() );
//	    $table = 'login_failed';
//	    $this->db->insert($table, $data);
//	    $insertQry=($this->db->getQuery());
//	    $insertresult = $this->db->execute();        
//	}
//	/**
//	 * Function to add newly sigup user
//	 */
//	function signupUser($request){
//	    $data = array('username'=>$request['username'], 'email'=>$request['email'], 'password' =>$request['password']);
//	    $data = $this->db->insert('signup_user',$data);
//	    $this->db->execute();
//	}
//        
//        //function to get random number
//        function randomNumber($length) 
//        {
//            $space = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
//            $str = '';
//            $spaceLen = strlen($space);
//            for ($i = 0; $i < $length; $i++) {
//                $str .= $space[mt_rand(0, $spaceLen - 1)];
//            }
//
//            return $str;
//        }
//        
//        //function to update balance
//        function updateBalance($con,$clientId,$talktime,$type)
//        {
//            $error = "success";
//            if($type = 'Add')
//              $sqlC = "UPDATE 91_userBalance SET balance=balance+$talktime WHERE userId='".$clientId."'";
//            else
//              $sqlC = "UPDATE clientsshared SET balance=balance-$talktime WHERE userId='".$clientId."'";
//            mysqli_query($con,$sqlC) or $error= 'error::'. mysqli_error();
//            return $error;
//        }//end of function updatebalance
//        
//        
//        /**
//        * @author Ankit Patidar <ankitpatidar@hostnsoftcom> on 15/7/2013
//        * @param integer $teriffId 
//        * @description functoin to get recharge and talktime to show 
//        */
//       function getRechargeTalktime($terrifId)
//       {
//           
//
//           $con = $this->connecti();
//           $query = "SELECT recharge,talktime FROM  rechargeByTerriff WHERE terriffId=$terrifId";
//           $result = mysqli_query($con,$query);
//           mysqli_close($con);
//           return $result;
//       }//end of function getRechargeTalktime
//       
//       //function to get checksum
//       function getchecksum($MerchantId,$Amount,$OrderId ,$URL,$WorkingKey)
//       {
//            $str ="$MerchantId|$OrderId|$Amount|$URL|$WorkingKey";
//            $adler = 1;
//            $adler = $this->adler32($adler,$str);
//            return $adler;
//       }
//
//       //function to verify checksum
//        function verifychecksum($MerchantId,$OrderId,$Amount,$AuthDesc,$CheckSum,$WorkingKey)
//        {
//            $str = "$MerchantId|$OrderId|$Amount|$AuthDesc|$WorkingKey";
//            $adler = 1;
//            $adler = $this->adler32($adler,$str);
//
//            if($adler == $CheckSum)
//                return "true" ;
//            else
//                return "false" ;
//        }
//
//        //
//        function adler32($adler , $str)
//        {
//            $BASE =  65521 ;
//
//            $s1 = $adler & 0xffff ;
//            $s2 = ($adler >> 16) & 0xffff;
//            for($i = 0 ; $i < strlen($str) ; $i++)
//            {
//                $s1 = ($s1 + ord($str[$i])) % $BASE ;
//                $s2 = ($s2 + $s1) % $BASE ;
//                    //echo "s1 : $s1 <BR> s2 : $s2 <BR>";
//
//            }
//            return $this->leftshift($s2 , 16) + $s1;
//        }
//
//        function leftshift($str , $num)
//        {
//
//            $str = decbin($str);
//
//            for( $i = 0 ; $i < (64 - strlen($str)) ; $i++)
//                $str = "0".$str ;
//
//            for($i = 0 ; $i < $num ; $i++)
//            {
//                $str = $str."0";
//                $str = substr($str , 1 ) ;
//                //echo "str : $str <BR>";
//            }
//            return $this->cdec($str) ;
//        }
//
//        function cdec($num)
//        {
//            $dec ='';
//            for ($n = 0 ; $n < strlen($num) ; $n++)
//            {
//               $temp = $num[$n] ;
//               $dec =  $dec + $temp*pow(2 , strlen($num) - $n - 1);
//            }
//
//            return $dec;
//        }
//#find country name 
//function countryArray(){
//$url = "https://voip91.com/isoData.php";   
//     $ch = curl_init();    
//    curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    $data = curl_exec($ch);
//    curl_close($ch);
//    
//$string1 = json_decode($data, true);
//for($i=0;$i<count($string1);$i++){
//    $country[$string1[$i]['CountryCode']]=$string1[$i]['Country'];
//    
//} 
//return $country;
//}
//
// function currencyArray() {//Only For net core 
//        if ($row = apc_fetch('currencyArray')) {
//            return $row;
//        } else {
//            
//             $sql = "select currencyId,currency from 91_currencyDesc";
//             
//        $result = $this->db->query($sql);
////                var_dump($result);
//
//        if ($result->num_rows > 0) {
//
//            while ($rowData = $result->fetch_array(MYSQL_ASSOC)) {
////                                    var_dump($rowData);	
//                $currencyArr[]=$rowData;
//            }
//        }
//        if (!$result)
//            return ("Unable To Fetch User Data");
//                
//                apc_store('currencyArray', $currencyArr);
//                return $currencyArr;
//            }
//    }
//
//    #function created by sudhir pandey (sudhir@hostnsoft.com)
//    #creation date 09/08/2013
//    #function use for check user has confirm mobile no or not if yes then go to userhome page otherwise confirm mobile no page 
//    function getConfirmNumber($userid){
//        
//        //Code To redirect user to phone setting page if user do not have any confirmed mobile number
//        include_once(CLASS_DIR.'contact_class.php');
//
//        #get all contact detail 
//        $contactObj= new contact_class();
//
//        #find verified contact number
//        $vContactArr=$contactObj->getConfirmMobile($userid);
//        return $vContactArr[0];    
//        }
//}
//$funobj = new fun(); //class object
?>
