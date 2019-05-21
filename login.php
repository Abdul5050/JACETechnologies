<?php 
    require_once('include/jaceusers.php');  
   
 if (!logged_in()) {
?>
   <script type="text/javascript">
            window.location = "Login.html";
    </script>
    <?php
}
    
    $user = new User();

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	        // Registration Success
	       header("location: JACE");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}  else {
?> error<?php        
}   