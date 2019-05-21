<?php  

require_once("../include/jaceusers.php");
  $user = new User();
if($_SESSION['jaceid']==""){
 header("location: ../Login/index.php");   
}
    

    if (isset($_GET['quit'])){
        $user->user_logout();
        header("Location: ../Login/index.php");
    }
     

	if (isset($_POST['submit'])) { 
		$name=$_POST['name'];
                $number=$_POST['phonenumber'];
                $email=$_POST['emailaddress'];
	    $update = $user->update_user($name,$number,$email);
	    if ($update) {
	        // Registration Success
	       ?>
<script type="text/javascript">
 alert("Account Update Successfully");
  window.location="index.php";  
</script>
	<?php   
	    } else {
	        // Registration Failed
                 ?>
<script type="text/javascript">
 alert("Account Update Failed");
    
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
    <link rel="icon" href="../../favicon.ico">

    <title>Home | JACE Technologies</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet">
<link href="../style.css" rel="stylesheet" type="text/css" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">JACE Technologies</a>
        </div>
        
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li class="active"><a href="index.php">Update Profile <span class="sr-only">(current)</span></a></li>
            <li><a href="changepassword.php">Change Password</a></li>
            <li><a href="index.php?quit=logout">Logout</a></li>
          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Welcome, <?Php echo $_SESSION['username'];?></h1>
<div class="inner cover">
       <?php 
				$cur = $user->get_fulldetails($_SESSION['jaceid']);?>        
    <form class="form-signin" action=""method="post" id="register-form">
      
        <h2 class="form-signin-heading">Update Account</h2><hr />
        <div id='success'>
		
         </div>
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
            <p>Name</p>
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?Php echo $cur["name"]?>"id="name" />
        </div>
        
         <div class="form-group">
             <p>Phone Number</p>
             <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber"value="<?Php echo $cur["phonenumber"]?>" id="phone_number" />
        </div> 
        
        
        
        <div class="form-group">
            <p>Email Address</p>
            <input type="email" class="form-control" placeholder="Email address" name="emailaddress"value="<?Php echo $cur["emailaddress"]?>" id="user_email" />
        <span id="check-e"></span>
        </div>
       
        
        
        <div class="form-group">
             
            <input style="width:200px;margin: auto" class="btn btn-lg btn-primary btn-block " name="submit" id="btn-submit" type="submit"value="Save"/>
                 
        
        </div>  
      
      </form>
          </div>
          

         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
