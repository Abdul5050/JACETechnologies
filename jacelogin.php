<?php 

include_once ('include/jace.php');  
   
 $user = new User();

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	        // Registration Success
	       header("location:home.php");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logo.jpg">

    <title>JACE Technologies Nigeria | About</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   

<link href="dashboard.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="validation.min.js"></script>

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
                <h3 class="masthead-brand"><img src="logo.jpg"/></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li ><a href="index.html">Home</a></li>
                  <li ><a href="About.html">About</a></li>
                  <li><a href="Contact.html">Contact</a></li>
                  <li ><a href="Register.html">Register</a></li>
                  <li class="active"><a href="Login.html">Log In</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
               
              <form class="form-signin" action="login.php" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Log In to JACE Technologies</h2><hr />
       
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Email address or Username" name="username" id="user_email" required/>
       
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required/>
        </div>
       
     	
         
        
        <div class="form-group">
             
            <input style="width:200px;margin: auto" class="btn btn-lg btn-primary btn-block " name="submit" id="btn-login" type="submit"
                value="Sign In"/>
    
        
        </div>  
      
      </form>
          </div>

          <div class="mastfoot">
            <div class="inner">
                <p>&COPY; 2016 All Right Reserved  | Design by <a target="_blank" href="http://www.jacetechnologies.com.ng/">JACE Technologies Nigeria</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
