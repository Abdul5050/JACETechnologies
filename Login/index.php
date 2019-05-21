<?php 
    require_once('../include/jaceusers.php');  
 
    $user = new User();

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($username, $password);
	    if ($login) {
	        // Registration Success
	       header("location: ../JACE");
	    } else {
	        // Registration Failed
                 ?>
<script type="text/javascript">
 alert("Wrong username or password");
    
</script>
	<?php       
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

    <title>Login | JACE Technologies Nigeria</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   

<link href="../dashboard.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="../jquery-1.11.3-jquery.min.js"></script>

 <link href="../signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
                <h3 class="masthead-brand"><img src="../logo.jpg"/></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li ><a href="../index.html">Home</a></li>
                  <li ><a href="../About.html">About</a></li>
                  <li><a href="../Contact.html">Contact</a></li>
                  <li ><a href="../Register">Register</a></li>
                  <li class="active"><a href="index.php">Log In</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
               
              <form class="form-signin" name="login">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Email address or Username" name="username"required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password"placeholder="Password" required>
        
        <input class="btn btn-lg btn-primary btn-block"name="submit" type="submit"value="Sign in"/>
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
   
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
