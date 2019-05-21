<?php
	
	require_once 'dbconfig.php';

	if($_POST['btn-save'])
	{
                $name = mysql_real_escape_string($_POST['name']);
		$user_name = mysql_real_escape_string($_POST['user_name']);
                $phone_number = mysql_real_escape_string($_POST['phone_number']);
		$email_address = mysql_real_escape_string($_POST['email_address']);
                $random = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
$password = substr( str_shuffle( $random ), 0, 8 );
$password1= md5($password);		
                 $EmailFrom = "hr@jacetechnologies.com.ng ";
$Subject = "New Account information from JACE Technologies";
$message="Your registration is successfull.Kindly click on the following link to login http://www.jacetech.thechildrenshouseschool.com/Login.html";

// prepare email body text
$Body = "";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "Username: ";
$Body .= $user_name;
$Body .= "\n";
$Body .= "Password: ";
$Body .= $password;
$Body .= "\n";

		
		try
		{	
		        $stmt = $db_con->prepare("SELECT * FROM jace_users WHERE user_name=:name");
			$stmt->execute(array(":name"=>$user_name));
			$count = $stmt->rowCount();
                        
			$stmt1 = $db_con->prepare("SELECT * FROM jace_users WHERE email_address=:email");
			$stmt1->execute(array(":email"=>$email_address));
			$count1 = $stmt->rowCount();
			
			if($count==0 && $count1==0){
				
			$stmt = $db_con->prepare("INSERT INTO jace_users(id,name,phone_number,email_address,user_name,password) VALUES(:id,:name, :pnumber, :eaddress, :uname, :pass)");
			$stmt->bindParam(":name","");
                        $stmt->bindParam(":name",$name);
			$stmt->bindParam(":pnumber",$phone_number);
			$stmt->bindParam(":eaddress",$email_address);
			$stmt->bindParam(":uname",$user_name);
                        $stmt->bindParam(":pass",$password1);
					
				if($stmt->execute())
				{                                   
// send email
 mail($email_address, $Subject, $Body, "From:".$EmailFrom);
					echo "registered";
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
			elseif($count==1){
				
				echo "1"; //  not available
			}elseif ($count1==1) {
                            echo "2";
            
        }
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>