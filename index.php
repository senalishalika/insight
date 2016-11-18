<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
  header("Location: blank.php");
  exit;
}

if (isset($_POST['signin'])) {
  
  $email = strip_tags($_POST['email']);
  $password = strip_tags($_POST['password']);
  
  $email = $DBcon->real_escape_string($email);
  $password = $DBcon->real_escape_string($password);
  


  $query = $DBcon->query("SELECT user_id, email, password FROM user WHERE email='$email'");
  $row=$query->fetch_array();
  
  $count = $query->num_rows; // if email/password are correct returns must be 1 row
  
  if (password_verify($password, $row['password']) && $count==1) {
    $_SESSION['userSession'] = $row['user_id'];
    header("Location: blank.php");
  } else {
    $msg = "<div class='alert alert-danger'>
          <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
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
  <h2>Welcome</h2>

     
        
      <form class="form-signin" method="post" id="register-form">
      
      
        
        <?php
    if (isset($msg)) {
      echo $msg;
    }
    ?>
          
        <fieldset>
      
    <input type="email" placeholder="Email" name="email" />
    <input type="password" placeholder="Password" name="password"/>
    
  </fieldset>
        
       
            <input type="submit" value="Sign in" name="signin"/>
        
             <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="index.php">Sign in here &rarr;</a>
  </div>
       
      
      </form>

    </div>
    


</body>
</html>










