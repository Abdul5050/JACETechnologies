<?php session_start();
	include "db_config.php";

	class User{
		
		public $db;
		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		
			if(mysqli_connect_errno()) {
	 
				echo "Error: Could not connect to database.";
	 
			exit;
 
			}
		}

		/*** for registration process ***/
		public function reg_user($name,$number,$email,$username){

                     $EmailFrom = "hr@jacetechnologies.com.ng ";
$Subject = "New Account information from JACE Technologies";
$message="Your registration is successfull.Kindly click on the following link to login http://www.jacetech.thechildrenshouseschool.com/Login";

 $random = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
			$password = substr( str_shuffle( $random ), 0, 8 );
// prepare email body text
$Body = "";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "Username: ";
$Body .= $username;
$Body .= "\n";
$Body .= "Password: ";
$Body .= $password;
$Body .= "\n";

                   
                        
			
			$sql="SELECT * FROM jaceusers WHERE username='$username' OR emailaddress='$email'";
			
			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;
                        
                        $password1=  md5($password);

			//if the username is not in db then insert to the table
			if ($count_row == 0 ){
                             mail($email, $Subject, $Body, "From:".$EmailFrom);
				$sql1="INSERT INTO jaceusers SET name='$name',phonenumber='$number', emailaddress='$email',username='$username', password='$password1'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
                               
        		return $result;
			}
			else{
                          
                            return false;
                        }
		}


		/*** for login process ***/
		public function check_login($username, $password){
        				
$password1=  md5($password);
        	
			$sql2="SELECT * from jaceusers WHERE (username='$username' and password='$password1') OR (emailaddress='$username' and password='$password1')";
			
			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;
		
	        if (mysqli_num_rows($result) > 0) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true; 
	            $_SESSION['jaceid'] = $user_data['jaceid'];
                     $_SESSION['username'] = $user_data['username'];
                      $_SESSION['emailaddress'] = $user_data['emailaddress'];
                       $_SESSION['phonenumber'] = $user_data['phonenumber'];
                       $_SESSION['name'] = $user_data['name'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

        public function insert_id() {
    // get the last id inserted over the current db connection
		return mysql_insert_id($this->db);
	}
    	/*** for showing the username or fullname ***/
    	public function get_fulldetails($uid){
    		$sql3="SELECT * FROM jaceusers WHERE jaceid = $uid";
	        $result = mysqli_query($this->db,$sql3);
	        $user_data = mysqli_fetch_array($result);
	         return $user_data;
    	}
  
    	/*** starting the session ***/
	    public function get_session(){    
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
                $_SESSION['jaceid'] = FALSE;
	        session_destroy();
	    }

            function logged_in() {
		return isset($_SESSION['jaceid']);
        
	}
	
        public function update_user($name,$number,$email){
          $sql1="UPDATE jaceusers SET name='$name', phonenumber='$number', emailaddress='$email' WHERE jaceid='".$_SESSION['jaceid']."'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
                               
        		return $result;  
        }
         public function change_password($password){
             $password1=  md5($password);
          $sql1="UPDATE jaceusers SET password='$password1' WHERE jaceid='".$_SESSION['jaceid']."'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
                               
        		return $result;  
        }
	}
?>