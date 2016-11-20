<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
    header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM user WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main page</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
tr{
    height:50px;


}
input[type=text],input[type=date]{
    background-color:   rgb(250,230,246);
}
</style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Insight</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="logout.php?logout" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/profile.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo "Login as ".$userRow['username']; ?>
                            <br />
                                
                            </div>
                        </div>

                    </li>


                   <li>
                        <a class="" href="blank.php"><i class="fa fa-dashboard "></i>About</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>UI Elements <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="panel-tabs.html"><i class="fa fa-toggle-on"></i>Tabs & Panels</a>
                            </li>
                            <li>
                                <a href="notification.html"><i class="fa fa-bell "></i>Notifications</a>
                            </li>
                             <li>
                                <a href="progress.html"><i class="fa fa-circle-o "></i>Progressbars</a>
                            </li>
                             <li>
                                <a href="buttons.html"><i class="fa fa-code "></i>Buttons</a>
                            </li>
                             <li>
                                <a href="icons.html"><i class="fa fa-bug "></i>Icons</a>
                            </li>
                             <li>
                                <a href="wizard.html"><i class="fa fa-bug "></i>Wizard</a>
                            </li>
                             <li>
                                <a href="typography.html"><i class="fa fa-edit "></i>Typography</a>
                            </li>
                             <li>
                                <a href="grid.html"><i class="fa fa-eyedropper "></i>Grid</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Staff<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add1.php"><i class="fa fa-coffee"></i>Add Staff Members</a>
                            </li>
                            <li>
                                <a href="search.php"><i class="fa fa-flash "></i>Search Staff Members</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-flash "></i>Data Tables </a>
                        
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="form.html"><i class="fa fa-desktop "></i>Basic </a>
                            </li>
                             <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                      <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
                    </li>
                     <li>
                        <a href="error.html"><i class="fa fa-bug "></i>Error Page</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Reports<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="staff_report.php"><i class="fa fa-bicycle "></i>Staff reports</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
                    </li>
                </ul>

            </div>
 </nav>
             <div id="page-wrapper" style="background-color: #4B0082;">
            <div id="page-inner" style="background-color: #4B0082;" >
             <div class="contain-fluid" style="font-family:arial; border: 1px solid DarkGray; border-radius:5px; margin-left:5%; margin-top:10px; width:90%; align:center; padding:10px; background-color:white; height:60px;">
		<h1 style="margin-top:-5px" align="center">Update Employee Details</h1>
	</div>
	<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insight";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['search'])){
	$id1=$_POST['search'];
}
$sql="SELECT ID,NIC,name,gender,birthDay,telNo,address,joined_date,salary FROM staff where ID='$id1'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<div class="contain-fluid" style="font-family:arial; border: 1px solid DarkGray; border-radius:5px; margin-left:5%; margin-top:10px; width:90%; align:center; padding:10px; background-color:white;">
<form  action="up_delete.php" method="POST" style="margin-left:10%">
	<div style="color:#4B0082; height:500px;" >
	<table width="80%" >
<tr><td style="width:20%">Employee ID</td><td  width="50%" ><input class="form-control"   type="text" name="id" value=<?php echo $row['ID'];?>></td></tr>
<tr><td>NIC</td><td><input class="form-control" type="text"  name="nic"  value=<?php echo $row['NIC'];?>></td></tr>
<tr><td>Name</td><td><input class="form-control" type="text"  name="name" value=<?php echo $row['name'];?>></td></tr>
<tr><td>Gender</td><td><input class="form-control" type="text"  name="gender" value=<?php echo $row['gender'];?>></td></tr>
<tr><td>Birth Day</td><td><input class="form-control" type="date"  name="bday" value=<?php echo $row['birthDay'];?>></td></tr>
<tr><td>Tel No</td><td><input class="form-control" type="text"  name="tel" value=<?php echo $row['telNo'];?>></td></tr>
<tr><td>Address</td><td><input class="form-control"  type="text"   name="address" value=<?php echo $row['address'];?>></td></tr>
<tr><td>Joined Date</td><td><input class="form-control"  type="date"  name="date" value=<?php echo $row['joined_date'];?>></td></tr>
<tr><td>Salary</td><td><input  class="form-control" type="text"  name="salary" value=<?php echo $row['salary'];?>></td></tr>
</table>
<input  class="btn btn-default btn-lg"  type="submit" value="Update" name="update" style="width:200px; background-color:#4B0082; color:white; margin-left:42% ">
<input  class="btn btn-default btn-lg"  type="submit" value="Delete" name="delete" style="width:200px; background-color:#4B0082; color:white; ">


</form>
</div>
</div>


		

</div>
</div>

	

       
        <!-- /. NAV SIDE  -->
        <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>





		
		

	
</body>
</html>