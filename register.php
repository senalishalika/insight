<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: blank.php");
}
require_once 'dbconnect.php';

if(isset($_POST['signup'])) {
	
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT email FROM user WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO user(username,email,password) VALUES('$uname','$email','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">


</head>
<body>

 <div class="login">
  <h2>WELCOME</h2>

     
        
      <form class="form-signin" method="post" id="register-form">
      
      
        
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          
        <fieldset>
      <input type="text" placeholder="username" name="username"/>
    <input type="email" placeholder="email" name="email" />
  	<input type="password" placeholder="Password" name="password"/>
  	
  </fieldset>
        
       
            <input type="submit" value="Sign up" name="signup"/>
    		
             <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="index.php">Sign in here &rarr;</a>
  </div>
       
      
      </form>

    </div>
    


</body>
</html>